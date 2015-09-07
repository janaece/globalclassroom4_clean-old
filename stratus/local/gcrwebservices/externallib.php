<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("$CFG->libdir/externallib.php");

class gcr_web_services extends external_api
{
    public static function get_user_courses_parameters()
    {
        return new external_function_parameters(
            array(
                'options' => new external_single_structure(
                        array(
                            'username' => new external_multiple_structure(
                                new external_value(PARAM_TEXT, 'username')
                                , 'Username of user requesting their courses',
                                VALUE_REQUIRED)
                            ), 'options - operator OR is used', VALUE_DEFAULT, array())
                        )
        );
    }

    public static function get_user_courses($options)
    {
        global $CFG;
        require_once($CFG->dirroot.'/lib/weblib.php');

        $params = self::validate_parameters(self::get_user_courses_parameters(), array('options'=>$options));

        $shortname = $CFG->current_app->getShortName();
        
        $sql = "SELECT id, fullname FROM $shortname.mdl_course c
              JOIN (SELECT DISTINCT e.courseid
                      FROM $shortname.mdl_enrol e
                      JOIN $shortname.mdl_user_enrolments ue ON (ue.enrolid = e.id AND ue.userid = (SELECT id FROM $shortname.mdl_user u WHERE u.auth = ? AND u.username = ?))
                     WHERE ue.status = ? AND e.status = ? AND ue.timestart < ? AND (ue.timeend = 0 OR ue.timeend > ?)
                   ) en ON (en.courseid = c.id)";

        $fields = array('mnet', $params['options']['username'][0], ENROL_USER_ACTIVE, ENROL_INSTANCE_ENABLED, round(time(), -2), $params['now1']);

        $courses = $CFG->current_app->gcQuery($sql, $fields);
        
        $usercourses = array();
        if($courses)
        {
            foreach ($courses as $course)
            {
                $usercourse = array();
                $usercourse['id'] = $course->id;
                $usercourse['fullname'] = $course->fullname;
                $usercourses[] = $usercourse;
            }
        }

        return $usercourses;
    }

    public static function get_user_courses_returns()
    {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    'id'        => new external_value(PARAM_INT, 'course id'),
                    'fullname'  => new external_value(PARAM_TEXT, 'course full name'),
                )
            )
        );
    }
    
    public static function search_courses_parameters()
    {
        return new external_function_parameters(
            array(
                'options' => new external_single_structure(
                    array(
                        'query' => new external_value(PARAM_TEXT, 'query', 'query string', VALUE_REQUIRED)
                    )
                )
            )
        );
    }

    public static function search_courses($options)
    {
        $params = self::validate_parameters(self::search_courses_parameters(), array('options'=>$options));
        $searchquery = array();
        foreach($params as $param)
        {
            $searchquery[] = $param['query'];
        }

        $results = get_courses_search($searchquery);
        $resultcourses = array();
        if($results)
        {
            foreach ($results as $result)
            {
                $resultcourses[] = array(
                    'id' => $result->id,
                    'fullname' => $result->fullname,
                    'shortname' => $result->shortname,
                    'summary' => $result->summary
                    );
            }
        }
        return $resultcourses;
    }

    public static function search_courses_returns()
    {
        return new external_multiple_structure(
            new external_single_structure(
                array(
                    'id'       => new external_value(PARAM_INT, 'course id'),
                    'fullname' => new external_value(PARAM_TEXT, 'full name'),
                    'shortname' => new external_value(PARAM_TEXT, 'short name'),
                    'summary' => new external_value(PARAM_RAW, 'summary'),
                )
            )
        );
    }
}
?>
