<?php
    include('../config.php');
    global $CFG;
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php print $CFG->wwwroot . '/theme/' . $CFG->theme . '/user_styles.css';?>" />
    <title>Contact Information</title>
</head>
<body>
    <h2>Contact Information</h2>
    <p>
        <?php
        if ($CFG->current_app->getAddressObject()->getStreet2() && $CFG->current_app->getAddressObject()->getStreet2() != "")
        {
                $street2 = "{$CFG->current_app->getAddressObject()->getStreet2()}<br />";
        }

        print "{$CFG->current_app->getPersonObject()->getFirstName()} {$CFG->current_app->getPersonObject()->getLastName()}<br />";
        print "{$CFG->current_app->getAddressObject()->getStreet1()}<br />" . $street2;
        print "{$CFG->current_app->getAddressObject()->getCity()}, {$CFG->current_app->getAddressObject()->getState()} {$CFG->current_app->getAddressObject()->getZipcode()}<br />";
        print "{$CFG->current_app->getPersonObject()->getPhone1()}<br />";
        print "<a href=\"mailto:{$CFG->current_app->getPersonObject()->getEmail()}\">{$CFG->current_app->getPersonObject()->getEmail()}</a><br />";
        ?>
    </p>
</body>
</html>