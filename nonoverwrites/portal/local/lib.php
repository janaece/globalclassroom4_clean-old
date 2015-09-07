<?php
/**
 * Library file for miscellaneous local customisations.
 *
 * For simple customisation of a Mahara site, the core code will call some local_* functions
 * which may be defined in this file.
 *
 * Functions that will be called by core:
 *  - local_main_nav_update($menu):        modify the main navigation menu in the header
 *  - local_xmlrpc_services():              add custom xmlrpc functions
 *  - local_can_remove_viewtype($viewtype): stop users from deleting views of a particular type
 */

function local_main_nav_update(&$menu)
{
    foreach($menu as $key => $value)
    {
        // remove subnav menu items
        if (strstr($value['path'], '/'))
        {
            unset($menu[$key]);
        }
        // hide Groups and Content menu item
        if($value['path'] === 'content')
        {
            unset($menu[$key]);
        }
        // change the title of the 'Portfolio" button
        if($value['path'] === 'myportfolio')
        {
            $menu[$key]['title'] = get_string('views', 'mahara');
        }
        // detect if eschool admin is logged in
        if($value['path'] === 'configusers')
        {
            $eschooladmin = true;
        }
        // decect if site admin is logged in
        if($value['path'] === 'configextensions')
        {
            $siteadmin = true;
        }
    }

    // Its an community admin, so add the custom config site button
    if(isset($eschooladmin) && !isset($siteadmin))
    {
        foreach($menu as $key => $value)
        {
            if($value['path'] === 'manageinstitutions')
            {
                $menu[$key]['url'] = 'admin/users/institutionusers.php';
            }
        }
        $config_element = array('configsite' => array('path' => 'configsite',
                                                      'url' => 'artefact/eschooladmin/settings.php',
                                                      'title' => get_string('configsite', 'admin'),
                                                      'weight' => 0));
        array_splice($menu, 0, 0, $config_element);
    }

    // Not on an admin page, so add the Custom Profile and Courses buttons

    if(count($menu) === 3)
    {
        /*
        $profile_element = array('profile' => array('path' => 'profile',
                                                    'url' => 'user/view.php',
                                                    'title' => ucfirst(get_string('profile', 'mahara')),
                                                    'weight' => 20,
                                                    'accesskey' => 'p'));
        */
        $courses_element = array('courses' => array('path' => 'courses',
                                                    'url' => 'artefact/courses',
                                                    'title' => get_string('courses', 'globalclassroom'),
                                                    'weight' => 50,
                                                    'accesskey' => 'c'));
        //array_splice($menu, 1, 0, $profile_element);
        array_splice($menu, 3, 0, $courses_element);
    }//var_dump($menu);die;
}

?>