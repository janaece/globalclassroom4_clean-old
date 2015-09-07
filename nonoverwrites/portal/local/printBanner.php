<?php
require('../config.php');
global $CFG;
$mhr_institution = $CFG->current_app->getMhrInstitution();
redirect($CFG->current_app->getAppUrl() . 'thumb.php?type=logobyid&id=' . 
            $mhr_institution->logo);
?>
