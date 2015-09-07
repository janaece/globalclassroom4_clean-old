<?php

// Global Classroom Enrolment Plugin
// Ron Stewart
// May 19, 2011

defined('MOODLE_INTERNAL') || die();

function xmldb_enrol_globalclassroom_install()
{
    global $CFG, $DB;

    // migrate welcome message
    if (isset($CFG->sendcoursewelcomemessage))
    {
        set_config('sendcoursewelcomemessage', $CFG->sendcoursewelcomemessage, 'enrol_globalclassroom'); // new course default
        $DB->set_field('enrol', 'customint4', $CFG->sendcoursewelcomemessage, array('enrol'=>'globalclassroom')); // each instance has different setting now
        unset_config('sendcoursewelcomemessage');
    }

    // migrate long-time-no-see feature settings
    if (isset($CFG->longtimenosee))
    {
        $nosee = $CFG->longtimenosee * 3600 * 24;
        set_config('longtimenosee', $nosee, 'enrol_globalclassroom');
        $DB->set_field('enrol', 'customint2', $nosee, array('enrol'=>'globalclassroom'));
        unset_config('longtimenosee');
    }
}
