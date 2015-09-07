<?php

defined('MOODLE_INTERNAL') || die;

require_once ($CFG->dirroot.'/course/moodleform_mod.php');
require_once($CFG->dirroot.'/mod/mediaelementjs/locallib.php');

class mod_mediaelementjs_mod_form extends moodleform_mod
{
    function definition()
    {
        global $CFG, $DB;
        $mform = $this->_form;

        $config = get_config('mediaelementjs');
        
        //-------------------------------------------------------
        $mform->addElement('header', 'general', get_string('general', 'form'));
        $mform->addElement('text', 'name', get_string('name'), array('size'=>'48'));
        if (!empty($CFG->formatstringstriptags))
        {
            $mform->setType('name', PARAM_TEXT);
        } 
        else
        {
            $mform->setType('name', PARAM_CLEANHTML);
        }
        $mform->addRule('name', null, 'required', null, 'client');
        $this->add_intro_editor($config->requiremodintro);

        //-------------------------------------------------------
        $mform->addElement('header', 'content', get_string('contentheader', 'mediaelementjs'));
        $mform->addElement('url', 'externalurl', get_string('externalurl', 'mediaelementjs'), array('size'=>'60'), array('usefilepicker'=>true));
        //-------------------------------------------------------
        $mform->addElement('header', 'optionssection', get_string('optionsheader', 'mediaelementjs'));

        if ($this->current->instance)
        {
            $options = resourcelib_get_displayoptions(explode(',', $config->displayoptions), $this->current->display);
        } 
        else
        {
            $options = resourcelib_get_displayoptions(explode(',', $config->displayoptions));
        }
        if (count($options) == 1)
        {
            $mform->addElement('hidden', 'display');
            $mform->setType('display', PARAM_INT);
            reset($options);
            $mform->setDefault('display', key($options));
        } 
        else
        {
            $mform->addElement('select', 'display', get_string('displayselect', 'mediaelementjs'), $options);
            $mform->setDefault('display', $config->display);
            $mform->setAdvanced('display', $config->display_adv);
            $mform->addHelpButton('display', 'displayselect', 'mediaelementjs');
        }

        if (array_key_exists(RESOURCELIB_DISPLAY_POPUP, $options))
        {
            $mform->addElement('text', 'popupwidth', get_string('popupwidth', 'mediaelementjs'), array('size'=>3));
            if (count($options) > 1)
            {
                $mform->disabledIf('popupwidth', 'display', 'noteq', RESOURCELIB_DISPLAY_POPUP);
            }
            $mform->setType('popupwidth', PARAM_INT);
            $mform->setDefault('popupwidth', $config->popupwidth);
            $mform->setAdvanced('popupwidth', $config->popupwidth_adv);

            $mform->addElement('text', 'popupheight', get_string('popupheight', 'mediaelementjs'), array('size'=>3));
            if (count($options) > 1)
            {
                $mform->disabledIf('popupheight', 'display', 'noteq', RESOURCELIB_DISPLAY_POPUP);
            }
            $mform->setType('popupheight', PARAM_INT);
            $mform->setDefault('popupheight', $config->popupheight);
            $mform->setAdvanced('popupheight', $config->popupheight_adv);
        }

        if (array_key_exists(RESOURCELIB_DISPLAY_AUTO, $options) or
          array_key_exists(RESOURCELIB_DISPLAY_EMBED, $options) or
          array_key_exists(RESOURCELIB_DISPLAY_FRAME, $options))
        {
            $mform->addElement('checkbox', 'printheading', get_string('printheading', 'mediaelementjs'));
            $mform->disabledIf('printheading', 'display', 'eq', RESOURCELIB_DISPLAY_POPUP);
            $mform->disabledIf('printheading', 'display', 'eq', RESOURCELIB_DISPLAY_OPEN);
            $mform->disabledIf('printheading', 'display', 'eq', RESOURCELIB_DISPLAY_NEW);
            $mform->setDefault('printheading', $config->printheading);
            $mform->setAdvanced('printheading', $config->printheading_adv);

            $mform->addElement('checkbox', 'printintro', get_string('printintro', 'mediaelementjs'));
            $mform->disabledIf('printintro', 'display', 'eq', RESOURCELIB_DISPLAY_POPUP);
            $mform->disabledIf('printintro', 'display', 'eq', RESOURCELIB_DISPLAY_OPEN);
            $mform->disabledIf('printintro', 'display', 'eq', RESOURCELIB_DISPLAY_NEW);
            $mform->setDefault('printintro', $config->printintro);
            $mform->setAdvanced('printintro', $config->printintro_adv);
        }

        //-------------------------------------------------------
        $mform->addElement('header', 'parameterssection', get_string('parametersheader', 'mediaelementjs'));
        $mform->addElement('static', 'parametersinfo', '', get_string('parametersheader_help', 'mediaelementjs'));
        $mform->setAdvanced('parametersinfo');

        if (empty($this->current->parameters))
        {
            $parcount = 5;
        } 
        else
        {
            $parcount = 5 + count(unserialize($this->current->parameters));
            $parcount = ($parcount > 100) ? 100 : $parcount;
        }
        $options = mediaelementjs_get_variable_options($config);

        for ($i=0; $i < $parcount; $i++)
        {
            $parameter = "parameter_$i";
            $variable  = "variable_$i";
            $pargroup = "pargoup_$i";
            $group = array(
                $mform->createElement('text', $parameter, '', array('size'=>'12')),
                $mform->createElement('selectgroups', $variable, '', $options),
            );
            $mform->addGroup($group, $pargroup, get_string('parameterinfo', 'mediaelementjs'), ' ', false);
            $mform->setAdvanced($pargroup);
        }

        //-------------------------------------------------------
        $this->standard_coursemodule_elements();

        //-------------------------------------------------------
        $this->add_action_buttons();
    }

    function data_preprocessing(&$default_values)
    {
        if (!empty($default_values['displayoptions']))
        {
            $displayoptions = unserialize($default_values['displayoptions']);
            if (isset($displayoptions['printintro']))
            {
                $default_values['printintro'] = $displayoptions['printintro'];
            }
            if (isset($displayoptions['printheading']))
            {
                $default_values['printheading'] = $displayoptions['printheading'];
            }
            if (!empty($displayoptions['popupwidth']))
            {
                $default_values['popupwidth'] = $displayoptions['popupwidth'];
            }
            if (!empty($displayoptions['popupheight']))
            {
                $default_values['popupheight'] = $displayoptions['popupheight'];
            }
        }
        if (!empty($default_values['parameters']))
        {
            $parameters = unserialize($default_values['parameters']);
            $i = 0;
            foreach ($parameters as $parameter=>$variable)
            {
                $default_values['parameter_'.$i] = $parameter;
                $default_values['variable_'.$i]  = $variable;
                $i++;
            }
        }
    }

}
