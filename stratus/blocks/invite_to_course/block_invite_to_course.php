<?php

include_once($CFG->dirroot . '/course/lib.php');

class block_invite_to_course extends block_list
{
    function init()
    {
        $this->title = 'Invite to Course';
    }
    function has_config()
    {
        return false;
    }
    function get_content()
    {
        global $CFG;
        global $USER;
        global $COURSE;

        if ($this->content !== NULL)
        {
            return $this->content;
        }

        if(!isset($COURSE->id))
        {
            return false;
        }
        $mdl_user = $CFG->current_app->getCurrentUser();
        $mdl_course = $CFG->current_app->getCourse($COURSE->id);
        if (!$mdl_course)
        {
            return false;
        }
        $teachers = $mdl_course->getActiveUsersInCourse('3');
        $number_of_teachers = 0;
        //if multiple teachers...
        if (!empty($teachers))
        {
            foreach ($teachers as $teacher)
            {
                $mhr_user = $CFG->current_app->getUserOnInstitutionFromId($teacher->id);
                if ($mhr_user)
                {
                    $teacherinfo[$teacher->id]['id'] = $teacher->id;
                    $teacherinfo[$teacher->id]['picture'] = $CFG->current_app->getInstitution()->getAppUrl() .
                            'thumb.php?id='.$mhr_user->getObject()->id;
                    $teacherinfo[$teacher->id]['name'] = $teacher->firstname . ' ' . $teacher->lastname;
                    $teacherinfo[$teacher->id]['email'] = $teacher->email;
                    $number_of_teachers++;
                }
            }
        }

        //process array to store in data string POSTed to script
        $teacherstring = '';
        if (!empty($teacherinfo))
        {
            foreach ($teacherinfo as $id)
            {
                $teacherstring .=  '&picture'.$id['id'].'=' . $id['picture'] . '&name'.$id['id'].'=' . $id['name'] . '&email'.$id['id'].'=' . $id['email'];
            }
        }

        if (!empty($teachers))
        {
            foreach ($teachers as $teacher)
            {
                if ($mdl_user->getObject()->id == $teacher->id)
                {
                    $this->content = new stdClass;
                    $this->content->items = array();
                    $this->content->icons = array();
                    $this->content->items[] = '<div id="invite_form"><form id="invitestudent" method="" action="">
                                               <input id="emailinputbox" type="email" name="email" length="55" value="Enter email address" />
                                               <div id="invite_button"><input type="submit" class="invite_button" value="Invite!" /></div></div></form>';
                    $this->content->footer = '
                        <script type="text/javascript">
                        //<![CDATA[
                         jQuery(function() {
                            jQuery("input#emailinputbox").focus(function()
                            {
                                    if(jQuery("input#emailinputbox").val() == "Enter email address" || jQuery("input#emailinputbox").val() == "Invited!" || jQuery("input#emailinputbox").val() == "Bad input")
                                    {
                                            jQuery("input#emailinputbox").val("");
                                            return false;
                                    }
                            });

                            jQuery("input#emailinputbox").blur(function()
                            {
                                    if(jQuery("input#emailinputbox").val() == "")
                                    {
                                            jQuery("input#emailinputbox").val("Enter email address");
                                            return false;
                                    }
                            });

                            jQuery(".invite_button").click(function()
                            {
                                    var rege = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/;
                                    if(rege.test(jQuery("input#emailinputbox").val()))
                                    {
                                            var emailaddress = "emailaddress=" + jQuery("input#emailinputbox").val();
                                            jQuery("input#emailinputbox").val("Inviting...");
                                            var fullname = "&fullname=' . $mdl_course->getObject()->fullname . '";
                                            var shortname = "&shortname=' . $mdl_course->getObject()->shortname . '";
                                            var password = "&password=' . $mdl_course->getObject()->password . '";
                                            var courseid = "&courseid=' . $mdl_course->getObject()->id . '";
                                            var num_teachers = "&numteachers=' . $number_of_teachers . '";
                                            var teacherstring = "' . $teacherstring . '";
                                            var dataString = emailaddress + fullname + shortname + password + courseid + num_teachers + teacherstring;
                                            jQuery.ajax(
                                            {
                                                    type: "POST",
                                                    url: "../custom/send_email_invite.php",
                                                    data: dataString,
                                            });
                                            jQuery(document).ajaxSuccess(function() {
                                                    jQuery("input#emailinputbox").val("Invited!");
                                            });
                                            return false;
                                    }
                                    else
                                    {
                                            jQuery("input#emailinputbox").val("Bad input");
                                            return false;
                                    }
                            });
                         });
                        //]]>
                        </script>';
                    //$this->content->footer .= "<a href='http://support.globalclassroom.us/home/instructor-how-to-s/course-enrollment-1' target='_blank'>Course Enrollment Guide</a>";
                    return $this->content;
                    break 1;
                }
                else
                {
                    return '';
                }
            }
        }
    }
}
?>