<?php
/**
 * Footer Markup
 *
 * @package Munk
 */
 
// footer action
if( !function_exists('munk_footer_markup') ) :
	function munk_footer_markup() {			
	
	if (is_singular()) {		
		global $post;
		$single_footer_ed = get_post_meta( $post->ID, 'munk_settings_disable_footer_area', true );
		if ( $single_footer_ed ) {
			return;
		}
	}
		// markup starts				
		$munk_footer_ed = get_theme_mod('ed_footer_widget_ed', true);						
		?>
			<footer id="colophon" class="site-footer" role="contentinfo">
				<?php munk_footer_top(); ?>
                <?php if ($munk_footer_ed) { ?>                
                    <div class="footer-t">
                        <div class="container">
                            <?php get_sidebar('footer'); ?>
                        </div>
                    </div>
                <?php } ?>                    
                    <div class="site-info">
                        <div class="container">                
                            <?php do_action ('munk_site_info'); ?>                                
                        </div>
                    </div>		
                <?php munk_footer_bottom(); ?>                
			</footer>			            
	 <?php				
	  }
	  
add_action( 'munk_footer', 'munk_footer_markup', 10 ); 
endif;