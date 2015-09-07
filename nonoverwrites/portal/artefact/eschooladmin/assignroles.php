<?php

define('INTERNAL', 1);
define('INSTITUTIONALADMIN', 1);
define('MENUITEM', 'courses');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'eschooladmin');
define('SECTION_PAGE', 'assignroles');

require(dirname(dirname(dirname(__FILE__))).'/init.php');
global $CFG;
if (!$CFG->current_app->hasPrivilege('EschoolAdmin'))
{
    $CFG->current_app->gcError('Unprivileged attempted access to /eschooladmin/assignroles.php', 
            'gcpageaccessdenied');
}
require_once('pieforms/pieform.php');
safe_require('artefact', 'eschooladmin');
define('TITLE', 'Assign Roles');

$roleid = param_integer('roleid', '5');
$courseid = param_integer('courseid');
$eschoolid = param_integer('eschoolid');

$mhr_user = $CFG->current_app->getCurrentUser();
$eschool = Doctrine::getTable('GcrEschool')->findOneById($eschoolid);
$course = $eschool->getCourse($courseid);
if (!$course->canAssignRoles($mhr_user))
{
    $smarty = smarty();
    $smarty->assign('message', 'You are not allowed to assign roles');
    $smarty->display('artefact:eschooladmin:assignroleserror.tpl');
    exit;
}

$mdl_active_users = ArtefactTypeEschooladmin::get_active_users_in_course($roleid, $courseid, $eschoolid);
$active_users = array();
foreach($mdl_active_users as $mdl_active_user)
{
    $options[ucfirst(trim($mdl_active_user->lastname))] = $mdl_active_user;
}
ksort($options);
foreach($options as $option)
{
    $active_users[$option->id] = "$option->firstname $option->lastname ($option->username)";
}
$options = array();
$mdl_potential_users = ArtefactTypeEschooladmin::get_potential_users($courseid, $eschoolid, array($roleid));
$potential_users = array();
foreach($mdl_potential_users as $potential_user)
{
    $options[ucfirst(trim($potential_user->lastname))] = $potential_user;
}
ksort($options);
foreach($options as $option)
{
    $potential_users[$option->id] = "$option->firstname $option->lastname ($option->username)";
}
$roletypeselector = pieform(array(
    'name' => 'roletypeselect',
    'elements' => array(
        'roletype' => array(
            'type' => 'select',
            'title' => get_string('roletype', 'artefact.eschooladmin'),
            'options' => array(
                '5' => get_string('students', 'artefact.eschooladmin'),
                '3' => get_string('teachers', 'artefact.eschooladmin'),
             ),
            'defaultvalue' => $roleid
        ),
    )
));

if ($roleid == '5')
{
    $activeuserselement = array(
        'title' => get_string('activestudents', 'artefact.eschooladmin'),
        'description' => get_string('activestudentsdescription', 'artefact.eschooladmin'),
    );
    $potentialuserselement = array(
        'title' => get_string('potentialstudents', 'artefact.eschooladmin'),
        'description' => get_string('potentialstudentsdescription', 'artefact.eschooladmin'),
    );
}
else if ($roleid == '3')
{
    $activeuserselement = array(
        'title' => get_string('activeteachers', 'artefact.eschooladmin'),
        'description' => get_string('activeteachersdescription', 'artefact.eschooladmin'),
    );
    $potentialuserselement = array(
        'title' => get_string('potentialteachers', 'artefact.eschooladmin'),
        'description' => get_string('potentialteachersdescription', 'artefact.eschooladmin'),
    );
}
else
{
    $smarty = smarty();
    $smarty->assign('message', 'You are not allowed to assign this role');
    $smarty->display('artefact:eschooladmin:assignroleserror.tpl');
    exit;
}

$activeuserselement['type'] = 'select';
$activeuserselement['multiple'] = true;
$activeuserselement['options'] = $active_users;
$activeuserselement['collapseifoneoption'] = false;

$potentialuserselement['type'] = 'select';
$potentialuserselement['multiple'] = true;
$potentialuserselement['options'] = $potential_users;
$potentialuserselement['collapseifoneoption'] = false;

$activeusersform = array(
    'name' => 'activeusers',
    'elements' => array(
        'activeusers' => $activeuserselement,
        'courseid' => array(
            'type' => 'hidden',
            'value' => $courseid,
        ),
        'roleid' => array(
            'type' => 'hidden',
            'value' => $roleid,
        ),
        'eschoolid' => array(
            'type' => 'hidden',
            'value' => $eschoolid,
        ),
        'submit' => array(
            'type' => 'submit',
            'value' => get_string('removefromcourse', 'artefact.eschooladmin'),
        )
    )
);

$potentialusersform = array(
    'name' => 'potentialusers',
    'elements' => array(
        'potentialusers' => $potentialuserselement,
        'courseid' => array(
            'type' => 'hidden',
            'value' => $courseid,
        ),
        'roleid' => array(
            'type' => 'hidden',
            'value' => $roleid,
        ),
        'eschoolid' => array(
            'type' => 'hidden',
            'value' => $eschoolid,
        ),
        'submit' => array(
            'type' => 'submit',
            'value' => get_string('addtocourse', 'artefact.eschooladmin'),
        )
    )
);

$activeusersform = pieform($activeusersform);

$potentialusersform = pieform($potentialusersform);

$wwwroot = get_config('wwwroot');
$js = <<< EOF
function reload() {
    window.location.href = '{$wwwroot}artefact/eschooladmin/assignroles.php?roleid='+$('roletypeselect_roletype').value+'&courseid={$courseid}&eschoolid={$eschoolid}';
}
addLoadEvent(function() {
    connect($('roletypeselect_roletype'), 'onchange', reload);
});
EOF;

$smarty = smarty();
$smarty->assign('INLINEJAVASCRIPT', $js);
$smarty->assign('eschoolid', $eschoolid);
$smarty->assign('courseid', $courseid);
$smarty->assign('roletypeselector', $roletypeselector);
$smarty->assign('activeusersform', $activeusersform);
$smarty->assign('potentialusersform', $potentialusersform);
$smarty->assign('PAGEHEADING', TITLE);
$smarty->display('artefact:eschooladmin:assignroles.tpl');

function activeusers_submit(Pieform $form, $values)
{
    ArtefactTypeEschooladmin::remove_from_course($values);
    redirect("/artefact/eschooladmin/assignroles.php?roleid=".$values['roleid']."&courseid=".$values['courseid']."&eschoolid=".$values['eschoolid']);
}

function potentialusers_submit(Pieform $form, $values)
{
    $result = ArtefactTypeEschooladmin::add_to_course($values);
    redirect("/artefact/eschooladmin/assignroles.php?roleid=".$values['roleid']."&courseid=".$values['courseid']."&eschoolid=".$values['eschoolid']);
}

?>