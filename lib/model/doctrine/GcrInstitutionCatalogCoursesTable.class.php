<?php

class GcrInstitutionCatalogCoursesTable extends Doctrine_Table
{
    public static function getInstance()
    {
        return Doctrine_Core::getTable('GcrInstitutionCatalogCourses');
    }
	
	
	/**
	* This function checks whether institution and catalog short names are exist or not
	*
	* @param $institution_short_name
	* @param $catalog_short_name
	*/
    public static function checkIsExist($institution_short_name = "", $catalog_short_name = "", $platform_short_name = "")
    {
		$results = Doctrine::getTable('GcrInstitutionCatalogCourses')
			->createQuery('p')
			->where('p.institution_short_name = ?', $institution_short_name)
			->andWhere('p.catalog_short_name = ?', $catalog_short_name)
			->andWhere('p.platform_short_name = ?', $platform_short_name)
			->orderBy('p.id ASC')
			->execute();
		return count($results);
    }
	
	public static function getSubscriptionCoursesCount($platform_short_name) {
		$q = Doctrine_Query::create()
		  ->select('SUM(p.courses_count)')
		  ->from('GcrInstitutionCatalogCourses p')
		  ->where('p.product_type_id = ?', 1)
		  ->andWhere('p.platform_short_name = ?', $platform_short_name)
		  ->groupBy('p.product_type_id');
		$result = $q->execute(array(), Doctrine::HYDRATE_SCALAR);
		//print_r($result);
		if(isset($result[0])) return($result[0]["p_SUM"]);
		return 0;
	}
	
	public static function getIndividualCoursesCount($platform_short_name) {
		$q = Doctrine_Query::create()
		  ->select('SUM(p.courses_count)')
		  ->from('GcrInstitutionCatalogCourses p')
		  ->where('p.product_type_id = ?', 2)
		  ->andWhere('p.platform_short_name = ?', $platform_short_name)
		  ->groupBy('p.product_type_id');
		$result = $q->execute(array(), Doctrine::HYDRATE_SCALAR);
		//print_r($result);
		if(isset($result[0])) return($result[0]["p_SUM"]);
		return 0;
	}

	public static function getCertificationCoursesCount($platform_short_name) {
		$q = Doctrine_Query::create()
		  ->select('SUM(p.courses_count)')
		  ->from('GcrInstitutionCatalogCourses p')
		  ->where('p.product_type_id = ?', 3)
		  ->andWhere('p.platform_short_name = ?', $platform_short_name)
		  ->groupBy('p.product_type_id');
		$result = $q->execute(array(), Doctrine::HYDRATE_SCALAR);
		//print_r($result);
		if(isset($result[0])) return($result[0]["p_SUM"]);
		return 0;
	}
	
	public static function getSubscriptionCourses($platform_short_name) {
		$q = Doctrine_Query::create()
		  ->select('p.*')
		  ->from('GcrInstitutionCatalogCourses p')
		  ->where('p.product_type_id = ?', 1)
		  ->andWhere('p.platform_short_name = ?', $platform_short_name)
		  ->orderBy('p.id ASC');
		$result = $q->execute(array(), Doctrine::HYDRATE_SCALAR);
		//print_r($result);
		return($result);		
	}
	
	public static function getIndividualCourses($platform_short_name) {
		$q = Doctrine_Query::create()
		  ->select('p.*')
		  ->from('GcrInstitutionCatalogCourses p')
		  ->where('p.product_type_id = ?', 2)
		  ->andWhere('p.platform_short_name = ?', $platform_short_name)
		  ->orderBy('p.id ASC');
		$result = $q->execute(array(), Doctrine::HYDRATE_SCALAR);
		//print_r($result);
		return($result);		
	}

	public static function getCertificationCourses($platform_short_name) {
		$q = Doctrine_Query::create()
		  ->select('p.*')
		  ->from('GcrInstitutionCatalogCourses p')
		  ->where('p.product_type_id = ?', 3)
		  ->andWhere('p.platform_short_name = ?', $platform_short_name)
		  ->orderBy('p.id ASC');
		$result = $q->execute(array(), Doctrine::HYDRATE_SCALAR);
		//print_r($result);
		return($result);		
	}	
}
