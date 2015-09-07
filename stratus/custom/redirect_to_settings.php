<?php
    require_once('../config.php');
    global $CFG;
    header('Location: ' . $CFG->current_app->getUrl() . '/eschool/settings');