{$app = gcr::getApp()}
{$eschool_admin = $app->hasPrivilege('EschoolAdmin')}

{if $eschool_admin}
<div id="sb-configuresite" class="sideblock sideblock-1">
    <h3>{str tag=configsite section=admin}</h3>
        <div class="sideblock-content">
            <ul>
                <li id="sb-siteoptions"><a href="{$WWWROOT}artefact/eschooladmin/settings.php">
                    <img src="{theme_url filename='images/icons/siteoptions.png'}"/>
                    &nbsp;{str tag=siteoptions section=admin}</a></li>
                <li id="sb-accounting"><a href="{$app->getUrl()}/account/view">
                    <img src="{theme_url filename='images/icons/eschool-accounting.png'}"/>
                    &nbsp;{str tag=accounting section=globalclassroom}</a></li>
                <li id="sb-accounting"><a href="{$app->getUrl()}/institution/eclassrooms">
                    <img src="{theme_url filename='images/icons/institutions.png'}"/>
                    &nbsp;{str tag=eclassroomsmanagement section=globalclassroom}</a></li>
                <li id="sb-institutionsettings"><a href="{$app->getUrl()}/institution/settings">
                    <img src="{theme_url filename='images/icons/custom-banner.png'}"/>
                    &nbsp;{str tag=banner section=globalclassroom}</a></li>
                <li id="sb-institutioninformation"><a href="{$app->getUrl()}/eschool/edit">
                    <img src="{theme_url filename='images/icons/editinformation.png'}"/>
                    &nbsp;{str tag=editinstitution section=globalclassroom}</a></li>
                <li id="sb-institutioncontact"><a href="{$app->getUrl()}/eschool/editContact">
                    <img src="{theme_url filename='images/icons/editcontact.png'}"/>
                    &nbsp;{str tag=editcontact section=globalclassroom}</a></li>
                <li id="sb-pages"><a href="{$WWWROOT}admin/site/pages.php">
                    <img src="{theme_url filename='images/icons/site-pages.png'}"/>
                    &nbsp;{str tag=siteviews section=admin}</a></li>
                <li><a href="{$WWWROOT}admin/statistics.php">
                    <img src="{theme_url filename='images/icons/sitestatistics.png'}"/>
                    &nbsp;{str tag=sitestatistics section=admin}</a></li>
            </ul>
        </div>
</div>
{/if}

<div id="sb-manageusers" class="sideblock sideblock-1">
    <h3>{str tag=configusers section=admin}</h3>
        <div class="sideblock-content">
            <ul>
                <li id="sb-usersearch"><a href="{$WWWROOT}admin/users/search.php">
                    <img src="{theme_url filename='images/icons/user-search.png'}" alt="user search" />
                    &nbsp;{str tag=usersearch section=admin}</a></li>
                <li id="sb-allonline"><a href="{$WWWROOT}user/online.php">
                    <img src="{theme_url filename='images/icons/institution-admin.png'}" alt="online users" />
                    &nbsp;Online users</a></li>                
                <li id="sb-suspendedusers"><a href="{$WWWROOT}admin/users/suspended.php">
                    <img src="{theme_url filename='images/icons/suspend-user.png'}" alt="suspended users"/>
                    &nbsp;{str tag=suspendedusers section=admin}</a></li>
                <li id="sb-adduser"><a href="{$WWWROOT}admin/users/add.php">
                    <img src="{theme_url filename='images/icons/add-user.png'}" alt="add user"/>
                    &nbsp;{str tag=adduser section=admin}</a></li>
                <li id="sb-addusersbycsv"><a href="{$WWWROOT}admin/users/uploadcsv.php">
                    <img src="{theme_url filename='images/icons/add-user-csv.png'}" alt="add users by csv"/>
                    &nbsp;{str tag=uploadcsv section=admin}</a></li>
                {if $eschool_admin}    
                <li id="sb-migrateusers"><a href="{$WWWROOT}artefact/eschooladmin/migrateusers.php">
                    <img src="{theme_url filename='images/icons/migrate_users.png'}" alt="migrate users"/>
                    &nbsp;{str tag=migrateusers section=globalclassroom}</a></li>
                {/if}
            </ul>
        </div>
</div>

<div id="sb-groups" class="sideblock sideblock-3">
    <h3>{str tag=managegroups section=admin}
        <a title="Edit Settings" class="fr" href="{$WWWROOT}admin/groups/groups.php">
        <img src="{theme_url filename='images/settings.png'}" alt="administer groups" /></a>
    </h3>
        <div class="sideblock-content">
            <ul>
                <li id="sb-creategroup"><a href="{$WWWROOT}group/edit.php">
                    <img src="{theme_url filename='images/icons/members.png'}" alt="create group" />
                    &nbsp;{str tag=creategroup section=group}</a></li>
                <li id="sb-groupcategories"><a href="{$WWWROOT}admin/groups/groupcategories.php">
                    <img src="{theme_url filename='images/icons/siteoptions.png'}" alt="group categories" />
                    &nbsp;{str tag=groupcategories section=admin}</a></li>
                <li id="sb-groupsbycsv"><a href="{$WWWROOT}admin/groups/uploadcsv.php">
                    <img src="{theme_url filename='images/icons/add-user-csv.png'}" alt="add groups by csv file"/>
                    &nbsp;{str tag=uploadgroupcsv section=admin}</a></li>
                <li id="sb-groupmembersbycsv"><a href="{$WWWROOT}admin/groups/uploadmemberscsv.php">
                    <img src="{theme_url filename='images/icons/add-user-csv.png'}" alt="update group members by csv file"/>
                    &nbsp;{str tag=uploadgroupmemberscsv section=admin}</a></li>
            </ul>
        </div>
</div>

<div id="sb-manageinstitutions" class="sideblock sideblock-2">
    <h3>{str tag=manageinstitutions section=admin}
        <a title="Edit Settings" class="fr" href="{$WWWROOT}admin/users/institutions.php">
        <img src="{theme_url filename='images/settings.png'}" alt="edit eschool settings" /></a>
    </h3>
        <div class="sideblock-content">
            <ul>
                <li id="sb-members"><a href="{$WWWROOT}admin/users/institutionusers.php">
                    <img src="{theme_url filename='images/icons/members.png'}"/>
                    &nbsp;{str tag=Members section=admin}</a></li>
                <li id="sb-institutionstaff"><a href="{$WWWROOT}admin/users/institutionstaff.php">
                    <img src="{theme_url filename='images/icons/institution-staff.png'}"/>
                    &nbsp;{str tag=institutionstaff section=admin}</a></li>
                <li id="sb-institutionadministrators"><a href="{$WWWROOT}admin/users/institutionadmins.php">
                    <img src="{theme_url filename='images/icons/institution-admin.png'}"/>
                    &nbsp;{str tag=institutionadmins section=admin}</a></li>
                <li id="sb-adminnotifications"><a href="{$WWWROOT}admin/users/notifications.php">
                    <img src="{theme_url filename='images/icons/admin-notification.png'}"/>
                    &nbsp;{str tag=adminnotifications section=admin}</a></li>
                <li id="sb-views"><a href="{$WWWROOT}view/institutionviews.php">
                    <img src="{theme_url filename='images/icons/pages.png'}"/>
                    &nbsp;{str tag=institutionviews section=admin}</a></li>
                <li id="sb-share"><a href="{$WWWROOT}view/institutionshare.php">
                    <img src="{theme_url filename='images/icons/share_admin.png'}"/>
                    &nbsp;{str tag=sharedviews section=view}</a></li>
                <li id="sb-files"><a href="{$WWWROOT}artefact/file/institutionfiles.php">
                    <img src="{theme_url filename='images/icons/files_admin.png'}"/>
                    &nbsp;{str tag=institutionfiles section=admin}</a></li>
            </ul>
        </div>
</div>