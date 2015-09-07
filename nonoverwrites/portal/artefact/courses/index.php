<?php

define('INTERNAL', true);
define('MENUITEM', 'courses');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'courses');
define('SECTION_PAGE', 'index');

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
global $CFG;
// this line redirects to the courses link
redirect($CFG->current_app->getUrl() . '/course/view');
require_once('pieforms/pieform.php');
safe_require('artefact', 'courses');

define('TITLE', get_string('courses', 'artefact.courses'));

$filter = param_alpha('filter', 'enrolled');
$eschool_param = param_integer('eschool', 0);
$category_param = param_variable('category', 0);
$query = param_variable('query', '');
$offset = param_integer('offset', 0);
$limit = 10;

global $CFG;
$available_eschools = $CFG->current_app->getMnetEschools();
$eschools = array();
$available_categories = array();
$categories = array();

foreach ($available_eschools as $eschool)
{
    if (!$eschool->isHome())
    {
        $eschools[$eschool->getId()] = $eschool->getFullName();
        $available_categories = array_merge($available_categories, $eschool->getCategories());
    }
}

if (count($available_eschools) > 1)
{
    $eschools[0] = 'All Catalogs';
}

natcasesort($eschools);
$eschoolelement = array('eschool' => array('type' => 'select', 'options' => $eschools, 'collapseifoneoption' => false));

foreach ($available_categories as $category)
{
    $categories[$category->eschoolid . '/' . $category->id] = $category->name;
}

if (count($available_categories) > 1)
{
    $categories[0] = 'All Categories';
}
else if (count($available_categories) == 1)
{
    $category_param = $category->eschoolid . '/' . $category->id;
}

natcasesort($categories);
$category_element = array('category' => array('type' => 'select', 'options' => $categories, 'defaultvalue' => $category_param, 'collapseifoneoption' => false));
$query_element = array('query' => array('type' => 'text', 'defaultvalue' => $query));

$elements = array();
$elements += $category_element;
$elements += $eschoolelement;
$elements += $query_element;


$submitreset = array('submit' => array(
                    'type' => 'submit',
                    'value' => get_string('coursesearch', 'artefact.courses'),
                ));

$elements += $submitreset;

$coursesearchform = pieform(array(
    'name' => 'course_search',
    'renderer' => 'oneline',
    'elements' => $elements
));

$courselist = array();
if ($eschool_param == 0)
{
    $courselist = ArtefactTypeCourses::get_courses($filter, $query, $limit, $offset, $available_eschools, 0);
    $data = ArtefactTypeCourses::build_courselist_html($courselist, 'index', $eschool_param, $category_param);
    if ($filter == 'enrolled' && !$data['data'])
    {
        $nocourses = true;
        $courselist = ArtefactTypeCourses::get_courses('all', $query, $limit, $offset, $available_eschools, 0);
        $data = ArtefactTypeCourses::build_courselist_html($courselist, 'index', $eschool_param, $category_param);
    }
    $data['query'] = $query;
    $data['filter'] = $filter;
}
else
{
    $eschools = array();
    array_push($eschools, Doctrine::getTable('GcrEschool')->findOneById($eschool_param));
    $courselist = ArtefactTypeCourses::get_courses($filter, $query, $limit, $offset, $eschools, $category_param);
    $data = ArtefactTypeCourses::build_courselist_html($courselist, 'index', $eschool_param, $category_param);
    $data['query'] = $query;
    $data['filter'] = $filter;
}
$js = <<< EOF
    jQuery(document).ready(function() {
        if(jQuery('#mycourseslabel').css('display') != 'none')
        {
            jQuery('#my_courses_button').val('Find a Course');
            jQuery('#search_icon').hide();
            jQuery('#course_search_query_container').hide();
            jQuery('#course_search_category_container').hide();
            jQuery('#course_search_eschool_container').hide();
            jQuery('#course_search_submit_container').hide();
        }
        if(jQuery('#course_search_eschool option').length == 1)
        {
            jQuery('#course_search_eschool').hide();
        }
        if(jQuery('#course_search_category option').length == 1)
        {
            jQuery('#course_search_category').hide();
        }
        first_eschool = jQuery('#course_search_eschool option').first();
        first_category = jQuery('#course_search_category option').first();
        if(first_eschool.val() != 0)
        {
            jQuery('#course_search_eschool option[value|="0"]').insertBefore(first_eschool);
        }
        if(first_category.val() != 0)
        {
            jQuery('#course_search_category option[value|="0"]').insertBefore(first_category);
        }
    });
    addLoadEvent(function () {
        p = {$data['pagination_js']}
        var paginatorData = new PaginatorData();
        connect('my_courses_button', 'onclick', function (event) {
            replaceChildNodes('messages');
            if(jQuery('#my_courses_button').val() == 'My Courses')
            {
                jQuery('#my_courses_button').val('Processing...');
                jQuery('#search_icon').hide();
                jQuery('#course_search_query_container').hide();
                jQuery('#course_search_category_container').hide();
                jQuery('#course_search_eschool_container').hide();
                jQuery('#course_search_submit_container').hide();
                var params = {'query':'',
                              'filter': 'enrolled',
                              'eschool': 0,
                              'category': 0};
                p.sendQuery(params);
                jQuery('#my_courses_button').val('Find a Course');
                jQuery('#mycourseslabel').show();
            }
            else if(jQuery('#my_courses_button').val() == 'Find a Course')
            {
                jQuery('#my_courses_button').val('Processing...');
                jQuery('#search_icon').show();
                jQuery('#course_search_query_container').show();
                jQuery('#course_search_category_container').show();
                jQuery('#course_search_eschool_container').show();
                jQuery('#course_search_submit_container').show();
                var params = {'query': $('course_search_query').value,
                              'filter': 'all',
                              'eschool': 0,
                              'category': 0};
                p.sendQuery(params);
                jQuery('#my_courses_button').val('My Courses');
                jQuery('#mycourseslabel').hide();
            }
            event.stop();
        });
        connect('course_search_submit', 'onclick', function (event) {
            jQuery('#mycourseslabel').hide();
            replaceChildNodes('messages');
            jQuery('#course_search_submit').val('Processing...');
            var params = {'query': $('course_search_query').value,
                          'filter': 'all',
                          'eschool': $('course_search_eschool').value,
                          'category': $('course_search_category').value};
            p.sendQuery(params);
            event.stop();
        });
        connect('course_search_eschool', 'onchange', function (event) {
            jQuery('#mycourseslabel').hide();
            replaceChildNodes('messages');
            jQuery('#course_search_submit').val('Processing...');
            // allow only the categories to the corresponding eschool to be displayed
            var eschoolid = jQuery('#course_search_eschool').val();
            jQuery(jQuery('#course_search_category option').get().reverse()).each(function(){
                var category = jQuery(this).val().split("/");
                if(category[0] != 0)
                {
                    if(eschoolid == 0)
                    {
                        jQuery(this).show();
                        return;
                    }
                    if(eschoolid != category[0])
                    {
                        jQuery(this).hide();
                    }
                    if(eschoolid == category[0])
                    {
                        jQuery(this).show();
                    }
                }
                jQuery(this).attr('selected', 'selected');
            });
            var params = {'query': $('course_search_query').value,
                          'filter': 'all',
                          'eschool': $('course_search_eschool').value,
                          'category': $('course_search_category').value};
            p.sendQuery(params);
            event.stop();
        });
        connect('course_search_category', 'onchange', function (event) {
            jQuery('#mycourseslabel').hide();
            replaceChildNodes('messages');
            jQuery('#course_search_submit').val('Processing...');
            // if a category is selected, automatically go to the eschool that category lives in
            var categoryid = jQuery('#course_search_category').val().split("/");
            jQuery(jQuery('#course_search_eschool option').get().reverse()).each(function(){
                if(jQuery(this).val() != 0)
                {
                    if(categoryid[0] == jQuery(this).val())
                    {
                        jQuery(this).attr('selected', 'selected');
                    }
                }
            });
            var eschoolid = jQuery('#course_search_eschool').val();
            jQuery(jQuery('#course_search_category option').get().reverse()).each(function(){
                var category = jQuery(this).val().split("/");
                if(eschoolid == 0)
                {
                    jQuery(this).show();
                    return;
                }
                if(eschoolid != category[0])
                {
                    jQuery(this).hide();
                }
                if(eschoolid == category[0])
                {
                    jQuery(this).show();
                }
                if(category[0] == 0)
                {
                    jQuery(this).show();
                    return;
                }
            });
            var params = {'query': $('course_search_query').value,
                          'filter': 'all',
                          'eschool': $('course_search_eschool').value,
                          'category': $('course_search_category').value};
            p.sendQuery(params);
            event.stop();
        });
    });
    addLoadEvent(function () {
        jQuery('div.expandable').expander({
            slicePoint: 205,
            expandEffect: 'show',
            expandText: 'Show more',
            userCollapseText: 'Show less',
        });
    });

    // We want the paginator to tell us when a page gets changed.
    // @todo: remember checked/unchecked state when changing pages
    function PaginatorData() {
        var self = this;
        var params = {};

        this.pageChanged = function() {
            jQuery('#course_search_submit').val('Search');
            jQuery('div.expandable').expander({
                slicePoint: 205,
                expandEffect: 'show',
                expandText: 'Show more',
                userCollapseText: 'Show less',
            });
        }

        paginatorProxy.addObserver(self);
        connect(self, 'pagechanged', self.pageChanged);
    }
EOF;

$javascript = array('paginator');

$smarty = smarty($javascript, array(), array('applychanges' => 'mahara'), array('sideblocks' => array(membership_sideblock(), classroom_sideblock())));
$smarty->assign('PAGEHEADING', TITLE);
$smarty->assign('INLINEJAVASCRIPT', $js);
if (isset($nocourses))
{
    $smarty->assign('nocourses', true);
}
if ($eclassroom_eschools = $CFG->current_app->getEclassroomEschools())
{
    $eclassroom_eschools = true;
    $smarty->assign('eclassroom_eschools', $eclassroom_eschools);
}

$eclassrooms = $CFG->current_app->getCurrentUser()->getEclassrooms();

$owned_school_ids = array();
foreach ($eclassrooms as $eclassroom)
{
    $purchased_eclassroom_school = Doctrine::getTable('GcrEschool')->findOneByShortName($eclassroom->eschool_id);
    $owned_school_ids[] = $purchased_eclassroom_school->id;
}
$smarty->assign('owned_school_ids', $owned_school_ids);
$smarty->assign('form', $coursesearchform);
$smarty->assign('results', $data);
$smarty->display('artefact:courses:index.tpl');

function course_search_submit(Pieform $form, $values)
{
}

function membership_sideblock()
{
    return array('name' => 'membership', 'weight' => 11, 'data' => array());
}

function classroom_sideblock()
{
    return array('name' => 'eclassroom', 'weight' => 11, 'data' => array());
}
?>