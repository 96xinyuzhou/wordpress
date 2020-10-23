<?php
/**
 * WooCommerce Compatibility File.
 *
 * @link https://woocommerce.com/
 *
 * @package Munk
 */

/* body classes for single prdouct gallery
* 
* @since 1.0.0
*/
if ( ! function_exists( 'munk_body_wc_class' ) ) :
function munk_body_wc_class($classes) {	

		if (is_product()) {		
			$munk_wc_tab_ed = get_theme_mod('munk_wc_product_tab_layout', 'horizontal');									
			
				$classes[] = 'mt-wc-tabs-' . $munk_wc_tab_ed;					
			
			return $classes;
		}
		
		return $classes;
}
endif;
add_filter('body_class', 'munk_body_wc_class');	

// Woocommerce Customizer Panel Position Changes
if ( ! function_exists( 'munk_customize_woocommerce_panel' ) ) :

function munk_customize_woocommerce_panel( $wp_customize ) {
       
    /** Move WooCommerce Panel Above */
    $wp_customize->get_panel( 'woocommerce' )->priority = 30;

}
endif;
add_action( 'customize_register', 'munk_customize_woocommerce_panel' );


/**
 * Number of products per row in shop page
 */
if (!function_exists('munk_woocommerce_loop_columns')) :
    function munk_woocommerce_loop_columns() {
        if( is_shop() ){
            return get_theme_mod( 'munk_woocommerce_shop_per_row', 3 ); // products per row
        }
		else{
            return 3;
        }
    }
add_filter('loop_shop_columns', 'munk_woocommerce_loop_columns', 999);
endif;

/**
 * Change number of products that are displayed per page (shop page)
 */
if (!function_exists('munk_woocommerce_loop_shop_per_page')) :
 
function munk_woocommerce_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = get_theme_mod('munk_woocommerce_shop_per_page', '12');
  
  return $cols;
}

add_filter( 'loop_shop_per_page', 'munk_woocommerce_loop_shop_per_page', 999 );
endif;

/**
 * Show/Hide shop page title
 */
if (!function_exists('munk_wc_page_title_ed')) :

function munk_wc_page_title_ed() {

	$munk_wc_shop_title = get_theme_mod('munk_woocommerce_shop_title', '1');
	if ( $munk_wc_shop_title ) {
		return true;
	}
	else {
		return false;	
	}
}

add_filter( 'woocommerce_show_page_title' , 'munk_wc_page_title_ed' );
endif;


/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );								 
if (get_theme_mod('munk_wc_product_related', true) ==  true) { 
	add_action( 'woocommerce_after_single_product', 'woocommerce_output_related_products', 20 );								
}

function munk_wc_related_products_args( $args ) {

	$args['posts_per_page'] = get_theme_mod('munk_wc_product_row', '4'); // 4 related products
	$args['columns'] = get_theme_mod('munk_wc_product_col', '4'); // arranged in 2 columns
	
	return $args;
	
}
add_filter( 'woocommerce_output_related_products_args', 'munk_wc_related_products_args', 20 );


add_filter( 'post_class', 'munk_wc_post_class', 21 );

function munk_wc_post_class( $classes ) {

    if ( 'product' == get_post_type() ) {
	
		$munk_fixed_wc_btn = get_theme_mod('munk_woocommerce_shop_add_to_cart_hover', 1);
		if ($munk_fixed_wc_btn != '1') {
        	$classes[] = 'fixedbutton';
		}
    
    return $classes;	
	
	}
	
    return $classes;
	
}
			