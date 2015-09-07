<div id="header-right">
    <div id="right-nav">
        <ul>
            {strip}
                {if $RIGHTNAV}
                    {foreach from=$RIGHTNAV item=item}
                        {if $item.path != 'settings'}
                            <li {if $item.selected}{assign var=MAINNAVSELECTED value=$item} class="selected"{/if}>
                                <a href="{if $item.wwwroot}{$item.wwwroot}{else}{$WWWROOT}{/if}{$item.url}">
                                    {if $item.title}
                                        {$item.title}
                                    {/if}
                                    {if $item.icon}
                                        <img src="{$item.icon}" alt="{$item.alt}">
                                        {if isset($item.count)}
                                            <span class="navcount{if $item.countclass}{$item.countclass}{/if}">{$item.count}</span>
                                        {/if}
                                    {/if}
                                </a> |
                            </li>
                        {/if}
                    {/foreach}
                <li class="btn-logout"><a href="{$WWWROOT}?logout" accesskey="l">{str tag="logout"}</a></li>
                {/if}
            {/strip}
        </ul>
    </div>
    {if !$nosearch && $LOGGEDIN}
        {header_search_form}
    {/if}
</div>

