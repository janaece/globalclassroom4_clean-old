<?php

define('INTERNAL', 1);
define('INSTITUTIONALADMIN', 1);
define('MENUITEM', 'configusers');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'eschooladmin');
define('SECTION_PAGE', 'institutioncatalogs');

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

$institution_name = param_alpha('institution', 'home');
$mhr_institution_obj = $CFG->current_app->selectFromMhrTable('institution', 'name', $institution_name, true);
if (!$mhr_institution_obj)
{
    $CFG->current_app->gcError('MhrInstitution does not exist with name ' . $institution_name, 'gcdatabaseerror');
}
$mhr_institution = new GcrMhrInstitution($mhr_institution_obj, $CFG->current_app);
define('TITLE', 'Add/Remove User Access to Catalogs');

$potential_eschools = array();
$current_eschools = array();

// Check if users do not exist on the eschool, and get potential users in properly formatted form
$eschools = $mhr_institution->getEschools();
if ($eschools)
{
    foreach ($eschools as $eschool)
    {
        $current_eschools[$eschool->getShortName()] = $eschool->getFullName() . 
                '(' . $eschool->getShortName() . ')';
    }
}
$eschools = $CFG->current_app->getMnetEschools();
if ($eschools)
{
    foreach ($eschools as $eschool)
    {
        if (!array_key_exists($eschool->getShortName(), $current_eschools))
        {
            $potential_eschools[$eschool->getShortName()] = $eschool->getFullName() . 
                '(' . $eschool->getShortName() . ')';
        }
    }
}
asort($potential_eschools);
asort($current_eschools);

$addelement = array();
$addelement['type'] = 'select';
$addelement['multiple'] = true;
$addelement['options'] = $potential_eschools;
$addelement['collapseifoneoption'] = false;

//$addelement['title'] = 'Add Catalogs to ' . $eschool->getFullName() . 
//                '(' . $eschool->getShortName() . ')';

$addform = array(
    'name' => 'add',
    'elements' => array(
        'eschools' => $addelement,
        'institution_name' => array(
            'type' => 'hidden',
            'value' => $institution_name,
        ),
        'submit' => array(
            'type' => 'submit',
            'value' => 'Add Catalogs',
        ),
    ),
);

// create the remove users form
$removeelement = array();
$removeelement['type'] = 'select';
$removeelement['multiple'] = true;
$removeelement['options'] = $current_eschools;
$removeelement['collapseifoneoption'] = false;

//$removeelement['title'] = 'Remove Catalogs From ' . $eschool->getFullName() . 
 //               '(' . $eschool->getShortName() . ')';

$removeform = array(
    'name' => 'remove',
    'elements' => array(
        'eschools' => $removeelement,
        'institution_name' => array(
            'type' => 'hidden',
            'value' => $institution_name,
        ),
        'submit' => array(
            'type' => 'submit',
            'value' => 'Remove Catalogs',
        )
    ),
);

$addform = pieform($addform);
$removeform = pieform($removeform);


$smarty = smarty();
$smarty->assign('mhr_institution_name', $mhr_institution->getObject()->displayname);
$smarty->assign('addform', $addform);
$smarty->assign('removeform', $removeform);
$smarty->assign('PAGEHEADING', TITLE);
$smarty->display('artefact:eschooladmin:institutioncatalogs.tpl');

function add_submit(Pieform $form, $values)
{
    global $CFG;
    $mhr_institution_obj = $CFG->current_app->selectFromMhrTable('institution', 'name', $values['institution_name'], true);
    if (!$mhr_institution_obj)
    {
        $CFG->current_app->gcError('MhrInstitution does not exist with name ' . $values['institution_name'], 'gcdatabaseerror');
    }
    $mhr_institution = new GcrMhrInstitution($mhr_institution_obj, $CFG->current_app);
    
    foreach ($values['eschools'] as $eschool)
    {
        $eschool = GcrEschoolTable::getEschool($eschool);
        $mhr_institution->addEschool($eschool, true);
    }
    redirect("/artefact/eschooladmin/institutioncatalogs.php?institution=" . $values['institution_name']);
}

function remove_submit(Pieform $form, $values)
{
    global $CFG;
    $mhr_institution_obj = $CFG->current_app->selectFromMhrTable('institution', 'name', $values['institution_name'], true);
    if (!$mhr_institution_obj)
    {
        $CFG->current_app->gcError('MhrInstitution does not exist with name ' . $values['institution_name'], 'gcdatabaseerror');
    }
    $mhr_institution = new GcrMhrInstitution($mhr_institution_obj, $CFG->current_app);
    
    foreach ($values['eschools'] as $eschool)
    {
        $eschool = GcrEschoolTable::getEschool($eschool);
        $mhr_institution->removeEschool($eschool);
    }
    redirect("/artefact/eschooladmin/institutioncatalogs.php?institution=" . $values['institution_name']);
}

?>