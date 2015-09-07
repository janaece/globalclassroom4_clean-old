{include file="header.tpl"}
<h4> {$mhr_institution_name} Institution</h4>
<p>{str tag='institutioncatalogsinstructions' section='artefact.eschooladmin'}</p>
    <div class="invite_form_container">
        {$addform|safe}

        {$removeform|safe}
    </div>
{include file="footer.tpl"}