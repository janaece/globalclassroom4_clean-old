<?php
	require_once('../config.php');
        global $CFG;

	$courseinfo = array_slice($_POST, 1, 5);
	$teacherinfo = array_slice($_POST, 6);

        $sql = 'SELECT * FROM ' . $CFG->current_app->getShortName() . '.mdl_enrol WHERE courseid = ? AND enrol = ?';
        $mdl_course = $CFG->current_app->gcQuery($sql, array($courseinfo['courseid'], 'globalclassroom'), true);

	$emailinvite = $_POST['emailaddress'];
	
	$params = array('fullname' => $courseinfo['fullname'], 
                        'shortname' => $courseinfo['shortname'],
                        'password'	=> $courseinfo['password'],
                        'courseid'	=> $courseinfo['courseid'],
                        'numteachers' => $courseinfo['numteachers'],
                        'password' => $mdl_course->password);
	
	foreach ($teacherinfo as $key => $value)
	{
		array_push($params, array_shift($teacherinfo));
	}
	
	$email = new GcrEmailer('invite_to_course', trim($emailinvite), 'Course Invite', $params, 'noreply@globalclassroom.us');
	$email->sendHtmlEmail();
?>