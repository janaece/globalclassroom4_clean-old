{include file="header.tpl"}
<p>{str tag='migrateusersinstructions' section='artefact.eschooladmin'}</p>
    <div class="invite_form_container">
        {$eschoolselector|safe}
<br/><br/>
        {$addform|safe}

        {$removeform|safe}
    </div>
{include file="footer.tpl"}