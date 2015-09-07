{include file="header.tpl"}
    <div class="rbuttons">
        {if group_can_create_groups()}
                <a href="{$WWWROOT}group/edit.php" class="btn creategroup">{str tag="creategroup" section="group"}</a>
        {/if}
        <a href="{$WWWROOT}group/find.php" class="btn findgroup">{str tag="findgroups" section="mahara"}</a>
    </div>
{$form|safe}
{if $groups}<table id="findgroups" class="fullwidth listing">
{foreach from=$groups item=group}
            <tr><td class="{cycle values='r0,r1'}">
                <div class="fr">
                     {include file="group/groupuserstatus.tpl" group=$group returnto='find'}
                </div>
                <div class="findgroupsdetails">
                     {include file="group/group.tpl" group=$group returnto='mygroups'}
                </div>
            </td></tr>
{/foreach}
			</table>
{$pagination|safe}
{else}
            <div class="message">{str tag="nogroupsfound" section="group"}</div>
{/if}
{include file="footer.tpl"}
