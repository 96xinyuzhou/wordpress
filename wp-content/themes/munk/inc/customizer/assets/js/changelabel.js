jQuery(document).ready(function ($) {

    
    $('.multicolor-single-color-wrapper').each(function(){
        var datalabel = $(this).find('.kirki-color-control').data('label');
        var btned     = $(this).find('span.wp-color-result-text');
        $(btned).text(datalabel);       
    })            
    
});	