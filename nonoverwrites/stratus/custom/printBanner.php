<?php
require('../config.php');
require_once('../lib/filelib.php');
$context = get_system_context();
$fs = get_file_storage();

$file = $fs->get_file($context->id, 'eschool_banner', 'banner', 0, '/', 0);
if (!$file or $file->is_directory()) 
{
    global $CFG;
    $owner = $CFG->current_app->getOwnerUser();
    $user_id = 1;
    if ($owner)
    {
        $user_id = $owner->getObject()->id;
    }
    $bannerFile = $CFG->dataroot . '/gc_images/' . $CFG->current_app->getLogo();
    $file_record = array('contextid' => $context->id, 'component' => 'eschool_banner', 'filearea' => 'banner', 'itemid' => 0,
                                 'filepath'=> '/' , 'filename'=> '0', 'userid' => $user_id);
    $file = $fs->create_file_from_pathname($file_record, $bannerFile);
    if (!$file or $file->is_directory()) 
    {
        send_file_not_found();
    }
}

session_get_instance()->write_close();
send_stored_file($file, 60*60, 0, false);
?>