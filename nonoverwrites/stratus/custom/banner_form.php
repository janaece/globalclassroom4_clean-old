<?php
global $CFG;
require_once("$CFG->libdir/formslib.php");

class eschool_banner_form extends moodleform 
{
    function definition() 
    {
        global $CFG;
        $mform = $this->_form;
        
        $mform->addElement('filepicker', 'userfile', 'Upload Banner', null, 
                array('maxbytes' => 1024 * 1024, 'accepted_types' => '*.png', '*.jpg', '*.gif','*.jpeg'));
        $this->add_action_buttons(true, get_string('savechanges'));
        
    }
}
?>