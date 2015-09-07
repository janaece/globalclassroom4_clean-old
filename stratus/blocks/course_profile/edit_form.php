<?php

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/formslib.php");

class block_course_profile_form extends moodleform 
{
    function definition() 
    {
        global $CFG;
        $mform = $this->_form;
        
        $teacher_list = $this->_customdata['teacher_list'];
        $courseid = $this->_customdata['courseid'];
        $mform->addElement('filepicker', 'userfile', get_string('uploadcourseprofileimage', 'block_course_profile'), null, 
                array('maxbytes' => 1024 * 1024, 'accepted_types' => '*.png', '*.jpg', '*.gif','*.jpeg'));
        $mform->addElement('select', 'instructorid', 
                get_string('selectcourseprofileinstructor', 'block_course_profile'), $teacher_list);
        $mform->addElement('hidden', 'courseid', $courseid);
        $this->add_action_buttons(true, get_string('savechanges'));
        $course = $CFG->current_app->getCourse($courseid);
        $block_course_profile = $course->getBlockCourseProfile();
        if ($block_course_profile)
        {
            $obj = $block_course_profile->getObject();
            $mform->setDefault('instructorid', $obj->instructorid);
            $mform->setDefault('shortsummary', $obj->shortsummary);
        }
    }
}
