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
	* @param product type $product_type_id
	*/	
    public static function getProductDetails($institution_short_name, $product_type_id, $platform, $product_short_name)
    {
        $products = Doctrine::getTable('GcrProducts')
                ->createQuery('p')
                ->where('p.status = ?', 1)
				->andWhere('p.institution_short_name = ?', $institution_short_name)
				->andWhere('p.short_name = ?', $product_short_name)
				->andWhere('p.product_type_id = ?', $product_type_id)
				->andWhere('p.platform_short_name = ?', $platform)
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
	* @param product id $product_id
	*/	
    public static function getProductDetailsById($product_id)
    {
        $products = Doctrine::getTable('GcrProducts')
                ->createQuery('p')
                ->where('p.status = ?', 1)
				->andWhere('p.id = ?', $product_id)
				->orderBy('p.id ASC')
                ->execute();
        if (count($products) > 0)
        {
			return $products;
        }				
        return false;
    }	
	
	/**
	* This function gets all product libraries
	*
	* @param current app short name $current_app_short_name
	*/
    public static function getAllProducts($current_app_short_name = "", $product_type_id = "")
    {
		if($current_app_short_name != "" && $product_type_id != "") {
			$products = Doctrine::getTable('GcrProducts')
					->createQuery('p')
					->where('p.status = ?', 1)
					->andWhere('p.platform_short_name = ?', $current_app_short_name)
					->andWhere('p.product_type_id = ?', $product_type_id)
					->orderBy('p.platform_short_name ASC')
					->execute();
		} else if($current_app_short_name != "") {
			$products = Doctrine::getTable('GcrProducts')
					->createQuery('p')
					->where('p.status = ?', 1)
					->andWhere('p.platform_short_name = ?', $current_app_short_name)
					->orderBy('p.platform_short_name ASC')
					->execute();
		} else if($product_type_id != "") {
			$products = Doctrine::getTable('GcrProducts')
					->createQuery('p')
					->where('p.status = ?', 1)
					->andWhere('p.product_type_id = ?', $product_type_id)
					->orderBy('p.platform_short_name ASC')
					->execute();
		} else {
			$products = Doctrine::getTable('GcrProducts')
					->createQuery('p')
					->where('p.status = ?', 1)
					->orderBy('p.platform_short_name ASC')
					->execute();			
		}
		//echo count($products);
        if (count($products) > 0)
        {
			return $products;
        }				
        return false;
    }
	
	public static function getProductType($catalog_short_name, $platform_short_name) {
		$q = Doctrine_Query::create()
		  ->select('p.product_type_id')
		  ->from('GcrProducts p')
		  ->where('p.catalog_short_name = ?', $catalog_short_name)
		  ->andWhere('p.platform_short_name = ?', $platform_short_name);
		$result = $q->execute(array(), Doctrine::HYDRATE_SCALAR);
		if(isset($result[0]) && count($result) > 0) {
			return($result[0]["p_product_type_id"]);
		} else {
			return 1;
		}	
	}	

}
