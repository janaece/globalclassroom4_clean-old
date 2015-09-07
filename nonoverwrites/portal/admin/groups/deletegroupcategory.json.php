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

$itemid = param_integer('itemid');

//first update all records that use this group id
$groups = get_records_assoc('group', 'category', $itemid);
if (!empty($groups)) {
    foreach ($groups as $group) {
        $group->category = null;
        update_record('group', $group);
    }
}

//now delete actual category
if (!delete_records('group_category','id', $itemid)) {
    json_reply('local', get_string('deletefailed','admin'));
}

json_reply(false, get_string('groupcategorydeleted','admin'));
