<?php

defined('MOODLE_INTERNAL') || die;

/**
 * Return full url with all extra parameters
 * @param string $url
 * @param object $cm
 * @param object $course
 * @return string url
 */

require_once("$CFG->libdir/filelib.php");
require_once("$CFG->libdir/resourcelib.php");
require_once("$CFG->dirroot/mod/url/lib.php");

function mediaelementjs_get_full_url($url, $cm, $course, $config=null)
{
    $parameters = empty($url->parameters) ? array() : unserialize($url->parameters);

    if (empty($parameters))
    {
        // easy - no params
        return $url->externalurl;
    }

    if (!$config)
    {
        $config = get_config('url');
    }

    $paramvalues = mediaelementjs_get_variable_values($url, $cm, $course, $config);

    foreach ($parameters as $parse=>$parameter)
    {
        if (isset($paramvalues[$parameter]))
        {
            $parameters[$parse] = urlencode($parse).'='.urlencode($paramvalues[$parameter]);
        }
        else
        {
            unset($parameters[$parse]);
        }
    }

    if (empty($parameters))
    {
        // easy - no params available
        return $url->externalurl;
    }

    if (stripos($url->externalurl, 'teamspeak://') === 0)
    {
        return $url->externalurl.'?'.implode('?', $parameters);
    }
    else
    {
        $join = (strpos($url->externalurl, '?') === false) ? '?' : '&amp;';
        return $url->externalurl.$join.implode('&amp;', $parameters);
    }
}

/**
 * Print url header.
 * @param object $url
 * @param object $cm
 * @param object $course
 * @return void
 */
function mediaelementjs_print_header($url, $cm, $course)
{
    global $PAGE, $OUTPUT;

    $PAGE->set_title($course->shortname.': '.$url->name);
    $PAGE->set_heading($course->fullname);
    $PAGE->set_activity_record($url);
    echo $OUTPUT->header();
}

/**
 * Print url heading.
 * @param object $url
 * @param object $cm
 * @param object $course
 * @param bool $ignoresettings print even if not specified in modedit
 * @return void
 */
function mediaelementjs_print_heading($url, $cm, $course, $ignoresettings=false)
{
    global $OUTPUT;

    $options = empty($url->displayoptions) ? array() : unserialize($url->displayoptions);

    if ($ignoresettings or !empty($options['printheading']))
    {
        echo $OUTPUT->heading(format_string($url->name), 2, 'main', 'urlheading');
    }
}

/**
 * Print url introduction.
 * @param object $url
 * @param object $cm
 * @param object $course
 * @param bool $ignoresettings print even if not specified in modedit
 * @return void
 */
function mediaelementjs_print_intro($url, $cm, $course, $ignoresettings=false)
{
    global $OUTPUT;

    $options = empty($url->displayoptions) ? array() : unserialize($url->displayoptions);
    if ($ignoresettings or !empty($options['printintro']))
    {
        if (trim(strip_tags($url->intro)))
        {
            echo $OUTPUT->box_start('mod_introbox', 'urlintro');
            echo format_module_intro('url', $url, $cm->id);
            echo $OUTPUT->box_end();
        }
    }
}

/**
 * Display url frames.
 * @param object $url
 * @param object $cm
 * @param object $course
 * @return does not return
 */
function mediaelementjs_display_frame($url, $cm, $course)
{
    global $PAGE, $OUTPUT, $CFG;

    $frame = optional_param('frameset', 'main', PARAM_ALPHA);

    if ($frame === 'top')
    {
        $PAGE->set_pagelayout('frametop');
        mediaelementjs_print_header($url, $cm, $course);
        mediaelementjs_print_heading($url, $cm, $course);
        mediaelementjs_print_intro($url, $cm, $course);
        echo $OUTPUT->footer();
        die;
    } 
    else
    {
        $config = get_config('url');
        $context = get_context_instance(CONTEXT_MODULE, $cm->id);
        $exteurl = mediaelementjs_get_full_url($url, $cm, $course, $config);
        $navurl = "$CFG->wwwroot/mod/mediaelementjs/view.php?id=$cm->id&amp;frameset=top";
        $title = strip_tags(format_string($course->shortname.': '.$url->name));
        $framesize = $config->framesize;
        $modulename = s(get_string('modulename','mediaelementjs'));
        $dir = get_string('thisdirection', 'langconfig');

        $extframe = <<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html dir="$dir">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>$title</title>
  </head>
  <frameset rows="$framesize,*">
    <frame src="$navurl" title="$modulename"/>
    <frame src="$exteurl" title="$modulename"/>
  </frameset>
</html>
EOF;

        @header('Content-Type: text/html; charset=utf-8');
        echo $extframe;
        die;
    }
}

/**
 * Print url info and link.
 * @param object $url
 * @param object $cm
 * @param object $course
 * @return does not return
 */
function mediaelementjs_print_workaround($url, $cm, $course)
{
    global $OUTPUT;

    mediaelementjs_print_header($url, $cm, $course);
    mediaelementjs_print_heading($url, $cm, $course, true);
    mediaelementjs_print_intro($url, $cm, $course, true);

    $fullurl = mediaelementjs_get_full_url($url, $cm, $course);

    $display = mediaelementjs_get_final_display_type($url);
    if ($display == RESOURCELIB_DISPLAY_POPUP)
    {
        $options = empty($url->displayoptions) ? array() : unserialize($url->displayoptions);
        $width  = empty($options['popupwidth'])  ? 620 : $options['popupwidth'];
        $height = empty($options['popupheight']) ? 450 : $options['popupheight'];
        $wh = "width=$width,height=$height,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes";
        $extra = "onclick=\"window.open('$fullurl', '', '$wh'); return false;\"";
    }
    else if ($display == RESOURCELIB_DISPLAY_NEW)
    {
        $extra = "onclick=\"this.target='_blank';\"";
    }
    else
    {
        $extra = '';
    }

    echo '<div class="urlworkaround">';
    print_string('clicktoopen', 'mediaelementjs', "<a href=\"$fullurl\" $extra>$fullurl</a>");
    echo '</div>';

    echo $OUTPUT->footer();
    die;
}

function mediaelementjs_guess_cloud_storage_mimetype($externalurl)
{
    global $CFG;
    $mimetype = false;
    if (strpos($externalurl, $CFG->current_app->getUrl() . '/institution/getUserStorageFile') !== false)
    {
        $s3_url_start = strpos($externalurl, GcrStorageAccessS3::FILE_GET_PARAMETER) + 
                strlen(GcrStorageAccessS3::FILE_GET_PARAMETER) + 1;
        if ($s3_url_start)
        {
            $s3_url_end = strpos($externalurl, '&', $s3_url_start);
            if ($s3_url_end)
            {
                $s3_url = substr($externalurl, $s3_url_start, ($s3_url_end - $s3_url_start));
                $s3_full_url = $CFG->current_app->getUrl() . '/' . $s3_url;
                $mimetype = resourcelib_guess_url_mimetype($s3_full_url);
            }
        }
    }
    return $mimetype;
}

/**
 * Display embedded url file.
 * @param object $url
 * @param object $cm
 * @param object $course
 * @param stored_file $file main file
 * @return does not return
 */
function mediaelementjs_display_embed($url, $cm, $course)
{
    global $CFG, $PAGE, $OUTPUT;

    $mimetype = resourcelib_guess_url_mimetype($url->externalurl);
    $cloud_storage_mimetype = mediaelementjs_guess_cloud_storage_mimetype($url->externalurl);
    if ($cloud_storage_mimetype)
    {
        $mimetype = $cloud_storage_mimetype;
    }
    
    $fullurl  = mediaelementjs_get_full_url($url, $cm, $course);
    $title    = $url->name;

    $link = html_writer::tag('a', $fullurl, array('href'=>str_replace('&amp;', '&', $fullurl)));
    $clicktoopen = get_string('clicktoopen', 'mediaelementjs', $link);

    $extension = resourcelib_get_extension($url->externalurl);

    if (in_array($mimetype, array('image/gif','image/jpeg','image/png')))
    {  // It's an image
        $code = resourcelib_embed_image($fullurl, $title);
    }
    else if ($mimetype == 'audio/mp3' || $mimetype == 'audio/x-pn-realaudio-plugin')
    {
        // MP3 audio file
        $code = GcrFileLib::getAudioEmbedHtml($fullurl, $mimetype);
    }  
    else if ($mimetype == 'application/x-shockwave-flash')
    {
        // Flash file
        $code = resourcelib_embed_flash($fullurl, $title, $clicktoopen);

    }
    else if ($mimetype == 'video/x-ms' || $mimetype == 'video/mpeg' 
            || $mimetype == 'video/quicktime' || $mimetype == 'video/webm' 
            || $mimetype == 'video/ogv' || $mimetype == 'video/ogg' 
            || $mimetype == 'video/mp4')
    {
        $code = GcrFileLib::getVideoEmbedHtml($fullurl, '100%', '100%', $mimetype);
    }
    else
    {
        // anything else - just try object tag enlarged as much as possible
        $code = resourcelib_embed_general($fullurl, $title, $clicktoopen, $mimetype);
    }

    mediaelementjs_print_header($url, $cm, $course);
    mediaelementjs_print_heading($url, $cm, $course);

    echo $code;

    mediaelementjs_print_intro($url, $cm, $course);

    echo $OUTPUT->footer();
    die;
}

// Temporary location, this could be moved
// GC MEDIAELEMENTJS functions to render proper code
/*
function mediaelementjs_embed_fallback($fullurl, $title, $clicktoopen, $mimetype)
{
    global $CFG, $PAGE;
    $PAGE->requires->js("/mod/mediaelementjs/js/mediaelement-and-player.min.js", true);
    $PAGE->requires->css('/mod/mediaelementjs/css/mediaelementplayer.css');
    $code  = '<video controls="controls">';
    $code .= '<source src="'. $fullurl .'" type="' . $mimetype . '">';
    $code .= '<object width="420" height="340" type="application/x-shockwave-flash"
        data="' . $CFG->current_app->getAppUrl() . '/mod/mediaelementjs/lib/flashmediaelement.swf">';
    $code .= '<param name="movie" value="'. $CFG->current_app->getAppUrl() .'/mod/mediaelementjs/lib/flashmediaelement.swf" />';
    $code .= '<param name="flashvars" value="controls=true&file='. $fullurl .'" />';
    $code .= '</object>';
    $code .= '</video>';
    return $code;
}

function mediaelementjs_embed_html5($fullurl, $title, $clicktoopen, $mimetype)
{
    global $CFG;
    //$PAGE->requires->js("/mod/mediaelementjs/js/mediaelement-and-player.min.js", true);
    //$PAGE->requires->css('/mod/mediaelementjs/css/mediaelementplayer.min.css');
    
    $code = '<script type="text/javascript" src="' . $CFG->current_app->getUrl() . 
                    '/js/mediaelement-and-player.min.js"></script>';
            $code .= '<style type="text/css">@import "' . $CFG->current_app->getUrl() . '/css/mediaelementjs/mediaelementplayer.css"</style>';
            
    $code .= '<video width="640" height="360" id="mediaelementjs" controls="controls" preload="none">';
    $code .= '<source src="'. $fullurl .'" type="' . $mimetype . '">';
    $code .= '<object width="640" height="360" type="application/x-shockwave-flash" data="' . 
            $CFG->current_app->getAppUrl() . '/mod/mediaelementjs/lib/flashmediaelement.swf">';
    $code .= '<param name="movie" value="'. $CFG->current_app->getAppUrl() .'/mod/mediaelementjs/lib/flashmediaelement.swf" />';
    $code .= '<param name="flashvars" value="controls=true&file='. $fullurl .'" />';
    $code .= '</object>';
    $code .= '</video>';
    $code .= '<script>jQuery("video,audio").mediaelementplayer({pluginPath: "' . 
                    $CFG->current_app->getUrl() . '/js/mediaelementjs/"});</script>';
    //$code .= '<script>jQuery("video,audio").mediaelementplayer({pluginPath: "'. $CFG->current_app->getAppUrl() .'/mod/mediaelementjs/lib/"});</script>';
    return $code;
}*/

/**
 * Decide the best diaply format.
 * @param object $url
 * @return int display type constant
 */
function mediaelementjs_get_final_display_type($url)
{
    global $CFG;

    if ($url->display != RESOURCELIB_DISPLAY_AUTO)
    {
        return $url->display;
    }

    // detect links to local moodle pages
    if (strpos($url->externalurl, $CFG->wwwroot) === 0)
    {
        if (strpos($url->externalurl, 'file.php') === false and strpos($url->externalurl, '.php') !== false )
        {
            // most probably our moodle page with navigation
            return RESOURCELIB_DISPLAY_OPEN;
        }
    }

    static $download = array('application/zip', 'application/x-tar', 'application/g-zip',     // binary formats
                             'application/pdf', 'text/html');  // these are known to cause trouble for external links, sorry
    static $embed    = array('image/gif', 'image/jpeg', 'image/png', 'image/svg+xml',         // images
                             'application/x-shockwave-flash', 'video/x-flv', 'video/x-ms-wm', // video formats
                             'video/quicktime', 'video/mpeg', 'video/mp4',
                             'audio/mp3', 'audio/x-realaudio-plugin', 'x-realaudio-plugin',   // audio formats,
                            );

    $mimetype = resourcelib_guess_url_mimetype($url->externalurl);
    $cloud_storage_mimetype = mediaelementjs_guess_cloud_storage_mimetype($url->externalurl);
    if ($cloud_storage_mimetype)
    {
        $mimetype = $cloud_storage_mimetype;
    }

    if (in_array($mimetype, $download))
    {
        return RESOURCELIB_DISPLAY_DOWNLOAD;
    }
    if (in_array($mimetype, $embed))
    {
        return RESOURCELIB_DISPLAY_EMBED;
    }

    // let the browser deal with it somehow
    return RESOURCELIB_DISPLAY_OPEN;
}

/**
 * Get the parameters that may be appended to URL
 * @param object $config url module config options
 * @return array array describing opt groups
 */
function mediaelementjs_get_variable_options($config) {
    global $CFG;

    $options = array();
    $options[''] = array('' => get_string('chooseavariable', 'mediaelementjs'));

    $options[get_string('course')] = array(
        'courseid'        => 'id',
        'coursefullname'  => get_string('fullnamecourse'),
        'courseshortname' => get_string('shortnamecourse'),
        'courseidnumber'  => get_string('idnumbercourse'),
        'coursesummary'   => get_string('summary'),
        'courseformat'    => get_string('format'),
    );

    $options[get_string('modulename', 'mediaelementjs')] = array(
        'urlinstance'     => 'id',
        'urlcmid'         => 'cmid',
        'urlname'         => get_string('name'),
        'urlidnumber'     => get_string('idnumbermod'),
    );

    $options[get_string('miscellaneous')] = array(
        'sitename'        => get_string('fullsitename'),
        'serverurl'       => get_string('serverurl', 'mediaelementjs'),
        'currenttime'     => get_string('time'),
        'lang'            => get_string('language'),
    );
    if (!empty($config->secretphrase))
    {
        $options[get_string('miscellaneous')]['encryptedcode'] = get_string('encryptedcode');
    }

    $options[get_string('user')] = array(
        'userid'          => 'id',
        'userusername'    => get_string('username'),
        'useridnumber'    => get_string('idnumber'),
        'userfirstname'   => get_string('firstname'),
        'userlastname'    => get_string('lastname'),
        'userfullname'    => get_string('fullnameuser'),
        'useremail'       => get_string('email'),
        'usericq'         => get_string('icqnumber'),
        'userphone1'      => get_string('phone').' 1',
        'userphone2'      => get_string('phone2').' 2',
        'userinstitution' => get_string('institution'),
        'userdepartment'  => get_string('department'),
        'useraddress'     => get_string('address'),
        'usercity'        => get_string('city'),
        'usertimezone'    => get_string('timezone'),
        'userurl'         => get_string('webpage'),
    );

    if ($config->rolesinparams)
    {
        $roles = get_all_roles();
        $roleoptions = array();
        foreach ($roles as $role)
        {
            $roleoptions['course'.$role->shortname] = get_string('yourwordforx', '', $role->name);
        }
        $options[get_string('roles')] = $roleoptions;
    }

    return $options;
}

/**
 * Get the parameter values that may be appended to URL
 * @param object $url module instance
 * @param object $cm
 * @param object $course
 * @param object $config module config options
 * @return array of parameter values
 */
function mediaelementjs_get_variable_values($url, $cm, $course, $config) {
    global $USER, $CFG;

    $site = get_site();

    $values = array (
        'courseid'        => $course->id,
        'coursefullname'  => format_string($course->fullname),
        'courseshortname' => $course->shortname,
        'courseidnumber'  => $course->idnumber,
        'coursesummary'   => $course->summary,
        'courseformat'    => $course->format,
        'lang'            => current_language(),
        'sitename'        => format_string($site->fullname),
        'serverurl'       => $CFG->wwwroot,
        'currenttime'     => time(),
        'urlinstance'     => $url->id,
        'urlcmid'         => $cm->id,
        'urlname'         => format_string($url->name),
        'urlidnumber'     => $cm->idnumber,
    );

    if (isloggedin())
    {
        $values['userid']          = $USER->id;
        $values['userusername']    = $USER->username;
        $values['useridnumber']    = $USER->idnumber;
        $values['userfirstname']   = $USER->firstname;
        $values['userlastname']    = $USER->lastname;
        $values['userfullname']    = fullname($USER);
        $values['useremail']       = $USER->email;
        $values['usericq']         = $USER->icq;
        $values['userphone1']      = $USER->phone1;
        $values['userphone2']      = $USER->phone2;
        $values['userinstitution'] = $USER->institution;
        $values['userdepartment']  = $USER->department;
        $values['useraddress']     = $USER->address;
        $values['usercity']        = $USER->city;
        $values['usertimezone']    = get_user_timezone_offset();
        $values['userurl']         = $USER->url;
    }

    // weak imitation of Single-Sign-On, for backwards compatibility only
    // NOTE: login hack is not included in 2.0 any more, new contrib auth plugin
    //       needs to be createed if somebody needs the old functionality!
    if (!empty($config->secretphrase))
    {
        $values['encryptedcode'] = url_get_encrypted_parameter($url, $config);
    }

    //hmm, this is pretty fragile and slow, why do we need it here??
    if ($config->rolesinparams)
    {
        $roles = get_all_roles();
        $coursecontext = get_context_instance(CONTEXT_COURSE, $course->id);
        $roles = role_fix_names($roles, $coursecontext, ROLENAME_ALIAS);
        foreach ($roles as $role)
        {
            $values['course'.$role->shortname] = $role->localname;
        }
    }

    return $values;
}

/**
 * BC internal function
 * @param object $url
 * @param object $config
 * @return string
 */
function mediaelementjs_get_encrypted_parameter($url, $config)
{
    global $CFG;

    if (file_exists("$CFG->dirroot/local/externserverfile.php"))
    {
        require_once("$CFG->dirroot/local/externserverfile.php");
        if (function_exists('extern_server_file'))
        {
            return extern_server_file($url, $config);
        }
    }
    return md5(getremoteaddr().$config->secretphrase);
}

/**
 * Optimised mimetype detection from general URL
 * @param $fullurl
 * @return string mimetype
 */
function mediaelementjs_guess_icon($fullurl)
{
    global $CFG;
    require_once("$CFG->libdir/filelib.php");

    if (substr_count($fullurl, '/') < 3 or substr($fullurl, -1) === '/')
    {
        // most probably default directory - index.php, index.html, etc.
        return 'f/web';
    }

    $icon = mimeinfo('icon', $fullurl);
    $icon = 'f/'.str_replace(array('.gif', '.png'), '', $icon);

    if ($icon === 'f/html' or $icon === 'f/unknown')
    {
        $icon = 'f/web';
    }

    return $icon;
}

// OVERWRITE 1 Insert
/**
 * Returns flash embedding html.
 * @param string $fullurl
 * @param string $title
 * @param string $clicktoopen
 * @return string html
 */
function resourcelib_embed_flash($fullurl, $title, $clicktoopen) {
    if (preg_match('/[#\?]d=([\d]{1,4}%?)x([\d]{1,4}%?)/', $fullurl, $matches)) {
        $width    = $matches[1];
        $height   = $matches[2];
    } else {
        $width    = 400;
        $height   = 300;
    }

    $code = <<<EOT
<div class="resourcecontent resourceswf">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="$width" height="$height">
    <param name="movie" value="$fullurl" />
    <param name="autoplay" value="true" />
    <param name="loop" value="true" />
    <param name="controller" value="true" />
    <param name="scale" value="aspect" />
    <param name="base" value="." />
<!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="$fullurl" width="$width" height="$height">
      <param name="controller" value="true" />
      <param name="autoplay" value="true" />
      <param name="loop" value="true" />
      <param name="scale" value="aspect" />
      <param name="base" value="." />
<!--<![endif]-->
$clicktoopen
<!--[if !IE]>-->
    </object>
<!--<![endif]-->
  </object>
</div>
EOT;

    return $code;
}
// END OVERWRITE 1