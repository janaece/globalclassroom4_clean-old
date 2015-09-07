<?php
/**
 * Course Profile
 *
 * @copyright &copy; 2012 GlobalClassroom Inc.
 * @author Ron Stewart
 */

require('../../config.php');
require_once("$CFG->dirroot/blocks/course_profile/edit_form.php");
$CFG->current_app->requireLogin();
$courseid = required_param( 'courseid', PARAM_INT );
global $COURSE, $PAGE;

//  Load the course
$course = $DB->get_record('course', array('id' => $courseid));
$COURSE = $course;
$context = get_context_instance(CONTEXT_COURSE, $courseid);
require_capability('block/course_profile:edit', $context);

$PAGE->set_context($context);
$PAGE->set_url('/blocks/course_profile/edit.php', array('courseid' => $courseid));

$title = get_string('editcourseprofile','block_course_profile');
$link[] = array('name' => $title,'link' => '','type' => 'misc');
$link = build_navigation($link);
print_header_simple($title, $title, $link);

$mdl_course = new GcrMdlCourse($course, $CFG->current_app);

// Build list of potential instructors
$teacher_list = $mdl_course->getMdlInstructors();
$teacher_array = array();
foreach ($teacher_list as $mdl_user_obj)
{
    $teacher = $mdl_user_obj->getObject(); 
    $teacher_array[$teacher->id] = $teacher->firstname . ' ' . $teacher->lastname . ' (' 
            . $teacher->email . ')'; 
}
asort($teacher_array);

$mform = new block_course_profile_form(null, array('teacher_list' => $teacher_array, 
    'courseid' => $courseid));
if ($mform->is_cancelled()) 
{
    redirect(new moodle_url('/course/view.php?id=' . $courseid));
} 
else if ($formdata = $mform->get_data()) 
{
    $fs = get_file_storage();
    $filename = $mform->get_new_filename('userfile');
    $old_file = $fs->get_file($context->id, 'block_course_profile', 'courseicon',
                      0, '/', $courseid);
    if ($filename !== false) 
    {   
        if ($old_file)
        {
            $old_file->delete();
        }
        $new_file = $mform->save_stored_file('userfile', $context->id, 'block_course_profile', 'courseicon', 0, '/', $courseid);
    }
    $courseicon = '';
    if ($new_file || $old_file)
    {
        $courseicon = $courseid;
    }
    $instructorid = (isset($formdata->instructorid)) ? $formdata->instructorid : 0;
    $data_to_save = array(  'instructorid' => $instructorid, 
                            'courseid' => $courseid, 
                            'courseicon' => $courseicon);
    $CFG->current_app->upsertIntoMdlTable('block_course_profile', 
            $data_to_save, array('courseid' => $courseid));
    rebuild_course_cache($courseid);
    redirect(new moodle_url('/course/view.php?id=' . $courseid));
}
echo $OUTPUT->box_start('generalbox');

// display current course icon
$course_list_item = new GcrCourseListItem($mdl_course);
$img_src = $course_list_item->getCourseIconUrl();
?>
<div class="gc_course_list_item_icon" style="float:left;"><img src="<?php print $img_src; ?>" /></div>
<div style="float:left;width:65%;margin-left:40px">
<h2>Course Profile Information</h2> 
<p>Improve the visibility of your course by uploading a custom image (120px by 120px). 
    This image will be displayed in the course catalog, and inside the course.
    If you do not wish to add a custom image at this time, a default course image will be used.</p>
</div>
<div style="clear:both"></div>
<?php
$mform->display();
echo $OUTPUT->box_end();
echo $OUTPUT->footer();

?>