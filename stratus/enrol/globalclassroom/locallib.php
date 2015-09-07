<?php

// Global Classroom Enrolment Plugin
// Ron Stewart
// May 19, 2011

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/formslib.php");

class enrol_globalclassroom_enrol_form extends moodleform
{
    protected $instance;

    public function definition()
    {
        $mform = $this->_form;
        $instance = $this->_customdata;
        $this->instance = $instance;
        $plugin = enrol_get_plugin('globalclassroom');

        if ($instance->password)
        {
            $heading = $plugin->get_instance_name($instance);
            $mform->addElement('header', 'selfheader', $heading);
            $mform->addElement('passwordunmask', 'enrolpassword', get_string('password', 'enrol_globalclassroom'));
        } 
        else
        {
            // nothing?
        }

        $this->add_action_buttons(false, get_string('enrolme', 'enrol_globalclassroom'));

        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_INT);
        $mform->setDefault('id', $instance->courseid);

        $mform->addElement('hidden', 'instance');
        $mform->setType('instance', PARAM_INT);
        $mform->setDefault('instance', $instance->id);
    }

    public function validation($data, $files)
    {
        global $DB, $CFG;

        $errors = parent::validation($data, $files);
        $instance = $this->instance;

        if ($instance->password)
        {
            if ($data['enrolpassword'] !== $instance->password)
            {
                if ($instance->customint1)
                {
                    $groups = $DB->get_records('groups', array('courseid'=>$instance->courseid), 'id ASC', 'id, enrolmentkey');
                    $found = false;
                    foreach ($groups as $group)
                    {
                        if (empty($group->enrolmentkey))
                        {
                            continue;
                        }
                        if ($group->enrolmentkey === $data['enrolpassword'])
                        {
                            $found = true;
                            break;
                        }
                    }
                    if (!$found)
                    {
                        // we can not hint because there are probably multiple passwords
                        $errors['enrolpassword'] = get_string('passwordinvalid', 'enrol_globalclassroom');
                    }

                } 
                else
                {
                    $plugin = enrol_get_plugin('globalclassroom');
                    if ($plugin->get_config('showhint'))
                    {
                        $textlib = textlib_get_instance();
                        $hint = $textlib->substr($instance->password, 0, 1);
                        $errors['enrolpassword'] = get_string('passwordinvalidhint', 'enrol_globalclassroom', $hint);
                    } 
                    else
                    {
                        $errors['enrolpassword'] = get_string('passwordinvalid', 'enrol_globalclassroom');
                    }
                }
            }
        }

        return $errors;
    }
}