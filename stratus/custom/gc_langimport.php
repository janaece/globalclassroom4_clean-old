<?php 
// This is essentially a stripped down version of /admin/langimport.php.  It won't render any html, its only a processing script for 
// the eSchool Customizations page.  A check should be on this page that if you are not an eSchool admin, it should error.

//$Id: langimport.php,v 1.36.2.11 2010/05/30 10:15:55 stronk7 Exp $
///This file only manages the installation of 1.6 lang packs.
///in downloads.moodle.org, they are store in separate directory /lang16
///in local server, they are stored in $CFG->dataroot/lang
///This helps to avoid confusion.

    require_once('../config.php');
    require_once($CFG->libdir.'/adminlib.php');
    require_once($CFG->libdir.'/filelib.php');
    require_once($CFG->libdir.'/componentlib.class.php');
    global $CFG;

    //this line prevented those without moodle:site/config capabilities from using the script
    //admin_externalpage_setup('langimport');
    
    //this will kill the page for those who aren't eSchool admins.
    if (!$CFG->current_app->getCurrentUser()->getRoleManager()->hasPrivilege('EschoolAdmin'))
    {
        $CFG->current_app->gcError("Unauthorized attempted access to eschool/langImport.", 'gcpageaccessdenied');
    }

    $mode          = optional_param('mode', 0, PARAM_INT);     //phase
    $pack          = optional_param('pack', array(), PARAM_FILE);   //pack to install
    $displaylang   = $pack;
    $uninstalllang = optional_param('uninstalllang', '', PARAM_FILE);
    $confirm       = optional_param('confirm', 0, PARAM_BOOL);
    $sitelang      = optional_param('sitelangconfig', '', PARAM_FILE);

    define('INSTALLATION_OF_SELECTED_LANG', 2);
    define('DELETION_OF_SELECTED_LANG', 4);

    $strlang         = get_string('langimport','admin');
    $strlanguage     = get_string('language');
    $strthislanguage = get_string('thislanguage');
    $title           = $strlang;

    //reset and diagnose lang cache permissions
    @unlink($CFG->dataroot.'/cache/languages');
    if (file_exists($CFG->dataroot.'/cache/languages')) {
        error('Language cache can not be deleted, please fix permissions in dataroot/cache/languages!');
    }
    get_list_of_languages(true); //refresh lang cache

    $notice_ok     = array();
    $notice_error = array();

    switch ($mode){

        case INSTALLATION_OF_SELECTED_LANG:    ///installation of selected language pack

            if (confirm_sesskey() and !empty($pack)) {
                set_time_limit(0);
                @mkdir ($CFG->dataroot.'/temp/', $CFG->directorypermissions);    //make it in case it's a fresh install, it might not be there
                @mkdir ($CFG->dataroot.'/lang/', $CFG->directorypermissions);

                if (is_array($pack)) {
                    $packs = $pack;
                } else {
                    $packs = array($pack);
                }

                foreach ($packs as $pack) {
                    if ($cd = new component_installer('http://download.moodle.org', 'lang16',
                                                        $pack.'.zip', 'languages.md5', 'lang')) {
                        $status = $cd->install(); //returns COMPONENT_(ERROR | UPTODATE | INSTALLED)
                        switch ($status) {

                            case COMPONENT_ERROR:
                                if ($cd->get_error() == 'remotedownloaderror') {
                                    $a = new object();
                                    $a->url = 'http://download.moodle.org/lang16/'.$pack.'.zip';
                                    $a->dest= $CFG->dataroot.'/lang';
                                    print_error($cd->get_error(), 'error', 'langimport.php', $a);
                                } else {
                                    print_error($cd->get_error(), 'error', 'langimport.php');
                                }
                            break;

                            case COMPONENT_INSTALLED:
                                $notice_ok[] = get_string('langpackinstalled','admin',$pack);
                            break;

                            case COMPONENT_UPTODATE:
                            break;

                        }
                    } else {
                        notify('Had an unspecified error with the component installer, sorry.');
                    }
                }
            }
        break;

        case DELETION_OF_SELECTED_LANG:    //delete a directory(ies) containing a lang pack completely

            if ($uninstalllang == 'en_utf8') {
                $notice_error[] = 'en_utf8 can not be uninstalled!';

            } else if (!$confirm && confirm_sesskey()) {
                admin_externalpage_print_header();
                notice_yesno(get_string('uninstallconfirm', 'admin', $uninstalllang),
                             'langimport.php?mode='.DELETION_OF_SELECTED_LANG.'&amp;uninstalllang='.$uninstalllang.'&amp;confirm=1&amp;sesskey='.sesskey(),
                             'langimport.php');
                print_footer();
                die;

            } else if (confirm_sesskey()) {
                $dest1 = $CFG->dataroot.'/lang/'.$uninstalllang;
                $dest2 = $CFG->dirroot.'/lang/'.$uninstalllang;
                $rm1 = false;
                $rm2 = false;
                if (file_exists($dest1)){
                    $rm1 = remove_dir($dest1);
                }
                if (file_exists($dest2)){
                    $rm2 = remove_dir($dest2);
                }
                get_list_of_languages(true); //refresh lang cache
                //delete the direcotries
                if ($rm1 or $rm2) {
                    $notice_ok[] = get_string('langpackremoved','admin');
                } else {    //nothing deleted, possibly due to permission error
                    $notice_error[] = 'An error has occurred, language pack is not completely uninstalled, please check file permissions';
                }
            }
        break;
    }    //close of main switch
    
    /**
     * Returns a list of available language packs from a
     * local copy shipped with standard moodle distro
     * this is for site that can't download components.
     * @return array
     */
    function get_local_list_of_languages() {
        global $CFG;
        $source = $CFG->dirroot.'/lib/languages.md5';
        $availablelangs = array();
        if ($fp = fopen($source, 'r')) {
            while(!feof ($fp)) {
                $availablelangs[] = split(',', fgets($fp,1024));
            }
        }
        return $availablelangs;
    }

    /**
     * checks the md5 of the zip file, grabbed from download.moodle.org,
     * against the md5 of the local language file from last update
     * @param string $lang
     * @param string $md5check
     * @return bool
     */
    function is_installed_lang($lang, $md5check) {
        global $CFG;
        $md5file = $CFG->dataroot.'/lang/'.$lang.'/'.$lang.'.md5';
        if (file_exists($md5file)){
            return (file_get_contents($md5file) == $md5check);
        }
        return false;
    }

    /**
     * Returns the latest list of available language packs from
     * moodle.org
     * @return array or false if can not download
     */
    function get_remote_list_of_languages() {
        $source = 'http://download.moodle.org/lang16/languages.md5';
        $availablelangs = array();

        if ($content = download_file_content($source)) {
            $alllines = split("\n", $content);
            foreach($alllines as $line) {
                if (!empty($line)){
                    $availablelangs[] = split(',', $line);
                }
            }
            return $availablelangs;

        } else {
            return false;
        }
    }
?>