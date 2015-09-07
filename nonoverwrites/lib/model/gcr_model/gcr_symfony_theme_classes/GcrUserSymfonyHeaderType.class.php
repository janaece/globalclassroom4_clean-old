<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GcrUserSymfonyHeaderType
 *
 * @author ron
 */
class GcrUserSymfonyHeaderType extends GcrSymfonyHeaderType
{
    public function getNavDivs()
    {
		global $CFG;
        $content = '';
		
		// Below code used for hiding subscription, courses and certifications tabs
		//echo $this->institution->getAppUrl();
		//echo $this->current_app->getUrl();
		$current_app_name = explode(".", $this->institution->getAppUrl());
		$current_app_short_name = $current_app_name[0];
		$current_app_short_name = str_replace("http://", "", $current_app_short_name);
		$current_app_short_name = str_replace("https://", "", $current_app_short_name);
		//echo $current_app_short_name."=".time();
		$this->ind_products_count = GcrInstitutionCatalogCoursesTable::getIndividualCoursesCount($current_app_short_name);
 		$this->sub_products_count = GcrInstitutionCatalogCoursesTable::getSubscriptionCoursesCount($current_app_short_name);
		$this->cert_products_count = GcrInstitutionCatalogCoursesTable::getCertificationCoursesCount($current_app_short_name);
		
        if ($this->institution)
        {
            $content .= '<div id="main-nav">';
            $content .= '<ul>';
            $content .= '
            <li><a href="'. $this->institution->getAppUrl() .'" accesskey="h">Dashboard</a></li>
            <!-- <li><a href="'. $this->institution->getAppUrl() .'view" accesskey="v">Pages</a></li> -->
            <li><a href="'. $this->institution->getAppUrl() .'group/mygroups.php">Groups</a></li>';
			if ($this->sub_products_count > 0) {
				$content .= '<li><a href="'. $this->current_app->getUrl() .'/course/subscriptions">Subscriptions</a></li>';
			}
			if ($this->ind_products_count > 0) {
				$content .= '<li><a href="'. $this->current_app->getUrl() .'/course/view">Courses</a></li>';
			}
			if ($this->cert_products_count > 0) {
				$content .= '<li><a href="'. $this->current_app->getUrl() .'/course/certifications">Certifications</a></li>';
			}
            $content .= '</ul></div><div id="sub-nav"></div>';
        }
        return $content;
    }
}
?>