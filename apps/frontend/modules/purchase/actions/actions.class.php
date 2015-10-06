<?php

/**
 * purchase actions.
 *
 * @package    globalclassroom
 * @subpackage purchase
 * @author     Ron Stewart
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class purchaseActions extends sfActions
{
    protected function authorizePurchaseOnEschool()
    {
        global $CFG;
        $CFG->current_app->requireMoodle();
        $CFG->current_app->requireLogin();
        if (isguestuser())
        {
            $this->redirect($CFG->current_app->getUrl() . '/eschool/login');
        }
    }
    protected function authorizePurchaseOnInstitution()
    {
        global $CFG;
        $CFG->current_app->requireMahara();
        $CFG->current_app->requireLogin();
    }
    public function executeCoursePurchase(sfWebRequest $request)
    {
        global $CFG;
        $this->authorizePurchaseOnEschool();
        if (!$request->isMethod(sfRequest::POST))
        {
            $this->redirect($CFG->current_app->getUrl());
        }
        $form = $request->getPostParameters();
        
        if ($this->useChainedPayment($request))
        {
            $current_user = $CFG->current_app->getCurrentUser();
            $user = $current_user->getUserOnInstitution();
            $purchase_transaction = new GCPurchasePaypalCourseChained($form, $user);
            $url = $purchase_transaction->attemptPaypalTransaction();
            if ($url)
            {
                $this->redirect($url);
            }
        }
        // If the chained payment failed for some reason, we default to standard the
        // Website Payment Pro method.
        $this->form = new GcrPurchaseForm();
		$current_user1 = $CFG->current_app->getCurrentUser();
		$user1 = $current_user1->getUserOnInstitution();
		$get_product_type_id = GcrProductsTable::getProductType($CFG->current_app->getShortName(), $user1->getApp()->getShortName());

        $this->form->setDefaults(array(	'purchase_type' => $form['type'],
                                        'purchase_type_id' => $form['type_id'],
                                        'purchase_type_eschool_id' => $CFG->current_app->getShortName(),
										'product_short_name' => "",
										'product_type_id' => $get_product_type_id,	
                                        'bill_cycle' => 'single',
                                        'purchase_token' => $form['purchase_token']));
        // set up object which hold info about the purchase item to display on form
        $this->purchaseObject = new Object();
        $this->hydratePurchaseObject($this->purchaseObject, $form['type'], $form['type_id'], $CFG->current_app->getShortName());
        $this->getResponse()->setTitle('Course Purchase');
    }
    protected function useChainedPayment(sfWebRequest $request)
    {
        global $CFG;
        $form = $request->getPostParameters();
        if ($form['type'] == 'course')
        {
            $course = $CFG->current_app->getCourse($form['type_id']);
            if ($course)
            {
                return GcrChainedPaymentTable::authorizeChainedPayment($course);
            }
        }
        return false;
    }

    public function executeClassroomPurchase(sfWebRequest $request)
    {
        global $CFG;
        $this->authorizePurchaseOnInstitution();
        $form = $request->getPostParameters();
        if (!$request->isMethod(sfRequest::POST))
        {
            $this->redirect($CFG->current_app->getUrl());
        }
        $form = $request->getPostParameters();
         $description = 'classroom';
        if (!$form['bill_cycle'])
        {
            // membership form submission
            $values = explode('#', $form['eschool_id']);
            $form['eschool_id'] = $values[0];
            $form['bill_cycle'] = $values[1];
            $description .= 'classroom_membership';
        }
        if (!$this->eschool = Doctrine::getTable('GcrEschool')->findOneByShortName($form['eschool_id']))
        {
            $this->redirect($CFG->current_app->getUrl());
        }
        if ($this->eschool->getOrganizationId() != $CFG->current_app->getId())
        {
            $this->redirect($CFG->current_app->getUrl());
        }


        if ($form['bill_cycle'] && $this->eschool->isClassroomAllowed($form['bill_cycle']))
        {
            $this->form = new GcrPurchaseForm();
            $this->form->setDefaults(array( 'purchase_type' => 'classroom',
                                            'purchase_type_id' => $this->eschool->getShortName(),
                                            'purchase_type_eschool_id' => $this->eschool->getShortName(),
											'product_short_name' => "",
											'product_type_id' => '0',
                                            'bill_cycle' => $form['bill_cycle'],
                                            'purchase_token' => GcrEschoolTable::generateRandomString()));
            // set up object which hold info about the purchase item to display on form
            $this->purchaseObject = new StdClass();
            $this->hydratePurchaseObject($this->purchaseObject, $description,
                    $this->eschool->getShortName(), $this->eschool->getShortName(), $form['bill_cycle']);
            $this->getResponse()->setTitle('eClassroom Purchase');
        }
        else
        {
            $this->redirect($CFG->current_app->getUrl());
        }
    }
    public function executeMembershipPurchase(sfWebRequest $request)
    {
        global $CFG;
        $this->authorizePurchaseOnInstitution();
        $form = $request->getPostParameters();
        if (!$request->isMethod(sfRequest::POST))
        {
            $this->redirect($CFG->current_app->getUrl());
        }
        $form = $request->getPostParameters();
        if ($form['bill_cycle'] && $CFG->current_app->isMembershipAllowed($form['bill_cycle']))
        {
            $this->form = new GcrPurchaseForm();
            $this->form->setDefaults(array( 'purchase_type' => 'membership',
                                            'purchase_type_id' => $CFG->current_app->getShortName(),
                                            'purchase_type_eschool_id' => $CFG->current_app->getShortName(),
											'product_short_name' => "",
											'product_type_id' => '0',
                                            'bill_cycle' => $form['bill_cycle'],
                                            'purchase_token' => GcrEschoolTable::generateRandomString()));
            // set up object which hold info about the purchase item to display on form
            $this->purchaseObject = new StdClass();
            $this->hydratePurchaseObject($this->purchaseObject, 'membership',
                    $CFG->current_app->getShortName(), $CFG->current_app->getShortName(), $form['bill_cycle']);
            $this->getResponse()->setTitle('eClassroom Purchase');
        }
        else
        {
            $this->redirect($CFG->current_app->getUrl());
        }
    }
	
	/**
	* executes paypal subscription form
	*
	* @param sfWebRequest $request_object
	* @param returns paypal form.
	* gets values from get method
	*/	
    public function executeSubscriptionPurchase(sfWebRequest $request)
    {
        global $CFG;
		$bill_cycle = "Month";
		$this->params = $request->getGetParameters();
		$this->form = new GcrPurchaseForm();
		// sets institution, product short names and product type
		$this->form->setDefaults(array( 'purchase_type' => 'subscription',
										'purchase_type_id' => $this->params["institution"],
										'product_short_name' => $this->params["product"],
										'product_type_id' => $this->params["type"],
										'purchase_type_eschool_id' => $CFG->current_app->getShortName(),
										'bill_cycle' => $bill_cycle,
										'purchase_token' => GcrEschoolTable::generateRandomString()));
		// set up object which hold info about the purchase item to display on form
		$this->purchaseObject = new StdClass();
		$this->hydratePurchaseObject($this->purchaseObject, 'subscription',
				$this->params["institution"], $CFG->current_app->getShortName(), $bill_cycle, $this->params["product"], $this->params["type"]);
		$this->getResponse()->setTitle('Subscription Purchase');
    }	
    public function executeClassroom(sfWebRequest $request)
    {
        global $CFG;
        $CFG->current_app->requireMahara();
        if (!$CFG->current_app->isLoggedIn())
        {
            GcrWantsUrlTable::createWantsUrl('registration', $CFG->current_app, $CFG->current_app->getRequestUri());
            $this->redirect($CFG->current_app->getAppUrl() . 'register.php');
        }
        $this->eschool = false;
        $short_name = $request->getParameter('eschool');
        if ($short_name)
        {
            $eschool = Doctrine::getTable('GcrEschool')->findOneByShortName($short_name);
            if ($eschool->getOrganizationId() == $CFG->current_app->getId())
            {
                $this->eschool = $eschool;
            }
        }
        
        if (!$this->eschool)
        {
            $this->eschool = $CFG->current_app->getDefaultEschool();
        }
        
        $this->monthly_cost = $this->eschool->getConfigVar('gc_classroom_cost_month');
        $this->yearly_cost = $this->eschool->getConfigVar('gc_classroom_cost_year');
        
        if (!$this->monthly_cost || $this->monthly_cost == 0)
        {
            if (!$this->yearly_cost || $this->yearly_cost == 0)
            {
                $this->redirect($CFG->current_app->getUrl());
            }
        }
        
        $this->getResponse()->setTitle('Purchase an eClassroom');
    }
    public function executeEschoolPurchase(sfWebRequest $request)
    {
        global $CFG;
        $this->authorizePurchaseOnInstitution();
        if (!$request->isMethod(sfRequest::POST))
        {
            $this->redirect($CFG->current_app->getUrl());
        }
        $form = $request->getPostParameters();
        if ($form['bill_cycle'] && $form['token'])
        {
            $this->form = new GcrPurchaseForm();
            $this->form->setDefaults(array( 'purchase_type' => 'eschool',
                                            'purchase_type_id' => $CFG->current_app->getShortName(),
                                            'purchase_type_eschool_id' => $CFG->current_app->getShortName(),
											'product_short_name' => "",
											'product_type_id' => '0',
                                            'bill_cycle' => $form['bill_cycle'],
                                            'purchase_token' => $form['token'] ));
            // set up object which hold info about the purchase item to display on form
            $this->purchaseObject = new StdClass();
            $this->hydratePurchaseObject($this->purchaseObject, 'eschool', $CFG->current_app->getShortName(),
                    $CFG->current_app->getShortName(), $form['bill_cycle']);
            $this->getResponse()->setTitle('Catalog Purchase');
        }
        else
        {
            $this->redirect($CFG->current_app->getUrl());
        }
    }
    public function executeSalePurchase(sfWebRequest $request)
    {
        global $CFG;
        $this->authorizePurchaseOnInstitution();
        if (!$request->isMethod(sfRequest::POST))
        {
            $this->redirect($CFG->current_app->getUrl());
        }
        $form = $request->getPostParameters();
        if (!($form['purchase_item'] && $form['token']))
        {
            $this->redirect($CFG->current_app->getUrl());
        }
        $this->form = new GcrPurchaseForm();
        $this->form->setDefaults(array(	'purchase_type' => 'sale',
                                        'purchase_type_id' => $form['purchase_item'],
                                        'purchase_type_eschool_id' => GcrInstitutionTable::getHome()->getShortName(),
										'product_short_name' => "",
										'product_type_id' => '0',
                                        'bill_cycle' => 'single',
                                        'purchase_token' => $form['token'] ));
        // set up object which hold info about the purchase item to display on form
        $this->purchaseObject = new StdClass();
        $this->hydratePurchaseObject($this->purchaseObject, 'sale', $form['purchase_item'], GcrInstitutionTable::getHome()->getShortName());
        $this->getResponse()->setTitle('Purchase');
    }

    public function executeCreate(sfWebRequest $request)
    {
        // This section makes the neccessary validation checks to make sure this request is
        // authenticated, authorized, nonduplicate, and not an attack
        global $CFG;
        $form = $request->getPostParameters();
        if ($form['purchase_type'] != 'subscription')
		{
			if ($form['purchase_type'] == 'course')
			{
				$this->authorizePurchaseOnEschool();
			}
			else
			{
				$this->authorizePurchaseOnInstitution();
			}
        }
        $current_user = $CFG->current_app->getCurrentUser();
        if ($_SESSION['lastPurchaseFormToken'] == $form['purchase_token'])
        {
            $CFG->current_app->gcError('Purchase type ' . $form['purchase_type'] . ': ID ' . $form['purchase_type_id'] .
                    ': Attempted duplicate processing request.', 'purchaseattemptedduplicate');
        }
        if ($form['purchase_type'] != 'sale' || $form['purchase_type'] != 'subscription')
        {
            $this->verifyPurchaseTypeEschoolId($form['purchase_type_eschool_id']);
        }
        // protect against php injection attacks (we use purchase_type as a way of dynamically loading the purchase class)
        if (!preg_match('/^[a-z]{3,32}$/', $form['purchase_type']))
        {
            $CFG->current_app->gcError('Purchase type ' . $form['purchase_type'] . ': ID ' . $form['purchase_type_id'] .
                    ': Invalid Purchase Type!', 'purchasetypeinvalid');
        }
        else
        {
            $purchase_classname = 'GCPurchasePaypal' . ucfirst($form['purchase_type']);
        }
        if (!class_exists($purchase_classname))
        {
            $CFG->current_app->gcError('Purchase type ' . $form['purchase_type'] . ': ID ' . $form['purchase_type_id'] .
                    ': Purchase class: ' . $purchase_classname  . ' does not exist', 'purchasetypeinvalid');
        }
        // Now that we have validated the request, we can proceed with processing
        $user = $current_user->getUserOnInstitution();

        $this->form = new GcrPurchaseForm();
		$purchaseFields = array('id' => $form['id'],
							'purchase_type' => $form['purchase_type'],
							'purchase_type_id' => $form['purchase_type_id'],
							'purchase_type_eschool_id' => $form['purchase_type_eschool_id'],
							'bill_cycle' => $form['bill_cycle'],
							'product_type_id' => $form['product_type_id'],
							'product_short_name' => $form['product_short_name'],
							'profile_id' => '',
							'trans_time' => time(),
							'user_institution_id' => $user->getApp()->getShortName(),
							'user_id' => $user->getObject()->id,
							'amount' => '0',
							'gc_fee' => '0',
							'country' => $form['country'],
							'zip' => $form['zip'],
							'first_name' => $form['first_name'],
							'last_name' => $form['last_name'],
							'state' => $form['state'],
							'city' => $form['city'],
							'address' => $form['address'],
							'cc_number' => $form['cc_number'],
							'cc_type' => $form['cc_type'],
							'cc_ccv2' => $form['cc_ccv2'],
							'cc_exp_month' => $form['cc_exp_month'],
							'cc_exp_year' => $form['cc_exp_year'],
							'_csrf_token' => $form['_csrf_token'],
							'purchase_token' => $form['purchase_token']);			
								
        if ($purchaseRecord = $this->processForm($purchaseFields, $this->form))
        {
            $billingData = new BillingDataCreditcard($form['first_name'], $form['last_name'], $form['cc_number'],
                    $form['cc_type'], $form['cc_ccv2'], $form['cc_exp_month'], $form['cc_exp_year'], $form['address'],
                    $form['city'], $form['state'], $form['country'], $form['zip']);
            // Instantiate the correct GCPurchasePayPal class for this purchase type
            $purchaseTransaction = new $purchase_classname($purchaseRecord->getId(), $billingData);
            if ($purchaseTransaction->attemptPaypalTransaction($form['purchase_token']))
            {
				//echo "pass1-1";
                // send user to receipt page
                $this->redirect($CFG->current_app->getUrl() . '/purchase/receipt?purchaseId=' .
                        $purchaseTransaction->getPurchase()->getId());
            } else{
				$this->paypal_error = "Something went wrong with your credit card details, please verify your card details and proceed again.";
			}
        }
		
        // Transaction failed for some reason(s). Repost the form, error messages will be displayed
        $this->purchaseObject = new StdClass();
		$this->hydratePurchaseObject($this->purchaseObject, $form['purchase_type'], $form['purchase_type_id'], $form['purchase_type_eschool_id'], $form['bill_cycle'], $form['product_short_name'], $form['product_type_id']);
        $this->getResponse()->setTitle('Purchasing');
        $this->setTemplate($form['purchase_type'] . 'Purchase');
    }

    public function executeIpn()
    {
        $ipn_handler = new IpnHandler();
        $ipn_handler->processIpn($_POST);
        return sfView::NONE;
    }
   
    public function executeEclassroomMembership(sfWebRequest $request)
    {
        global $CFG;
        $this->authorizePurchaseOnInstitution();
        $classroom_membership = $CFG->current_app->getConfigVar('gc_membership_includes_eclassroom');
        if ($classroom_membership == 'on')
        {
            $this->eschools = array();
            foreach ($CFG->current_app->getEschools() as $eschool)
            {
                if ($eschool->getConfigVar('gc_classroom_cost_month') ||
                    $eschool->getConfigVar('gc_classroom_cost_month'))
                {
                    $this->eschools[] = $eschool;
                }
            }
            $this->getResponse()->setTitle('eClassroom Membership');
        }
        else
        {
            $this->redirect($CFG->current_app->getUrl() . '/purchase/membership');
        }
    }
    public function executeMembership(sfWebRequest $request)
    {
        global $CFG;
        $this->authorizePurchaseOnInstitution();
        $classroom_membership = $CFG->current_app->getConfigVar('gc_membership_includes_eclassroom');
        if ($classroom_membership != 'on')
        {
            if (!$this->monthly_cost = $CFG->current_app->getConfigVar('gc_membership_cost_month'))
            {
                if (!$CFG->current_app->getConfigVar('gc_membership_cost_year'))
                {
                    $this->redirect($CFG->current_app->getUrl());
                }
            }
            $this->yearly_cost = $CFG->current_app->getConfigVar('gc_membership_cost_year');
            $this->getResponse()->setTitle('Purchase a Membership');
        }
        else
        {
            $this->redirect($CFG->current_app->getUrl() . '/purchase/eclassroomMembership');
        }
    }
    public function executeReceipt(sfWebRequest $request)
    {
  	global $CFG;
        $CFG->current_app->requireLogin();
        $this->params = array();
  	$current_user = $CFG->current_app->getCurrentUser();
        $purchase_id = $request->getParameter('purchaseId');
  	if ($purchase = Doctrine::getTable('GcrPurchase')->find($purchase_id))
  	{
            $app = $purchase->getPurchaseTypeApp();
            if (!$user = $purchase->getPurchaserUser())
            {
                $CFG->current_app->gcError('Could not locate purchasing user associated with purchase for purchase ID: ' . $purchase->getId(), 'gcdatabaseerror');
            }
            $mhr_user = $current_user->getUserOnInstitution();
            if ($mhr_user->getObject()->id != $purchase->getUserId())
            {
                if (!$current_user->getRoleManager()->hasPrivilege('GCUser'))
                {
                    $CFG->current_app->gcError('user id '. $mhr_user->getObject()->id .
                            ' is not a site admin', 'gcdatabaseerror');
                }
            }
            $this->params['user'] = $mhr_user;
            $product = $purchase->getPurchaseTypeObject();
            $this->receipt = new Receipt($purchase, $app, $current_user->getObject(), $product);
            $this->params['pending'] = $purchase->isPending();
            
  	}
  	else
  	{
            $CFG->current_app->gcError('purchase id '. $purchase_id . ' does not exist', 'gcdatabaseerror');
  	}
  	$this->getResponse()->setTitle('Purchase Receipt');
    }
    // This function attempts to save form values to the database if the values are valid
    protected function processForm($formFields, sfForm $form, $files = array())
    {
		$form->bind($formFields, $files);
		if ($form->isValid())
        {
          $record = $form->save();
          return $record;
        }
        return false;
    }
    /*** This function should remain commented unless you are testing the recurring emailed receipts **
    public function executeTestEmails(sfWebRequest $request)
    {
  	$purchase = Doctrine::getTable('Purchase')->find(305);
  	$profile = $this->getRecurringProfile($purchase->getProfileId());
  	$this->sendRecurringReceiptEmail($purchase, $purchase->getAmount(), $profile);
  	echo "done!";die();
    }*/
    public function executeEditFees(sfWebRequest $request)
    {
  	global $CFG;
        $CFG->current_app->requireLogin();
  	$form = $request->getPostParameters();
  	if (!$CFG->current_app->getCurrentUser()->getRoleManager()->hasPrivilege('GCUser'))
  	{
            $CFG->current_app->gcError('Unathorized attempted access.', 'gcpageaccessdenied');
  	}
  	else if (!$purchase = Doctrine::getTable('GcrPurchase')->find($form['edit_fees_purchase_id']))
  	{
            $CFG->current_app->gcError('Purchase ID: ' . $purchase->getId() .
                    ' does not exist', 'gcdatabaseerror');
  	}
  	$gc_fee = $form['edit_fees_gc_fee'];
  	$owner_fee = $form['edit_fees_owner_fee'];
        $commission_fee = $form['edit_fees_commission_fee'];
  	$updated = false;
  	if ($gc_fee != '' && is_numeric($gc_fee))
  	{
            if ($gc_fee <= 100 && $gc_fee >=0)
            {
                $purchase->setGcFee($gc_fee);
                $updated = true;
            }
  	}
  	if ($owner_fee != '' && is_numeric($owner_fee))
  	{
            if ($owner_fee <= 100 && $owner_fee >=0)
            {
                $purchase->setOwnerFee($owner_fee);
                $updated = true;
            }
  	}
        if ($commission_fee != '' && is_numeric($commission_fee))
  	{
            if ($commission_fee <= 100 && $commission_fee >=0)
            {
                $purchase->setCommissionFee($commission_fee);
                $updated = true;
            }
  	}
  	if ($updated)
  	{
            $purchase->save();
            $purchase->updateRelatedAccounting();
  	}
  	$this->redirect($form['edit_fees_return_url']);
    }
    // This function fills out description and price data to be displayed on the purchase form
    private function hydratePurchaseObject($object, $type, $type_id, $app_id, $bill_cycle = null, $product_short_name = "", $product_type_id = "")
    {
        // one case for each purchase type
		$this->purchaseObject->eschool = $app_id;
		if (!$app = GcrInstitutionTable::getApp($app_id))
		{
				global $CFG;
				$CFG->current_app->gcError('Schema ' . $app_id . ' does not exist.', 'gcdatabaseerror');
		}
		if ($type == 'course')
		{
				if ($course = $app->getCourse($type_id))
				{
					$mdl_course = $course->getObject();
					if ($mdl_enrol = $course->getMdlEnrol())
					{
						$this->purchaseObject->description = 'Course: ' . $mdl_course->fullname .
								' (' . $mdl_course->shortname . ')';
						if ($mdl_enrol->cost > 0)
						{
							$this->purchaseObject->cost = $mdl_enrol->cost;
						}
						else if ($enrolCost = $app->getConfigVar('enrol_cost'))
						{
							$this->purchaseObject->cost = $enrolCost;
						}
					}
				}
		}
		else if ($type == 'eschool')
		{
				$this->purchaseObject->description = 'eSchool Activation: ' . $app->getFullName() . ' (' . $app->getShortName() . ')';

				if ($cost = $app->getConfigVar('gc_eschool_cost_' . strtolower($bill_cycle)))
				{
					$this->purchaseObject->cost = $cost;
					$this->purchaseObject->bill_cycle = $bill_cycle . 'ly Subscription';
				}
		}
		else if ($type == 'classroom' || $type == 'classroom_membership')
		{
				$this->purchaseObject->description = 'eClassroom';
				$this->purchaseObject->description .= ($type == 'membership') ? ' Membership ' : '';
				$this->purchaseObject->description .= ' on ' . $app->getFullName();
				if ($cost = $app->getConfigVar('gc_classroom_cost_' . strtolower($bill_cycle)))
				{
					$this->purchaseObject->cost = $cost;
					$this->purchaseObject->bill_cycle = $bill_cycle . 'ly Subscription';
				}
		}
		else if ($type == 'membership')
		{
			$this->purchaseObject->description = 'Membership on ' . $app->getFullName();
			if ($cost = $app->getConfigVar('gc_membership_cost_' . strtolower($bill_cycle)))
			{
				$this->purchaseObject->cost = $cost;
				$this->purchaseObject->bill_cycle = $bill_cycle . 'ly Subscription';
			}
		}
		// subscription
		else if ($type == 'subscription')
		{
			$product_details = GcrProductsTable::getProductDetails($type_id, $product_type_id, $app_id, $product_short_name);
			foreach($product_details as $product) {
				$this->purchaseObject->description = 'Subscription for - ' . $product->getFullName();
				$this->purchaseObject->cost = $product->getCost();
				$this->purchaseObject->bill_cycle = $bill_cycle . 'ly Subscription';				
			}			
		}
		else if ($type == 'sale')
		{
				if ($purchase_item = Doctrine::getTable('GcrPurchaseItem')->find($type_id))
				{
					$this->purchaseObject->description = $purchase_item->getDescription();
					$this->purchaseObject->cost = $purchase_item->getAmount();
				}
		}
    }
    protected function verifyPurchaseTypeEschoolId($short_name)
    {
        global $CFG;
        if ($app = GcrInstitutionTable::getApp($short_name))
        {
            $institution = $app->getInstitution();
            $current_institution = $CFG->current_app->getInstitution();
            if ($institution->getShortName() == $current_institution->getShortName())
            {
                return true;
            }
        }
        $CFG->current_app->gcError('Purchase type ' . $form['purchase_type'] .
                ': ID ' . $form['purchase_type_id'] .': Purchase Type Eschool Not Found.',
                'purchasetypeeschoolnotfound');
    }
}
