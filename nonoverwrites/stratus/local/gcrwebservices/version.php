<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$plugin->version  = 2011042800;   // The (date) version of this module + 2 extra digital for daily versions
                                  // This version number is displayed into /admin/forms.php
                                  // TODO: if ever this plugin get branched, the old branch number
                                  // will not be updated to the current date but just incremented. We will
                                  // need then a $plugin->release human friendly date. For the moment, we use
                                  // display this version number with userdate (dev friendly)
$plugin->requires = 2010021900;  // Requires this Moodle version
$plugin->cron     = 0;
?>
