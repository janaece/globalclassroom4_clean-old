<?php

// This file is part of the Certificate module for Moodle - http://moodle.org/
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
 * Handles uploading files
 *
 * @package    mod
 * @subpackage certificate
 * @copyright  Mark Nelson <markn@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
require_once($CFG->dirroot.'/mod/certificate/lib.php');
require_once($CFG->dirroot.'/mod/certificate/upload_image_form.php');

require_login();

// OVRWRITE 1: replacement, changed from:
//$context = get_system_context();
//require_capability('moodle/site:config', $context);
// TO:
$saved = optional_param('saved', 0, PARAM_INT);
$modid = optional_param('modid', 0, PARAM_INT);
$courseid = optional_param('courseid', 0, PARAM_INT);
if (!$CFG->current_app->hasPrivilege('EschoolStaff'))
{
    $context = get_system_context();
    require_capability('moodle/site:config', $context);
}
// END OVERWRITE 1

$struploadimage = get_string('uploadimage', 'certificate');

$PAGE->set_url('/admin/settings.php', array('section' => 'modsettingcertificate'));
$PAGE->set_pagetype('admin-setting-modsettingcertificate');
$PAGE->set_pagelayout('admin');
$PAGE->set_context($context);
$PAGE->set_title($struploadimage);
$PAGE->set_heading($SITE->fullname);
$PAGE->navbar->add($struploadimage);

$upload_form = new mod_certificate_upload_image_form();

if ($upload_form->is_cancelled()) 
{
    // OVERWRITE 2: replacement, changed from:
    //redirect(new moodle_url('/admin/settings.php?section=modsettingcertificate'));
    // TO:
    $data = $upload_form->get_submitted_data();
    if (!empty($data->modid))
    {
        redirect("$CFG->wwwroot/course/modedit.php?update=$data->modid");
    }
    else if (!empty($data->courseid))
    {
        redirect("$CFG->wwwroot/course/view.php?id=$data->courseid");
    }
    else
    {
        redirect(new moodle_url('/admin/settings.php?section=modsettingcertificate'));
    }
    // END OVERWRITE 2
    
} else if ($data = $upload_form->get_data()) {
    // Ensure the directory for storing is created
    $uploaddir = "mod/certificate/pix/$data->imagetype";
    $filename = $upload_form->get_new_filename('certificateimage');
    make_upload_directory($uploaddir);
    $destination = $CFG->dataroot . '/' . $uploaddir . '/' . $filename;
    if (!$upload_form->save_file('certificateimage', $destination, true)) {
        throw new coding_exception('File upload failed');
    }
    // OVERWRITE 3: replacement, change from:
    //redirect(new moodle_url('/admin/settings.php?section=modsettingcertificate'), get_string('changessaved'));
    // TO:
    if (!empty($data->modid))
    {
        redirect("$CFG->wwwroot/mod/certificate/upload_image.php?modid=$data->modid&saved=1");
    }
    else
    {
        redirect("$CFG->wwwroot/mod/certificate/upload_image.php?courseid=$data->courseid&saved=1");
    }
    // END OVERWRITE 3
}

echo $OUTPUT->header();

// OVERWRITE 4: insert
if ($saved == 1)
{
    echo '<div style="color:red;font-weight:bold">Image Successfully Uploaded</div>';
}
// END OVERWRITE 4

echo $upload_form->display();
echo $OUTPUT->footer();
?>
