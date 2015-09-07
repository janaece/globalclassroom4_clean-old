{include file="header.tpl"}
<p>{str tag='managecatalogsinstructions' section='artefact.courses'}</p>
{$roletypeselector|safe}
<div class="catalogsform">
{$installedcatalogs|safe}
{$potentialcatalogs|safe}
</div>
{include file="footer.tpl"}

{literal}
<script type="text/javascript">
    jQuery('#main-nav ul li a:contains(Configure Site)').parent().addClass('selected');
</script>
{/literal}