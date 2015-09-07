<?php
/**
 *
 * @package    mahara
 * @subpackage core
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

define('INTERNAL', 1);
require(dirname(dirname(__FILE__)) . '/init.php');
require_once(get_config('libroot') . 'view.php');
define('TITLE', get_string('share', 'view'));
define('MENUITEM', 'myportfolio/share');

$accesslists = View::get_accesslists($USER->get('id'));

// GC OVERWRITE 1 - add create pages form for continuity
$createviewform = pieform(create_view_form());
// END GC OVERWRITE 1

$smarty = smarty();
$smarty->assign('PAGEHEADING', TITLE);
$smarty->assign('accesslists', $accesslists);
// GC OVERWRITE 2 - send createviewform to template
$smarty->assign('createviewform', $createviewform);
// END GC OVERWRITE 2
$smarty->display('view/share.tpl');
