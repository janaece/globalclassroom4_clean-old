<?php
/**
 * Eschool Banner
 *
 * @copyright &copy; 2013 GlobalClassroom Inc.
 * @author Ron Stewart
 */

require('../config.php');
require_once("$CFG->dirroot/custom/banner_form.php");

$CFG->current_app->requireLogin();
global $PAGE;

$context = get_system_context();
$title = 'Edit Catalog Banner';
$link[] = array('name' => $title,'link' => '','type' => 'misc');
$link = build_navigation($link);
print_header_simple($title, $title, $link);

$mform = new eschool_banner_form();
if ($mform->is_cancelled()) 
{
    redirect($CFG->current_app->getAppUrl());
} 
else if ($formdata = $mform->get_data()) 
{
    $fs = get_file_storage();
    $filename = $mform->get_new_filename('userfile');
    $old_file = $fs->get_file($context->id, 'eschool_banner', 'banner',
                      0, '/', 0);
    if ($filename !== false) 
    {   
        if ($old_file)
        {
            $old_file->delete();
        }
        $new_file = $mform->save_stored_file('userfile', $context->id, 'eschool_banner', 'banner', 0, '/', 0);
    }
    redirect($CFG->current_app->getAppUrl());
}
echo $OUTPUT->box_start('generalbox');

?>
<div style="float:left;width:65%;margin-left:40px">
<h2>Customize Your Banner</h2> 
<p>Here you can upload a custom logo to the upper left of your Catalog. For best results, a banner image should fit within a 300 pixel wide by 80 pixel high image.</p>
</div>
<div style="clear:both"></div>
<?php
$mform->display();
echo $OUTPUT->box_end();
echo $OUTPUT->footer();

?>