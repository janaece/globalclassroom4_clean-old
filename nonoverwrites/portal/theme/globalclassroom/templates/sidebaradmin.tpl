{$app=gcr::getApp()}
{$home = GcrEschoolTable::getHome()}
<div id="sb-configuresite" class="sideblock sideblock-1">
    <h3>{str tag=configsite section=admin}</h3>
        <div class="sideblock-content">
            <ul>
                <li id="sb-siteoptions"><a href="{$WWWROOT}admin/site/options.php">{str tag=siteoptions section=admin}</a></li>
                <li id="sb-editsitepages"><a href="{$WWWROOT}admin/site/pages.php">{str tag=editsitepages section=admin}</a></li>
                <li id="sb-menus"><a href="{$WWWROOT}admin/site/menu.php">{str tag=menus section=admin}</a></li>
                <li id="sb-networking"><a href="{$WWWROOT}admin/site/networking.php">{str tag=networking section=admin}</a></li>
                <li id="sb-pages"><a href="{$WWWROOT}admin/site/views.php">{str tag=siteviews section=admin}</a></li>
                <li id="sb-share"><a href="{$WWWROOT}admin/site/shareviews.php">{str tag=sharedviews section=view}</a></li>
                <li id="sb-files"><a href="{$WWWROOT}artefact/file/sitefiles.php">{str tag=sitefiles section=admin}</a></li>
                <li id="sb-institutionsettings"><a href="{$app->getUrl()}/institution/settings">{str tag=banner section=globalclassroom}</a></li>
                <li id="sb-institutioninformation"><a href="{$app->getUrl()}/eschool/edit">{str tag=editinstitution section=globalclassroom}</a></li>
                <li id="sb-institutioncontact"><a href="{$app->getUrl()}/eschool/editContact">{str tag=editcontact section=globalclassroom}</a></li>
                <li id="sb-eclassrooms"><a href="{$app->getUrl()}/institution/eclassrooms">{str tag=eclassroomsmanagement section=globalclassroom}</a>
                <li id="sb-addcatalog"><a href="{$WWWROOT}artefact/courses/catalogs.php">{str tag=addremovecatalog section=globalclassroom}</a></li>
                <li id="sb-addcollection"><a href="{$app->getUrl()}/eschool/new">{str tag=createnewcatalog section=globalclassroom}</a></li>
                <li id="sb-accounting"><a href="{$home->getUrl()}/account/view?eschool={$app->getShortName()}" target="_blank">{str tag=accounting section=globalclassroom}</a></li>
            </ul>
        </div>
</div>

<div id="sb-users" class="sideblock sideblock-2">
    <h3>{str tag=configusers section=admin}</h3>
        <div class="sideblock-content">
            <ul>
                <li id="sb-allonline"><a href="{$WWWROOT}user/online.php">Online users</a></li>
                <li id="sb-usersearch"><a href="{$WWWROOT}admin/users/search.php">{str tag=usersearch section=admin}</a></li>
                <li id="sb-suspendusers"><a href="{$WWWROOT}admin/users/suspended.php">{str tag=suspendedusers section=admin}</a></li>
                <li id="sb-sitestaff"><a href="{$WWWROOT}admin/users/staff.php">{str tag=sitestaff section=admin}</a></li>
                <li id="sb-siteadmins"><a href="{$WWWROOT}admin/users/admins.php">{str tag=siteadmins section=admin}</a></li>
                <li id="sb-adminnotifications"><a href="{$WWWROOT}admin/users/notifications.php">{str tag=adminnotifications section=admin}</a></li>
                <li id="sb-adduser"><a href="{$WWWROOT}admin/users/add.php">{str tag=adduser section=admin}</a></li>
                <li id="sb-addusersbycsv"><a href="{$WWWROOT}admin/users/uploadcsv.php">{str tag=uploadcsv section=admin}</a></li>
                <li id="sb-migrateusers"><a href="{$WWWROOT}artefact/eschooladmin/migrateusers.php">{str tag=migrateusers section=globalclassroom}</a></li>
            </ul>
        </div>
</div>

<div id="sb-groups" class="sideblock sideblock-3">
    <h3>{str tag=groups section=admin}</h3>
        <div class="sideblock-content">
            <ul>
                <li id="sb-creategroup"><a href="{$WWWROOT}group/edit.php">{str tag=creategroup section=group}</a></li>
                <li id="sb-admingroups"><a href="{$WWWROOT}admin/groups/groups.php">{str tag=administergroups section=admin}</a></li>
                <li id="sb-groupcategories"><a href="{$WWWROOT}admin/groups/groupcategories.php">{str tag=groupcategories section=admin}</a></li>
                <li id="sb-groupsbycsv"><a href="{$WWWROOT}admin/groups/uploadcsv.php">{str tag=uploadgroupcsv section=admin}</a></li>
                <li id="sb-groupmembersbycsv"><a href="{$WWWROOT}admin/groups/uploadmemberscsv.php">{str tag=uploadgroupmemberscsv section=admin}</a></li>
            </ul>
        </div>
</div>

<div id="sb-institutions" class="sideblock sideblock-4">
    <h3>{str tag=manageinstitutions section=admin}</h3>
        <div class="sideblock-content">
            <ul>
                <li id="sb-institutionsblock"><a href="{$WWWROOT}admin/users/institutions.php">{str tag=institutions section=admin}</a></li>
                <li id="sb-institutionmembers"><a href="{$WWWROOT}admin/users/institutionusers.php">{str tag=Members section=admin}</a></li>
                <li id="sb-institutionstaff"><a href="{$WWWROOT}admin/users/institutionstaff.php">{str tag=institutionstaff section=admin}</a></li>
                <li id="sb-institutionadmins"><a href="{$WWWROOT}admin/users/institutionadmins.php">{str tag=institutionadmins section=admin}</a></li>
                <li id="sb-pages"><a href="{$WWWROOT}view/institutionviews.php">{str tag=institutionviews section=admin}</a></li>
                <li id="sb-share"><a href="{$WWWROOT}view/institutionshare.php">{str tag=sharedviews section=view}</a></li>
                <li id="sb-files"><a href="{$WWWROOT}artefact/file/institutionfiles.php">{str tag=institutionfiles section=admin}</a></li>
            </ul>
        </div>
</div>

<div id="sb-extensions" class="sideblock sideblock-5">
    <h3>{str tag=Extensions section=admin}</h3>
        <div class="sideblock-content">
            <ul>
                <li id="sb-pluginadministration"><a href="{$WWWROOT}admin/extensions/plugins.php">{str tag=pluginadmin section=admin}</a></li>
                <li id="sb-htmlfilters"><a href="{$WWWROOT}admin/extensions/filter.php">{str tag=htmlfilters section=admin}</a></li>
            </ul>
        </div>
</div>