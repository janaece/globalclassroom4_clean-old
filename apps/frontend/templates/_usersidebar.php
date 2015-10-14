<?php
exit;
  global $USER;
  $app = gcr::getApp();

  if ($app->isMoodle())
  {
    $institution = $app->getInstitution();
    $current_user = $app->getCurrentUser()->getUserOnInstitution($institution);
  }
  else
  {
    $current_user = $app->getCurrentUser();
  }

  $role_manager = $current_user->getRoleManager();
  $fullname = ucfirst($current_user->getFullnameString());
  $groups = $current_user->getUserGroups();
?>
<div id="sb-profile" class="sideblock">
  <div class="sideblock-header">
      <h3 style="height:<?php print GcrInstitutionTable::getSideblockProfileHeaderHeight($fullname, 15, 20, 20)?>px">
      <span id="gc-profile-header-fullname">
        <a href="<?php print $app->getAppUrl(); ?>user/view.php?id=<?php print $current_user->getObject()->id; ?>">
          <?php print wordwrap($fullname, 15, "<br />\n", true); ?>
        </a>
      </span>
      <span style="float:right">
        <a title="Account Settings" class="fr" href="<?php print $app->getAppUrl(); ?>account/">
          <img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/settings.png" alt="edit account settings" />
        </a>
        <a title="Profile Settings" class="fr" href="<?php print $app->getAppUrl(); ?>artefact/internal/" class="edit_profile">
          <img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/edit.gif" alt="edit profile settings" />
        </a>
      </span>
    </h3>
  </div>
  <div class="sideblock-content">
    <div id="user-profileicon">
      <a href="<?php print $app->getAppUrl(); ?>artefact/file/profileicons.php">
	<img src="<?php print $app->getAppUrl(); ?>thumb.php?type=profileicon&amp;maxwidth=50&amp;maxheight=50&amp;id=<?php print $current_user->getObject()->id; ?>&amp;earlyexpiry=1" alt="">
      </a>
      <br/>
      <?php
	$creators = $app->getConfigVar('creategroups');
	$cancreategroups = false;

	if ($creators == 'all')
	{
	    $cancreategroups = true;
	}
	elseif ($role_manager->hasPrivilege('EschoolAdmin'))
	{
	    $cancreategroups = true;
	}
	elseif ($creators == 'staff' && $role_manager->hasPrivilege('EschoolStaff'))
	{
	    $cancreategroups = true;
        }
      ?>
    </div>
    <ul>
        <li>
            <a href="<?php print $app->getUrl(); ?>/institution/viewUserStorage">
                <img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/icons/cloudstorage.png" alt="cloud storage"/>
                Files
            </a>
        </li>
        <li id="topics">
            <a href="<?php print $app->getAppUrl(); ?>group/topics.php">
              <img class="gc-mahara-sidebar-icon" src="<?php print $app->getAppUrl(); ?>theme/globalclassroom/static/images/icons/grouptopics.png" alt="topics"/>
              Discussions
            </a>
        </li>
        <li>
        <label class="gc-collapsable-header"><a href=""><img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/icons/portfolio-export.png" alt="export" /> ePortfolio</a></label>
        <ul class="gc-collapsed">
            <li>
                <a href="<?php print $app->getAppUrl(); ?>user/view.php">
                    <img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/icons/wall-sm.png" alt="Wall"/>
                    Wall
                </a>
            </li>
            <li>
                <a href="<?php print $app->getAppUrl(); ?>artefact/resume">
                    <img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/icons/resume.png" alt="Bio"/>
                    Edit Bio
                </a>
            </li>
            <li>
                <a href="<?php print $app->getAppUrl(); ?>artefact/plans/">
                    <img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/icons/plans.png" alt="plans"/>
                    Plans
                </a>
            </li>
            <li>
                <a href="<?php print $app->getAppUrl(); ?>artefact/blog/view">
                    <img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/icons/journal-brwn.png" alt="journal"/>
                    Blog
                </a>
            </li>
            
            <li>
                <a href="<?php print $app->getAppUrl(); ?>artefact/file/">
                    <img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/icons/files.png" alt="Samples"/>
                    Samples
                </a>
            </li>
            <li>
                <a href="<?php print $app->getAppUrl(); ?>export/">
                    <img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/icons/portfolio-export.png" alt="export" />
                    Export
                </a>
            </li>
            
        </ul>
    </li>
    <li>
        <label class="gc-collapsable-header"><a href=""><img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/icons/transactionhistory.gif" alt="account history" /> Account History</a></label>    
        <ul class="gc-collapsed">
            <li>
                <a href="<?php print $app->getUrl(); ?>/course/history">
                    <img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/icons/coursehistory.png" alt="course history"/>
                    Course History
                </a>
            </li>
            <li>
                <a href="<?php print $app->getUrl(); ?>/account/view">
                    <img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/icons/transactionhistory.gif" alt="transaction history"/>
                    Transaction History
                </a>
            </li>
        </ul>
    </li>
    <?php
    if ($current_user->getRoleManager()->hasRole('EclassroomUser'))
    { ?>
      <li id="eclassroom_management">
        <a href="<?php print $app->getUrl(); ?>/institution/eclassroom">
          <img class="gc-mahara-sidebar-icon" src="<?php print $app->getUrl(); ?>/images/icons/institutions.png" alt="eClassroom"/>
          eClassroom
        </a>
      </li>
    <?php
    } 

    $pendingfriends = $current_user->getPendingFriends();

    if ($pendingfriends->count > 0)
    { ?>
        <li id="pendingfriends">
          <a class="btn-message" href="<?php print $app->getAppUrl(); ?>user/myfriends.php?filter=pending">
            <span class="pendingfriendscontainer"><span class="pendingfriendscount"><?php print $pendingfriends->count; ?></span>
            <span class="pendingfriends"><?php $pendingfriends->count == 1 ? print 'pending friend' : print 'pending friends'; ?></span></span>
          </a>
        </li>
    <?php
    } ?> 
    <li id="groups">
      <label class="gc-collapsable-header">
        <a href="<?php print $app->getAppUrl(); ?>group/mygroups.php">
          <img class="gc-mahara-sidebar-icon" src="<?php print $app->getAppUrl(); ?>theme/globalclassroom/static/images/icons/mygroups.png" alt="my groups" />
          My Groups (<?php print count($groups); ?>)
        </a>
      </label>
      <ul>
      <?php
      
      if (!empty($groups))
      {
        foreach($groups as $group)
        { ?>
          <li>
            <a href="<?php print $app->getAppUrl(); ?>group/view.php?id=<?php print $group->id; ?>">
              <?php print $group->name; ?>
            </a>
            <?php
              if ($group->role == 'admin')
              {
                  print "(Admin)";
              }
            ?>
          </li>
          <?php
        } 
      } ?>
        <li>
            <small><b><a href="<?php print $app->getAppUrl(); ?>group/find.php">Find Groups</a></b></small>
        </li>
      </ul>
    </li>
    
    <?php
    $invitedgroups = $current_user->getInvitedGroups();

    if ($invitedgroups > 0)
    { ?>
      <li id="invitedgroups">
        <a class="btn-message" href="<?php print $app->getAppUrl(); ?>user/mygroups.php?filter=invite">
          <span class="invitedgroupscontainer"><span class="invitedgroupscount"><?php print $invitedgroups; ?></span>
          <span class="invitedgroups"><?php $invitedgroups == 1 ? print 'group invitation' : print 'group invitations'; ?></span></span>
        </a>
      </li>
    <?php
    }
    if ($USER->get('parentuser'))
    {
        print '<div id="changeuser">';
        print ' <a href="' . $app->getAppUrl() . 'admin/users/changeuser.php?restore=1">Become '. $USER->get('parentuser')->name . ' again</a>';
        print '</div>';
    } ?>
    </ul>
    <div class="cb"></div>
  </div>
</div>