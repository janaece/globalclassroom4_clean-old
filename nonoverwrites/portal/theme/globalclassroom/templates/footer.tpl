{$app = gcr::getApp()}
{if $SUBPAGENAV}
                        </div><!--end subpage rel-->
{/if}
                    </div>
                </div>
				<div class="cb"></div>
            </div>
    <div id="footer-wrap">
		<div class="cb"></div>
                <div id="footernavleft"><a href="{$app->getSupportUrl()}" target="_blank">Technical Support</a></div>
        <div id="footernav">
        {foreach from=$FOOTERMENU item=item name=footermenu}
          {if !$.foreach.footermenu.first}| {/if}<a href="{$item.url}">{$item.title}</a>
        {/foreach}
        </div>
        <div id="poweredby">
            <a href="http://globalclassroom.us">
                <img src="https://s3.amazonaws.com/static.globalclassroom.us/marketing/Stratus/poweredby_blk-trans.png" border="0" alt="powered by global classroom">
            </a>
        </div>
		<div class="cb"></div>
    </div>
</div>

{$gc_jquery = $app->includeGCJQueryLib()}
{$gc_jquery|safe}
{if $app->hasPrivilege('GCAdmin')}
    {literal}
        <script type="text/javascript">
            jQuery('body').css('background', '#000');
        </script>
    {/literal}
{/if}

{literal}
<script type="text/javascript">
    var text = "{/literal}{$app->getConfigVar('gc_eschool_message')}{literal}";
    if(text.length > 0)
    {
        jQuery('#messages').text(text);
    }
    if(window.location == '{/literal}{$WWWROOT}{literal}artefact/courses/')
    {
        jQuery('#main-nav ul li a:contains(Courses)').parent().addClass('selected');
    }
    if(window.location == '{/literal}{$WWWROOT}{literal}user/view.php')
    {
        jQuery('#main-nav ul li a:contains(Profile)').parent().addClass('selected');
    }
    jQuery('#site-logo img').hide();
    jQuery('#site-logo img').delay('1500').fadeIn('slow');
    jQuery('#login_login_username').focus();
    // sort go-to-catalog list
    if('{/literal}{$app->getShortName()}{literal}' == 'start')
    {
        var $select = jQuery('#catalog_selector');
        var selectedVal = $select.val();
        var $options = jQuery('option', $select);
        var arrVals = [];
        jQuery('#catalog_selector option').each(function() {
            arrVals.push({
                val: jQuery(this).val(),
                text: jQuery(this).text()
            });
        });

        arrVals.sort(function(a, b) {
            if(a.text>b.text) {
                return 1;
            }
            else if (a.text==b.text) {
                return 0;
            }
            else {
                return -1;
            }
        });

        for (var i=0, l=arrVals.length; i < l; i++) {
            jQuery($options[i]).val(arrVals[i].val).text(arrVals[i].text);
        }

        $select.val(selectedVal);
    }
</script>
{/literal}
</body>
</html>