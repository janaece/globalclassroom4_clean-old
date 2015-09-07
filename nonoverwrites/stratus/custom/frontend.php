<?php
require_once('../config.php');
global $CFG;
$CFG->current_app->requireLogin();
if (isset($_GET['url']))
{
    redirect(GcrWantsUrlTable::getRedirectUrl($_GET['url'], true));
}
else
{
    redirect($CFG->current_app->getUrl());
}