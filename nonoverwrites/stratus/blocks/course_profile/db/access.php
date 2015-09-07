<?php

$capabilities = array(

    'block/course_profile:edit' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'coursecreator' => CAP_ALLOW,
            'manager' => CAP_ALLOW,
            'eschooladmin' => CAP_ALLOW
        )
    )
);

?>
