<?php

define('INTERNAL', 1);
define('MENUITEM', 'courses');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PAGE', 'invite');

require(dirname(dirname(dirname(__FILE__))).'/init.php');
require_once('pieforms/pieform.php');
safe_require('artefact', 'courses');
require_once('searchlib.php');
safe_require('search', 'internal');
define('TITLE', 'Assign Roles');
$courseid = param_integer('courseid');
$eschoolid = param_integer('eschoolid', $CFG->current_app->getDefaultEschool()->id);

$mhr_user = $CFG->current_app->getCurrentUser();
$eschool = Doctrine::getTable('GcrEschool')->findOneById($eschoolid);
$course = $eschool->getCourse($courseid);

if(!$course->isTeacher($mhr_user))
{
    $smarty = smarty();
    $smarty->display('artefact:courses:index.tpl');
    exit;
}
//$users = ArtefactTypeCourses::get_potential_users($courseid, $eschoolid, array());
$users = search_user('', 0, 0, array('exclude' => $USER->get('id')));

$invitees = array();
foreach($users['data'] as $user)
{
    $invitees[$user['id']] = $user['firstname'] . " " .$user['lastname'] . " (" . $user['username'] . ")";
}

$inviteelement = array();
$inviteelement['type'] = 'userlist';
$inviteelement['multiple'] = true;
$inviteelement['options'] = $invitees;
$inviteelement['collapseifoneoption'] = false;

$inviteelement['title'] = 'Invite Users to Course';
$inviteelement['lefttitle'] = 'Available Users';
$inviteelement['righttitle'] = get_string('userstobeinvited', 'admin');

$inviteform = array(
    'name' => 'invite',
    'elements' => array(
        'invitees' => $inviteelement,
        'courseid' => array(
            'type' => 'hidden',
            'value' => $courseid,
        ),
        'eschoolid' => array(
            'type' => 'hidden',
            'value' => $eschoolid,
        ),
        'submit' => array(
            'type' => 'submit',
            'value' => 'Invite Users',
        ),
    ),
);

$inviteform = pieform($inviteform);

$js = <<< EOF
jQuery(document).ready(function() {
    jQuery('#invitees_groups').css('display', 'none');
});
EOF;

$smarty = smarty();
$smarty->assign('INLINEJAVASCRIPT', $js);
$smarty->assign('form', $inviteform);
$smarty->display('artefact:courses:invite.tpl');

function invite_submit(Pieform $form, $values)
{
    global $CFG;
    $mhr_user = $CFG->current_app->getCurrentUser();
    $eschool = Doctrine::getTable('GcrEschool')->findOneById($values['eschoolid']);
    $mdl_course = $eschool->getCourse($values['courseid']);
    $to = array();
    foreach($values['invitees'] as $id)
    {
        array_push($to, $CFG->current_app->getMhrUserById($id));
    }
    $from = "noreply@globalclassroom.us";
    $replyto = "noreply@globalclassroom.us";

    $params = array(
        'courseid'  => $mdl_course->getObject()->id,
        'fullname'  => $mdl_course->getObject()->fullname,
        'shortname' => $mdl_course->getObject()->shortname,
        'password'  => $mdl_course->getObject()->password,
        'eschoolid' => $values['eschoolid'],
    );
    $email = new GcrUserEmailer('mahara_invite', $to, 'You\'ve been Invited!', $params, $from, $replyto);
    $email->sendHtmlEmail();
    redirect('/artefact/courses/invite.php?eschoolid=' . $values['eschoolid'] .
            '&courseid=' . $values['courseid']);
}

?>
