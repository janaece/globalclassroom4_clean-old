<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$functions = array(
    'moodle_gcrwebservices_get_user_courses' => array(
        'classname'     => 'gcr_web_services',
        'methodname'    => 'get_user_courses',
        'classpath'     => 'local/gcrwebservices/externallib.php',
        'description'   => 'gets the courses in which one user is enrolled',
        'type'          => 'read',
    ),
    'moodle_gcrwebservices_search_courses' => array(
        'classname'     => 'gcr_web_services',
        'methodname'    => 'search_courses',
        'classpath'     => 'local/gcrwebservices/externallib.php',
        'description'   => 'searches courses',
        'type'          => 'read',
    ),
);
$services = array
            (
                'GlobalClassroom Web Services' => array
                (
                    'functions' =>  array
                                    (
                                        'moodle_gcrwebservices_get_user_courses',
                                        'moodle_gcrwebservices_search_courses',
                                        'moodle_course_get_courses',
                                        'moodle_course_create_courses',
                                        'moodle_enrol_get_enrolled_users',
                                        'moodle_role_assign',
                                        'moodle_role_unassign',
                                        'moodle_file_get_files',
                                        'moodle_file_upload',
                                        'moodle_group_create_groups',
                                        'moodle_group_get_groups',
                                        'moodle_group_get_course_groups',
                                        'moodle_group_delete_groups',
                                        'moodle_group_get_groupmembers',
                                        'moodle_group_add_groupmembers',
                                        'moodle_group_delete_groupmembers',
                                        'moodle_user_create_users',
                                        'moodle_user_delete_users',
                                        'moodle_user_get_users_by_id',
                                        'moodle_user_update_users',
                                    ),
                    'enabled' => 1,
                    'restrictedusers' => 0,
                ),
            );
?>
