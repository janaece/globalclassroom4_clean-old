<?php

defined('MOODLE_INTERNAL') || die;

/**
 * List of features supported in URL module
 * @param string $feature FEATURE_xx constant for requested feature
 * @return mixed True if module supports feature, false if not, null if doesn't know
 */
function mediaelementjs_supports($feature)
{
    switch($feature)
    {
        case FEATURE_MOD_ARCHETYPE:           return MOD_ARCHETYPE_RESOURCE;
        case FEATURE_GROUPS:                  return false;
        case FEATURE_GROUPINGS:               return false;
        case FEATURE_GROUPMEMBERSONLY:        return true;
        case FEATURE_MOD_INTRO:               return true;
        case FEATURE_COMPLETION_TRACKS_VIEWS: return true;
        case FEATURE_GRADE_HAS_GRADE:         return false;
        case FEATURE_GRADE_OUTCOMES:          return false;
        case FEATURE_BACKUP_MOODLE2:          return true;
        default: return null;
    }
}

/**
 * Returns all other caps used in module
 * @return array
 */
function mediaelementjs_get_extra_capabilities()
{
    return array('moodle/site:accessallgroups');
}

/**
 * This function is used by the reset_course_userdata function in moodlelib.
 * @param $data the data submitted from the reset course.
 * @return array status array
 */
function mediaelementjs_reset_userdata($data)
{
    return array();
}

/**
 * List of view style log actions
 * @return array
 */
function mediaelementjs_get_view_actions()
{
    return array('view', 'view all');
}

/**
 * List of update style log actions
 * @return array
 */
function mediaelementjs_get_post_actions()
{
    return array('update', 'add');
}

/**
 * Add url instance.
 * @param object $data
 * @param object $mform
 * @return int new url instance id
 */
function mediaelementjs_add_instance($data, $mform)
{
    global $DB;

    $parameters = array();
    for ($i=0; $i < 100; $i++)
    {
        $parameter = "parameter_$i";
        $variable  = "variable_$i";
        if (empty($data->$parameter) or empty($data->$variable))
        {
            continue;
        }
        $parameters[$data->$parameter] = $data->$variable;
    }
    $data->parameters = serialize($parameters);

    $displayoptions = array();
    if ($data->display == RESOURCELIB_DISPLAY_POPUP)
    {
        $displayoptions['popupwidth']  = $data->popupwidth;
        $displayoptions['popupheight'] = $data->popupheight;
    }
    if (in_array($data->display, array(RESOURCELIB_DISPLAY_AUTO, RESOURCELIB_DISPLAY_EMBED, RESOURCELIB_DISPLAY_FRAME)))
    {
        $displayoptions['printheading'] = (int)!empty($data->printheading);
        $displayoptions['printintro']   = (int)!empty($data->printintro);
    }
    $data->displayoptions = serialize($displayoptions);

    if (!empty($data->externalurl) && (strpos($data->externalurl, '://') === false) && (strpos($data->externalurl, '/', 0) === false))
    {
        $data->externalurl = 'http://'.$data->externalurl;
    }

    $data->timemodified = time();
    $data->id = $DB->insert_record('mediaelementjs', $data);

    return $data->id;
}

/**
 * Update url instance.
 * @param object $data
 * @param object $mform
 * @return bool true
 */
function mediaelementjs_update_instance($data, $mform)
{
    global $CFG, $DB;

    $parameters = array();
    for ($i=0; $i < 100; $i++)
    {
        $parameter = "parameter_$i";
        $variable  = "variable_$i";
        if (empty($data->$parameter) or empty($data->$variable))
        {
            continue;
        }
        $parameters[$data->$parameter] = $data->$variable;
    }
    $data->parameters = serialize($parameters);

    $displayoptions = array();
    if ($data->display == RESOURCELIB_DISPLAY_POPUP)
    {
        $displayoptions['popupwidth']  = $data->popupwidth;
        $displayoptions['popupheight'] = $data->popupheight;
    }
    if (in_array($data->display, array(RESOURCELIB_DISPLAY_AUTO, RESOURCELIB_DISPLAY_EMBED, RESOURCELIB_DISPLAY_FRAME)))
    {
        $displayoptions['printheading'] = (int)!empty($data->printheading);
        $displayoptions['printintro']   = (int)!empty($data->printintro);
    }
    $data->displayoptions = serialize($displayoptions);

    if (!empty($data->externalurl) && (strpos($data->externalurl, '://') === false) && (strpos($data->externalurl, '/', 0) === false))
    {
        $data->externalurl = 'http://'.$data->externalurl;
    }

    $data->timemodified = time();
    $data->id           = $data->instance;

    $DB->update_record('mediaelementjs', $data);

    return true;
}

/**
 * Delete url instance.
 * @param int $id
 * @return bool true
 */
function mediaelementjs_delete_instance($id)
{
    global $DB;

    if (!$url = $DB->get_record('mediaelementjs', array('id'=>$id)))
    {
        return false;
    }

    // note: all context files are deleted automatically
    $DB->delete_records('mediaelementjs', array('id'=>$url->id));

    return true;
}

/**
 * Return use outline
 * @param object $course
 * @param object $user
 * @param object $mod
 * @param object $url
 * @return object|null
 */
function mediaelementjs_user_outline($course, $user, $mod, $mediaelementjs)
{
    global $DB;

    if ($logs = $DB->get_records('log', array('userid'=>$user->id, 'module'=>'mediaelementjs',
                                              'action'=>'view', 'info'=>$mediaelementjs->id), 'time ASC'))
    {
        $numviews = count($logs);
        $lastlog = array_pop($logs);

        $result = new stdClass();
        $result->info = get_string('numviews', '', $numviews);
        $result->time = $lastlog->time;

        return $result;
    }
    return NULL;
}

/**
 * Return use complete
 * @param object $course
 * @param object $user
 * @param object $mod
 * @param object $url
 */
function mediaelementjs_user_complete($course, $user, $mod, $mediaelementjs)
{
    global $CFG, $DB;

    if ($logs = $DB->get_records('log', array('userid'=>$user->id, 'module'=>'mediaelementjs',
                                              'action'=>'view', 'info'=>$mediaelementjs->id), 'time ASC')) {
        $numviews = count($logs);
        $lastlog = array_pop($logs);

        $strmostrecently = get_string('mostrecently');
        $strnumviews = get_string('numviews', '', $numviews);

        echo "$strnumviews - $strmostrecently ".userdate($lastlog->time);

    } else {
        print_string('neverseen', 'mediaelementjs');
    }
}

/**
 * Returns the users with data in one url
 *
 * @todo: deprecated - to be deleted in 2.2
 *
 * @param int $urlid
 * @return bool false
 */
function mediaelementjs_get_participants($mediaelementjsid)
{
    return false;
}

/**
 * Given a course_module object, this function returns any
 * "extra" information that may be needed when printing
 * this activity in a course listing.
 *
 * See {@link get_array_of_activities()} in course/lib.php
 *
 * @param object $coursemodule
 * @return object info
 */
function mediaelementjs_get_coursemodule_info($coursemodule)
{
    global $CFG, $DB;
    require_once("$CFG->dirroot/mod/mediaelementjs/locallib.php");

    if (!$mediaelementjs = $DB->get_record('mediaelementjs', array('id'=>$coursemodule->instance), 'id, name, display, displayoptions, externalurl, parameters'))
    {
        return NULL;
    }

    $info = new stdClass();
    $info->name = $mediaelementjs->name;

    //note: there should be a way to differentiate links from normal resources
    $info->icon = mediaelementjs_guess_icon($mediaelementjs->externalurl);

    $display = mediaelementjs_get_final_display_type($mediaelementjs);

    if ($display == RESOURCELIB_DISPLAY_POPUP)
    {
        $fullurl = "$CFG->wwwroot/mod/mediaelementjs/view.php?id=$coursemodule->id&amp;redirect=1";
        $options = empty($mediaelementjs->displayoptions) ? array() : unserialize($mediaelementjs->displayoptions);
        $width  = empty($options['popupwidth'])  ? 620 : $options['popupwidth'];
        $height = empty($options['popupheight']) ? 450 : $options['popupheight'];
        $wh = "width=$width,height=$height,toolbar=no,location=no,menubar=no,copyhistory=no,status=no,directories=no,scrollbars=yes,resizable=yes";
        $info->extra = "onclick=\"window.open('$fullurl', '', '$wh'); return false;\"";

    }
    else if ($display == RESOURCELIB_DISPLAY_NEW)
    {
        $fullurl = "$CFG->wwwroot/mod/mediaelementjs/view.php?id=$coursemodule->id&amp;redirect=1";
        $info->extra = "onclick=\"window.open('$fullurl'); return false;\"";

    }
    else if ($display == RESOURCELIB_DISPLAY_OPEN)
    {
        $fullurl = "$CFG->wwwroot/mod/mediaelementjs/view.php?id=$coursemodule->id&amp;redirect=1";
        $info->extra = "onclick=\"window.location.href ='$fullurl';return false;\"";
    }

    return $info;
}

/**
 * This function extends the global navigation for the site.
 * It is important to note that you should not rely on PAGE objects within this
 * body of code as there is no guarantee that during an AJAX request they are
 * available
 *
 * @param navigation_node $navigation The url node within the global navigation
 * @param stdClass $course The course object returned from the DB
 * @param stdClass $module The module object returned from the DB
 * @param stdClass $cm The course module instance returned from the DB
 */
function mediaelementjs_extend_navigation($navigation, $course, $module, $cm)
{
    /**
     * This is currently just a stub so that it can be easily expanded upon.
     * When expanding just remove this comment and the line below and then add
     * you content.
     */
    $navigation->nodetype = navigation_node::NODETYPE_LEAF;
}

/**
 * Return a list of page types
 * @param string $pagetype current page type
 * @param stdClass $parentcontext Block's parent context
 * @param stdClass $currentcontext Current context of block
 */
function mediaelementjs_page_type_list($pagetype, $parentcontext, $currentcontext)
{
    $module_pagetype = array('mod-mediaelementjs-*'=>get_string('page-mod-mediaelementjs-x', 'mediaelementjs'));
    return $module_pagetype;
}