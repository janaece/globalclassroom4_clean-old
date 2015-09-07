<?php

// Global Classroom Enrolment Plugin
// Ron Stewart
// May 19, 2011

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

    'enrol/globalclassroom:config' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'legacy' => array(
            'manager' => CAP_ALLOW,
        )
    ),

    'enrol/globalclassroom:manage' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'legacy' => array(
            'manager' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
        )
    ),

    'enrol/globalclassroom:unenrol' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'legacy' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW,
        )
    ),

    'enrol/globalclassroom:unenrolself' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'legacy' => array(
            'student' => CAP_ALLOW,
        )
    ),
);

