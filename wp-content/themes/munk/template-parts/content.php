<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package munk
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('entry-card clearfix'); ?> itemscope itemtype="https://schema.org/Blog">
	<?php 
		munk_entry_top();	
        /**
         * @hooked munk_entry_card_header_markup    
         * @hooked munk_entry_meta_markup       			
         * @hooked munk_entry_card_featured_image_markup 
         * @hooked munk_entry_excerpt_markup
        */
        do_action( 'munk_archive_entry_card' );    
		munk_entry_bottom();		
    ?>
</article><!-- #post-<?php the_ID(); ?> -->

