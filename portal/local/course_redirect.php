<?php

require_once('../config.php');
global $CFG;
$url = $CFG->current_app->getUrl();

if (isset($_GET['eschool']) && isset($_GET['course']))
{
    if (isset($_COOKIE['gc_platform']))
    {
        $institution = GcrInstitutionTable::getInstitution($_COOKIE['gc_platform']);
    }
    else
    {
        $institution = $CFG->current_app;
    }
    $eschool = GcrEschoolTable::getEschool($_GET['eschool']);  
    $course = $eschool->getCourse($_GET['course']);
    if ($course)
    {
        $url = $eschool->getAppUrl() . '/course/view.php?id=' . $course->getObject()->id . 
            '&transfer=' . $institution->getShortName();
    }
}
redirect($url);
