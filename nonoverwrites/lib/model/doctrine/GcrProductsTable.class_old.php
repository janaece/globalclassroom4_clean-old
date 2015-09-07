<?php

class GcrProductsTable extends Doctrine_Table
{
    public static function getInstance()
    {
        return Doctrine_Core::getTable('GcrProducts');
    }
	
	/**
	* This functions gets all product details
	*/
    public static function getProducts()
    {
        $products = Doctrine::getTable('GcrProducts')
                ->createQuery('p')
                ->where('p.status = ?', 1)
				->orderBy('p.full_name')
                ->execute();
        if (count($products) > 0)
        {
			return $products;
        }				
        return false;
    }
	
	/**
	* This function gets all product subscription libraries
	*
	* @param current app short name $current_app_short_name
	*/
    public static function getProductLibraries($current_app_short_name)
    {
        $products = Doctrine::getTable('GcrProducts')
                ->createQuery('p')
                ->where('p.status = ?', 1)
                ->andWhere('p.platform_short_name = ?', $current_app_short_name)
                ->andWhere('p.product_type_id = ?', 1)
				->orderBy('p.id ASC')
                ->execute();
        if (count($products) > 0)
        {
			return $products;
        }				
        return false;
    }
	
	/**
	* This function gets all products count
	*
	* @param current app short name $current_app_short_name
	*/	
	public static function getProductsCounts($current_app_short_name)
    {
		$products = Doctrine::getTable('GcrProducts')
                ->createQuery('p')
                ->where('p.status = ?', 1)
                ->andWhere('p.platform_short_name = ?', $current_app_short_name)
                ->andWhere('p.product_type_id = ?', 1)
				->orderBy('p.id ASC')
                ->execute();

		
        if (count($products) > 0)
        {
			return $products;
        }				
        return false;
    }

	/**
	* This function gets all products - individual courses
	*
	* @param current app short name $current_app_short_name
	*/
    public static function getProductIndividuals($current_app_short_name)
    {
        $products = Doctrine::getTable('GcrProducts')
                ->createQuery('p')
                ->where('p.status = ?', 1)
				->andWhere('p.platform_short_name = ?', $current_app_short_name)
				->andWhere('p.product_type_id = ?', 2)
				->orderBy('p.id ASC')
                ->execute();
        if (count($products) > 0)
        {
			return $products;
        }				
        return false;
    }

	/**
	* This function gets all products - certification courses
	*
	* @param current app short name $current_app_short_name
	*/
    public static function getProductCertifications($current_app_short_name)
    {
        $products = Doctrine::getTable('GcrProducts')
                ->createQuery('p')
                ->where('p.status = ?', 1)
				->andWhere('p.platform_short_name = ?', $current_app_short_name)
				->andWhere('p.product_type_id = ?', 3)
				->orderBy('p.id ASC')
                ->execute();
        if (count($products) > 0)
        {
			return $products;
        }				
        return false;
    }
	
	/**
	* This function gets product details
	*
	* @param current app short name $platform
	* @param institution short name $institution_short_name
	* @param product type $subscription_type
	*/	
    public static function getProductDetails($institution_short_name, $subscription_type, $platform)
    {
        $products = Doctrine::getTable('GcrProducts')
                ->createQuery('p')
                ->where('p.status = ?', 1)
				->andWhere('p.institution_short_name = ?', $institution_short_name)
				->andWhere('p.product_type_id = ?', $subscription_type)
				->andWhere('p.platform_short_name = ?', $platform)
				->orderBy('p.id ASC')
                ->execute();
        if (count($products) > 0)
        {
			return $products;
        }				
        return false;
    }	

}
