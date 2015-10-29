<?php

class gcr
{
    // Moodle and Database Settings
    // All directory values must end with a trailing '/' for consistency
    const rootDomainName = "globalclassroom.us";
    const domain = 'https://globalclassroom.us';
    const domainName = 'globalclassroom.us';
    const moodleDomain = 'globalclassroom.us/stratus';
    const maharaDomain = 'globalclassroom.us/portal';
    const frontPageDomain = 'globalclassroom.us';
    const rootDir = '/var/www/globalclassroom4/';
    const webDir = '/var/www/globalclassroom4/web/';
    const moodleDir = '/var/www/globalclassroom4/web/stratus/';
    const maharaDir = '/var/www/globalclassroom4/web/portal/';
    const moodledataDir = '/opt/moodledata/globalclassroom4/';
    const DBName = 'globalclassroom4';
    const DBHostName = '10.0.39.93';
    const DBPort = '5432';
    const globalDBAdminName = 'gc4_admin';
    const gchomeSchemaMoodle = 'startadmin';
    const gchomeSchemaMahara = 'start';
    const gcPrimaryMoodleTemplate = 'template20110201';
    const gcPrimaryMaharaTemplate = 'itemplate20110212';
    const errorStringFile = '/var/www/globalclassroom4/web/stratus/custom/lang/';
    const emailTemplateDir = '/var/www/globalclassroom4/lib/email/';
    const externalSdkDir = '/var/www/globalclassroom4/external_sdk/';
    const inboxMessageTemplateDir = '/var/www/globalclassroom4/lib/inbox_message/';
    const templateDumpDir = '/var/www/globalclassroom4/templateDump/';
    const autoNumber = 'gcrAutoNumberFlag';
    const maharaPrefix = 'mhr_';
    const moodlePrefix = 'mdl_';
    const maharaInstitutionName = 'home';
    const defaultDashboardTemplateTitle = 'GcrDashboardTemplate';
    const moodleMessageTypeName = 'moodlemessage';
    const defaultSupportUrl = 'https://globalclassroom.zendesk.com';
    const startDateForApplication = 1293840000; // Jan 1, 2011
    const backgroundProcessCount = 8;
    const updatePollingMin = 30000;
    const updatePollingMax = 60000;

    // Trials
    const gcEschoolNotification = 'notifications@globalclassroom.us';
    const trialLengthInDays = 30;
    const classroomTrialLengthInDays = 0;
    const membershipTrialLengthInDays = 0;
    const unpaidGracePeriod = 7;

    // PayPal
    const gcPurchaseNotification = 'purchase@globalclassroom.us';
    const paypalSandbox = false;
    const paypalMinimumBalance = 500;
    const paypalPayoffInterval = 7;
    const API_EMAIL_SB = "rstewart@globalclassroom.us";
    const API_USERNAME_SB = "rstewart_api1.globalclassroom.us";
    const API_PASSWORD_SB = "E6Q72696YRKTKJY5";
    const API_SIGNATURE_SB = "AIS78r5genGcb-LP2y8larg.qAP6AsmlIc9xJxtnXzVqmI6wQhJHnhNr";
    const API_URL_SB = "https://api-3t.sandbox.paypal.com/nvp/";
    const API_EMAIL = "bwarne@globalclassroom.us";
    const API_USERNAME = "bwarne_api1.globalclassroomusa.org";
    const API_PASSWORD = "BUHYJLZZR8G989J4";
    const API_SIGNATURE = "AFXKMYbXffyi.nylwbjgfNGolyKZAeYU1BNgStO.y4L0XxYteO4sQgFP";
    const API_URL = "https://api-3t.paypal.com/nvp";
    
    // Constant Contact
    const CC_USER = 'globalclassroom';
    const CC_PASS = 'globalclassroom0509';
    const CC_APIKEY = '5c5afc13-e5d3-4ed4-b582-6f441d9aa9ed';
    const CC_LIST = 'eSchool Newsletter';
// Products Images URL
	const imagesBaseUrl = 'https://lcrcconline.globalclassroom.us/portal/theme/globalclassroom/static/images/';

    // S3
    const AWS_URL_EXPIRE_LINK = '5 minutes'; //URL expiration in seconds; modification not recommended
    const AWS_URL_EXPIRE_UPLOAD = '1 hour';
    
    public static function initialize()
    {
        $url = explode('.', $_SERVER['HTTP_HOST']);
        if (($url[0] . '.' . $url[1]) != self::rootDomainName)
        {
            // Repair problem where fast CGI is sending *.globalclassroom.us as 
            // the $_SERVER['SERVER_NAME']
            $_SERVER['SERVER_NAME'] = str_replace('*', $url[0], $_SERVER['SERVER_NAME']);
            
            // redirect all http:// to https://
            if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off' || $_SERVER['SERVER_PORT'] != 443)
            {
                header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
                die();
            }
            if ((defined('GC_SYMFONY_LOADED') && GC_SYMFONY_LOADED) == false)
            {
                self::loadSymfony();
                define ('GC_SYMFONY_LOADED', true);
            }

            global $CFG;
            if ($institution = Doctrine::getTable('GcrInstitution')->findOneByShortName($url[0]))
            {
                if (isset($CFG))
                {
                    GcrInstitutionTable::constructCurrentInstitution($institution);
                }
                else
                {
                    define('INTERNAL', 1);
                    define('PUBLIC', 1);
                    global $USER, $db, $THEME, $SESSION;
                    require '/var/www/globalclassroom4/web/portal/init.php';
                }
            }
            else if ($eschool = Doctrine::getTable('GcrEschool')->findOneByShortName($url[0]))
            {
                if (isset($CFG))
                {
                    GcrEschoolTable::constructCurrentEschool($eschool);
                }
                else
                {
                    require_once '/var/www/globalclassroom4/web/stratus/config.php';
                }
            }
            else
            {
                // redirect to front page if the short_name doesn't exist
                header('Location: https://' . self::frontPageDomain . '/notfound');
                die();
            }
            return true;
        }
        return false;
    }
    public static function loadSymfony()
    {
        require_once(gcr::rootDir . 'config/ProjectConfiguration.class.php');
        $configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
        sfContext::createInstance($configuration);
        $databaseManager = new sfDatabaseManager($configuration);
        $databaseManager->loadConfiguration();
    } 
    public static function loadSdk($name)
    {
        require_once(gcr::externalSdkDir . $name . '/loader.php');
    } 
    public static function getApp()
    {
        global $CFG;
        return $CFG->current_app;
    }
}
