<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Paypal enrolments plugin settings and presets.
 *
 * @package    enrol
 * @subpackage paypal
 * @copyright  2010 Eugene Venter
 * @author     Eugene Venter - based on code by Petr Skoda and others
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    //--- settings ------------------------------------------------------------------------------------------
    $settings->add(new admin_setting_heading('enrol_globalclassroom_settings', '', get_string('pluginname_desc', 'enrol_globalclassroom')));

    $settings->add(new admin_setting_configtext('enrol_globalclassroom/paypalbusiness', get_string('businessemail', 'enrol_globalclassroom'), get_string('businessemail_desc', 'enrol_globalclassroom'), '', PARAM_EMAIL));

    $settings->add(new admin_setting_configcheckbox('enrol_globalclassroom/mailstudents', get_string('mailstudents', 'enrol_globalclassroom'), '', 0));

    $settings->add(new admin_setting_configcheckbox('enrol_globalclassroom/mailteachers', get_string('mailteachers', 'enrol_globalclassroom'), '', 0));

    $settings->add(new admin_setting_configcheckbox('enrol_globalclassroom/mailadmins', get_string('mailadmins', 'enrol_globalclassroom'), '', 0));

    //--- enrol instance defaults ----------------------------------------------------------------------------
    $settings->add(new admin_setting_heading('enrol_globalclassroom_defaults',
        get_string('enrolinstancedefaults', 'admin'), get_string('enrolinstancedefaults_desc', 'admin')));

    $options = array(ENROL_INSTANCE_ENABLED  => get_string('yes'),
                     ENROL_INSTANCE_DISABLED => get_string('no'));
    $settings->add(new admin_setting_configselect('enrol_globalclassroom/status',
        get_string('status', 'enrol_globalclassroom'), get_string('status_desc', 'enrol_globalclassroom'), ENROL_INSTANCE_DISABLED, $options));

    $settings->add(new admin_setting_configtext('enrol_globalclassroom/cost', get_string('cost', 'enrol_globalclassroom'), '', 0, PARAM_FLOAT, 4));

    $paypalcurrencies = array('USD' => 'US Dollars'
                              //'EUR' => 'Euros',
                              //'JPY' => 'Japanese Yen',
                              //'GBP' => 'British Pounds',
                              //'CAD' => 'Canadian Dollars',
                              //'AUD' => 'Australian Dollars'
                             );
    $settings->add(new admin_setting_configselect('enrol_globalclassroom/currency', get_string('currency', 'enrol_globalclassroom'), '', 'USD', $paypalcurrencies));

    if (!during_initial_install()) {
        $options = get_default_enrol_roles(get_context_instance(CONTEXT_SYSTEM));
        $student = get_archetype_roles('student');
        $student = reset($student);
        $settings->add(new admin_setting_configselect('enrol_globalclassroom/roleid',
            get_string('defaultrole', 'enrol_globalclassroom'), get_string('defaultrole_desc', 'enrol_globalclassroom'), $student->id, $options));
    }

    $settings->add(new admin_setting_configtext('enrol_globalclassroom/enrolperiod',
        get_string('enrolperiod', 'enrol_globalclassroom'), get_string('enrolperiod_desc', 'enrol_globalclassroom'), 0, PARAM_INT));
     $settings->add(new admin_setting_configcheckbox('enrol_globalclassroom/requirepassword',
        get_string('requirepassword', 'enrol_globalclassroom'), get_string('requirepassword_desc', 'enrol_globalclassroom'), 0));

    $settings->add(new admin_setting_configcheckbox('enrol_globalclassroom/usepasswordpolicy',
        get_string('usepasswordpolicy', 'enrol_globalclassroom'), get_string('usepasswordpolicy_desc', 'enrol_globalclassroom'), 0));

    $settings->add(new admin_setting_configcheckbox('enrol_globalclassroom/showhint',
        get_string('showhint', 'enrol_globalclassroom'), get_string('showhint_desc', 'enrol_globalclassroom'), 0));

    //--- enrol instance defaults ----------------------------------------------------------------------------
    $settings->add(new admin_setting_heading('enrol_globalclassroom_defaults',
        get_string('enrolinstancedefaults', 'admin'), get_string('enrolinstancedefaults_desc', 'admin')));

    $settings->add(new admin_setting_configcheckbox('enrol_globalclassroom/defaultenrol',
        get_string('defaultenrol', 'enrol'), get_string('defaultenrol_desc', 'enrol'), 1));

    $options = array(1  => get_string('yes'),
                     0 => get_string('no'));
    $settings->add(new admin_setting_configselect('enrol_globalclassroom/freeformembers',
        get_string('default_freeformembers', 'enrol_globalclassroom'), get_string('default_freeformembers_desc', 'enrol_globalclassroom'), 0, $options));

    $options = array(1  => get_string('yes'),
                     0 => get_string('no'));
    $settings->add(new admin_setting_configselect('enrol_globalclassroom/groupkey',
        get_string('groupkey', 'enrol_globalclassroom'), get_string('groupkey_desc', 'enrol_globalclassroom'), 0, $options));
    $settings->add(new admin_setting_configselect('enrol_globalclassroom/longtimenosee',
        get_string('longtimenosee', 'enrol_globalclassroom'), get_string('longtimenosee_help', 'enrol_globalclassroom'), 0, $options));

    $settings->add(new admin_setting_configtext('enrol_globalclassroom/maxenrolled',
        get_string('maxenrolled', 'enrol_globalclassroom'), get_string('maxenrolled_help', 'enrol_globalclassroom'), 0, PARAM_INT));

    $settings->add(new admin_setting_configcheckbox('enrol_globalclassroom/sendcoursewelcomemessage',
        get_string('sendcoursewelcomemessage', 'enrol_globalclassroom'), get_string('sendcoursewelcomemessage_help', 'enrol_globalclassroom'), 1));

}
