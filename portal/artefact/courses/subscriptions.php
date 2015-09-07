<?php

define('INTERNAL', true);
define('MENUITEM', 'courses');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'courses');
define('SECTION_PAGE', 'index');

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
global $CFG;
// this line redirects to the subscriptions link
redirect($CFG->current_app->getUrl() . '/course/subscriptions');
?>