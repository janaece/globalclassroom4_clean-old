<?php

define('INTERNAL', 1);
define('PUBLIC', 1);
define('JSON', 1);

require(dirname(dirname(dirname(__FILE__))) . '/init.php');
safe_require('artefact', 'courses');

$filter = param_alpha('filter', 'all');
$query  = param_variable('query', '');
$eschool_param = param_integer('eschool', 0);
$category_param = param_variable('category', 0);
$offset = param_integer('offset', 0);
$limit  = param_integer('limit', 10);

if($eschool_param == 0)
{
    $available_eschools = $CFG->current_app->getMnetEschools();
    $courselist = ArtefactTypeCourses::get_courses($filter, $query, $limit, $offset, $available_eschools, 0);
}
else
{
    $eschools = array();
    array_push($eschools, Doctrine::getTable('GcrEschool')->findOneById($eschool_param));
    $courselist = ArtefactTypeCourses::get_courses($filter, $query, $limit, $offset, $eschools, $category_param);
}

$data = ArtefactTypeCourses::build_courselist_html($courselist, 'index', $eschool_param, $category_param);

json_reply(false, array('data' => $data));

?>
