{$fullname = ucfirst(trim($sbdata.myname))}
{$header_height = GcrInstitutionTable::getSideblockProfileHeaderHeight($fullname, 15, 16, 20)}

<div class="sidebar-header">
  <h3 style="height:{$header_height}px">
    <span id="gc-profile-header-fullname">
        <a href="{$WWWROOT}user/view.php?id={$sbdata.id}">
          {$fullname|clean_html|safe|wordwrap:15:"<br />\n":true}
        </a>
    </span>
    <span style="float:right">
        <a title="Account Settings" class="fr" href="{$WWWROOT}account/">
          <img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/settings.png'}" alt="edit account settings" />
        </a>
        <a title="Profile Settings" class="fr" href="{$WWWROOT}artefact/internal/" class="edit_profile">
          <img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/edit.gif'}" alt="edit profile settings" />
        </a>
    </span>
  </h3>
</div>

<div style="clear:both" class="sidebar-content">
  <div id="user-profileicon">
    <a href="{$WWWROOT}artefact/file/profileicons.php"><img src="{$WWWROOT}thumb.php?type=profileicon&amp;maxwidth=50&amp;maxheight=50&amp;id={$sbdata.id}&amp;earlyexpiry=1" alt=""></a>
  </div>
  {if $sbdata.mnetloggedinfrom}
    <p>{$sbdata.mnetloggedinfrom|clean_html|safe}</p>
  {/if}
  
  <ul>
    <li>
      <a href="{$app->getUrl()}/institution/viewUserStorage">
                    <img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/icons/cloudstorage.png'}" alt="Cloud Storage" />
                    {str tag=cloudstorage section=globalclassroom}
                </a>
    </li>
    <li id="topics">
      <a href="{$WWWROOT}group/topics.php">
        <img class="gc-mahara-sidebar-icon" src="{$WWWROOT}theme/globalclassroom/static/images/icons/grouptopics.png" alt="topics"/>
        Discussions
      </a>
    </li>
		
    <li id="#">
        <label class="gc-collapsable-header"><a href=""><img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/icons/portfolio-export.png'}" /> ePortfolio</a></label>
        <ul class="gc-collapsed">
            <li>
                <a href="{$WWWROOT}user/view.php">
                    <img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/icons/wall-sm.png'}" alt="Wall" />
                    {str tag=wall section=globalclassroom}
                </a>
            </li>
            <li>
                <a href="{$WWWROOT}artefact/resume">
                    <img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/icons/resume.png'}" alt="Bio" />
                    {str tag=editbio section=globalclassroom}
                </a>
            </li>
            <li>
                <a href="{$WWWROOT}artefact/plans/">
                    <img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/icons/plans.png'}" alt="Plans" />
                    {str tag=plans section=artefact.plans}
                </a>
            </li>
            <li>
                <a href="{$WWWROOT}artefact/blog/view">
                    <img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/icons/journal-brwn.png'}" alt="Blog" />
                    {str tag=blog section=globalclassroom}
                </a>
            </li>
            
            <li>
                <a href="{$WWWROOT}artefact/file/">
                    <img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/icons/files.png'}" alt="Samples" />
                    {str tag=samples section=globalclassroom}
                </a>
            </li>
            
            <li>
               <a href="{$WWWROOT}export/"><img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/icons/portfolio-export.png'}" /> Export</a>
            </li>
        </ul>
    </li>
    <li>
    <label class="gc-collapsable-header"><a href=""><img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/icons/transactionhistory.gif'}" /> Account History</a></label>
    <ul class="gc-collapsed">
       <li>  
          <a href="{$app->getUrl()}/course/history">
                <img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/icons/coursehistory.png'}" alt="History" />
                {str tag=coursehistory section=globalclassroom}
            </a>
        </li>
        <li>
            <a href="{$app->getUrl()}/account/view">
                <img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/icons/transactionhistory.gif'}" alt="Transactions" />
                {str tag=transactionhistory section=globalclassroom}
            </a>
        </li>
     </ul>
    </li>
    {if $app->getCurrentUser()->getRoleManager()->hasRole('EclassroomUser')}
        <li id="eclassroom">
          <a href="{$app->getUrl()}/institution/eclassroom">
            <img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/icons/institutions.png'}" alt="eClassroom" />
            eClassroom
          </a>
        </li>
    {/if}
    {if $sbdata.pendingfriends}
      <li id="pendingfriends">
	<a href="{$WWWROOT}user/myfriends.php?filter=pending" class="btn-friend">
	  <span id="pendingfriendscount">{$sbdata.pendingfriends}</span>
          <span id="pendingfriendsmessage">{$sbdata.pendingfriendsmessage}</span>
        </a>
      </li>
    {/if}   
    <li id="groups">
      <label class="gc-collapsable-header">
        <a href="{$WWWROOT}group/mygroups.php">
          <img class="gc-mahara-sidebar-icon" src="{theme_url filename='images/icons/mygroups.png'}" alt="my groups" />{str tag="mygroups"} ({count($sbdata.groups)})
        </a>
      </label>
      <ul>
        {foreach from=$sbdata.groups item=group}
          <li>
            <a href="{$WWWROOT}group/view.php?id={$group->id}">{$group->name}</a>{if $group->role == 'admin'} ({str tag=Admin section=group}){/if}
          </li>
        {/foreach}
        <li>
            <small><b><a href="{$WWWROOT}group/find.php">Find Groups</a></b></small>
        </li>
      </ul>
    </li>
    
    {if $sbdata.invitedgroups}
      <li id="invitedgroups">
	<a href="{$WWWROOT}group/mygroups.php?filter=invite">
	  <span id="invitedgroupscount">{$sbdata.invitedgroups}</span>
	  <span id="invitedgroupsmessage">{$sbdata.invitedgroupsmessage}</span>
        </a>
      </li>
    {/if}
    {if $sbdata.views}
      <li id="views">
	<label><a href="{$WWWROOT}view/">{str tag="views"}</a></label>
        <ul>
	  {foreach from=$sbdata.views item=view}
	    <li><a href="{$WWWROOT}view/view.php?id={$view->id}">{$view->title}</a></li>
	  {/foreach}
        </ul>
      </li>
    {/if}
    {if $sbdata.artefacts}
      <li class="artefacts">
	<label>{str tag="Artefacts"}:</label>
        <ul>
	  {foreach from=$sbdata.artefacts item=artefact}
	    {if $artefact->artefacttype == 'blog'}
	      <li><a href="{$WWWROOT}artefact/blog/view/?id={$artefact->id}">{$artefact->title}</a></li>
	    {elseif $artefact->artefacttype == 'file' || $artefact->artefacttype == 'image' || $artefact->artefacttype == 'archive'}
              <li><a href="{$WWWROOT}artefact/file/download.php?file={$artefact->id}">{$artefact->title}</a></li>
	    {elseif $artefact->artefacttype == 'folder'}
	      <li><a href="{$WWWROOT}artefact/file/?folder={$artefact->id}">{$artefact->title}</a></li>
	    {/if}
	  {/foreach}
        </ul>
      </li>
    {/if}
    
  </ul>
  {if $sbdata.peer}
    <div class="center"><a href="{$sbdata.peer.wwwroot}">{$sbdata.peer.name}</a></div>
  {/if}
  {if $USERMASQUERADING}
    <div id="changeuser">{$becomeyouagain|safe}</div>
  {/if}
  <div class="cb"></div> 
</div>
