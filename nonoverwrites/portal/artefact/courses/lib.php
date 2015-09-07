<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

defined('INTERNAL') || die();

require_once(gcr::rootDir . 'lib/xmlrpc/lib/xmlrpc.inc');

class PluginArtefactCourses extends PluginArtefact
{
    public function __construct()
    {

    }

    public static function get_artefact_types()
    {
        return array(
            'courses'
        );
    }

    public static function get_block_types()
    {
        return array();
    }

    public static function get_plugin_name()
    {
        return 'courses';
    }
}

class ArtefactTypeCourses extends ArtefactType
{
    public static function get_links($id)
    {
        return array();
    }

    public static function get_icon($options=null)
    {
    }

    public static function is_singular()
    {
        return false;
    }

    public static function get_courses($filter, $query, $limit, $offset, $eschools = array(), $eschoolcategory)
    {
        global $CFG;
        $courses = array();
        foreach ($eschools as $eschool)
        {
            if ($eschool->getConfigVar('gc_auto_creates_users'))
            {
                $auto_add_user = true;    
            }
            else
            {
                $auto_add_user = false;
            }
            $mdl_user = $CFG->current_app->getCurrentUser()->getUserOnEschool($eschool, $auto_add_user);
            
            if (!$CFG->current_app->getCurrentUser()->hasAccess($eschool))
            {
                continue;
            }
            $params = array(0);
            $querydata = array();
            $from = "FROM " .$eschool->getShortName().".mdl_course c, " .
                    " ".$eschool->getShortName().".mdl_enrol e ";
            $where = "WHERE c.category != ?
                            AND c.id = e.courseid
                            ";

            $visible = "WHERE c.visible = ?";
            $visible_param = "1";
            
            if(!empty($query))
            {
                $querydata = split(' ', preg_replace('/\s\s+/', ' ', strtolower(trim($query))));

                foreach ($querydata as $w)
                {
                    $searchsql = "(c.fullname ILIKE '%' || ? || '%' OR
                                   c.shortname ILIKE '%' || ? || '%' OR
                                   c.summary ILIKE '%' || ? || '%') ";
                    $where .= "
                    AND " . $searchsql . "
                    ";
                    $params = array_pad($params, count($params) + 3, $w);
                }
            }
            if ($filter != 'all' && $mdl_user)
            {
                $from .= ", ".$eschool->getShortName().".mdl_role_assignments ra, " .
                         " ".$eschool->getShortName().".mdl_context cx, " .
                         " ".$eschool->getShortName().".mdl_user_enrolments ue ";
                $where .= ' AND cx.instanceid = c.id
                            AND cx.id = ra.contextid
                            AND ue.userid = ra.userid
                            AND ue.enrolid = e.id
                            AND ra.userid = ?';
                $userid = $mdl_user->getObject()->id;
                array_push($params, $userid);
                if($filter == 'taking')
                {
                    $where .= ' AND ra.roleid = ?';
                    array_push($params, '5');
                }
                elseif($filter == 'teaching')
                {
                    $where .= ' AND ra.roleid = ?';
                    array_push($params, '3');
                }
            }

            if($eschoolcategory != 0)
            {
                list($eschoolid, $category) = explode('/', $eschoolcategory);
                $where .= 'AND c.category = ?';
                array_push($params, $category);
            }

            $sql = "SELECT DISTINCT ON (c.id) c.id, c.fullname, c.summary, c.startdate, c.visible, max(e.cost) as cost ";
            $sql .= $from;
            $sql .= $where . " group by c.id, c.fullname, c.summary, c.startdate, c.visible ";
            $eschool_courses = $eschool->gcQuery($sql, $params);
            if (count($eschool_courses) > 0)
            {
                foreach ($eschool_courses as $key => $courserecord)
                {
                    $courserecord->eschoolid = $eschool->getId();
                }
                //Control course visability, allow teachers, eschool admins, and gc admins to see all courses
                $eschool_courses = array_filter($eschool_courses,
                    function($val)
                    {
                        global $CFG; 
                        $current_user = $CFG->current_app->getCurrentUser();
                        $eschool = Doctrine::getTable('GcrEschool')->findOneById($val->eschoolid);
                        $mdl_course = $eschool->getCourse($val->id);
                        if ($mdl_course->isTeacher($current_user) || $current_user->getRoleManager()->hasPrivilege('EschoolAdmin'))
                        {
                            return true;
                        }
                        return $val->visible;
                    });
                if ($eschool_courses != null)
                {
                    if (count($courses) > 0)
                    {
                        $courses = array_merge($courses, $eschool_courses);
                    }
                    else
                    {
                        $courses = $eschool_courses;
                    }
                }
            }
        }

        $result = array();
        $result['count'] = count($courses);
        $result['limit'] = $limit;
        $result['filter'] = $filter;
        $result['offset'] = $offset;
        $result['data'] = false;
        if ($result['count'] > 0)
        {
            usort($courses, function ($a, $b)
            {
                $a_fullname = strtolower($a->fullname);
                $b_fullname = strtolower($b->fullname);
                return strcmp($a_fullname, $b_fullname);
            });
            $result['data'] = array_slice($courses, $offset, $limit);
        }
        return $result;
    }

    public static function create_course($fields, $new_category)
    {
        $startdate = 0;
        if($fields['startdate'] != null)
        {
            $startdate = $fields['startdate'];
        }

        list($eschoolid, $category) = explode('/', $fields['categoryid']);

        $params = array(
                'fullname' => $fields['fullname'],
                'shortname' => $fields['shortname'],
                'categoryid' => (int)$new_category[0]['id'],
                'summary' => $fields['summary'],
                'startdate' => $startdate,
                'numsections' => (int)$fields['numsections'],
                'format' => $fields['format'],
                'visible' => (int)$fields['visible'],
               );
        return (GcrMdlWebServices::createCourse($params, $eschoolid));
    }
    
    public static function create_category($fields)
    {
        list($eschoolid, $category) = explode('/', $fields['categoryid']);
        
        $params = array(
            'name' => $fields['shortname'],
            'parent' => (int)$category,
            'idnumber' => $fields['shortname'],
            'description' => $fields['summary'],
            'descriptionformat' => 1
        );
        return GcrMdlWebServices::createCategory($params, $eschoolid);
    }

    public static function search_courses($query)
    {
        return GcrMdlWebServices::searchCourses($query);
    }

    public static function build_courselist_html($data, $page, $eschool_param = 0, $category_param = 0)
    {
        $params = '';
        $resultcounttextsingular = get_string('course', 'artefact.courses');
        $resultcounttextplural = get_string('courses', 'artefact.courses');
        $smarty = smarty_core();
        $smarty->assign('data', isset($data['data']) ? $data['data'] : null);
        $smarty->assign('page', $page);
        if (isset($data['query']))
        {
            $smarty->assign('query', $data['query']);
            $params = '?query=' . $data['query'];
        }
        elseif (isset($data['filter']))
        {
            $smarty->assign('filter', $data['filter']);
            $params = '?filter=' . $data['filter'];
        }
        if (isset($eschool_param))
        {
            $params .= '&eschool=' . $eschool_param;
        }
        if (isset($category_param))
        {
            $params .= '&category=' . $category_param;
        }
        $data['tablerows'] = $smarty->fetch('artefact:courses:courseresults.tpl');
        $pagination = build_pagination(array(
            'id' => 'courselist_pagination',
            'url' => get_config('wwwroot') . 'artefact/courses/' . $page . '.php' . $params,
            'jsonscript' => 'artefact/courses/courses.json.php',
            'datatable' => 'courselist',
            'count' => $data['count'],
            'limit' => $data['limit'],
            'offset' => $data['offset'],
            'resultcounttextsingular' => $resultcounttextsingular,
            'resultcounttextplural' => $resultcounttextplural,
            'extradata' => array('page' => $page),
        ));
        $data['pagination'] = $pagination['html'];
        $data['pagination_js'] = $pagination['javascript'];

        return $data;
    }
    public static function get_potential_users($courseid, $eschool_id, $roleid = array())
    {
        global $CFG;
        $eschool = Doctrine::getTable('GcrEschool')->findOneById($eschool_id);
        $mdl_course = $eschool->getCourse($courseid);
        return $mdl_course->getPotentialUsers($roleid);
    }
}

?>