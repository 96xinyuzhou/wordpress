<?php
/**
 * Entry Meta Markup
 *
 * @package Munk
 */
// entry meta
if ( ! function_exists( 'munk_entry_card_markup_meta' ) ) :

	function munk_entry_card_markup_meta () {
        
        munk_entry_meta_before();

		if (is_archive() || is_home() || is_search()) {
			$munk_archive_meta = get_theme_mod('munk_layout_blog_archive_post_meta', array( 'author', 'date', 'category', 'comments' ));
			echo '<div class="entry-meta">';						  
				foreach ( $munk_archive_meta as $munk_meta ) {		
					call_user_func('munk_post_meta_' . $munk_meta);				
				}
			echo '</div>';					  													
		}
		elseif (is_singular()) {	

			$munk_single_meta = get_theme_mod('munk_layout_single_post_meta', array( 'author', 'date', 'category', 'comments' ));
			echo '<div class="entry-meta">';						  
				foreach ( $munk_single_meta as $munk_meta ) {		
					call_user_func('munk_post_meta_' . $munk_meta);				
				}
			echo '</div>';					  													
			
		}
		// phpcs:ignore Generic.CodeAnalysis.EmptyStatement.DetectedElse
		else {
		}
        
        munk_entry_meta_after();
                      
	}
	
endif;	
 
