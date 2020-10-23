<?php
/**
 * Munk Theme Standalone Functions.
 *
 * @package munk
 */
 
if ( !defined( 'ABSPATH' ) )
    die( 'Direct access forbidden.' ); 

/* body classes for layout container
* Adds a class to <body> based on the site container selected
* @since 1.0.0
*/
if ( ! function_exists( 'munk_body_container_class' ) ) :
function munk_body_container_class($classes) {	

		$munk_header_layout = get_theme_mod('munk_layout_site_header_primary_ed', 'layout-one');					
		$classes[] = 'header-' . $munk_header_layout;		

		global $post;
		
		// if single post type then do this
		if (is_singular()) {
			$munk_single_container_ed = get_post_meta( $post->ID, 'munk_settings_page_container', true );
			
			$munk_single_content_padding = get_post_meta( $post->ID, 'munk_settings_disable_content_padding', true );
			if ($munk_single_content_padding) {
				$classes[] = 'mt-content-padding-no';
			}
			else {
				$classes[] = 'mt-content-padding-yes';			
			}

			
			if ($munk_single_container_ed && $munk_single_container_ed != 'default') {
				$classes[] = 'mt-container-' . $munk_single_container_ed;

			}
			else {
				$munk_site_container_ed = get_theme_mod('munk_layout_container_default_ed', 'default');		
				$classes[] = 'mt-container-' . $munk_site_container_ed;						
			}
		}
		
		//if any archive or home type then do this
		else {
			$munk_site_container_ed = get_theme_mod('munk_layout_container_default_ed', 'default');		
			$classes[] = 'mt-container-' . $munk_site_container_ed;						
		}
    
        if (function_exists('has_blocks')) { 
            
            if ( is_singular() && has_blocks() ) {
                $classes[] = 'has-blocks';
            }           
		
        return $classes;            
            
        }
		
		return $classes;
		
}
endif;
add_filter('body_class', 'munk_body_container_class');	


// site title ed	
function munk_header_title() {
	/*
	 * If header text is set to display, let's bail.
	 * hattip:  https://themetry.com/custom-header-text-display-option/
	 */
	if ( display_header_text() ) {
		return;
	}
	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	</style>
	<?php	
}	

// pagination
if( !function_exists('munk_pagination_ed') ) {
    function munk_pagination_ed() {
	
    $pagination = get_theme_mod( 'munk_layout_blog_archive_pagination', 'default' );
    
    switch( $pagination ){
        
		case 'default': // Default Pagination
        the_posts_navigation();
        break;
        
        case 'numbered': // Numbered Pagination
        
        the_posts_pagination( array(
          'screen_reader_text' => ' ',
          'prev_text' => esc_html__( 'Previous', 'munk' ),
          'next_text' => esc_html__( 'Next', 'munk' ),
          ) );
        
        break;       
        
        default:
        
        the_posts_navigation(
            array(
                'screen_reader_text' => ' ',
                'prev_text' => esc_html__( 'Previous', 'munk' ),
                'next_text' => esc_html__( 'Next', 'munk' ),
                )   
        );
        
        break;
        }   
    }
}
add_action ('munk_pagination', 'munk_pagination_ed');

if ( ! function_exists( 'munk_post_meta_date' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time.
 */
function munk_post_meta_date() {
    $on = esc_html__( 'On ', 'munk' );
    $svg = '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16 fa-3x"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path></svg>';
    
	$time_string = '<time class="entry-date published" datetime="%1$s" itemprop="datePublished">%2$s</time>';  

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);
    
    $posted_on = sprintf( '%1$s %2$s', $svg. esc_html( $on ), '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>' );
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo '<span class="posted-on">' . $posted_on . '</span>'; 

}
endif;

if ( ! function_exists( 'munk_post_meta_author' ) ) :
/**
 * Prints HTML with meta information for the current author.
 */
function munk_post_meta_author() {
    $svg = '<svg aria-hidden="true" data-prefix="fal" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-2x"><path d="M313.6 288c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4zM416 464c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16v-41.6C32 365.9 77.9 320 134.4 320c19.6 0 39.1 16 89.6 16 50.4 0 70-16 89.6-16 56.5 0 102.4 45.9 102.4 102.4V464zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm0-224c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z" class=""></path></svg>';
	$byline = sprintf(
		/* translators: %s: post author. */
		esc_html_x( 'By %s', 'post author', 'munk' ),
		'<span itemprop="name"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" itemprop="url">' . esc_html( get_the_author() ) . '</a></span>' 
    );
	echo '<span class="byline" itemprop="author" itemscope itemtype="https://schema.org/Person">' . $svg . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
endif;

if( ! function_exists( 'munk_post_meta_comments' ) ) :
/**
 * Comment Count
*/
function munk_post_meta_comments(){
    if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-comments fa-w-18 fa-3x"><path fill="currentColor" d="M532 386.2c27.5-27.1 44-61.1 44-98.2 0-80-76.5-146.1-176.2-157.9C368.3 72.5 294.3 32 208 32 93.1 32 0 103.6 0 192c0 37 16.5 71 44 98.2-15.3 30.7-37.3 54.5-37.7 54.9-6.3 6.7-8.1 16.5-4.4 25 3.6 8.5 12 14 21.2 14 53.5 0 96.7-20.2 125.2-38.8 9.2 2.1 18.7 3.7 28.4 4.9C208.1 407.6 281.8 448 368 448c20.8 0 40.8-2.4 59.8-6.8C456.3 459.7 499.4 480 553 480c9.2 0 17.5-5.5 21.2-14 3.6-8.5 1.9-18.3-4.4-25-.4-.3-22.5-24.1-37.8-54.8zm-392.8-92.3L122.1 305c-14.1 9.1-28.5 16.3-43.1 21.4 2.7-4.7 5.4-9.7 8-14.8l15.5-31.1L77.7 256C64.2 242.6 48 220.7 48 192c0-60.7 73.3-112 160-112s160 51.3 160 112-73.3 112-160 112c-16.5 0-33-1.9-49-5.6l-19.8-4.5zM498.3 352l-24.7 24.4 15.5 31.1c2.6 5.1 5.3 10.1 8 14.8-14.6-5.1-29-12.3-43.1-21.4l-17.1-11.1-19.9 4.6c-16 3.7-32.5 5.6-49 5.6-54 0-102.2-20.1-131.3-49.7C338 339.5 416 272.9 416 192c0-3.4-.4-6.7-.7-10C479.7 196.5 528 238.8 528 288c0 28.7-16.2 50.6-29.7 64z" class=""></path></svg></svg>';
		comments_popup_link(
			sprintf(
				wp_kses(
					/* translators: %s: post title */
					__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'munk' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);
		echo '</span>';
	}    
}
endif;

if ( ! function_exists( 'munk_post_meta_category' ) ) :
/**
 * Prints categories
 */
function munk_post_meta_category(){
 	$svg = '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="folder" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-folder fa-w-16 fa-3x"><path fill="currentColor" d="M464 128H272l-54.63-54.63c-6-6-14.14-9.37-22.63-9.37H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V176c0-26.51-21.49-48-48-48zm0 272H48V112h140.12l54.63 54.63c6 6 14.14 9.37 22.63 9.37H464v224z" class=""></path></svg>';	
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'munk' ) );
		if ( $categories_list ) {
			echo '<span class="post-category">' . $svg . $categories_list . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
	}
}
endif;

if ( ! function_exists( 'munk_post_meta_tags' ) ) :
/**
 * Prints tags
 */
function munk_post_meta_tags(){
    $svg = '<svg aria-hidden="true" data-prefix="fal" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-tags fa-w-20 fa-2x"><path d="M625.941 293.823L421.823 497.941c-18.746 18.746-49.138 18.745-67.882 0l-1.775-1.775 22.627-22.627 1.775 1.775c6.253 6.253 16.384 6.243 22.627 0l204.118-204.118c6.238-6.239 6.238-16.389 0-22.627L391.431 36.686A15.895 15.895 0 0 0 380.117 32h-19.549l-32-32h51.549a48 48 0 0 1 33.941 14.059L625.94 225.941c18.746 18.745 18.746 49.137.001 67.882zM252.118 32H48c-8.822 0-16 7.178-16 16v204.118c0 4.274 1.664 8.292 4.686 11.314l211.882 211.882c6.253 6.253 16.384 6.243 22.627 0l204.118-204.118c6.238-6.239 6.238-16.389 0-22.627L263.431 36.686A15.895 15.895 0 0 0 252.118 32m0-32a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882L293.823 497.941c-18.746 18.746-49.138 18.745-67.882 0L14.059 286.059A48 48 0 0 1 0 252.118V48C0 21.49 21.49 0 48 0h204.118zM144 124c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20m0-28c26.51 0 48 21.49 48 48s-21.49 48-48 48-48-21.49-48-48 21.49-48 48-48z" class=""></path></svg>';
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html_x( ' ', 'list item separator', 'munk' ) ); // // phpcs:ignore WordPress.WP.I18n.NoEmptyStrings
		if ( $tags_list ) {
			// translators: 1: list of tags. 
			// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			printf( '<span class="tags">' . $svg . $tags_list . '</span>' ); 
		}
	}
}
endif;

/**
 * Query WooCommerce activation
 */
function munk_is_woocommerce_activated() {
	return class_exists( 'woocommerce' ) ? true : false;
}

/**
 * Check Elementor PB Activation
 */
function munk_is_elementor_activated() {
	
	if ( did_action( 'elementor/loaded' ) ) {
		return true;
	}
		
	return false;
}

/**
 * Footer Credits
*/
if ( ! function_exists( 'munk_footer_credit' ) ) :
function munk_footer_credit(){
    
    $munk_copyright_layout = get_theme_mod( 'munk_layout_footer_copyright_layout', 'left-align' );
    
    if ($munk_copyright_layout == 'left-align') {
        $leftside = 'left-side';
        $rightside = 'right-side';        
    }
    elseif ($munk_copyright_layout == 'right-align') {
        $leftside = 'right-side';
        $rightside = 'left-side';        
    }    
    else {
        $leftside = 'text-center';
        $rightside = 'text-center';                
    }

    $text  = '<div class="site-info"><div class="' . esc_attr($leftside). '">';
    $copyright = get_theme_mod( 'munk_footer_copyright' );		
	if ($copyright) {
    $text .=  esc_html($copyright);	
	}
	else {
    $text .=  esc_html__( 'Copyright &copy; ', 'munk' ) . date_i18n( 'Y' );
    $text .= ' <a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a>.';
	}		
    $text .= '</div>';
	
	$text .= '<div class="' . esc_attr($rightside). '">';	
	
	if(get_theme_mod( 'munk_ed_author_link', true ) ==  true ) {
    $text .= '<a href="' . esc_url( 'https://wpmunk.com/' ) .'" target="_blank">' . esc_html__( 'Built with Munk', 'munk' ) .'</a>. '; /* translators: %s: wordpress.org URL */ 
	}
    if(get_theme_mod( 'munk_ed_wp_link', true ) ==  true ) { /* translators: %s: wordpress.org URL */ 
	$text .= sprintf( esc_html__( 'Powered by %s', 'munk' ), '<a href="'. esc_url( __( 'https://wordpress.org/', 'munk' ) ) .'" target="_blank">' .esc_html('WordPress', 'munk'). '</a>.' );
	}
    
	$text .= '</div></div>';
	
    echo apply_filters( 'munk_footer_text', $text ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

}
add_action( 'munk_site_info', 'munk_footer_credit' );
endif;

if ( ! function_exists( 'munk_excerpt_more' ) ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... * 
 */
function munk_excerpt_more( $more ) {
	
	if (!is_admin()) {
		$read_more_text =  get_theme_mod('munk_layout_blog_archive_excert_read_more', __('Read More', 'munk')); 
			if ($read_more_text) {
				$more .= '<div class="read-more"><a href="' .esc_url(get_the_permalink()) . '" class="btn btn-primary btn-lg">';
				$more .= esc_html($read_more_text);
				$more .= '</a></div>';		
			}		
		return $more; // phpcs:ignore WordPress.Security.EscapeOutput.DeprecatedWhitelistCommentFound
	}	
	return $more; 
}
endif;
add_filter( 'excerpt_more', 'munk_excerpt_more' );

if ( ! function_exists( 'munk_excerpt_length' ) ) :
/**
 * Changes the default 55 character in excerpt 
*/
function munk_excerpt_length( $length ) {
	$munk_excerpt_length = get_theme_mod( 'munk_layout_blog_archive_excert_length', 55 );
    return is_admin() ? $length : absint( $munk_excerpt_length );    
}
endif;
add_filter( 'excerpt_length', 'munk_excerpt_length', 999 );