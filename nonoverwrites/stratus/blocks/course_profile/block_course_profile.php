<?php

class block_course_profile extends block_list
{
    function init()
    {
        $this->title = get_string('courseprofile','block_course_profile');
    }

    function applicable_formats()
    {
        return array('course' => true);
    }
    function instance_allow_multiple() 
    {
        return false;
    }

    function has_config()
    {
        return true; // config only for review part
    }

    function copyFromBlock(GcrMdlBlockCourseProfile $parent_block, GcrMdlCourse $course)
    {
        $obj = $parent_block->getObject();
        
        // If the instructor set on the parent block also has a teaching role
        // on this course, copy that instructorid. Otherwise, set it to the
        // default instructor of this course.
        $instructorid = 0;
        $courseid = $course->getObject()->id;
        $course_context_id = $course->getContext()->id;
        $instructor = $parent_block->getApp()->getUserById($obj->instructorid);
        if ($instructor && $course->isInstructor($instructor))
        {
            $instructorid = $obj->instructorid;
        }
        else
        {
            $instructor = $course->getInstructor();
            if ($instructor)
            {
                $instructorid = $instructor->getObject()->id;
            }
            else
            {
                return false;
            }
        }
        $fs = get_file_storage();
        
        $existing_file = $fs->get_file($course_context_id, 'block_course_profile', 'courseicon',
                      0, '/', $courseid);
        if ($existing_file)
        {
            $existing_file->delete();
        }
        
        $file = $fs->get_file($parent_block->getContext()->id, 'block_course_profile', 'courseicon',
                      0, '/', $obj->courseid);
        $file_record = array(   'contextid' => $course_context_id, 
                                'component' => 'block_course_profile', 
                                'filearea' => 'courseicon', 
                                'itemid' => 0,
                                'filepath'=> '/', 
                                'filename' => $courseid, 
                                'userid' => $instructorid);
        $fs->create_file_from_storedfile($file_record, $file);
        $data = array(  'courseid' => $courseid,
                        'instructorid' => $instructorid,
                        'courseicon' => $obj->courseicon);
        $course->getApp()->upsertIntoMdlTable('block_course_profile', $data, 
            array('courseid' => $courseid));
    }
    function get_content()
    {
        global $CFG, $COURSE, $USER, $DB;

        if ($this->content !== NULL)
        {
            return $this->content;
        }
        $context = get_context_instance(CONTEXT_COURSE, $COURSE->id);
        $this->content = new stdClass;
        $this->content->items = array();
        $this->content->icons = array();
        $course = new GcrMdlCourse($COURSE, $CFG->current_app);
        $can_edit = has_capability('block/course_profile:edit', $context);
        $block_course_profile = $course->getBlockCourseProfile();
        if ((!$block_course_profile) && $can_edit)
        {
            $parent_block_course_profile = $course->getRepresentativeBlockCourseProfile();
            if ($parent_block_course_profile)
            {
                $this->copyFromBlock($parent_block_course_profile, $course);
                $block_course_profile = $course->getBlockCourseProfile();
            }
        }
        if (!$block_course_profile)
        {
            if ($can_edit)
            {    
                redirect($CFG->wwwroot . '/blocks/course_profile/edit.php?courseid='. $COURSE->id);  
            }
            else
            {
                return false;
            }             
        }
        $img_src = $block_course_profile->getCourseIconUrl();
        
        $instructor_text = 'Instructor: None';
        $instructor = $block_course_profile->getInstructor();
        if ($instructor)
        {
            $user = $instructor->getUserOnInstitution();
            $institution = $CFG->current_app->getInstitution();
            if ($user && $user->getApp()->getShortName() == $institution->getShortName())
            {
                $user_obj = $user->getObject();
                $user_profile_url = $institution->getAppUrl() . 'user/view.php?id=' . $user_obj->id;
            }
            else
            {
                $user = $instructor;
                $user_obj = $instructor->getObject();
                $user_profile_url = $CFG->current_app->getAppUrl() . '/user/view?id=' . $user_obj->id . '&course=' . $COURSE->id;
            }
            $instructor_text = 'Instructor: <a href="' . $user_profile_url . '">' . $user->getFullnameString() . '</a>';
        }
        
        $img = '<div class="gc_course_list_item_icon"><img src="' . $img_src . '" /></div>';
        $this->content->items[] = $img;
        $this->content->items[] = $instructor_text;
        if ($can_edit)
        {
            $this->content->items[] = '<a href="' . $CFG->wwwroot . '/blocks/course_profile/edit.php?courseid='. $COURSE->id . '"><button style="cursor:pointer">Edit</button></a>';
        }
        return $this->content;
    }
}
?>