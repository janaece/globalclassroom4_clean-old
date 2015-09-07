{$app=gcr::getApp()}
{$current_user=$app->getCurrentUser()}
{$has_tagblock = false}
{$has_searchblock = false}
{foreach from=$blocks item=sideblock}
  {if $sideblock.name == 'tags'}
    {$has_tagblock = true}
  {/if}
  {if $sideblock.name == 'selfsearch'}
    {$has_searchblock = true}
  {/if}
{/foreach}

{foreach from=$blocks item=sideblock}
  {if $current_user->isLoggedIn()}
    {if !$current_user->getRoleManager()->hasPrivilege('EschoolAdmin')}
      {if $sideblock.name != 'ssopeers'}
	{strip}{counter name="sidebar" assign=sequence}{/strip}
	  <div{if $sideblock.id} id="{$sideblock.id}"{/if} class="sideblock sideblock-{$sequence}">
	    {include file="sideblocks/`$sideblock.name`.tpl" sbdata=$sideblock.data}
	  </div>
	  {if $sideblock.name == 'onlineusers'}
	    {if get_config('showtagssideblock')}
	      {if !$has_tagblock}
		<div id="sb-tags" class="sideblock sideblock-{$sequence}">
		  {include file="sideblocks/tags.tpl" sbdata=tags_sideblock()}
		</div>
	      {/if}
	    {/if}
	    {if get_config('showselfsearchsideblock')}
	      {if !$has_searchblock}
		<div id="sb-selfsearch" class="sideblock sideblock-{$sequence}">
		  {include file="sideblocks/selfsearch.tpl" sbdata=array()}
		</div>
	      {/if}
	    {/if}
	  {/if}
      {/if}
      {else}
      {strip}{counter name="sidebar" assign=sequence}{/strip}
      <div{if $sideblock.id} id="{$sideblock.id}"{/if} class="sideblock sideblock-{$sequence}">
	{include file="sideblocks/`$sideblock.name`.tpl" sbdata=$sideblock.data}
      </div>
      {if $sideblock.name == 'profile'}
	{strip}{counter name="sidebar" assign=sequence}{/strip}
	{$app = gcr::getApp()}
	{if $app->getShortName() == 'start'}
	  <div id="sb-gotoplatform" class="sideblock sideblock-{$sequence}">
	    {include file="sideblocks/gotoplatform.tpl"}
	  </div>
	  <div id="sb-gotocatalog" class="sideblock sideblock-{$sequence}">
	    {include file="sideblocks/gotocatalog.tpl"}
	  </div>
	{/if}
      {/if}
      {if $sideblock.name == 'onlineusers'}
	{if get_config('showtagssideblock')}
	  {if !$has_tagblock}
	    <div id="sb-tags" class="sideblock sideblock-{$sequence}">
	      {include file="sideblocks/tags.tpl" sbdata=tags_sideblock()}
	    </div>
	  {/if}
	{/if}
	{if get_config('showselfsearchsideblock')}
	  {if !$has_searchblock}
	    <div id="sb-selfsearch" class="sideblock sideblock-{$sequence}">
	      {include file="sideblocks/selfsearch.tpl" sbdata=array()}
	    </div>
	  {/if}
	{/if}
      {/if}
    {/if}
    {else}
    {strip}{counter name="sidebar" assign=sequence}{/strip}
    <div{if $sideblock.id} id="{$sideblock.id}"{/if} class="sideblock sideblock-{$sequence}">
      {include file="sideblocks/`$sideblock.name`.tpl" sbdata=$sideblock.data}
    </div>
  {/if}
{/foreach}