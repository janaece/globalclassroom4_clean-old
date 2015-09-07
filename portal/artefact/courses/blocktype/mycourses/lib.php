<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

defined('INTERNAL') || die;

class PluginBlocktypeMycourses extends PluginBlocktype
{
    public static function get_title()
    {
        return get_string('title', 'blocktype.courses/mycourses');
    }

    public static function get_description()
    {
        return get_string('description', 'blocktype.courses/mycourses');
    }

    public static function get_categories()
    {
        return array('general');
    }

    public static function render_instance(BlockInstance $instance, $editing=false)
    {
        global $CFG;
        safe_require('artefact', 'courses');
        $configdata = $instance->get('configdata');
        $list_size = isset($configdata['maxcourses']) ? $configdata['maxcourses'] : 8;
        $smarty = smarty_core();
        $smarty->assign('list_size', $list_size);
        $smarty->assign('view', $instance->get('view'));
        return $smarty->fetch('blocktype:mycourses:mycourses.tpl');
    }

    public static function has_instance_config()
    {
        return true;
    }

    public static function instance_config_form($instance)
    {
        $configdata = $instance->get('configdata');
        return array(
            'display' => array(
                'type' => 'select',
                'title' => 'Display',
                'width' => '100%',
                'height' => '150px',
                'defaultvalue' => isset($configdata['display']) ? $configdata['display'] : '',
                'options' => array(
                    'enrolled' => 'All My Courses',
                    'taking' => 'Courses I\'m Taking',
                    'teaching' => 'Courses I\'m Teaching',
                    ),
            ),
            'maxcourses' => array(
                'type' => 'text',
                'title' => 'Maximum number of courses to display',
                'description' => 'Displays the specified number of courses (max 25)',
                'defaultvalue' => isset($configdata['maxcourses']) ? $configdata['maxcourses'] : 5,
                'rules' => array(
                    'minvalue' => 1,
                    'maxvalue' => 25,
                ),
            ),
        );
    }

    public static function artefactchooser_element($default=null)
    {
        
    }

    public static function allowed_in_view(View $view)
    {
        if($view->get('title') == gcr::defaultDashboardTemplateTitle)
        {
            return true;
        }
        else
        {
            return $view->get('owner') != null;
        }
    }
}

?>
