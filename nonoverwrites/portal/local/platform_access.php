<?php

require_once('../config.php');
global $CFG;
$url = false;

// Check Authentication
if (!$CFG->current_app->isMahara() && !$CFG->current_app->isHome())
{
    $CFG->current_app->gcError('Attempt to access go-to-platform from outside start schema', 'gcdatabaseerror');
}
$current_user = $CFG->current_app->getCurrentUser();
$role_manager = $current_user->getRoleManager();

if (!$role_manager->hasPrivilege('GCStaff'))
{
    $CFG->current_app->gcError('Unprivileged attempt to access go-to-platform', 'gcdatabaseerror');
}
if (isset($_POST['platform_selector']))
{
    $id = $_POST['platform_selector'];
}
else
{
    $id = $_GET['id'];
}
$app = GcrInstitutionTable::getApp($id);
if (!$app)
{
    $CFG->current_app->gcError('Schema with shortname ' . $id . ' does not exist,', 'gcdatabaseerror');
}
if ($app->isMoodle())
{
    $institution = $app->getInstitution();
}
else
{
    $institution = $app;
}
$current_user_obj = $current_user->getObject();
$mhr_user_obj = $institution->getMhrUserByUsername($current_user_obj->username);

// if the user's account doesn't exist on the institution (check for email address)
if (!$mhr_user_obj)
{
    $admin = 0;
    if ($role_manager->hasPrivilege('GCUser'))
    {
        // we only give site admin privilege to those on home who are
        // institution admins, while everyone gets the eschool admin role
        $admin = 1;
    }
    $temp_password = GcrEschoolTable::generateRandomString(12);
    $new_user_credentials = $institution->buildUserCredentials($current_user_obj->username, $temp_password);
    $params = array(
        'id' => gcr::autoNumber,
        'password' => $new_user_credentials->password,
        'salt' => $new_user_credentials->salt,
        'active' => 1,
        'admin' => $admin,
        'firstname' => $current_user_obj->firstname,
        'lastname' => $current_user_obj->lastname,
        'email' => $current_user_obj->email,
        'quota' => 52428800,
        'passwordchange' => 1,
        'username' => $current_user_obj->username);
    
    $mhr_user = $institution->createUser($params);
    if ($mhr_user)
    {
        $mhr_user_obj = $mhr_user->getObject();
        $url = $institution->setupAutoLogin($current_user_obj->username, $temp_password, 60);
    }
}
else
{
    $mhr_user = new GcrMhrUser($mhr_user_obj, $institution);
}

// Add user to home mhr_institution as an admin
if ($current_user_obj->email == $mhr_user_obj->email)
{
    $user_app = $mhr_user->getApp();
    $mhr_usr_institution = $mhr_user->getMhrUsrInstitutionRecords($user_app->getMhrInstitution());
    if (!$mhr_usr_institution)
    {
        $mhr_user->addMhrInstitutionMembership();
        $user_app->updateMhrTable('usr_institution', array('admin' => '1'), 
                array('usr' => $mhr_user_obj->id, 'institution' => gcr::maharaInstitutionName));
    }
}
if (!$url)
{
    $url = $app->getAppUrl();
    if ($app->isMoodle())
    {
        $url .= '?transfer=' . $institution->getShortName();
    }
}
redirect($url);