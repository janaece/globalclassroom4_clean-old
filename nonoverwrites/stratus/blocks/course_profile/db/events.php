<?php
///////////////////////////////////////////////////////////////////////////
// Defines Workflow event handlers                                       //
///////////////////////////////////////////////////////////////////////////

/* List of handlers */

$handlers = array (

/*
 * course deleted
*/
    'course_deleted' => array (
        'handlerfile'      => '/blocks/course_profile/lib.php',// where to call
        'handlerfunction'  => 'delete_course_profile',// what to call
        'schedule'         => 'instant'
    )
);
?>
