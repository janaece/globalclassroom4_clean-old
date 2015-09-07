    <div class="sidebar-header"><h3>Administer Catalogs{contextualhelp plugintype='core' pluginname='core' section='administercatalogs'}</h3></div>
    <div class="sidebar-content">
{if $sbdata}
    <ul id="sitemenu">
    {$app=gcr::getApp()}
    {$shortname = GcrInstitutionTable::parseShortNameFromUrl($WWWROOT)}
    {$current_user = $app->getCurrentUser()}
    {$eschools = $app->getEschools()}
    {foreach from=$eschools item=eschool}
        <li><a href="{$eschool->getAppUrl()}/my/index.php?transfer={$shortname}">{$eschool->getFullName()}</a></li>
    {/foreach}
    </ul>
{/if}
</div>

