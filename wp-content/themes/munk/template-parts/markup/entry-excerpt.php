<?php
/**
 * Entry Excerpt Markup
 *
 * @package Munk
 */


// entry card excerpt
if( !function_exists('munk_entry_card_markup_excerpt') ) :
	function munk_entry_card_markup_excerpt() {			
	$ed_excerpt = get_theme_mod('ed_excerpt', true);
		if ($ed_excerpt) {
	?>	
        <div class="text-holder">
             <div class="entry-excerpt">
               <?php the_excerpt(); ?>
            </div>
        </div>        
<?php	
		}
	}
endif;
