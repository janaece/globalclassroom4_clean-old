<?php
// GcrEmailerClass
// Created by Ron Stewart
// Last Updated: July, 11, 2011
//
// This class sends HTML emails.

class GcrEmailer
{
    protected $templateLocation;
    protected $templateName;
    protected $to;
    protected $bcc;
    protected $from;
    protected $body;
    protected $headers;
    protected $replyto;
    protected $subject;
    protected $params;

    function __construct ($templateName, $to, $subject, $params = null, $from = null, $replyto = null)
    {
        $this->templateLocation = gcr::emailTemplateDir;
        $this->templateName = $templateName;

        if ($params)
        {
            $this->params = $params;
        }
        else
        {
            $this->params = array();
        }

        if (is_array($to))
        {
            $this->to = implode(",", $to);
        }
        else
        {
            $this->to = $to;
        }

        $this->subject = $subject;

        if ($from)
        {
            $this->from = $from;
        }
        else
        {
            $this->from = gcr::gcEschoolNotification;
        }

        $this->replyto = $replyto;
        $this->bcc = "orderprocessing@globalclassroom.us";
        $this->bcc = "nandakumar54321@gmail.com";
        // include handy html segments which get used by numerous emails we send.
        $this->params['header_image'] = '<p><a href="http://' . gcr::frontPageDomain . '"><img style="border:none" src="' . GcrInstitutionTable::getHome()->getUrl() . '/images/gc3_logo.jpg" alt="" /></a></p>';
        $this->params['powered_by_GC'] = '<p><a href="http://' . gcr::frontPageDomain . '"><img src="' . GcrInstitutionTable::getHome()->getUrl() . '/images/poweredbyGC.png" alt="" /></a></p>';
        $this->params['contact'] = '<p><strong>Global Classroom Support</strong><br /><a href="mailto:support@globalclassroom.us" target="_blank">support@globalclassroom.us</a><br />(866) 535-3772</p>';
    }

    // This method sends an email using a php template file found in the termplateLocation directory.
    public function sendHtmlEmail()
    {
        try
        {
            $this->prepareHtmlEmail();
            $this->sendMail();
        }
        catch(Exception $e)
        {
            global $CFG;
            $CFG->current_app->gcError('Email Error: ' . $e->getMessage());
        }
        return true;
    }
    public function prepareHtmlEmail ()
    {
        $this->headers  = 'MIME-Version: 1.0' . "\n";
        $this->headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
        $this->headers .= "From: " . $this->from . "\n";
        if ($this->replyto)
        {
            $this->headers .= "Reply-To: " . $this->replyto . "\n";
        }
		$this->headers .= "Bcc: " . $this->bcc . "\n";
        ob_start(); # start buffer
        include($this->templateLocation . $this->templateName . '.php');
        # we pass the output to a variable
        $this->body = ob_get_contents();

        ob_end_clean(); # end buffer
        # and here's our variable filled up with the html
    }
    protected function sendMail()
    {
        mail($this->to, $this->subject, $this->body, $this->headers);
    }

    // Getter and Setters

    public function setTemplateLocation($location)
    {
        $this->templateLocation = $location;
    }
    public function getTemplateLocation()
    {
        return $this->templateLocation;
    }
    public function setTemplateName($name)
    {
        $this->templateName = $name;
    }
    public function getTemplateName()
    {
        return $this->templateName;
    }
    public function setTo($to)
    {
        $this->to = $to;
    }
    public function getTo()
    {
        return $this->to;
    }
    public function setFrom($from)
    {
        $this->from = $from;
    }
    public function getFrom()
    {
        return $this->from;
    }
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    public function getSubject()
    {
        return $this->subject;
    }
    public function setBody($body)
    {
        $this->body = $body;
    }
    public function getBody()
    {
        return $this->body;
    }
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }
    public function getHeaders()
    {
        return $this->headers;
    }
    public function setReplyto($replyto)
    {
        $this->replyto = $replyto;
    }
    public function getReplyto()
    {
        return $this->replyto;
    }
    public function setParams($params)
    {
        $this->params = $params;
    }
    public function getParams()
    {
        return $this->params;
    }
}