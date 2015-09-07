<?php
$role_manager = $CFG->current_app->getCurrentUser()->getRoleManager();
$gc_admin = $role_manager->hasPrivilege('GCAdmin');
$is_guest = $role_manager->hasRole('Guest');

$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hassidepre = $PAGE->blocks->region_has_content('side-pre', $OUTPUT);
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);
$haslogininfo = (empty($PAGE->layout_options['nologininfo']));

$showsidepre = $hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT);
$showsidepost = $hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT);

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

$bodyclasses = array();
if ($showsidepre && !$showsidepost) {
    $bodyclasses[] = 'side-pre-only';
} else if ($showsidepost && !$showsidepre) {
    $bodyclasses[] = 'side-post-only';
} else if (!$showsidepost && !$showsidepre) {
    $bodyclasses[] = 'content-only';
}
if ($hascustommenu) {
    $bodyclasses[] = 'has_custom_menu';
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="/js/html5shiv.js"></script>
    <script type="text/javascript">jQuery.noConflict();</script>
    <meta name="description" content="<?php p(strip_tags(format_text($SITE->summary, FORMAT_HTML))) ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
</head>
<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join(' ', $bodyclasses)) ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page">

    <div id="page-header" class="clearfix">
        <table id="header-table">
            <tr>
                <td id="headertop_left">
                    <h1 id="site-logo">
                        <div id="banner"></div>
                    </h1>
                </td>
                <td id="headertop_center">
                </td>
                <td id="headertop_right">
                    <?php
                    if($CFG->current_app->isLoggedIn())
                    {
                        if ($gc_admin || session_is_loggedinas())
                        { ?>
                            <div class="headermenu">
                                <?php echo $OUTPUT->login_info();
                                if (!empty($PAGE->layout_options['langmenu']))
                                {
                                    echo $OUTPUT->lang_menu();
                                }
                                echo $PAGE->headingmenu; ?>
                            </div>
                        <?php
                        }
                        else if ($is_guest)
                        { ?>
                            <div class="headermenu">
                                <?php
                                if (!$institution = $CFG->current_app->getInstitutionFromCookie())
                                {
                                    $institution = $CFG->current_app->getInstitution();
                                } ?>
                                <form name="register_form" action="<?php print $institution->getAppUrl(); ?>register.php" method="POST">
                                <input type="hidden" id="gcr_wants_url" name="gcr_wants_url" value="<?php print str_replace($institution->getUrl(), '', $CFG->current_app->getInstitutionJumpUrl($CFG->current_app->getRequestUri(), $institution)); ?>" />
                                <input type="hidden" id="gcr_wants_url_type" name="gcr_wants_url_type" value="registration" />
                                </form>
                                You are current using guest access (
                                <a href="<?php print $CFG->current_app->getAppUrl(); ?>/login/index.php">
                                    Login
                                </a> /
                                <a href="javascript:document.register_form.submit()">
                                    Register
                                </a> )
                            </div>
                        <?php
                        }
                        else
                        { 
                            print mahara_right_nav();
                        }
                    }
                    ?>
                </td>
            </tr>
        </table>
        <?php if ($hascustommenu) { ?>
        <div id="custommenu"><?php echo $custommenu; ?></div>
         <?php } ?>
        <div id="main-nav">
            <?php print ($gc_admin) ? '' : mahara_navigation(); ?>
        </div>
        <div id="sub-nav">
            <div class="clearfix">
                <?php if($hasnavbar) { ?>
                    <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
                        <div class="navbutton">
                        <?php
                            echo $PAGE->button;
                            if (!empty($PAGE->layout_options['langmenu']))
                            {
                                echo $OUTPUT->lang_menu();
                            }
                        ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
<!-- END OF HEADER -->

    <div id="page-content">
        <div id="messages"><?php print $CFG->current_app->getConfigVar('gc_eschool_message'); ?></div>
        <div id="region-main-box">
            <div id="region-post-box">

                <div id="region-main-wrap">
                    <div id="region-main">
                        <div class="region-content">
                            <?php echo core_renderer::MAIN_CONTENT_TOKEN ?>
                        </div>
                    </div>
                </div>

                <?php if ($hassidepre) { ?>
                <div id="region-pre" class="block-region">
                    <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-pre') ?>
                    </div>
                </div>
                <?php } ?>

                <?php if ($hassidepost) { ?>
                <div id="region-post" class="block-region">
                    <div class="region-content">
                        <?php echo $OUTPUT->blocks_for_region('side-post') ?>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>

<!-- START OF FOOTER -->
    <?php if ($hasfooter) { ?>
    <div id="page-footer" class="clearfix">
        <?php
        echo $OUTPUT->standard_footer_html();
        echo mahara_footer();
        ?>
    </div>
    <?php } ?>

</div>

<?php
$CFG->current_app->includeGCJQueryLib();
print $OUTPUT->standard_end_of_body_html(); 
$current_user = $CFG->current_app->getCurrentUser();
if ($current_user->getRoleManager()->hasRole('GCAdmin')) 
{ ?>
    <script type="text/javascript">
        jQuery('html').css('background', '#000');
    </script>
<?php  
} ?>
</body>
</html>