<?php
/**
 * Entry Content Markup
 *
 * @package Munk
 */

// entry content content
if( !function_exists('munk_entry_card_markup_content') ) :
	function munk_entry_card_markup_content() {			
	
	munk_entry_content_before();		
	
	$munk_post_content = get_theme_mod('munk_layout_blog_archive_post_content', 'excerpt');
	
	if (is_archive() || is_home() || is_search()) {
			if ($munk_post_content == 'excerpt') {			
				echo '<div class="text-holder">';
					 echo '<div class="entry-excerpt">';
					   		 the_excerpt();
					echo '</div>';
				echo '</div>';					
			}
			elseif ($munk_post_content == 'content') {
				echo '<div class="text-holder">';
					 echo '<div class="entry-content">';
					    	the_content();
					echo '</div>';
				echo '</div>';								
			}
			// phpcs:ignore Generic.CodeAnalysis.EmptyStatement.DetectedElse			
			else {
			}
	}
	elseif (is_single() || is_page()) {
				echo '<div class="text-holder">';
					 echo '<div class="entry-content">';
					    the_content();
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'munk' ),
							'after'  => '</div>',
						) );                    						
					echo '</div>';
				echo '</div>';		
	}
	// phpcs:ignore Generic.CodeAnalysis.EmptyStatement.DetectedElse	
	else {
	}
	?>	    
    
<?php
	munk_entry_content_after();												
	}
endif;