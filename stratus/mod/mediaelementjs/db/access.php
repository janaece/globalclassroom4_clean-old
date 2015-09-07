<?php

/**
 * Capability definitions for the mediaelementjs module.
 *
 */

defined('MOODLE_INTERNAL') || die;

$capabilities = array(
    'mod/mediaelementjs:view' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => array(
            'guest' => CAP_ALLOW,
            'user' => CAP_ALLOW,
        )
    ),

/* TODO: review public portfolio API first!
    'mod/mediaelementjs:portfolioexport' => array(

        'captype' => 'read',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => array(
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
        )
    ),*/

);

