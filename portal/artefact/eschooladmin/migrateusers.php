<?php

define('INTERNAL', 1);
define('INSTITUTIONALADMIN', 1);
define('MENUITEM', 'configusers');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'eschooladmin');
define('SECTION_PAGE', 'migrateusers');

require(dirname(dirname(dirname(__FILE__))).'/init.php');
global $CFG;
if (!$CFG->current_app->hasPrivilege('EschoolAdmin'))
{
    $CFG->current_app->gcError('Unprivileged attempted access to /eschooladmin/migrateusers.php', 
            'gcpageaccessdenied');
}
require_once('pieforms/pieform.php');
require_once('searchlib.php');
safe_require('artefact', 'eschooladmin');
define('TITLE', 'Migrate Users');

$eschoolid = param_integer('eschoolid', $CFG->current_app->getDefaultEschool()->id);
$eschool = Doctrine::getTable('GcrEschool')->findOneById($eschoolid);
ArtefactTypeEschooladmin::authorize_eschool($eschool);

$potential_mdl_users = array();
$current_mdl_users = array();

// Check if users do not exist on the eschool, and get potential users in properly formatted form
$mdl_users = $eschool->getAllowedUsers($CFG->current_app);
foreach ($mdl_users as $mdl_user)
{
    $current_mdl_users[$mdl_user->username] = ucfirst(trim($mdl_user->firstname .
        ' ' . ucfirst($mdl_user->lastname) . ' (' . $mdl_user->email . ')'));
}
$mhr_users = $CFG->current_app->getUsers();
$owner = $eschool->getOwnerUser();
foreach ($mhr_users as $mhr_user)
{
    if (!array_key_exists($mhr_user->username, $current_mdl_users) &&
            $mhr_user->username != $owner->getObject()->username)
    {
        $potential_mdl_users[$mhr_user->username] = ucfirst(trim($mhr_user->firstname .
            ' ' . ucfirst($mhr_user->lastname) . ' (' . $mhr_user->email . ')'));
    }
}
asort($potential_mdl_users);
asort($current_mdl_users);

// Get the catalogs for this institution, and format them for the form
$eschoollist = ArtefactTypeEschooladmin::get_authorized_eschools();

$eschool_options = array();
foreach ($eschoollist as $eschool)
{
    $eschool_options[$eschool->getId()] = $eschool->getFullName();
}

// create the catalog selector
$eschoolselector = pieform(array(
    'name' => 'eschoolselect',
    'elements' => array(
        'eschool' => array(
            'type' => 'select',
            'title' => get_string('catalog', 'artefact.eschooladmin'),
            'options' => $eschool_options,
            'defaultvalue' => $eschoolid
        ),
    )
));

// create the migrate users form
$migrateelement = array();
$migrateelement['type'] = 'select';
$migrateelement['multiple'] = true;
$migrateelement['options'] = $potential_mdl_users;
$migrateelement['collapseifoneoption'] = false;

$migrateelement['title'] = 'Migrate New Users to Catalog';

$migrateform = array(
    'name' => 'migrate',
    'elements' => array(
        'users' => $migrateelement,
        'eschoolid' => array(
            'type' => 'hidden',
            'value' => $eschoolid,
        ),
        'submit' => array(
            'type' => 'submit',
            'value' => 'Migrate Users',
        ),
    ),
);

// create the remove users form
$removeelement = array();
$removeelement['type'] = 'select';
$removeelement['multiple'] = true;
$removeelement['options'] = $current_mdl_users;
$removeelement['collapseifoneoption'] = false;

$removeelement['title'] = 'Remove Users from Catalog';

$removeform = array(
    'name' => 'remove',
    'elements' => array(
        'users' => $removeelement,
        'eschoolid' => array(
            'type' => 'hidden',
            'value' => $eschoolid,
        ),
        'submit' => array(
            'type' => 'submit',
            'value' => 'Remove Users',
        )
    ),
);

$migrateform = pieform($migrateform);
$removeform = pieform($removeform);

// if the catalog dropdown is changed, reload the page for the right eschool
$wwwroot = get_config('wwwroot');
$js = <<< EOF
function reload() {
    window.location.href = '{$wwwroot}artefact/eschooladmin/migrateusers.php?eschoolid='+$('eschoolselect_eschool').value;
}
addLoadEvent(function() {
    connect($('eschoolselect_eschool'), 'onchange', reload);
});
EOF;

$smarty = smarty();
$smarty->assign('INLINEJAVASCRIPT', $js);
$smarty->assign('eschoolid', $eschoolid);
$smarty->assign('eschoolselector', $eschoolselector);
$smarty->assign('migrateform', $migrateform);
$smarty->assign('removeform', $removeform);
$smarty->assign('PAGEHEADING', TITLE);
$smarty->display('artefact:eschooladmin:migrateusers.tpl');

function migrate_submit(Pieform $form, $values)
{
    global $CFG;
    $eschool = Doctrine::getTable('GcrEschool')->findOneById($values['eschoolid']);
    ArtefactTypeEschooladmin::authorize_eschool($eschool);
    foreach ($values['users'] as $user)
    {
        $mhr_user_obj = $CFG->current_app->selectFromMhrTable('usr', 'username', $user, true);
        $mhr_user = new GcrMhrUser($mhr_user_obj, $CFG->current_app);
        $mhr_user->addAccess($eschool);
    }
    redirect("/artefact/eschooladmin/migrateusers.php?eschoolid=".$values['eschoolid']);
}

function remove_submit(Pieform $form, $values)
{
    $eschool = Doctrine::getTable('GcrEschool')->findOneById($values['eschoolid']);
    $owner = $eschool->getOwnerUser();
    ArtefactTypeEschooladmin::authorize_eschool($eschool);
        
    foreach ($values['users'] as $user)
    {
        if ($user != $owner->getObject()->username)
        {
            $mdl_user_obj = $eschool->selectFromMdlTable('user', 'username', $user, true);
            if ($mdl_user_obj)
            {
                $mdl_user = new GcrMdlUser($mdl_user_obj, $eschool);
                $mdl_user->removeAccess();
            }
        }
    }
    redirect("/artefact/eschooladmin/migrateusers.php?eschoolid=" . $values['eschoolid']);
}

?>