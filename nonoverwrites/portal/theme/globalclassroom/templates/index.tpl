{include file="header.tpl"}
{$app=gcr::getApp()}
{if $app->getCurrentUser()->isLoggedIn()}
{/if}
{$page_content|clean_html|safe}
{if get_config('homepageinfo') && (!$USER->is_logged_in() || $USER->get_account_preference('showhomeinfo'))}
    {include file="homeinfo.tpl" url=$url}
{/if}
{if $dashboardview}
    {$disable_edit_button = get_config('disableeditdashboardbutton')}
	
    {if !$disable_edit_button}
    <div class="fr">
        <form action="{$WWWROOT}view/blocks.php?id={$viewid}" method="post">
            <input type="submit" class="submit" id="edit_page_submit" name="submit" value="{str tag=editthispage section=globalclassroom}">
        </form>
    </div>
    {/if}
    {include file="user/dashboard.tpl"}
{/if}
{include file="footer.tpl"}
