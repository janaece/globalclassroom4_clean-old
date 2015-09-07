<?php

define('INTERNAL', true);
define('ADMIN', 1);
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'courses');
define('SECTION_PAGE', 'catalogs');

require(dirname(dirname(dirname(__FILE__))).'/init.php');
require_once('pieforms/pieform.php');
safe_require('artefact', 'courses');
define('TITLE', 'Add/Remove Course Catalogs');

$installed_catalogs = array();
$potential_catalogs = array();

$eschools = $CFG->current_app->getMnetEschools();

foreach($eschools as $eschool)
{
    if ($eschool->getOrganizationId() != $CFG->current_app->getId())
    {
        $installed_catalogs[$eschool->getShortName()] = $eschool->getFullName() .
                ' (' . $eschool->getShortName() . ')';
    }
}

$eschools = GcrEschoolTable::getEschools(!$CFG->current_app->hasPrivilege('GCUser'));


foreach($eschools as $eschool)
{
    if ($eschool->getOrganizationId() != $CFG->current_app->getId())
    {
        $short_name = $eschool->getShortName();
        if (!array_key_exists($short_name, $installed_catalogs))
        {
            $potential_catalogs[$eschool->getShortName()] = $eschool->getFullName() .
                    ' (' . $eschool->getShortName() . ')';
        }
    }
}

if (count($installed_catalogs) < 1)
{
    $installed_catalogs[] = '';
}
$installed_catalogs_element = array(
    'title' => get_string('installedcatalogs', 'artefact.courses'),
    'description' => get_string('installedcatalogssdescription', 'artefact.courses'),
    'type' => 'select',
    'multiple' => true,
    'options' => $installed_catalogs,
    'collapseifoneoption' => false,
);
$potential_catalogs_element = array(
    'title' => get_string('potentialcatalogs', 'artefact.courses'),
    'description' => get_string('potentialcatalogsdescription', 'artefact.courses'),
    'type' => 'select',
    'multiple' => true,
    'options' => $potential_catalogs,
    'collapseifoneoption' => false,
);

$installed_catalogs_form = array(
    'name' => 'installedcatalogs',
    'elements' => array(
        'installedcatalogs' => $installed_catalogs_element,
        'submit' => array(
            'type' => 'submit',
            'value' => get_string('removecatalog', 'artefact.courses'),
        )
    )
);

$potential_catalogs_form = array(
    'name' => 'potentialcatalogs',
    'elements' => array(
        'potentialcatalogs' => $potential_catalogs_element,
        'submit' => array(
            'type' => 'submit',
            'value' => get_string('addcatalog', 'artefact.courses'),
        )
    )
);

$installed_catalogs_form = pieform($installed_catalogs_form);
$potential_catalogs_form = pieform($potential_catalogs_form);

$smarty = smarty();
$smarty->assign('installedcatalogs', $installed_catalogs_form);
$smarty->assign('potentialcatalogs', $potential_catalogs_form);
$smarty->assign('PAGEHEADING', TITLE);
$smarty->display('artefact:courses:catalogs.tpl');

function installedcatalogs_submit(Pieform $form, $values)
{
    foreach ($values['installedcatalogs'] as $eschool_short_name)
    {
        if ($eschool_short_name != '0')
        {
            $eschool = GcrEschoolTable::getEschool($eschool_short_name);
            global $CFG;
            if ($eschool->getOrganizationId() != $CFG->current_app->getId())
            {
                $CFG->current_app->removeMnetConnection($eschool);
                $eschool->removeMnetConnection($CFG->current_app);
            }
        }
    }
    redirect("/artefact/courses/catalogs.php");
}

function potentialcatalogs_submit(Pieform $form, $values)
{
    global $CFG;
    foreach ($values['potentialcatalogs'] as $eschool_short_name)
    {
        if ($eschool_short_name != '0')
        {
            $eschool = GcrEschoolTable::getEschool($eschool_short_name);
            if ($eschool->getOrganizationId() != $CFG->current_app->getId())
            {
                if ($eschool->getIsPublic() || $CFG->current_app->hasPrivilege('GCUser'))
                {
                    $CFG->current_app->createMnetConnection($eschool);
                    $eschool->setMnetConnection($CFG->current_app);
                }
            }
        }
    }
    redirect("/artefact/courses/catalogs.php");
}

?>