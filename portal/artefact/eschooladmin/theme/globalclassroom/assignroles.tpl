{include file="header.tpl"}
<p>{str tag='assignrolesinstructions' section='artefact.eschooladmin'}</p>
<div class="rbuttons">
    {$eschool = Doctrine::getTable('GcrEschool')->findOneById($eschoolid)}
    <a href="{$eschool->getAppUrl()}/course/view.php?id={$courseid}">
        <input type="button" class="submit" id="edit_page_submit" name="submit" value="Enter Course">
    </a>
</div>
{$roletypeselector|safe}
<div class="roleassignform">
{$activeusersform|safe}
{$potentialusersform|safe}
</div>
{include file="footer.tpl"}