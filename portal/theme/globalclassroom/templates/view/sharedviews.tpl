{include file="header.tpl"}
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
<p class="intro">{str tag=sharedviewsdescription section=view}</p>
<div>{$searchform|safe}</div>
<table id="sharedviewlist" class="fullwidth">
  <thead>
    <tr>
      <th>{str tag=name}</th>
      <th class="center">{str tag=Comments section=artefact.comment}</th>
      <th>{str tag=lastcomment section=artefact.comment}</th>
    </tr>
  </thead>
  <tbody>
{include file="view/sharedviewrows.tpl"}
  </tbody>
</table>
<div id="sharedviews_pagination">{$pagination|safe}</div>
{include file="footer.tpl"}
