

{if $MAINNAV}
        <div id="main-nav">
            <ul>{strip}
{foreach from=$MAINNAV item=item}
	{if $item.url == 'artefact/courses'}
		<li><span><a href="{$app->getUrl()}/course/subscriptions" accesskey="s" class="">Subscriptions</a></span></li>
		<li><span><a href="{$app->getUrl()}/course/view" accesskey="s" class="">Courses</a></span></li>
		<li><span><a href="{$app->getUrl()}/course/certifications" accesskey="s" class="">Certifications</a></span></li>		
	{else}
		{if $item.url == 'admin/groups/uploadcsv.php'}{$item.url = 'admin/groups/groups.php'}{/if} 
		<li{if $item.selected} class="selected"{/if}><a href="{$WWWROOT}{$item.url}"{if $item.accesskey} accesskey="{$item.accesskey}"{/if}>{$item.title}</a></li>
	{/if}	
{/foreach}
{if $ADMIN || $INSTITUTIONALADMIN || $STAFF || $INSTITUTIONALSTAFF}
                <li><a href="{$WWWROOT}" accesskey="h">{str tag=returntosite}</a></li>
{elseif $USER->get('admin')}
                <li><a href="{$WWWROOT}admin/" accesskey="a">{str tag=siteadministration}</a></li>
{elseif $USER->is_institutional_admin()}
                <li><a href="{$WWWROOT}admin/users/search.php" accesskey="a">{str tag=administration section=admin}</a></li>
{elseif $USER->get('staff')}
                <li><span><a href="{$WWWROOT}admin/users/search.php" accesskey="a" class="admin-user">{str tag="administration" section=admin}</a></span></li>
{elseif $USER->is_institutional_staff()}
                <li><span><a href="{$WWWROOT}admin/users/search.php" accesskey="a" class="admin-user">{str tag="administration" section=admin}</a></span></li>
{/if}
            {/strip}</ul>

        </div>

        <div id="sub-nav">
        </div>
{/if}
