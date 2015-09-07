<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

defined('INTERNAL') || die();

class PluginArtefactEschooladmin extends PluginArtefact
{
    public function __construct()
    {

    }
    
    public static function get_artefact_types()
    {
        return array(
            'eschooladmin'
        );
    }

    public static function get_block_types()
    {
        return array();
    }

    public static function get_plugin_name()
    {
        return 'eschooladmin';
    }
}

class ArtefactTypeEschooladmin extends ArtefactType
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
    public static function get_active_users_in_course($roleid, $courseid, $eschool_id)
    {
        global $CFG;
        $eschool = Doctrine::getTable('GcrEschool')->findOneById($eschool_id);
        $mdl_course = $eschool->getCourse($courseid);
        return $mdl_course->getActiveUsersInCourse($roleid);
    }
    public static function get_potential_users($courseid, $eschool_id, $roleid = array())
    {
        global $CFG;
        $eschool = Doctrine::getTable('GcrEschool')->findOneById($eschool_id);
        $mdl_course = $eschool->getCourse($courseid);
        return $mdl_course->getPotentialUsers($roleid);
    }
    public static function get_authorized_eschools()
    {
        global $CFG;
        if ($CFG->current_app->hasPrivilege('GCUser'))
        {
            $eschools = $CFG->current_app->getMnetEschools();
        }
        else
        {
            $eschools = $CFG->current_app->getEschools();
        }
        return $eschools;
    }
    public static function authorize_eschool($selected_eschool)
    {
        global $CFG;
        if ($selected_eschool)
        {
            $eschools = self::get_authorized_eschools();
            foreach ($eschools as $eschool)
            {
                if ($eschool->getShortName() == $selected_eschool->getShortName())
                {
                    return $eschool;
                }
            }
            
            $CFG->current_app->gcError('Unauthorized attempt to migrate users to eschool ' . 
                    $selected_eschool->getShortName(), 'gcdatabaseerror');
        }
        else
        {
            $CFG->current_app->gcError('Migrate users error: eschool not found', 'gcdatabaseerror');
        }
    }
    public static function remove_from_course($values)
    {
        global $CFG;
        $eschool = Doctrine::getTable('GcrEschool')->findOneById($values['eschoolid']);
        $mdl_course = $eschool->getCourse($values['courseid']);
        if (!$mdl_course)
        {
            $CFG->current_app->gcError('Course with id: ' . $values['courseid'] . 
                    ' not found', 'gcdatabaseerror');
        }
        try
        {
            foreach ($values['activeusers'] as $key => $userid)
            {
                $mdl_user_obj = $eschool->selectFromMdlTable('user', 'id', $userid, true);
                $mdl_user = new GcrMdlUser($mdl_user_obj, $eschool);
                $mdl_user->removeRolefromCourse($mdl_course, $eschool, $values['roleid']);
            }
            return true;
        }
        catch (Exception $e)
        {
            $CFG->current_app->gcError('something wen\'t wrong with removing the user\'s role. ' . $e);
        }
        return false;
    }
    public static function add_to_course($values)
    {
        global $CFG;
        $params = array();

        $eschool = Doctrine::getTable('GcrEschool')->findOneById($values['eschoolid']);
        $mdl_course = $eschool->getCourse($values['courseid']);
        if (!$mdl_course)
        {
            $CFG->current_app->gcError('Course with id: ' . $values['courseid'] . 
                    ' not found', 'gcdatabaseerror');
        }
        try
        {
            foreach ($values['potentialusers'] as $key => $userid)
            {
                $mdl_user_obj = $eschool->selectFromMdlTable('user', 'id', $userid, true);
                $mdl_user = new GcrMdlUser($mdl_user_obj, $eschool);
                $mdl_user->enrolUserinCourse($mdl_course, $eschool, $values['roleid']);
            }
            return true;
        }
        catch (Exception $e)
        {
            $CFG->current_app->gcError('something wen\'t wrong with adding users to course. ' . $e);
        }
        return false;
    }
}

?>