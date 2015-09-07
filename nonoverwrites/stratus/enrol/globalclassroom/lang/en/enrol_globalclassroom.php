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
 * Strings for component 'enrol_paypal', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package    enrol
 * @subpackage paypal
 * @copyright  1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['assignrole'] = 'Assign role';
$string['businessemail'] = 'PayPal business email';
$string['businessemail_desc'] = 'The email address of your business PayPal account';
$string['cost'] = 'Enroll Cost';
$string['costerror'] = 'The enrollment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrollment.';
$string['currency'] = 'Currency';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during PayPal enrollments';
$string['editenrolment'] = 'Edit Enrollment';
$string['enrolenddate'] = 'End date';
$string['enrolenddaterror'] = 'Enrollment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrollment period';
$string['enrolperiod_desc'] = 'Default length of the enrollment period (in seconds).'; //TODO: fixme
$string['enrolstartdate'] = 'Start date';
$string['enrolme'] = 'Enroll me';
$string['enrolmentnew'] = 'New enrollment in {$a}';
$string['enrolmentnewuser'] = '{$a->user} has enrolled in course "{$a->course}"';
$string['freeformembers'] = 'Allow membership users to enroll in this course for free.';
$string['default_freeformembers'] = 'Allow membership users to enroll in courses for free, by default.';
$string['default_freeformembers_desc'] = 'If set, the default setting on courses would allow users who are a member of an institution (not "No Institution") to enrol in courses with a cost set without paying the enrolment cost.';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['nocost'] = 'There is no cost associated with enrolling in this course!';
$string['globalclassroom:config'] = 'Configure globalclassroom enroll instances';
$string['globalclassroom:manage'] = 'Manage enrolled users';
$string['globalclassroom:unenrol'] = 'Unenroll users from course';
$string['globalclassroom:unenrolself'] = 'Unenroll self from the course';
$string['globalclassroomaccepted'] = 'globalclassroom payments accepted';
$string['pluginname'] = 'Global Classroom';
$string['pluginname_desc'] = 'The PayPal module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['sendpaymentbutton'] = 'Send payment via PayPal';
$string['status'] = 'Allow PayPal enrollments';
$string['status_desc'] = 'Allow users to use PayPal to enroll into a course by default.';
$string['unenrolselfconfirm'] = 'Do you really want to unenroll yourself from course "{$a}"?';
$string['sendcoursewelcomemessage'] = 'Send course welcome message';
$string['sendcoursewelcomemessage_help'] = 'If enabled, users receive a welcome message via email when they self-enroll in a course.';
$string['showhint'] = 'Show hint';
$string['showhint_desc'] = 'Show first letter of the guest access key.';
$string['unenrol'] = 'Unenroll user';
$string['unenrolselfconfirm'] = 'Do you really want to unenroll yourself from course "{$a}"?';
$string['unenroluser'] = 'Do you really want to unenroll "{$a->user}" from course "{$a->course}"?';
$string['usepasswordpolicy'] = 'Use password policy';
$string['usepasswordpolicy_desc'] = 'Use standard password policy for enrollment keys.';
$string['welcometocourse'] = 'Welcome to {$a}';
$string['welcometocoursetext'] = 'Welcome to {$a->coursename}!';
$string['longtimenosee'] = 'Unenroll inactive after';
$string['longtimenosee_help'] = 'If users haven\'t accessed a course for a long time, then they are automatically unenrolled. This parameter specifies that time limit.';
$string['maxenrolled'] = 'Max enrolled users';
$string['maxenrolled_help'] = 'Specifies the maximum number of users that can self enroll. 0 means no limit.';
$string['maxenrolledreached'] = 'Maximum number of users allowed to self-enroll was already reached.';
$string['password'] = 'Enrollment key';
$string['password_help'] = 'An enrollment key enables access to the course to be restricted to only those who know the key.';
$string['passwordinvalid'] = 'Incorrect enrollment key, please try again';
$string['passwordinvalidhint'] = 'That enrollment key was incorrect, please try again<br />
(Here\'s a hint - it starts with \'{$a}\')';
$string['requirepassword'] = 'Require enrollment key';
$string['requirepassword_desc'] = 'Require enrollment key in new courses and prevent removing of enrollment key from existing courses.';
$string['sendcoursewelcomemessage'] = 'Send course welcome message';
$string['sendcoursewelcomemessage_help'] = 'If enabled, users receive a welcome message via email when they self-enroll in a course.';
$string['showhint'] = 'Show hint';
$string['showhint_desc'] = 'Show first letter of the guest access key.';
$string['usepasswordpolicy'] = 'Use password policy';
$string['usepasswordpolicy_desc'] = 'Use standard password policy for enrollment keys.';
$string['welcometocourse'] = 'Welcome to {$a}';
$string['welcometocoursetext'] = 'Welcome to {$a->coursename}!

You have successfully enrolled in {$a->coursename}.

  ';
$string['groupkey'] = 'Use group enrollment keys';
$string['groupkey_desc'] = 'Use group enrollment keys by default.';
$string['groupkey_help'] = 'In addition to restricting access to the course to only those who know the key, use of a group enrollment key means users are automatically added to the group when they enroll in the course.';
$string['customwelcomemessage'] = 'Custom welcome message';

