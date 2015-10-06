<?php
// Created By Nandakumar
// Aug 02, 2015
// This class handles subscription purchases for GlobalClassroom.
class GCPurchasePaypalSubscription extends GCPurchasePaypalRecurring
{
    function __construct($purchase_id, $billing_data)
    {
        parent::__construct($purchase_id, $billing_data);
        $this->setAmount();
        $this->setStartDate();
        $this->setGCFee();
    }
	
	/**
	* this function sets the amount of purchase
	*/	
    public function setAmount($amount = null)
    {
		$product_details = GcrProductsTable::getProductDetails($this->my_purchase->getPurchaseTypeId(), $this->my_purchase->getProductTypeId(), $this->my_purchase->getPurchaseTypeEschoolId(), $this->my_purchase->getProductShortName());
		foreach($product_details as $product) {
			$this->amount = $product->getCost();
		}
    }
    public function setGCFee($fee = null)
    {
        $this->gc_fee = 0;
    }
	/**
	* this function sets the start date purchase
	*/		
    public function setStartDate($start_date = null)
    {
        $this->start_date = date('Y-n-j', time()) . 'T0:0:0';
		//echo $this->start_date;exit;
    }
	
	/**
	* this function sends purchase info details email
	*/		
    public function emailPurchaseInfo()
    {
        //$product_info = 'Subscription, billed ' . $this->my_purchase->getBillCycle() . 'ly';
        $product_full_name = "Subscription";
		$product_details = GcrProductsTable::getProductDetails($this->my_purchase->getPurchaseTypeId(), $this->my_purchase->getProductTypeId(), $this->my_purchase->getPurchaseTypeEschoolId(), $this->my_purchase->getProductShortName());
		foreach($product_details as $product) {
			$product_full_name = $product->getFullName();
		}
		$product_info = $product_full_name;
        parent::emailPurchaseInfo($product_info);
    }
	
	/**
	* this function executes purchase details in screen
	*/		
    public function emailReceipt()
    {
        $user = $this->my_purchase->getPurchaserUser();
        $institution = $user->getApp();
        $trial_length = 0;
        $product_full_name = "Subscription";
		$product_details = GcrProductsTable::getProductDetails($this->my_purchase->getPurchaseTypeId(), $this->my_purchase->getProductTypeId(), $this->my_purchase->getPurchaseTypeEschoolId(), $this->my_purchase->getProductShortName());
		foreach($product_details as $product) {
			$trial_length = $product->getExpiryNoOfDays();
			$product_full_name = $product->getFullName();
		}
        $trial_end_date = date('F j, Y', $trial_length * self::DAY + time());

        $params = array('institution_full_name' => $institution->getFullName(),
                        'institution_short_name' => $institution->getShortName(),
                        'trial_end_date' => $trial_end_date,
                        'amountCharged' => number_format($this->amount, 2),
                        'trial_length' => $trial_length,
                        'product_full_name' => $product_full_name,
                        'cycle_text' => strtolower($this->my_purchase->getBillCycle()) . 'ly');
        $email = new GcrUserEmailer('purchase_subscription', $user,
                 "Thank you for purchasing a Subscription from " . $institution->getFullName() . "!", $params);
        $email->sendHtmlEmail();
    }
	
	/**
	* this function updated purchase details in join tables
	*/		
    public function providePurchasedUtility()
    {
        global $CFG;
        if (!$institution = $this->my_purchase->getPurchaseTypeApp())
        {
            $CFG->current_app->gcError("Subscription purchase error: " . 'institution ' .
                    $this->my_purchase->getPurchaseTypeId() . ' not found', 'gcdatabaseerror');
        }
        if (!$mhr_user = $this->my_purchase->getPurchaserUser())
        {
            $CFG->current_app->gcError("Subscription purchase error: " . 'Purchaser User ' .
                    $this->my_purchase->getUserId() . ' not found', 'gcdatabaseerror');
        }
        $mhr_user_obj = $mhr_user->getObject();
        // add as auth type institution user on home to grant access to system
        //$mhr_user->addMhrInstitutionMembership(false, true);
		$mhr_user->addMhrInstitutionSubscription($this->my_purchase->getPurchaseTypeId(), true);
    }
}