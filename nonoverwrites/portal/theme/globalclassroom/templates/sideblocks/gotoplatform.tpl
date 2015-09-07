{$app = gcr::getApp()}

<h3>Go to a Platform</h3>
<div class="sideblock-content">
    {$institutions = GcrInstitutionTable::getInstitutions()}
    <form action="{$WWWROOT}local/platform_access.php" method="POST" target="_blank">
        <select id="platform_selector" name="platform_selector">
            {foreach from=$institutions item=institution}
                <option value="{$institution->getShortName()}">{$institution->getFullName()} ({$institution->getShortName()})</option>
            {/foreach}
        </select>
        <input class="button" type="submit" value="Go">
    </form>
</div>