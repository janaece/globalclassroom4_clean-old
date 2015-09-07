{include file="header.tpl"}
<p>{str tag=siteoptionspagedescription section=admin}</p>
{$siteoptionform|safe}
{include file="footer.tpl"}

{literal}
<script type="text/javascript">
    jQuery('#main-nav ul li a:contains(Configure Site)').parent().addClass('selected');
</script>
{/literal}