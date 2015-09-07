<?php
require_once('../config.php');
global $CFG;
{
    redirect($CFG->current_app->getAppUrl() . "/course/category.php?id=" . $_POST['categorylist']);
}