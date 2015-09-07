{include file="header.tpl"}

{if $GROUP}<h2>{str tag=groupviews section=view}</h2>
{/if}
    <div class="rbuttons{if $GROUP} pagetabs{/if}">
        {if !$GROUP}
            <form action="{$WWWROOT}view/sharedviews.php" method="post">
                <input type="submit" class="submit" id="shared_pages_submit" name="submit" value="{str tag=sharedviews section=view}">
            </form>
            <form action="{$WWWROOT}view/share.php" method="post">
                <input type="submit" class="submit" id="share_page_submit" name="submit" value="{str tag=sharethispage section=globalclassroom}">
            </form>
        {/if}
        {$createviewform|safe}
        <form method="post" action="{$WWWROOT}view/choosetemplate.php">
            <input type="submit" class="submit" value="{str tag="copyaview" section="view"}">
{if $GROUP}
                    <input type="hidden" name="group" value="{$GROUP->id}" />
{elseif $institution}
                    <input type="hidden" name="institution" value="{$institution}">
{/if}
        </form>
    </div>
{if $institution}                {$institutionselector|safe}{/if}
            <div class="grouppageswrap">
{$searchform|safe}

{if $views}
            <table id="myviews" class="fullwidth listing">
                <tbody>
{$app = gcr::getApp()}
{foreach from=$views item=view}
                    <tr class="{cycle values='r0,r1'}">
                        <td>
                            <h4><a href="{$view.fullurl}">{$view.displaytitle}</a></h4>
{if $view.submittedto}
                              <div class="submitted-viewitem">{$view.submittedto|clean_html|safe}</div>
{elseif $view.type == 'profile'}
                              <div class="videsc">{str tag=profiledescription}</div>
{elseif $view.type == 'dashboard'}
                              <div class="videsc">{str tag=dashboarddescription}</div>
{elseif $view.type == 'grouphomepage'}
                              <div class="videsc">{str tag=grouphomepagedescription section=view}</div>
{elseif $view.description}
                              <div class="videsc">{$view.description|str_shorten_html:110:true|strip_tags|safe}</div>
{/if}
{$view_accessgroups = $app->getAccessList($view.id)}
{if $view_accessgroups}
    Access List:
    {foreach from=$view_accessgroups item=accessgroup name=ags}{strip}
        {if $accessgroup->accesstype == 'loggedin'}
            {str tag="loggedin" section="view"}
        {elseif $accessgroup->accesstype == 'public'}
            {str tag="public" section="view"}
        {elseif $accessgroup->accesstype == 'friends'}
            <a href="{$WWWROOT}user/myfriends.php" id="link-myfriends">{str tag="friends" section="view"}</a>
        {elseif $accessgroup->accesstype == 'group'}
            <a href="{$WWWROOT}group/view.php?id={$accessgroup->id}">{$accessgroup->name}</a>{if $accessgroup->role} ({$accessgroup->roledisplay}){/if}
        {elseif $accessgroup->accesstype == 'user'}
            <a href="{$WWWROOT}user/view.php?id={$accessgroup->id}">{$accessgroup->id|display_name}</a>
        {elseif $accessgroup->accesstype == 'token'}
            <a href="{$WWWROOT}view/urls.php?id={$accessgroup->view}">{$accessgroup->name}</a>
        {/if}
        {if $accessgroup->startdate}
          {if $accessgroup->stopdate}
            <span class="date"> {$accessgroup->startdate|strtotime|format_date:'strfdaymonthyearshort'}&rarr;{$accessgroup->stopdate|strtotime|format_date:'strfdaymonthyearshort'}</span>
          {else}
            <span class="date"> {str tag=after} {$accessgroup->startdate|strtotime|format_date:'strfdaymonthyearshort'}</span>
          {/if}
        {elseif $accessgroup->stopdate}
          <span class="date"> {str tag=before} {$accessgroup->stopdate|strtotime|format_date:'strfdaymonthyearshort'}</span>
        {/if}
        {if !$dwoo.foreach.ags.last}, {/if}
    {/strip}{/foreach}
{/if}
                        </td>
                        <td class="right buttonscell btns2">
{if !$view.submittedto && (!$view.locked || $editlocked)}
                                <a href="{$WWWROOT}view/blocks.php?id={$view.id}" title="{str tag ="editcontentandlayout" section="view"}"><img src="{theme_url filename='images/edit.gif'}" alt="{str tag=edit}"></a>
{/if}
{if !$view.submittedto && $view.removable && (!$view.locked || $editlocked)}
                                <a href="{$WWWROOT}view/delete.php?id={$view.id}" title="{str tag=deletethisview section=view}"><img src="{theme_url filename='images/icon_close.gif'}" alt="{str tag=delete}"></a>
{/if}
                        </td>{* rbuttons *}
                    </tr>
{/foreach}
                </tbody>
            </table>
{$pagination|safe}
            </div>
{else}
            <div class="message">{if $GROUP}{str tag="noviewstosee" section="group"}{elseif $institution}{str tag="noviews" section="view"}{else}{str tag="youhavenoviews" section="view"}{/if}</div>
            </div>
{/if}
{include file="footer.tpl"}
