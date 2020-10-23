<?php
/**
 * Entry Card Markup
 *
 * @package Munk
 */

// entry card archive
if( !function_exists('munk_entry_card_markup') ) :
	
	function munk_entry_card_markup() {				
	
		$munk_archive_ed = get_theme_mod('munk_layout_blog_archive_content_ed', array( 'title', 'meta', 'image', 'content' ));
		
		foreach ( $munk_archive_ed as $munk_archive ) {
		
			call_user_func('munk_entry_card_markup_' . $munk_archive);	
			
		}
	}
	
add_action( 'munk_archive_entry_card', 'munk_entry_card_markup'); 	
endif;


// entry card single post
if( !function_exists('munk_entry_card_post_markup') ) :
	
	function munk_entry_card_post_markup() {				
	
		$munk_single_ed = get_theme_mod('munk_layout_single_post_content_pos', array( 'title', 'meta', 'image', 'content' ));
		
		foreach ( $munk_single_ed as $munk_single ) {
		
			call_user_func('munk_entry_card_markup_' . $munk_single);	
			
		}
	}
	
add_action( 'munk_single_post_entry_card', 'munk_entry_card_post_markup'); 	
endif;

// entry card single page
if( !function_exists('munk_entry_card_page_markup') ) :
	
	function munk_entry_card_page_markup() {				
	
		$munk_single_ed = get_theme_mod('munk_layout_single_page_content_pos', array( 'title', 'image', 'content' ));
		
		foreach ( $munk_single_ed as $munk_single ) {

			call_user_func('munk_entry_card_markup_' . $munk_single);	
			
		}
	}
	
add_action( 'munk_single_page_entry_card', 'munk_entry_card_page_markup'); 	
endif;