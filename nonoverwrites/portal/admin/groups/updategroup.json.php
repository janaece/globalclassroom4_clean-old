<?php
/**
 *
 * @package    mahara
 * @subpackage admin
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

define('INTERNAL', 1);
// OVERWRITE 1: deletion
// define('ADMIN', 1);
// END OVERWRITE 1
define('JSON', 1);

require(dirname(dirname(dirname(__FILE__))) . '/init.php');
// OVERWRITE 2: insert
define('INSTITUTIONALADMIN', 1);
global $CFG;
if (!$CFG->current_app->hasPrivilege('EschoolAdmin'))
{
    $CFG->current_app->gcError('Unprivileged attempted access to /site/pages.php', 
            'gcpageaccessdenied');
}
// END OVERWRITE 2
json_headers();

$name     = param_variable('name');
$itemid   = param_variable('itemid');

$data = new StdClass;
$data->title = $name;

if ($itemid == 'new') {
    try {
        $displayorders = get_records_array('group_category', '', '', '', 'displayorder');
        $max = 0;
        if ($displayorders) {
            foreach ($displayorders as $r) {
                $max = $r->displayorder >= $max ? $r->displayorder + 1 : $max;
            }
        }
        $data->displayorder = $max;
        $itemid = insert_record('group_category', $data, 'id', true);
    }
    catch (Exception $e) {
        json_reply('local',get_string('savefailed','admin'));
    }
}
else {
    $data->id = (int)$itemid;
    try {
        update_record('group_category', $data, 'id');
    }
    catch (Exception $e) {
        json_reply('local',get_string('savefailed','admin'));
    }
}
json_reply(false, array('id' => (int)$itemid));
