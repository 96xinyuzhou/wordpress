<?php
/**
 * WooCommerce Compatibility File.
 *
 * @link https://woocommerce.com/
 *
 * @package Munk
 */

// If plugin - 'WooCommerce' not exist then return.
if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

function munk_customize_layout_woocommerce_shop( $config ) {
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'radio-image',
		'settings'    => 'munk_customize_layout_woocommerce_ed',
		'label'       => esc_html__( 'Shop Layout', 'munk' ),
		'description' => esc_html__( 'This layout applies to WooCommerce archives pages like: shop, product categories and product tags.', 'munk' ),						
		'section'     => 'woocommerce_product_catalog',
		'default'     => 'right-sidebar',
		'priority'    => 1,
		'choices'     =>  array(
			'no-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/no-sidebar.png',
			'left-sidebar' => get_template_directory_uri() . '/inc/customizer/assets/images/left-sidebar.png',
			'right-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/right-sidebar.png',
		),
	) );					
	
	Kirki::add_field( 'munk', array(
		'type'        => 'dimensions',
		'settings'    => 'munk_customize_layout_woocommerce_padding',
		'label'       => esc_html__( 'Post Content Padding', 'munk' ),
		'description' => esc_html__( 'Adjust shop container padding', 'munk' ),
		'section'     => 'woocommerce_product_catalog',
		'priority'    => 2,		
		'transport'   => 'auto',		
		'default'     => array(
			'padding_top'    => '45px',
			'padding_right'  => '45px',
			'padding_bottom' => '45px',
			'padding_left'   => '45px',
		),
		'choices'     => array(
			'labels' => array(
				'padding_top'  => esc_html__( 'Top', 'munk' ),
				'padding_right'  => esc_html__( 'Right', 'munk' ),
				'padding_bottom' => esc_html__( 'Bottom', 'munk' ),
				'padding_left' => esc_html__( 'Left', 'munk' ),
			),
		),
		'output'    => array(
			array(
			  'choice'      => 'padding_top',
			  'element'     => '.woocommerce #primary .site-main',
			  'property'    => 'padding-top',
			  'media_query' => '@media (min-width: 1024px)',
			),
			array(
			  'choice'      => 'padding_right',
			  'element'     => '.woocommerce #primary .site-main',
			  'property'    => 'padding-right',
			  'media_query' => '@media (min-width: 1024px)',			  
			),
			array(
			  'choice'      => 'padding_bottom',
			  'element'     => '.woocommerce #primary .site-main',
			  'property'    => 'padding-bottom',
			  'media_query' => '@media (min-width: 1024px)',			  
			),			
			array(
			  'choice'      => 'padding_left',
			  'element'     => '.woocommerce #primary .site-main',
			  'property'    => 'padding-left',
			  'media_query' => '@media (min-width: 1024px)',			  
			),						
		),				
	) );
	
	Kirki::add_field( 'munk', array(
		'type'        => 'dimensions',
		'settings'    => 'munk_customize_layout_woocommerce_margin',
		'label'       => esc_html__( 'Post Content Margin', 'munk' ),
		'description' => esc_html__( 'Adjust shop container margin', 'munk' ),
		'section'     => 'woocommerce_product_catalog',
		'priority'    => 3,		
		'transport'   => 'auto',		
		'default'     => array(
			'margin_top'  	 => '0px',
			'margin_right'  => '0px',
			'margin_bottom' => '0px',
			'margin_left'   => '0px',
		),
		'choices'     => array(
			'labels' => array(
				'margin_top'  => esc_html__( 'Top', 'munk' ),
				'margin_right'  => esc_html__( 'Right', 'munk' ),
				'margin_bottom' => esc_html__( 'Bottom', 'munk' ),
				'margin_left' => esc_html__( 'Left', 'munk' ),
			),
		),
		'output'    => array(
			array(
			  'choice'      => 'margin_top',
			  'element'     => '.woocommerce #primary .site-main',
			  'property'    => 'margin-top',
			  'media_query' => '@media (min-width: 1024px)',			  
			),
			array(
			  'choice'      => 'margin_right',
			  'element'     => '.woocommerce #primary .site-main',
			  'property'    => 'margin-right',
			  'media_query' => '@media (min-width: 1024px)',			  
			),
			array(
			  'choice'      => 'margin_bottom',
			  'element'     => '.woocommerce #primary .site-main',
			  'property'    => 'margin-bottom',
			  'media_query' => '@media (min-width: 1024px)',			  
			),			
			array(
			  'choice'      => 'margin_left',
			  'element'     => '.woocommerce #primary .site-main',
			  'property'    => 'margin-left',
			  'media_query' => '@media (min-width: 1024px)',			  
			),						
		),				
	) );		

	Kirki::add_field( 'munk',  array(
		'type'        => 'slider',
		'settings'    => 'munk_woocommerce_shop_per_row',
		'label'       => esc_html__( 'Shop Columns', 'munk' ),
		'section'     => 'woocommerce_product_catalog',
		'default'     => 3,
		'priority'    => 4,		
		'choices'     =>  array(
			'min'  => 1,
			'max'  => 6,
			'step' => 1,
		),
	) );	
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'slider',
		'settings'    => 'munk_woocommerce_shop_per_page',
		'label'       => esc_html__( 'Products Per Page', 'munk' ),
		'section'     => 'woocommerce_product_catalog',
		'default'     => 12,
		'priority'    => 5,		
		'choices'     =>  array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
		),
	) );	

	Kirki::add_field( 'munk', array(
		'type'        => 'toggle',
		'settings'    => 'munk_woocommerce_shop_add_to_cart_hover',
		'label'       => esc_html__( 'Enable Add to Cart On Hover', 'munk' ),
		'section'     => 'woocommerce_product_catalog',
		'default'     => '1',
		'priority'    => 6,
		'transport' => 'postMessage',
		'js_vars'     => array(
			array(
				'element'  => '.woocommerce-page ul.products li.product, .woocommerce ul.products li.product, .woocommerce-js.woocommerce ul.products li.product',
				'function' => 'toggleClass',
				'class'    => 'fixedbutton',
				'value'    => false,
			),
		),		
	) );
	
	Kirki::add_field( 'munk', array(
		'type'        => 'toggle',
		'settings'    => 'munk_woocommerce_shop_breadcrumbs',
		'label'       => esc_html__( 'Shop Breadcrumbs', 'munk' ),
		'section'     => 'woocommerce_product_catalog',
		'default'     => '1',
		'priority'    => 6,
	) );
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'toggle',
		'settings'    => 'munk_woocommerce_shop_title',
		'label'       => esc_html__( 'Display Shop Title', 'munk' ),
		'section'     => 'woocommerce_product_catalog',
		'default'     => '1',
		'priority'    => 7,
	) );
			
}
add_action( 'kirki_config', 'munk_customize_layout_woocommerce_shop' );
