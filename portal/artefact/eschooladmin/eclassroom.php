<?php

define('INTERNAL', 1);
define('ADMIN', 1);
define('MENUITEM', 'configusers');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'eschooladmin');
define('SECTION_PAGE', 'eclassroom');

require(dirname(dirname(dirname(__FILE__))).'/init.php');
global $CFG;
if (!$CFG->current_app->hasPrivilege('GCUser'))
{
    $CFG->current_app->gcError('Unprivileged attempted access to /eschooladmin/eclassroom.php', 
            'gcpageaccessdenied');
}
require_once('pieforms/pieform.php');
require_once('searchlib.php');
safe_require('artefact', 'eschooladmin');
define('TITLE', 'Set eClassrooms');

$eschoolid = param_integer('eschoolid', $CFG->current_app->getDefaultEschool()->id);
$eschool = Doctrine::getTable('GcrEschool')->findOneById($eschoolid);
if (!$eschool || $eschool->getInstitution()->getShortName() != $CFG->current_app->getShortName())
{
    $CFG->current_app->gcError('Invalid eschool id ' . $eschoolid, 'gcdatabaseerror');
}
$users = $eschool->getEclassroomUsers();
$results = get_admin_user_search_results('', 0, 0, 'firstname', 'asc');

$users_not_in_moodle = array();
$users_exist = false;

$potential_users = array();
$eclassroom_users = array();
$mhr_user_objs = $CFG->current_app->selectFromMhrTable('usr');
foreach ($mhr_user_objs as $mhr_user_obj)
{
    $mhr_user = new GcrMhrUser($mhr_user_obj, $CFG->current_app);   
    if ($mhr_user_obj->admin != 1 && $mhr_user_obj->deleted != 1)
    {
        $user_string = ucfirst(trim($mhr_user_obj->firstname .
                ' ' . ucfirst($mhr_user_obj->lastname) . ' (' . $mhr_user_obj->email . ')'));
        if ($mhr_user->hasEclassroom($eschool))
        {
            $eclassroom_users[$mhr_user_obj->id] = $user_string;
        }
        else
        {
            $potential_users[$mhr_user_obj->id] = $user_string;
        }
    }
}
asort($eclassroom_users);
asort($potential_users);

$eschool_options = array();
foreach ($CFG->current_app->getEschools() as $eschool)
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
$addelement = array();
$addelement['type'] = 'select';
$addelement['multiple'] = true;
$addelement['options'] = $potential_users;
$addelement['collapseifoneoption'] = false;

$addelement['title'] = 'Activate eClassroom For User on Catalog';

$addform = array(
    'name' => 'add',
    'elements' => array(
        'users' => $addelement,
        'eschoolid' => array(
            'type' => 'hidden',
            'value' => $eschoolid,
        ),
        'submit' => array(
            'type' => 'submit',
            'value' => 'Activate eClassroom',
        ),
    ),
);

// create the remove users form
$removeelement = array();
$removeelement['type'] = 'select';
$removeelement['multiple'] = true;
$removeelement['options'] = $eclassroom_users;
$removeelement['collapseifoneoption'] = false;

$removeelement['title'] = 'Suspend eClassroom For User on Catalog';

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
            'value' => 'Suspend eClassroom',
        )
    ),
);

$addform = pieform($addform);
$removeform = pieform($removeform);

// if the catalog dropdown is changed, reload the page for the right eschool
$wwwroot = get_config('wwwroot');
$js = <<< EOF
function reload() {
    window.location.href = '{$wwwroot}artefact/eschooladmin/eclassroom.php?eschoolid='+$('eschoolselect_eschool').value;
}
addLoadEvent(function() {
    connect($('eschoolselect_eschool'), 'onchange', reload);
});
EOF;

$smarty = smarty();
$smarty->assign('INLINEJAVASCRIPT', $js);
$smarty->assign('eschoolid', $eschoolid);
$smarty->assign('eschoolselector', $eschoolselector);
$smarty->assign('addform', $addform);
$smarty->assign('removeform', $removeform);
$smarty->assign('PAGEHEADING', TITLE);
$smarty->display('artefact:eschooladmin:eclassroom.tpl');

function add_submit(Pieform $form, $values)
{
    global $CFG;
    $eschool = Doctrine::getTable('GcrEschool')->findOneById($values['eschoolid']);
    if (!$eschool || $eschool->getInstitution()->getShortName() != $CFG->current_app->getShortName())
    {
        $CFG->current_app->gcError('Invalid eschool id ' . $values['eschoolid'], 'gcdatabaseerror');
    }
    
    foreach ($values['users'] as $user_id)
    {
        $mhr_user_obj = $CFG->current_app->selectFromMhrTable('usr', 'id', $user_id, true);
        $mhr_user = new GcrMhrUser($mhr_user_obj, $CFG->current_app);
        $CFG->current_app->createEclassroom($mhr_user, $eschool);
    }
    redirect("/artefact/eschooladmin/eclassroom.php?eschoolid=" . $values['eschoolid']);
}

function remove_submit(Pieform $form, $values)
{
    global $CFG;
    $eschool = Doctrine::getTable('GcrEschool')->findOneById($values['eschoolid']);
    if (!$eschool || $eschool->getInstitution()->getShortName() != $CFG->current_app->getShortName())
    {
        $CFG->current_app->gcError('Invalid eschool id ' . $values['eschoolid'], 'gcdatabaseerror');
    }
        
    foreach ($values['users'] as $user_id)
    {
        $mhr_user_obj = $CFG->current_app->selectFromMhrTable('usr', 'id', $user_id, true);
        $mhr_user = new GcrMhrUser($mhr_user_obj, $eschool);
        $eclassroom = $mhr_user->getEclassroom($eschool);
        if ($eclassroom)
        {
            $eclassroom->setSuspended(true);
            $eclassroom->save();
        }
    }
    redirect("/artefact/eschooladmin/eclassroom.php?eschoolid=" . $values['eschoolid']);
}

?>