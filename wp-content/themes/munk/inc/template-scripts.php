<?php
/**
 * Theme Scripts
 *
 * @package Munk
 */

/**
 * Enqueue scripts and styles.
 */
function munk_scripts() {

    // disabling block editor style to load after theme styles
    //wp_dequeue_style( 'wp-block-library' ); 
    //wp_dequeue_style( 'wp-block-library-theme' ); 
    
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', '', MUNK_THEME_VERSION );
	wp_enqueue_style( 'munk-theme', get_template_directory_uri() . '/assets/css/theme.css', '', MUNK_THEME_VERSION );	
	wp_enqueue_style( 'munk-style', get_stylesheet_uri(), '', MUNK_THEME_VERSION );	
    
    //wp_enqueue_style( 'wp-block-library' ); 
    //wp_enqueue_style( 'wp-block-library-theme' ); 
	
		
	wp_enqueue_script( 'jquery-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), MUNK_THEME_VERSION, true );
	wp_enqueue_script( 'munk-custom', get_template_directory_uri() . '/assets/js/munk.js', array('jquery'), MUNK_THEME_VERSION, true );					

	$munk_sticky_header = get_theme_mod('munk_layout_site_header_sticky_ed', '0');				
	$munk_header_layout = get_theme_mod('munk_layout_site_header_primary_ed', 'layout-one');					
	$munk_data = array(
		'header_layout' => $munk_header_layout,
		'sticky_header' => $munk_sticky_header,
	);
	
	wp_localize_script( 'munk-custom', 'Munk_Data', $munk_data );	
		
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'munk_scripts', 10 );

function munk_blocks_scripts() {

    // disabling block editor style to load after theme styles
    wp_dequeue_style( 'wp-block-library' ); 
    wp_dequeue_style( 'wp-block-library-theme' ); 
    
    wp_enqueue_style( 'wp-block-library' ); 
    wp_enqueue_style( 'wp-block-library-theme' ); 
	
}
add_action( 'wp_enqueue_scripts', 'munk_blocks_scripts', 20 );

/**
 * Register custom fonts.
 */
function munk_fonts_url() {

	// If Kirki exists there's no need to proceed any further because Kirki would load all the required fonts.
	if ( class_exists( 'Kirki' ) ) {
		return;
	}

	$fonts_url = '';
	
	/* Translators: If there are characters in your language that are not
	* supported by IBM Plex Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$ibm_plex_sans = _x( 'on', 'IBM Plex Sans: on or off', 'munk' );	 
	 
	if ( 'off' !== $ibm_plex_sans ) {
	$font_families = array();	
	 
	if ( 'off' !== $ibm_plex_sans ) {
	$font_families[] = 'IBM Plex Sans:400,500,600,700';
	}
	 	 
	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin-ext' ),
	);
	 
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
	 
	return esc_url_raw( $fonts_url );
}

function munk_scripts_styles() {
	wp_enqueue_style( 'munk-fonts', munk_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'munk_scripts_styles' );
add_action( 'enqueue_block_assets', 'munk_scripts_styles' );