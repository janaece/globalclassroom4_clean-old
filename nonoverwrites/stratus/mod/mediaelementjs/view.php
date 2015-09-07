<?php

require('../../config.php');
require_once("$CFG->dirroot/mod/mediaelementjs/locallib.php");
require_once($CFG->libdir . '/completionlib.php');

$id       = optional_param('id', 0, PARAM_INT);        // Course module ID
$u        = optional_param('u', 0, PARAM_INT);         // URL instance id
$redirect = optional_param('redirect', 0, PARAM_BOOL);

if ($u)
{  // Two ways to specify the module
    $url = $DB->get_record('mediaelementjs', array('id'=>$u), '*', MUST_EXIST);
    $cm = get_coursemodule_from_instance('mediaelementjs', $url->id, $url->course, false, MUST_EXIST);

}
else
{
    $cm = get_coursemodule_from_id('mediaelementjs', $id, 0, false, MUST_EXIST);
    $url = $DB->get_record('mediaelementjs', array('id'=>$cm->instance), '*', MUST_EXIST);
}

$course = $DB->get_record('course', array('id'=>$cm->course), '*', MUST_EXIST);

require_course_login($course, true, $cm);
$context = get_context_instance(CONTEXT_MODULE, $cm->id);
require_capability('mod/mediaelementjs:view', $context);

add_to_log($course->id, 'mediaelementjs', 'view', 'view.php?id='.$cm->id, $url->id, $cm->id);

// Update 'viewed' state if required by completion system
$completion = new completion_info($course);
$completion->set_module_viewed($cm);

$PAGE->set_url('/mod/mediaelementjs/view.php', array('id' => $cm->id));

if ($redirect)
{
    // coming from course page or url index page,
    // the redirection is needed for completion tracking and logging
    $fullurl = mediaelementjs_get_full_url($url, $cm, $course);
    redirect(str_replace('&amp;', '&', $fullurl));
}

switch (mediaelementjs_get_final_display_type($url))
{
    case RESOURCELIB_DISPLAY_EMBED:
        mediaelementjs_display_embed($url, $cm, $course);
        break;
    case RESOURCELIB_DISPLAY_FRAME:
        mediaelementjs_display_frame($url, $cm, $course);
        break;
    default:
        mediaelementjs_print_workaround($url, $cm, $course);
        break;
}
