{include file="header.tpl"}
<div id="friendslistcontainer">
{if $results}
    <div class="edit_page_button">
        <form action="{$WWWROOT}user/find.php" method="post">
            <input type="submit" class="submit rbuttons" id="add_friend_submit" name="submit"
                value="{str tag=addtofriends section=globalclassroom}">
        </form>
    </div>
{/if}
    {$form|safe}
{if $message}
    <div class="message">{$message|safe}</div>
{/if}
{if $results}
    <table id="friendslist" class="fullwidth listing">
        <tbody>
        {$results.tablerows|safe}
        </tbody>
    </table>
{$results.pagination|safe}
{/if}
</div>
{include file="footer.tpl"}