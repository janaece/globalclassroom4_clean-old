<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$ADMIN->add('root', new admin_category('eschooladmin', 'Catalog Administration'));
$ADMIN->add('eschooladmin', new admin_externalpage('editeschool', 'Edit Information',
            $CFG->current_app->getUrl().'/eschool/edit', 'moodle/user:viewalldetails'));
$ADMIN->add('eschooladmin', new admin_externalpage('editcontact', 'Edit Contact',
            $CFG->current_app->getUrl().'/eschool/editContact', 'moodle/user:viewalldetails'));
$ADMIN->add('eschooladmin', new admin_externalpage('editeschoolsettings', 'Edit Settings',
            $CFG->current_app->getUrl().'/eschool/settings', 'moodle/user:viewalldetails'));
$ADMIN->add('eschooladmin', new admin_externalpage('editeschoolbanner', 'Edit Banner',
            $CFG->current_app->getAppUrl().'/custom/edit_banner.php', 'moodle/user:viewalldetails'));
if($CFG->current_app->isMoodle() && $CFG->current_app->isHome())
{
    $CFG->current_app->requireLogin();
    $ADMIN->add('root', new admin_externalpage('homeadmin', 'Platform Administration',
                $CFG->current_app->getUrl().'/homeadmin/eschool', 'moodle/role:manage'));
    $ADMIN->add('root', new admin_externalpage('usersearch', 'User Search',
                $CFG->current_app->getUrl().'/homeadmin/userSearch', 'moodle/role:manage'));
    $ADMIN->add('root', new admin_externalpage('trialadmin', 'Trial Administration',
                $CFG->current_app->getUrl().'/homeadmin/trials', 'moodle/role:manage'));
    $ADMIN->add('root', new admin_externalpage('payoffsadmin', 'Payoffs Administration',
                $CFG->current_app->getUrl().'/homeadmin/payoffs', 'moodle/role:manage'));
    $ADMIN->add('root', new admin_externalpage('commissionadmin', 'Commission Administration',
                $CFG->current_app->getUrl().'/homeadmin/commission', 'moodle/role:manage'));
}
?>