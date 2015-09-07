{$app = gcr::getApp()}

<h3>Go to a Catalog</h3>
<div class="sideblock-content">
    {$eschools = GcrEschoolTable::getEschools()}
    <form action="{$WWWROOT}local/platform_access.php" method="POST" target="_blank">
        <select id="platform_selector" name="platform_selector">
            {foreach from=$eschools item=eschool}
                <option value="{$eschool->getShortName()}">{$eschool->getFullName()} ({$eschool->getShortName()})</option>
            {/foreach}
        </select>
        <input class="button" type="submit" value="Go">
    </form>
</div>