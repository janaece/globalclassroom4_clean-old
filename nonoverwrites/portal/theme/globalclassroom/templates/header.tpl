<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html{if $LANGDIRECTION == 'rtl'} dir="rtl"{/if}>
{include file="header/head.tpl"}
<body>
{$app = gcr::getApp()}

{literal}
<script type='text/javascript'>
        jQuery('body').css('background-color', '{/literal}{$app->getConfigVar('gc_background_color')}{literal}');
        if('{/literal}{$app->getConfigVar('gc_background_image')}{literal}' != 'none')
        {
            jQuery('body').css('background-image', 'url(/images/{/literal}{$app->getConfigVar('gc_background_image')}{literal})');
        }
</script>
{/literal}

{if $USERMASQUERADING}<div class="sitemessage"><img src="{theme_url filename='images/icon_problem.gif'}" alt="">{$masqueradedetails} {$becomeyouagain|safe}</div>{/if}
{if $SITECLOSED}<div class="sitemessage center">{if $SITECLOSED == 'logindisabled'}{str tag=siteclosedlogindisabled section=mahara arg1="`$WWWROOT`admin/upgrade.php"}{else}{str tag=siteclosed}{/if}</div>{/if}
<div id="container">
    {if $SITETOP}{$SITETOP|safe}{/if}
    <div id="loading-box"></div>
    <div id="top-wrapper">
    <table id="header_table">
        <tr>
            <td id="headertop_left">
                <h1 id="site-logo"><a href="{$WWWROOT}"><img src="{$sitelogo}" alt="{$sitename}"></a></h1>
            </td>
            <td id="headertop_center">
            <!--[if IE 6]>
                <p>
                    You are using Stratus on an old browser, and you may experience visual and functional problems.
                <br/>
                    Please visit our <a href="http://support.globalclassroom.us/home/guides/recommended-browsers">Recommended Browsers</a> page to download an updated browser.
                </p>
            <![endif]-->
            <!--[if IE 7]>
                <p>
                    You are using Stratus on an old browser, and you may experience visual and functional problems.
                <br/>
                    Please visit our <a href="http://support.globalclassroom.us/home/guides/recommended-browsers">Recommended Browsers</a> page to download an updated browser.
                </p>
            <![endif]-->
            </td>
            <td id="headertop_right">
                {include file="header/topright.tpl"}
            </td>
        </tr>
    </table>

{include file="header/navigation.tpl"}
		<div class="cb"></div>
    </div>
    <div id="main-wrapper">

{if $SIDEBARS && $SIDEBLOCKS.right}
    <div id="left-column" class="sidebar">
    {if ($ADMIN || $INSTITUTIONALADMIN || $INSTITUTIONALSTAFF)}
        {if $app->hasPrivilege('GCUser')}
            {include file="sidebaradmin.tpl"}
        {else}
            {include file="sidebarinstitution.tpl"}
        {/if}
    {else}
        {include file="sidebar.tpl" blocks=$SIDEBLOCKS.right}
    {/if}
                </div>
{/if}

                <div id="main-column" class="main-column{if $SIDEBARS} main-column-narrow {if $SIDEBLOCKS.left}fl{else}fr{/if}{/if}">
                    {dynamic}{insert_messages}{/dynamic}
                    <div id="main-column-container">

{if isset($PAGEHEADING)}                    <h1>{$PAGEHEADING}{if $PAGEHELPNAME}<span class="page-help-icon">{$PAGEHELPICON|safe}</span>{/if}</h1>
{/if}
{if $SUBPAGENAV}
  {if $SUBPAGETOP}{include file=$SUBPAGETOP}{/if}
{* Tabs and beginning of page container for group info pages *}                        <ul class="in-page-tabs">
{foreach from=$SUBPAGENAV item=item}
                            <li><a {if $item.selected}class="current-tab" {/if}href="{$WWWROOT}{$item.url}">{$item.title}</a></li>
{/foreach}
                        </ul>
                        <div class="subpage rel">
{/if}
