<?php

define('INTERNAL', true);
define('MENUITEM', 'courses');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'courses');
define('SECTION_PAGE', 'create');

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
require_once(get_config('docroot') . 'api/xmlrpc/lib.php');
require_once('pieforms/pieform.php');
require_once('searchlib.php');
safe_require('artefact', 'courses');

define('TITLE', get_string('create', 'artefact.courses'));
$data = '';

$mhr_user = $CFG->current_app->getCurrentUser();
$role_manager = $mhr_user->getRoleManager();

if ($role_manager->hasPrivilege('EschoolStaff'))
{
    $available_eschools = $CFG->current_app->getEschools();
}
else if ($role_manager->hasRole('EclassroomUser'))
{
    $available_eclassrooms = $mhr_user->getEclassrooms();
}
else
{
    $smarty = smarty();
    $smarty->display('artefact:courses:cantcreate.tpl');
    exit;
}

$eschools = array();
$categories = array();

if(isset($_GET['err']))
{
   $data = "<div id='errmsg'>".$_GET['err']."</div>";
}

if(isset($available_eschools))
{
    foreach($available_eschools as $eschool)
    {
        if(!$eschool->isHome() || $mhr_user->getRoleManager()->hasPrivilege('GCUser'))
        {
            $eschools[$eschool->getId()] = $eschool->getFullName();
            $categories = array_merge($categories, $eschool->getCourseCategories(false));
        }
    }
    $eschool_element = array(
        'type' => 'select',
        'title' => get_string('eschool', 'artefact.courses'),
        'options' => $eschools,
        'collapseifoneoption' => false,
        'help' => true,
    );
}
else
{
    foreach($available_eclassrooms as $eclassroom)
    {       
        $eschool = Doctrine::getTable('GcrEschool')->findOneByShortName($eclassroom->eschool_id);
        $eschools[$eschool->getId()] = $eschool->getFullName();
        $categories = array_merge($categories, $eschool->getCourseCategories(false));
    }
    $eschool_element = array(
        'type' => 'select',
        'title' => get_string('eschool', 'artefact.courses'),
        'options' => $eschools,
        'collapseifoneoption' => false,
        'help' => true,
    );
}

$category_element = array();

if(isset($categories))
{
    $categoryoptions = array();

    foreach($categories as $category)
    {
        $mdl_category = $category->getObject();
        $categoryoptions[$category->getApp()->getId() . '/' . $mdl_category->id] = $mdl_category->name;
    }
    asort($categoryoptions);
    $category_element = array(
            'type' => 'select',
            'title' => get_string('categoryid', 'artefact.courses'),
            'options' => $categoryoptions,
        'collapseifoneoption' => false,
        'help' => true,
    );
}

$sections = array();
for ($i = 0; $i < 53; $i++)
{
    $sections[] = $i;
}

$coursecreateform = pieform(array(
    'name' => 'course_create',
    'renderer' => 'table',
    'plugintype' => 'artefact',
    'pluginname' => 'courses',
    'elements' => array(
        'course' => array(
            'type' => 'fieldset',
            'legend' => 'Create a course',
                'elements' => array(
                    'fullname' => array(
                        'type' => 'text',
                        'title' => get_string('fullname', 'artefact.courses'),
                        'rules' => array(
                            'required' => true
                        ),
                        'help' => true,
                    ),
                    'shortname' => array(
                        'type' => 'text',
                        'title' => get_string('shortname', 'artefact.courses'),
                        'rules' => array(
                            'required' => true
                        ),
                        'help' => true,
                    ),
                    'eschool' => $eschool_element,
                    'categoryid' => $category_element,
                    'summary' => array(
                        'type' => 'wysiwyg',
                        'title' => get_string('summary', 'artefact.courses'),
                        'defaultvalue' => get_string('summarydefaulttext', 'artefact.courses'),
                        'cols'  => 50,
                        'rows'  => 8,
                        'help' => true,
                    ),
                    'format' => array(
                        'type' => 'select',
                        'title' => get_string('format', 'artefact.courses'),
                        'options' => array(
                            'weeks' => 'Weekly format',
                            'topics'=>'Topics format',
                            'social' => 'Social format',
                            'scorm' => 'SCORM format',
                            ),
                        'help' => true,
                    ),
                    'numsections' => array(
                        'type' => 'select',
                        'title' => get_string('numsections', 'artefact.courses'),
                        'options' => $sections,
                        'defaultvalue' => 10,
                    ),
                    'startdate' => array(
                        'type' => 'date',
                        'title' => get_string('startdate', 'artefact.courses'),
                        'defaultvalue' => time(),
                        'help' => true,
                    ),
                    'cost' => array(
                        'type' => 'text',
                        'title' => get_string('cost', 'artefact.courses'),
                        'help' => true,
                    ),
                    'password' => array(
                        'type' => 'text',
                        'title' => get_string('password', 'artefact.courses'),
                        'help' => true,
                    ),
                    'visible' => array(
                        'type' => 'checkbox',
                        'title' => get_string('visible', 'artefact.courses'),
                        'defaultvalue' => true,
                        'help' => true,
                    ),
                )
            ),
        'submit' => array(
            'type' => 'submit',
            'value' => get_string('create', 'artefact.courses')
        )
    )
));

$js = <<< EOF
jQuery(document).ready(function() {
    var eschoolid = jQuery('#course_create_eschool').val();
    jQuery(jQuery('#course_create_categoryid option').get().reverse()).each(function(){
        var category = jQuery(this).val().split("/");
        if(eschoolid != category[0])
        {
            jQuery(this).hide();
        }
        if(eschoolid == category[0])
        {
            jQuery(this).show();
            jQuery(this).attr('selected', 'selected');
        }
    });
});
addLoadEvent(function () {
    connect('course_create_eschool', 'onchange', function (event) {
        // allow only the categories to the corresponding eschool to be displayed
        var eschoolid = jQuery('#course_create_eschool').val();
        jQuery(jQuery('#course_create_categoryid option').get().reverse()).each(function(){
            var category = jQuery(this).val().split("/");
            if(eschoolid != category[0])
            {
                jQuery(this).hide();
            }
            if(eschoolid == category[0])
            {
                jQuery(this).show();
                jQuery(this).attr('selected', 'selected');
            }
        });
    });
});
EOF;

$smarty = smarty(array(), array(), $pagestrings = array(), $extraconfig = array());
$smarty->assign('PAGEHEADING', TITLE);
$smarty->assign('INLINEJAVASCRIPT', $js);
$smarty->assign('form', $coursecreateform);
$smarty->assign('results', $data);
$smarty->display('artefact:courses:create.tpl');

function course_create_validate(Pieform $form, $values)
{
    if ($form->get_error('fullname'))
    {
        $form->set_error('fullname', get_string('errorfullname', 'artefact.courses'));
    }
    if ($form->get_error('shortname'))
    {
        $form->set_error('shortname', get_string('errorshortname', 'artefact.courses'));
    }
}

function course_create_submit(Pieform $form, $values)
{
    global $CFG;
    $mhr_user = $CFG->current_app->getCurrentUser();
    try
    {
        $new_category = ArtefactTypeCourses::create_category($values);
        $results = ArtefactTypeCourses::create_course($values, $new_category);

        if (!$results)
        {
            $CFG->current_app->gcError('Course creation error', 'gcdatabaseerror');
        }
        else
        {
            foreach ($results as $course_data)
            {
                $eschool = Doctrine::getTable('GcrEschool')->findOneById($values['eschool']);
                $mdl_course = $eschool->getCourse($course_data['id']);
                if(isset($values['password']))
                {
                    $eschool->alterGcrEnrollmentByName($mdl_course, 'password', $values['password']);
                }
                if($values['cost'] > 0)
                {
                    $eschool->alterGcrEnrollmentByName($mdl_course, 'cost', $values['cost']);
                }
                $mdl_user = $mhr_user->getUserOnEschool($eschool, true);
                $mdl_user->enrolUserinCourse($mdl_course, $eschool, '3');
                if ($mhr_user->hasEclassroom())
                {
                    if ($mdl_role = $eschool->selectFromMdlTable('role', 'shortname', 'eclassroomcourseowner', true))
                    {
                        $mdl_user->enrolUserinCourse($mdl_course, $eschool, $mdl_role->id);
                    }
                }
            }
            redirect($eschool->getAppUrl()."/course/view.php?id=".$course_data['id']."&transfer=".$CFG->current_app->getShortName());
        }
    }
    catch (Exception $e)
    {
        $CFG->current_app->gcError('Problem with create course submission: ' . $e, 'gcdatabaseerror');
    }
}
?>