<?php
function mahara_right_nav()
{
    global $CFG, $OUTPUT;
    $mdl_user = $CFG->current_app->getCurrentUser();
    $mhr_user = $mdl_user->getUserOnInstitution();
    $content = '';
    if ($mhr_user)
    {
        $institution = $mhr_user->getApp();
        $chat_image_src = $mhr_user->getChatImageSrc();
        $chat_count = $mhr_user->getChatCount();
        $mhr_user = $mdl_user->getUserOnInstitution($institution);
        $app_url = $institution->getAppUrl();
        $content = html_writer::start_tag('ul');
        $content .= html_writer::start_tag('li');
        $content .= html_writer::start_tag('a', array('href'=>$app_url."account/activity"));
        $content .= html_writer::empty_tag('img', array('src' => $OUTPUT->pix_url('email', 'theme'), 'alt'=>"Inbox"));
        $content .= html_writer::nonempty_tag('span', $mhr_user->getUnreadMessages()->count, array('class' => "navcount unreadmessagecount"));
        $content .= html_writer::end_tag('span');
        $content .= html_writer::end_tag('a');
        $content .= " | ";
        $content .= html_writer::end_tag('li');

        $content .= html_writer::start_tag('li', array('class'=>'btn-logout'));
        $content .= html_writer::nonempty_tag('a', 'Logout', array('href'=>"$app_url?logout"));
        $content .= html_writer::end_tag('a');
        $content .= html_writer::end_tag('li');

        $content .= html_writer::end_tag('ul');

        $content .= html_writer::start_tag('form', array('id'=>'usf', 'method'=>'post', 'action'=>"$app_url/user/find.php"));
        $content .= html_writer::start_tag('span', array('id'=>'usf_query_container', 'class'=>'text'));
        $content .= html_writer::empty_tag('input', array('type'=>'text', 'id'=>'usf_query', 'name'=>'query', 'tabindex'=>'1', 'value'=>'Search Users'));
        $content .= html_writer::end_tag('span');
        $content .= html_writer::start_tag('span', array('id'=>'usf_submit_container', 'class'=>'submit'));
        $content .= html_writer::empty_tag('input', array('type'=>'submit', 'id'=>'usf_submit', 'name' =>'submit', 'tabindex'=>'1', 'value'=>'Go'));
        $content .= html_writer::end_tag('span');
        $content .= html_writer::end_tag('form');
    }
    return $content;
}

function mahara_navigation()
{
    global $CFG;
    $content = '';
    if ($CFG->current_app->hasPrivilege('Student'))
    {
        $mdl_user = $CFG->current_app->getCurrentUser();
        $institution = $mdl_user->getInstitution();
        if (!$institution)
        {
            $institution = $CFG->current_app->getInstitution();
        }
        $wwwroot = $institution->getAppUrl(false);
        $content  = html_writer::start_tag('ul');

        //Home link
        $content .= html_writer::start_tag('li');
        $content .= html_writer::nonempty_tag('a', 'Dashboard',
                array('href'=>"$wwwroot", 'accesskey'=>'h'));
        $content .= html_writer::end_tag('a');
        $content .= html_writer::end_tag('li');

        //Views link
        $content .= html_writer::start_tag('li');
        $content .= html_writer::nonempty_tag('a', 'Pages',
                array('href'=>"$wwwroot/view", 'accesskey'=>'v'));
        $content .= html_writer::end_tag('a');
        $content .= html_writer::end_tag('li');

        //Groups link
        $content .= html_writer::start_tag('li');
        $content .= html_writer::nonempty_tag('a', 'Groups',
                array('href'=>"$wwwroot/group/mygroups.php"));
        $content .= html_writer::end_tag('a');
        $content .= html_writer::end_tag('li');
		
		//Subscriptions link
        $content .= html_writer::start_tag('li');
        $content .= html_writer::nonempty_tag('a', 'Subscriptions',
                array('href'=> $CFG->current_app->getUrl()."/course/subscriptions"));
        $content .= html_writer::end_tag('a');
        $content .= html_writer::end_tag('li');		

        //Courses link
        $content .= html_writer::start_tag('li');
        $content .= html_writer::nonempty_tag('a', 'Courses',
                array('href'=> $CFG->current_app->getUrl()."/course/view"));
        $content .= html_writer::end_tag('a');
        $content .= html_writer::end_tag('li');
		
		//Certifications link
        $content .= html_writer::start_tag('li');
        $content .= html_writer::nonempty_tag('a', 'Certifications',
                array('href'=> $CFG->current_app->getUrl()."/course/certifications"));
        $content .= html_writer::end_tag('a');
        $content .= html_writer::end_tag('li');		

        $role_manager = $CFG->current_app->getCurrentUser()->getRoleManager();
        
        if ($role_manager->HasPrivilege('GCUser'))
        {
            $content .= html_writer::start_tag('li');
            $content .= html_writer::nonempty_tag('a', 'Site Administration',
                array('href'=>"$wwwroot/admin"));
            $content .= html_writer::end_tag('a');
            $content .= html_writer::end_tag('li');
        }
        else if ($role_manager->HasPrivilege('EschoolAdmin'))
        {
            $content .= html_writer::start_tag('li');
            $content .= html_writer::nonempty_tag('a', 'Administration',
                array('href'=>"$wwwroot/admin/users/search.php"));
            $content .= html_writer::end_tag('a');
            $content .= html_writer::end_tag('li');
        }
        $content .= html_writer::end_tag('ul');
    }
    return $content;
}

function mahara_footer()
{
    global $CFG;
    if ($CFG->current_app->hasPrivilege('Student'))
    {
        $institution = $CFG->current_app->getCurrentUser()->getInstitution();
    }
    if (!$institution)
    {
        $institution = $CFG->current_app->getInstitution();
    }
    $footer_links = $institution->selectFromMhrTable('config', 'field', 'footerlinks', true);

    $wwwroot = $institution->getAppUrl(false);

    $content  = html_writer::start_tag('div', array('id' => 'footer-wrap'));
    
    $content .= '<div id="footernavleft"><a href="'. $CFG->current_app->getSupportUrl() . '" target="_blank">Technical Support</a></div>';

    $content .= html_writer::start_tag('div', array('id' => 'footernav'));

    if($pos = strpos($footer_links->value, 'termsandconditions'))
    {
        $content .= html_writer::nonempty_tag('a', 'Terms and Conditions', array('href'=>"$wwwroot/terms.php"));
        $content .= html_writer::end_tag('a');
        $content .= "|";
    }

    if($pos = strpos($footer_links->value, 'privacystatement'))
    {
        $content .= html_writer::nonempty_tag('a', 'Privacy Statement', array('href'=>"$wwwroot/privacy.php"));
        $content .= html_writer::end_tag('a');
        $content .= "|";
    }

    if($pos = strpos($footer_links->value, 'about'))
    {
        $content .= html_writer::nonempty_tag('a', 'About', array('href'=>"$wwwroot/about.php"));
        $content .= html_writer::end_tag('a');
        $content .= "|";
    }

    if($pos = strpos($footer_links->value, 'contactus'))
    {
        $content .= html_writer::nonempty_tag('a', 'Contact Us', array('href' => "$wwwroot/contact.php"));
        $content .= html_writer::end_tag('a');
    }

    $content .= html_writer::end_tag('div');

    $content .= html_writer::start_tag('div', array('id'=>'poweredby'));

    $content .= html_writer::start_tag('a', array('href' => "http://globalclassroom.us"));

    $content .= html_writer::start_tag('img', array('src' => 'https://s3.amazonaws.com/static.globalclassroom.us/marketing/Stratus/poweredby_blk-trans.png', 'alt' => 'powered by global classroom'));
    $content .= html_writer::end_tag('img');
    $content .= html_writer::end_tag('a');
    $content .= html_writer::end_tag('div');
    $content .= html_writer::end_tag('div');
    return $content;
}
function globalclassroom_process_css($css, $theme)
{
    global $CFG;
    $hex_color = $CFG->current_app->getConfigVar('gc_background_color');
    if (!empty($theme->settings->backgroundcolor))
    {
        $backgroundcolor = $theme->settings->backgroundcolor;
    }
    else
    {
        $backgroundcolor = null;
    }
    if($hex_color)
    {
        $backgroundcolor = $hex_color;
    }
    $css = globalclassroom_set_backgroundcolor($css, $backgroundcolor);
    
    $backgroundimage = $CFG->current_app->getConfigVar('gc_background_image');
    $css = globalclassroom_set_backgroundimage($css, $backgroundimage);

    return $css;
}

function globalclassroom_set_backgroundcolor($css, $backgroundcolor)
{
    $tag = '[[setting:backgroundcolor]]';
    $replacement = $backgroundcolor;
    if (is_null($replacement))
    {
        $replacement = '#B3B9C7';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function globalclassroom_set_backgroundimage($css, $backgroundimage)
{
    global $CFG;
    $tag = '[[setting:backgroundimage]]';
    if ($backgroundimage != 'none')
    {
        $replacement = "url(" . $CFG->current_app->getUrl() . "/images/". $backgroundimage .")";
    }
    else
    {
        $replacement = 'none';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}