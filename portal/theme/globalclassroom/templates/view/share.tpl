{include file="header.tpl"}
    {* OVERWRITE 1: insert *}
    {if !$GROUP}
        <div class="rbuttons">
            <form action="{$WWWROOT}view/sharedviews.php" method="post">
                <input type="submit" class="submit" id="shared_pages_submit" name="submit" value="{str tag=sharedviews section=view}">
            </form>
            <form action="{$WWWROOT}view/share.php" method="post">
                <input type="submit" class="submit" id="share_page_submit" name="submit" value="{str tag=sharethispage section=globalclassroom}">
            </form>
            {$createviewform|safe}
            <form action="{$WWWROOT}view/choosetemplate.php" method="post">
                <input type="submit" class="submit" value="{str tag="copyaview" section="view"}">
            </form>
        </div>
    {/if}
    {* END OVERWRITE 1 *}
{if $institution}                {$institutionselector|safe}{/if}

{if !$accesslists.views && !$accesslists.collections}
<p>{str tag=youhaventcreatedanyviewsyet section=view}</p>
{else}

{* OVERWRITE 1: deletion
{if $accesslists.collections}
<table class="fullwidth accesslists">
  <thead>
    <tr>
      <th class="cv">{str tag=Collections section=collection}</th>
      <th class="al">{str tag=accesslist section=view}</th>
      <th class="al-edit">{str tag=editaccess section=view}</th>
      <th class="secreturls">{str tag=secreturls section=view}</th>
    </tr>
  </thead>
{foreach from=$accesslists.collections item=collection}
  {include file="view/accesslistrow.tpl" item=$collection}
{/foreach}
  </tbody>
</table>
{/if}
END OVERWRITE 1 *}

{if $accesslists.views}
<table class="fullwidth accesslists">
  <thead>
    <tr>
      <th class="cv">{str tag=Views section=view}</th>
    {if $accesslists.collections}
      <th class="al"></th>
      <th class="al-edit"></th>
      <th class="secreturls"></th>
    {else}
      <th class="al">{str tag=accesslist section=view}</th>
      <th class="al-edit">{str tag=editaccess section=view}</th>
      <th class="secreturls">{str tag=secreturls section=view}</th>
    {/if}
    </tr>
  </thead>
  <tbody>
{foreach from=$accesslists.views item=view}
    <tr class="{cycle values='r0,r1'}">
  {include file="view/accesslistrow.tpl" item=$view}
    </tr>
{/foreach}
  </tbody>
</table>
{/if}

{/if}
{include file="footer.tpl"}
