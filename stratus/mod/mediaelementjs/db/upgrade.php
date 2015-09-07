<?php

defined('MOODLE_INTERNAL') || die;

function xmldb_mediaelementjs_upgrade($oldversion) {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    // Moodle v2.1.0 release upgrade line
    // Put any upgrade step following this

    return true;
}

?>
