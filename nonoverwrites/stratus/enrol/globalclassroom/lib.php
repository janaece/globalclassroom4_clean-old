<?php

// Global Classroom Enrolment Plugin
// Ron Stewart
// May 19, 2011

defined('MOODLE_INTERNAL') || die();

class enrol_globalclassroom_plugin extends enrol_plugin
{

    /**
     * Returns optional enrolment information icons.
     *
     * This is used in course list for quick overview of enrolment options.
     *
     * We are not using single instance parameter because sometimes
     * we might want to prevent icon repetition when multiple instances
     * of one type exist. One instance may also produce several icons.
     *
     * @param array $instances all enrol instances of this type in one course
     * @return array of pix_icon
     */
    public function get_info_icons(array $instances)
    {
        $key = false;
        $nokey = false;
        $icons = array();
        foreach ($instances as $instance)
        {
            if ($instance->password or $instance->customint1)
            {
                $key = true;
            }
            else
            {
                $nokey = true;
            }
            if ($instance->cost > 0)
            {
                $icons[] = new pix_icon('icon', get_string('pluginname', 'enrol_globalclassroom'), 'enrol_globalclassroom');
            }
        }
        if ($nokey)
        {
            $icons[] = new pix_icon('withoutkey', get_string('pluginname', 'enrol_globalclassroom'), 'enrol_globalclassroom');
        }
        if ($key)
        {
            $icons[] = new pix_icon('withkey', get_string('pluginname', 'enrol_globalclassroom'), 'enrol_globalclassroom');
        }
        return $icons;
    }
    /**
     * Returns localised name of enrol instance
     *
     * @param object $instance (null is accepted too)
     * @return string
     */
    public function get_instance_name($instance)
    {
        global $DB;

        if (empty($instance->name))
        {
            if (!empty($instance->roleid) and $role = $DB->get_record('role', array('id'=>$instance->roleid)))
            {
                $role = ' (' . role_get_name($role, get_context_instance(CONTEXT_COURSE, $instance->courseid)) . ')';
            }
            else
            {
                $role = '';
            }
            $enrol = $this->get_name();
            return get_string('pluginname', 'enrol_'.$enrol) . $role;
        }
        else
        {
            return format_string($instance->name);
        }
    }

    public function roles_protected()
    {
        // users with role assign cap may tweak the roles later
        return false;
    }

    public function allow_unenrol(stdClass $instance)
    {
        // users with unenrol cap may unenrol other users manually - requires enrol/paypal:unenrol
        return true;
    }

    public function send_welcome_message($instance, $user)
    {
        if ($instance->customint4)
        {
            $this->email_welcome_message($instance, $user);
        }
    }
    public function allow_manage(stdClass $instance)
    {
        // users with manage cap may tweak period and status - requires enrol/paypal:manage
        return true;
    }

    public function show_enrolme_link(stdClass $instance)
    {
        return ($instance->status == ENROL_INSTANCE_ENABLED);
    }

    /**
     * Sets up navigation entries.
     *
     * @param object $instance
     * @return void
     */
    public function add_course_navigation($instancesnode, stdClass $instance)
    {
        if ($instance->enrol !== 'globalclassroom')
        {
             throw new coding_exception('Invalid enrol instance type!');
        }

        $context = get_context_instance(CONTEXT_COURSE, $instance->courseid);
        if (has_capability('enrol/globalclassroom:config', $context))
        {
            $managelink = new moodle_url('/enrol/globalclassroom/edit.php', array('courseid'=>$instance->courseid, 'id'=>$instance->id));
            $instancesnode->add($this->get_instance_name($instance), $managelink, navigation_node::TYPE_SETTING);
        }
    }

    /**
     * Returns edit icons for the page with list of instances
     * @param stdClass $instance
     * @return array
     */
    public function get_action_icons(stdClass $instance)
    {
        global $OUTPUT;

        if ($instance->enrol !== 'globalclassroom')
        {
            throw new coding_exception('invalid enrol instance!');
        }
        $context = get_context_instance(CONTEXT_COURSE, $instance->courseid);

        $icons = array();

        if (has_capability('enrol/globalclassroom:config', $context))
        {
            $editlink = new moodle_url("/enrol/globalclassroom/edit.php", array('courseid'=>$instance->courseid, 'id'=>$instance->id));
            $icons[] = $OUTPUT->action_icon($editlink, new pix_icon('i/edit', get_string('edit'), 'core', array('class'=>'icon')));
        }

        return $icons;
    }

    /**
     * Returns link to page which may be used to add new instance of enrolment plugin in course.
     * @param int $courseid
     * @return moodle_url page url
     */
    public function get_newinstance_link($courseid) {
        $context = get_context_instance(CONTEXT_COURSE, $courseid, MUST_EXIST);

        if (!has_capability('moodle/course:enrolconfig', $context) or !has_capability('enrol/globalclassroom:config', $context)) {
            return NULL;
        }

        // multiple instances supported - different cost for different roles
        return new moodle_url('/enrol/globalclassroom/edit.php', array('courseid'=>$courseid));
    }

    /**
     * Gets an array of the user enrolment actions
     *
     * @param course_enrolment_manager $manager
     * @param stdClass $ue A user enrolment object
     * @return array An array of user_enrolment_actions
     */
    public function get_user_enrolment_actions(course_enrolment_manager $manager, $ue) {
        $actions = array();
        $context = $manager->get_context();
        $instance = $ue->enrolmentinstance;
        $params = $manager->get_moodlepage()->url->params();
        $params['ue'] = $ue->id;
        if ($this->allow_unenrol($instance) && has_capability("enrol/globalclassroom:unenrol", $context)) {
            $url = new moodle_url('/enrol/globalclassroom/unenroluser.php', $params);
            $actions[] = new user_enrolment_action(new pix_icon('t/delete', ''), get_string('unenrol', 'enrol'), $url, array('class'=>'unenrollink', 'rel'=>$ue->id));
        }
        if ($this->allow_manage($instance) && has_capability("enrol/globalclassroom:manage", $context)) {
            $url = new moodle_url('/enrol/globalclassroom/editenrolment.php', $params);
            $actions[] = new user_enrolment_action(new pix_icon('t/edit', ''), get_string('edit'), $url, array('class'=>'editenrollink', 'rel'=>$ue->id));
        }
        return $actions;
    }

    protected function email_welcome_message($instance, $user) {
        global $CFG, $DB;

        $course = $DB->get_record('course', array('id'=>$instance->courseid), '*', MUST_EXIST);

        $a = new stdClass();
        $a->coursename = format_string($course->fullname);
        $a->profileurl = "$CFG->wwwroot/user/view.php?id=$user->id&course=$course->id";

        if (trim($instance->customtext1) !== '') {
            $message = $instance->customtext1;
        } else {
            $message = get_string('welcometocoursetext', 'enrol_globalclassroom', $a);
        }
        $message = str_replace('{$a->coursename}', $a->coursename, $message);
        $message = str_replace('{$a->profileurl}', $a->profileurl, $message);
        $subject = get_string('welcometocourse', 'enrol_globalclassroom', format_string($course->fullname));

        $context = get_context_instance(CONTEXT_COURSE, $course->id);
        $rusers = array();
        if (!empty($CFG->coursecontact)) {
            $croles = explode(',', $CFG->coursecontact);
            $rusers = get_role_users($croles, $context, true, '', 'r.sortorder ASC, u.lastname ASC');
        }
        if ($rusers) {
            $contact = reset($rusers);
        } else {
            $contact = get_admin();
        }

        //directly emailing welcome message rather than using messaging
        email_to_user($user, $contact, $subject, $message);
    }

    /**
     * Creates course enrol form, checks if form submitted
     * and enrols user if necessary. It can also redirect.
     *
     * @param stdClass $instance
     * @return string html text, usually a form in a text box
     */
    function enrol_page_hook(stdClass $instance)
    {
        global $CFG, $USER, $OUTPUT, $PAGE, $DB;

        ob_start();

        if ($DB->record_exists('user_enrolments', array('userid'=>$USER->id, 'enrolid'=>$instance->id)))
        {
            return ob_get_clean();
        }

        if ($instance->enrolstartdate != 0 && $instance->enrolstartdate > time())
        {
            return ob_get_clean();
        }

        if ($instance->enrolenddate != 0 && $instance->enrolenddate < time())
        {
            return ob_get_clean();
        }

        $course = $DB->get_record('course', array('id'=>$instance->courseid));

        $strloginto = get_string("loginto", "", $course->shortname);
        $strcourses = get_string("courses");

        $context = get_context_instance(CONTEXT_COURSE, $course->id);
        // Pass $view=true to filter hidden caps if the user cannot see them
        if ($users = get_users_by_capability($context, 'moodle/course:update', 'u.*', 'u.id ASC',
                                             '', '', '', '', false, true))
        {
            $users = sort_by_roleassignment_authority($users, $context);
            $teacher = array_shift($users);
        }
        else
        {
            $teacher = false;
        }

        if ( (float) $instance->cost <= 0 )
        {
            $cost = (float) $this->get_config('cost');
        }
        else
        {
            $cost = (float) $instance->cost;
        }
        if ($instance->customint3 > 0)
        {
            // max enrol limit specified
            $count = $DB->count_records('user_enrolments', array('enrolid'=>$instance->id));
            if ($count >= $instance->customint3)
            {
                // bad luck, no more enrolments here
                return $OUTPUT->notification(get_string('maxenrolledreached', 'enrol_globalclassroom'));
            }
        }

        print '<div class="mdl-align"><h5>' . $course->fullname . '</h5>' . $course->summary . '</div>';

        if (abs($cost) < 0.01 || ($instance->customchar1 > 0 && $CFG->current_app->getCurrentUser()->isMember()))
        {
            require_once("$CFG->dirroot/enrol/globalclassroom/locallib.php");
            require_once("$CFG->dirroot/group/lib.php");

            $form = new enrol_globalclassroom_enrol_form(NULL, $instance);
            $instanceid = optional_param('instance', 0, PARAM_INT);

            if ($instance->password) {
                if ($instance->id == $instanceid)
                {
                    if ($data = $form->get_data())
                    {
                        $enrol = enrol_get_plugin('globalclassroom');
                        $CFG->current_app->enrolUserInCourse($course, $USER);
                        add_to_log($instance->courseid, 'course', 'enrol', '../enrol/users.php?id='.$instance->courseid, $instance->courseid); //there should be userid somewhere!

                        if ($instance->password and $instance->customint1 and $data->enrolpassword !== $instance->password) {
                            // it must be a group enrolment, let's assign group too
                            $groups = $DB->get_records('groups', array('courseid'=>$instance->courseid), 'id', 'id, enrolmentkey');
                            foreach ($groups as $group)
                            {
                                if (empty($group->enrolmentkey))
                                {
                                    continue;
                                }
                                if ($group->enrolmentkey === $data->enrolpassword)
                                {
                                    groups_add_member($group->id, $USER->id);
                                    break;
                                }
                            }
                        }
                    }
                }
                $form->display();
            } else {
                $CFG->current_app->enrolUserInCourse($course, $USER);
                redirect($CFG->current_app->getAppUrl() . '/course/view.php?id=' . 
                        $course->id);
            }
        }
        else
        {

            if (isguestuser())
            { // force login only for guest user, not real users with guest role
                if (empty($CFG->loginhttps))
                {
                    $wwwroot = $CFG->wwwroot;
                }
                else
                {
                    // This actually is not so secure ;-), 'cause we're
                    // in unencrypted connection...
                    $wwwroot = str_replace("http://", "https://", $CFG->wwwroot);
                }
                echo '<div class="mdl-align"><p>'.get_string('paymentrequired').'</p>';
                echo '<p><b>'.get_string('cost') . '$' . $cost . '</b></p>';
                echo '<p><a href="'.$wwwroot.'/login/">'.get_string('loginsite').'</a></p>';
                echo '</div>';
            }
            else
            {
                //Sanitise some fields before building the PayPal form
                $coursefullname  = format_string($course->fullname, true, array('context'=>$context));
                $courseshortname = $course->shortname;
                $userfullname    = fullname($USER);
                $userfirstname   = $USER->firstname;
                $userlastname    = $USER->lastname;
                $useraddress     = $USER->address;
                $usercity        = $USER->city;
                $instancename    = $this->get_instance_name($instance);

                include($CFG->dirroot.'/enrol/globalclassroom/enrol.html');
            }

        }

        return $OUTPUT->box(ob_get_clean());
    }

    /**
     * Called after updating/inserting course.
     *
     * @param bool $inserted true if course just inserted
     * @param object $course
     * @param object $data form data
     * @return void
     */
    public function course_updated($inserted, $course, $data)
    {
        if ($inserted)
        {
            if ($this->get_config('defaultenrol'))
            {
                $this->add_default_instance($course);
            }
        }
        else
        {
            // bad luck, user can not change anything
        }
    }

    /**
     * Add new instance of enrol plugin with default settings.
     * @param object $course
     * @return int id of new instance
     */
    public function add_default_instance($course)
    {
        $fields = array('status'=>$this->get_config('status'), 'roleid' => $this->get_config('roleid', 0));

        if ($this->get_config('requirepassword'))
        {
            $fields['password'] = generate_password(20);
        }
        return $this->add_instance($course, $fields);
    }

    public function cron()
    {
        global $DB;

        if (!enrol_is_enabled('globalclassroom')) {
            return;
        }

        $plugin = enrol_get_plugin('globalclassroom');

        $now = time();

        //note: the logic guarantees that user logged in at least once (=== u.lastaccess set)
        //      and that user accessed course at least once too (=== user_lastaccess record exists)

        // first deal with users that did not log in for a really long time
        $sql = "SELECT e.*, ue.userid
                  FROM {user_enrolments} ue
                  JOIN {enrol} e ON (e.id = ue.enrolid AND e.enrol = 'globalclassroom' AND e.customint2 > 0)
                  JOIN {user} u ON u.id = ue.userid
                 WHERE :now - u.lastaccess > e.customint2";
        $rs = $DB->get_recordset_sql($sql, array('now'=>$now));
        foreach ($rs as $instance) {
            $userid = $instance->userid;
            unset($instance->userid);
            $plugin->unenrol_user($instance, $userid);
            mtrace("unenrolling user $userid from course $instance->courseid as they have did not log in for $instance->customint2 days");
        }
        $rs->close();

        // now unenrol from course user did not visit for a long time
        $sql = "SELECT e.*, ue.userid
                  FROM {user_enrolments} ue
                  JOIN {enrol} e ON (e.id = ue.enrolid AND e.enrol = 'globalclassroom' AND e.customint2 > 0)
                  JOIN {user_lastaccess} ul ON (ul.userid = ue.userid AND ul.courseid = e.courseid)
                 WHERE :now - ul.timeaccess > e.customint2";
        $rs = $DB->get_recordset_sql($sql, array('now'=>$now));
        foreach ($rs as $instance) {
            $userid = $instance->userid;
            unset($instance->userid);
            $plugin->unenrol_user($instance, $userid);
            mtrace("unenrolling user $userid from course $instance->courseid as they have did not access course for $instance->customint2 days");
        }
        $rs->close();

        flush();
    }

}
/**
 * Indicates API features that the enrol plugin supports.
 *
 * @param string $feature
 * @return mixed True if yes (some features may use other values)
 */
function enrol_globalclassroom_supports($feature) {
    switch($feature) {
        case ENROL_RESTORE_TYPE: return ENROL_RESTORE_EXACT;

        default: return null;
    }
}