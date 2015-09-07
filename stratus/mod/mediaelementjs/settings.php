<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    require_once("$CFG->libdir/resourcelib.php");

    $displayoptions = resourcelib_get_displayoptions(array(RESOURCELIB_DISPLAY_AUTO,
                                                           RESOURCELIB_DISPLAY_EMBED,
                                                           RESOURCELIB_DISPLAY_FRAME,
                                                           RESOURCELIB_DISPLAY_OPEN,
                                                           RESOURCELIB_DISPLAY_NEW,
                                                           RESOURCELIB_DISPLAY_POPUP,
                                                          ));
    $defaultdisplayoptions = array(RESOURCELIB_DISPLAY_AUTO,
                                   RESOURCELIB_DISPLAY_EMBED,
                                   RESOURCELIB_DISPLAY_OPEN,
                                   RESOURCELIB_DISPLAY_POPUP,
                                  );

    //--- general settings -----------------------------------------------------------------------------------
    $settings->add(new admin_setting_configtext('mediaelementjs/framesize',
        get_string('framesize', 'mediaelementjs'), get_string('configframesize', 'mediaelementjs'), 130, PARAM_INT));
    $settings->add(new admin_setting_configcheckbox('mediaelementjs/requiremodintro',
        get_string('requiremodintro', 'admin'), get_string('configrequiremodintro', 'admin'), 1));
    $settings->add(new admin_setting_configpasswordunmask('mediaelementjs/secretphrase', get_string('password'),
        get_string('configsecretphrase', 'mediaelementjs'), ''));
    $settings->add(new admin_setting_configcheckbox('mediaelementjs/rolesinparams',
        get_string('rolesinparams', 'mediaelementjs'), get_string('configrolesinparams', 'mediaelementjs'), false));
    $settings->add(new admin_setting_configmultiselect('mediaelementjs/displayoptions',
        get_string('displayoptions', 'mediaelementjs'), get_string('configdisplayoptions', 'mediaelementjs'),
        $defaultdisplayoptions, $displayoptions));

    //--- modedit defaults -----------------------------------------------------------------------------------
    $settings->add(new admin_setting_heading('urlmodeditdefaults', get_string('modeditdefaults', 'admin'), get_string('condifmodeditdefaults', 'admin')));

    $settings->add(new admin_setting_configcheckbox_with_advanced('mediaelementjs/printheading',
        get_string('printheading', 'mediaelementjs'), get_string('printheadingexplain', 'mediaelementjs'),
        array('value'=>0, 'adv'=>false)));
    $settings->add(new admin_setting_configcheckbox_with_advanced('mediaelementjs/printintro',
        get_string('printintro', 'mediaelementjs'), get_string('printintroexplain', 'mediaelementjs'),
        array('value'=>1, 'adv'=>false)));
    $settings->add(new admin_setting_configselect_with_advanced('mediaelementjs/display',
        get_string('displayselect', 'mediaelementjs'), get_string('displayselectexplain', 'mediaelementjs'),
        array('value'=>RESOURCELIB_DISPLAY_AUTO, 'adv'=>false), $displayoptions));
    $settings->add(new admin_setting_configtext_with_advanced('mediaelementjs/popupwidth',
        get_string('popupwidth', 'mediaelementjs'), get_string('popupwidthexplain', 'mediaelementjs'),
        array('value'=>620, 'adv'=>true), PARAM_INT, 7));
    $settings->add(new admin_setting_configtext_with_advanced('mediaelementjs/popupheight',
        get_string('popupheight', 'mediaelementjs'), get_string('popupheightexplain', 'mediaelementjs'),
        array('value'=>450, 'adv'=>true), PARAM_INT, 7));
}
