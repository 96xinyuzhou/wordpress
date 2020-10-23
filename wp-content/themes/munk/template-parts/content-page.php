<?php
/**
 * Template part for displaying single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package munk
 */
?>                       
<article id="post-<?php the_ID(); ?>" <?php post_class('entry-card clearfix'); ?>>
	<?php 
		munk_entry_top();		
        /**
         * @hooked munk_entry_card_header_markup   
         * @hooked munk_entry_card_featured_image_markup 
         * @hooked munk_entry_content_markup      
        */
        do_action( 'munk_single_page_entry_card' );    
		munk_entry_bottom();		
    ?>
</article><!-- #post-<?php the_ID(); ?> -->                        