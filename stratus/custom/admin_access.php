<?php
require_once('../config.php');
global $CFG;
global $USER;
if (!is_siteadmin($USER->id))
{
	error('You do not have permission to access this page.');
}
if ($eschool = Doctrine::getTable('Eschool')->findOneByShortName($_POST['eschoolList']))
{
	redirect($eschool->setupAdminAutoLogin());
}