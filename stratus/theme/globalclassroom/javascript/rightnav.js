jQuery('#usf_query').click(function() {
    jQuery(this).val('');
});

jQuery('#usf_submit').mouseenter(function() {
        jQuery(this).css('background', 'url("../../images/btn-bkgd-hover.gif")');
    }).mouseleave(function() {
        jQuery(this).css('background', 'url("../../images/btn-bkgd.gif")');
});