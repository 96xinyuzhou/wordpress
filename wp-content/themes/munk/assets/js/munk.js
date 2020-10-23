jQuery(function($) { 

	/* Sticky Menu */
    var winwidth = $(window).width();
    if( Munk_Data.sticky_header == '1' && winwidth >= 992 ){
        var mns = "munk-sticky-header";
        hdr = $('.site-header').height();
		
        if(Munk_Data.header_layout == 'layout-two') {
            mn = $(".site-header .header-bottom");
        }
		else if (Munk_Data.header_layout == 'layout-one') {
            mn = $(".site-header");
        }		
        else{
        mn = $(".site-header");			
        } 		

        $(window).scroll(function() {
            if( $(this).scrollTop() > hdr ) {
                mn.addClass(mns);
                    } else {
                mn.removeClass(mns);
            }
        });
    }
    /* Sticky Menu Ends */
    
    
/* fix for wp bootstrap navwalker parent menu issue */
$('.dropdown-toggle').click(function() { if ($(window).width() > 768) if ($(this).next('.dropdown-menu').is(':visible')) window.location = $(this).attr('href'); });    	
});	