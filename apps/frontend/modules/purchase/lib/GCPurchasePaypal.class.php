<?php
// Created By Ron Stewart
// May 2, 2010
// This class handles purchases for GlobalClassroom. It adds to this class the 
// variables needed for credit card processing. The method attemptPaypalTransaction()
// sends a request to paypal to process the transaction.
class GCPurchasePaypal extends GCPurchase
{
    protected $cc;
    protected $billing_data;
    protected $testing; // boolean for paypal sandbox
    protected $error_string; // concatenated string of all paypal errors returned in response

    function __construct($purchase_id, $billing_data)
    {
        parent::__construct($purchase_id);
        $this->billing_data = $billing_data;
        $this->cc = new prestaPaypal(gcr::rootDir . 'plugins/prestaPaypalPlugin/sdk/lib');
        $this->testing = gcr::paypalSandbox;
    }

    public static function initializePaypalCaller($paypal, $testing)
    {
        GcrPaypalTable::initializePaypalCaller($paypal, $testing);
    }

    public function attemptPaypalTransaction($token)
    {
        $isRecurring = $this->my_purchase->getBillCycle() != 'single';

        $this->initializePaypalCaller($this->cc, gcr::paypalSandbox);

        // Amount payement incl. taxes

        $this->cc->setTransactionTotal($this->amount);

        // A description for the transaction (we needed to limit this to 100 chars)
        $purchase_description = $this->my_purchase->getPurchaseDescription();
        if (strlen($purchase_description) > 100)
        {
            $purchase_description = substr($purchase_description, 0, 95) . '...';
        }
		//echo "Desc=".$purchase_description;exit;
        $this->cc->setTransactionDescription($purchase_description);
        // Client information :
        $this->cc->setBillingFirstName($this->billing_data->getFirstName());
        $this->cc->setBillingLastName($this->billing_data->getLastName());
        $this->cc->setBillingStreet1($this->billing_data->getAddress());
        $this->cc->setBillingCity($this->billing_data->getCity());
        $this->cc->setBillingState($this->billing_data->getState());
        $this->cc->setBillingZip($this->billing_data->getzip());
        $this->cc->setBillingCountry($this->billing_data->getCountry());
        $this->cc->setCardType($this->billing_data->getCCType());
        $this->cc->setCardNumber($this->billing_data->getCCNumber());
        $this->cc->setCardVerificationNumber($this->billing_data->getCCCcv2());
        $this->cc->setCardExpirationMonth($this->billing_data->getCCExpMonth());
        $this->cc->setCardExpirationYear($this->billing_data->getCCExpYear());
        $this->cc->setBuyerIP($_SERVER['REMOTE_ADDR']);

        // Do payment
        $result = $this->cc->chargeDirect($isRecurring);
        $this->error_string = $this->cc->getErrorString();
//echo $this->error_string;
        if ($this->error_string)
        {
            $result_name = ($result) ? 'warning' : 'error';
            // log error message from paypal
            global $CFG;
            $CFG->current_app->gcError('Purchase type ' . $this->my_purchase->getPurchaseType() . ': ID ' . $this->my_purchase->getPurchaseTypeId() .
                ": Paypal $result_name: " . $this->error_string);
        }
		//$result = true;
        if ($result)
        {
            // set session var to prevent duplicate transactions via back button.
            $_SESSION['lastPurchaseFormToken'] = $token;
            $this->saveTransaction();
        }
        else
        {
            $this->my_purchase->delete();
        }
        return $result;
    }
    
    protected function saveTransaction()
    {
        // save the profile ID for recurring transactions for IPN receiver reference in the future.
        $this->my_purchase->setProfileId($this->cc->getProfileID());
        // save amount as what paypal actually charged
        $this->my_purchase->setAmount($this->amount);
        // save gc_fee, owner_fee, and commission_fee derived from the GcrPurchase object
        $this->my_purchase->setGcFee($this->gc_fee);
        $this->my_purchase->setOwnerFee($this->owner_fee);
        $this->my_purchase->setCommissionFee($this->commission_fee);
        // save text description of purchased item in case it is deleted in the future
        $this->my_purchase->setPurchaseTypeDescription($this->my_purchase->getPurchaseDescription());
        $this->my_purchase->save();
        // set seller id
        $this->my_purchase->assignSeller();
        // send us an email to help our marketing dept.
        $this->emailPurchaseInfo();
        // send an email to the user.
        $this->emailReceipt();
        // payment process complete, let's give the user what they bought
        $this->providePurchasedUtility();
    }

    public function getFormattedErrorString()
    {
        $formatted_string = "Sorry, your credit card transaction has failed for the following reasons:<br><ul>";
        $error_array = explode(';', $this->error_string);
        foreach ($error_array as $error)
        {
            if ($error != '')
            {
                $formatted_string .= "<li>" . $error . "</li>";
            }
        }
        $formatted_string .= "</ul>";
        return $formatted_string;
    }
    public function getPaypalErrors()
    {
        $error_array = explode(';', $this->error_string);
        return $error_array;
    }

    public function emailPurchaseInfo($product_info = null)
    {
        $cc_address = "{$this->billing_data->getAddress()}, {$this->billing_data->getCity()}, " .
                "{$this->billing_data->getState()} {$this->billing_data->getZip()}, {$this->billing_data->getCountry()}"; 
        $params = array('cc_address'	=> $cc_address,
                        'product_info'	=> $product_info);
        $this->my_purchase->emailInfoToGC($params);
    }

    public function getCC()
    {
        return $this->cc;
    }

    public function getErrorString()
    {
        return $this->error_string;
    }
    public function setErrorString($error_string)
    {
        $this->error_string = $error_string;
    }
    public function providePurchasedUtility(){}
}