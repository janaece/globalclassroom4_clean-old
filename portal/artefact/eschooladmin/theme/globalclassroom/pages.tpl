{include file="header.tpl"}
            <p>{str tag=editsitepagespagedescription section=admin}</p>
			{$pageeditform|safe}
{include file="footer.tpl"}

{literal}
<script type="text/javascript">
    jQuery('#main-nav ul li a:contains(Configure Site)').parent().addClass('selected');
</script>
{/literal}