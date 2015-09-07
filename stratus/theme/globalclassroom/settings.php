<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree)
{
    // Background color setting
    $name = 'theme_globalclassroom/backgroundcolor';
    $title = get_string('backgroundcolor', 'theme_globalclassroom');
    $description = get_string('backgroundcolordesc', 'theme_globalclassroom');
    $default = '#DDD';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);
}