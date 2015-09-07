<?php
/*
 * Called by event handling on course deletion to tidy up database
 * @param $eventdata object event information including course id
 * @return SQL set or false on fail
 */
function course_delete($eventdata)
{
    global $DB;
    $res = $DB->delete_records('block_course_profile',
            array('courseid' => $eventdata->id));
    if ($res === false)
    {
        return $res;
    }
    return true;
}
function block_course_profile_pluginfile($course, $birecord_or_cm, $context, $filearea, $args, $forcedownload, array $options=array()) 
{
    global $SCRIPT;
    if ($context->contextlevel != CONTEXT_COURSE) 
    {
        send_file_not_found();
    }
    if ($filearea !== 'courseicon') 
    {
        send_file_not_found();
    }
    $fs = get_file_storage();

    $file = $fs->get_file($context->id, 'block_course_profile', 'courseicon', 0, '/', $course->id);
    if (!$file or $file->is_directory()) 
    {
        send_file_not_found();
    }

    session_get_instance()->write_close();
    send_stored_file($file, 60*60, 0, false, $options);
}
?>