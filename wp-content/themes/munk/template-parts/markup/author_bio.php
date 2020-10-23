<?php
/**
 * Author Bio Markup
 *
 * @package Munk
 */



if( ! function_exists( 'munk_author_bio_cb' ) ) :
/**
 * Author Bio 
*/
function munk_author_bio_cb(){ 
    
    munk_entry_author_bio_before();

	$munk_ed_author = get_theme_mod('munk_layout_single_post_author_ed', true);

    if( $munk_ed_author ){ 
	
	$author_title = get_theme_mod('munk_layout_single_post_author_title', esc_html('About Author', 'munk'));	
	?>

      <div class="author-section">
                <h2 class="author-header"><?php echo esc_html($author_title); ?></h2>
                <hr>
                <div class="img-holder">
                  <?php echo get_avatar( get_the_author_meta( 'ID' ), 134, '', '', array( 'class' => array('img-fluid', 'img-circle') ) ); ?>
                </div>
                <div class="text-holder">
                  <h3 class="author-name"><?php echo esc_html(get_the_author()); ?></h3>
                  <?php echo wp_kses_post( get_the_author_meta( 'description' ) ); ?>
                </div>
              </div>
              <div class="clearfix"></div>        
        
    <?php
    }
    munk_entry_author_bio_after();
}
endif;
add_action( 'munk_single_post_entry_card', 'munk_author_bio_cb' );