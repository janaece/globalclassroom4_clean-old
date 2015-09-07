<?php

class block_contact_info extends block_list
{
    function init()
    {
        $this->title = 'Contact Info';
    }
    function has_config()
    {
        return false;
    }
    function get_content()
    {
    global $CFG;
    $addressObject = $CFG->current_app->getAddressObject();
    $contact1Object = $CFG->current_app->getPersonObject();

    $this->content = new stdClass;
    $this->content->items = array();
    $this->content->icons = array();

    $this->content->items[]	= '<div id="name">'. $contact1Object->first_name . ' '. $contact1Object->last_name .'</div>';
    $this->content->items[] .= '<div id="phone">' . $contact1Object->phone1 . '</div>';
    $this->content->items[] .= '<div id="email">' . $contact1Object->email . '</div>';
    return $this->content;
    }
}
?>