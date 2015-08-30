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
        $content = '';
        if ($this->institution)
        {
            $content .= '<div id="main-nav">';
            $content .= '<ul>';
            $content .= '
            <li><a href="'. $this->institution->getAppUrl() .'" accesskey="h">Dashboard</a></li>
            <!-- <li><a href="'. $this->institution->getAppUrl() .'view" accesskey="v">Pages</a></li> -->
            <li><a href="'. $this->institution->getAppUrl() .'group/mygroups.php">Groups</a></li>
			<li><a href="'. $this->current_app->getUrl() .'/course/subscriptions">Subscriptions</a></li>
			<li><a href="'. $this->current_app->getUrl() .'/course/view">Courses</a></li>
			<li><a href="'. $this->current_app->getUrl() .'/course/certifications">Certifications</a></li>
			';
            $content .= '</ul></div><div id="sub-nav"></div>';
        }
        return $content;
    }
}
?>