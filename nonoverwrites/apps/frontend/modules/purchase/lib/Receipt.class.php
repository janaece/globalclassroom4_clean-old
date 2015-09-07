<?php
// Created By Ron Stewart
// June 18, 2010
// This class acts as a generic receipt which can be used to detail any kind of transaction. As we will eventually
// use the purchase module for several purchase types, this class allows these types to be formatted in to a 
// uniform receipt format to encapsulate conditional logic for handling different purchase types.
class Receipt
{
    private $my_purchase;
    private $my_app;
    private $my_user;
    private $my_product;

    function __construct($purchase, $app, $user, $product)
    {
        $this->my_purchase = $purchase;
        $this->my_app = $app;
        $this->my_user = $user;
        $this->my_product = $product;
    }

    public function printReceipt()
    {
        include_once(gcr::rootDir . 'apps/frontend/modules/purchase/lib/Receipt.html');
    }

    public function getProductName()
    {
        $type = $this->my_purchase->getPurchaseType();
        if ($type == 'course')
        {
            return $this->my_product->fullname . ' (' . $this->my_product->shortname . ')';
        }
        if ($type == 'subscription')
        {
			$type_id_arr = explode("~", $this->my_purchase->getPurchaseTypeId());
			$product_name = "Subscription";
			$product_details = GcrProductsTable::getProductDetails($type_id_arr[0], $type_id_arr[1], $this->my_purchase->getPurchaseTypeEschoolId());
			foreach($product_details as $product) {
				$product_name = $product->getFullName();
			}
            //return $this->my_purchase->getPurchaseDescription();
            return $product_name;
        }		
        if ($type == 'sale')
        {
            return 'Graduate Credit';
        }
        else if ($this->my_purchase->isRecurring())
        {
             return $this->my_purchase->getBillCycle() . 'ly Recurring ' .
                     $this->my_purchase->getPurchaseString() . ' Subscription';
        }
    }
    public function getProductUrl()
    {
        $type = $this->my_purchase->getPurchaseType();
        if ($this->my_purchase->getPurchaseType() == 'course')
        {
            return $this->my_app->getAppUrl() . '/course/view.php?id=' . $this->my_product->id;
        }
        else if ($type == 'eschool')
        {
            return $this->my_app->getUrl();
        }
        else if ($type == 'classroom')
        {
            return $this->my_app->getInstitution()->getAppUrl() . 'artefact/courses';
        }
        else if ($type == 'membership')
        {
            return $this->my_app->getInstitution()->getAppUrl();
        }
    }
    public function getProductUrlDescription()
    {
        $type = $this->my_purchase->getPurchaseType();
        if ($type == 'course')
        {
            return 'Continue To Your New Course';
        }
        else if ($type == 'eschool')
        {
            return 'Go To Your Platform Homepage';
        }
        else if ($type == 'classroom')
        {
            return 'Return to the Courses Page';
        }
        else if ($type == 'membership')
        {
            return 'Continue to Your Dashboard';
        }
    }
    public function getProductPrice()
    {
        setlocale(LC_MONETARY, 'en_US.UTF-8');
        return money_format('%i', $this->my_purchase->getAmount());
    }
    public function getProductNameDescription()
    {
        $type = $this->my_purchase->getPurchaseType();
        if ($type == 'course')
        {
            return 'Course:';
        }
        if ($type == 'subscription')
        {
            return 'Subscription';
        }		
        return 'Item:';
    }
    public function getPurchaseUserFullName()
    {
        global $CFG;
        $current_user = $CFG->current_app->getCurrentUser();
        $user = $current_user->getUserOnInstitution();
        return $user->getObject()->firstname . ' ' . $user->getObject()->lastname;
    }

    // Properties' Getters and Setters
    public function getPurchase()
    {
        return $this->my_purchase;
    }
    public function setPurchase($purchase)
    {
        $this->my_purchase = $purchase;
    }
    public function getApp()
    {
        return $this->my_app;
    }
    public function setApp($ap)
    {
        $this->my_app = $app;
    }
    public function getUser()
    {
        return $this->my_user;
    }
    public function setUser($user)
    {
        $this->my_user = $user;
    }
    public function getProduct()
    {
        return $this->my_product;
    }
    public function setProduct($product)
    {
        $this->my_product = $product;
    }
}