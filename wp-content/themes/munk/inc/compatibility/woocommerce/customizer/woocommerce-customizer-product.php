<?php
/**
 * WooCommerce Compatibility File.
 *
 * @link https://woocommerce.com/
 *
 * @package Munk
 */

function munk_customize_layout_wc_product( $config ) {


    Kirki::add_section( 'munk_layout_wc_product', array(
        'priority'   => 10,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Single Product', 'munk' ),
        'panel' =>  'woocommerce',
    ) );			
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'radio-image',
		'settings'    => 'munk_customize_layout_wc_product_ed',
		'label'       => esc_html__( 'Single Product Layout', 'munk' ),
		'description' => esc_html__( 'This layout applies to single product pages', 'munk' ),				
		'section'     => 'munk_layout_wc_product',
		'default'     => 'right-sidebar',
		'transport'   => 'refresh',
		'priority'    => 5,
		'choices'     =>  array(
			'no-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/no-sidebar.png',
			'left-sidebar' => get_template_directory_uri() . '/inc/customizer/assets/images/left-sidebar.png',
			'right-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/right-sidebar.png',
		),
	) );	

Kirki::add_field( 'munk', array(
		'type'        => 'dimensions',
		'settings'    => 'munk_customize_layout_wc_product_padding',
		'label'       => esc_html__( 'Post Content Padding', 'munk' ),
		'description' => esc_html__( 'Adjust product layout padding', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'priority'    => 5,		
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
			  'element'     => '.woocommerce.single-product.mt-content-padding-yes #primary .site-main',
			  'property'    => 'padding-top',
			  'media_query' => '@media (min-width: 1024px)',			  
			),
			array(
			  'choice'      => 'padding_right',
			  'element'     => '.woocommerce.single-product.mt-content-padding-yes #primary .site-main',
			  'property'    => 'padding-right',
			  'media_query' => '@media (min-width: 1024px)',			  
			),
			array(
			  'choice'      => 'padding_bottom',
			  'element'     => '.woocommerce.single-product.mt-content-padding-yes #primary .site-main',
			  'property'    => 'padding-bottom',
			  'media_query' => '@media (min-width: 1024px)',			  
			),			
			array(
			  'choice'      => 'padding_left',
			  'element'     => '.woocommerce.single-product.mt-content-padding-yes #primary .site-main',
			  'property'    => 'padding-left',
			  'media_query' => '@media (min-width: 1024px)',			  
			),						
		),				
	) );
	
	Kirki::add_field( 'munk', array(
		'type'        => 'dimensions',
		'settings'    => 'munk_customize_layout_wc_product_margin',
		'label'       => esc_html__( 'Post Content Margin', 'munk' ),
		'description' => esc_html__( 'Adjust product layout margin', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'priority'    => 5,		
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
			  'element'     => '.woocommerce.single-product.mt-content-padding-yes #primary .site-main',
			  'property'    => 'margin-top',
			  'media_query' => '@media (min-width: 1024px)',			  
			),
			array(
			  'choice'      => 'margin_right',
			  'element'     => '.woocommerce.single-product.mt-content-padding-yes #primary .site-main',
			  'property'    => 'margin-right',
			  'media_query' => '@media (min-width: 1024px)',			  
			),
			array(
			  'choice'      => 'margin_bottom',
			  'element'     => '.woocommerce.single-product.mt-content-padding-yes #primary .site-main',
			  'property'    => 'margin-bottom',
			  'media_query' => '@media (min-width: 1024px)',			  
			),			
			array(
			  'choice'      => 'margin_left',
			  'element'     => '.woocommerce.single-product.mt-content-padding-yes #primary .site-main',
			  'property'    => 'margin-left',
			  'media_query' => '@media (min-width: 1024px)',			  
			),						
		),				
	) );		
	
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'toggle',
		'settings'    => 'munk_wc_product_gallery_zoom',
		'label'       => esc_html__( 'Enable Image Zoom Effect', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'default'     => '1',
		'transport'   => 'refresh',		
		'priority'    => 5,
	) );
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'toggle',
		'settings'    => 'munk_wc_product_gallery_lightbox',
		'label'       => esc_html__( 'Enable Image Lightbox', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'transport'   => 'refresh',		
		'default'     => '1',
		'priority'    => 5,
	) );	

	Kirki::add_field( 'munk',  array(
		'type'        => 'toggle',
		'settings'    => 'munk_wc_product_gallery_slider',
		'label'       => esc_html__( 'Enable Gallery Slider', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'transport'   => 'refresh',		
		'default'     => '1',
		'priority'    => 5,
	) );	
			
	Kirki::add_field( 'munk',  array(
		'type'        => 'select',
		'settings'    => 'munk_wc_product_tab_layout',
		'label'       => esc_html__( 'Product Tabs Layout', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'default'     => 'horizontal',
		'priority'    => 5,
		'choices'     =>  array(
			'horizontal' => esc_html__( 'Horizontal', 'munk' ),
			'vertical' => esc_html__( 'Vertical', 'munk' ),
			'none' => esc_html__( 'Disabled', 'munk' ),
		),
	) );			
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'toggle',
		'settings'    => 'munk_wc_product_related',
		'label'       => esc_html__( 'Enable Related Products', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'default'     => '1',
		'priority'    => 5,
		'transport' => 'postMessage',
		'js_vars'     => array(
			array(
			'element'  => '.single-product .related',
			'function' => 'toggleClass',
			'class'    => 'd-none',
			'value'    => false,
			),
		),
	) );						
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'slider',
		'settings'    => 'munk_wc_product_row',
		'label'       => esc_html__( 'No. of Related Products', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'default'     => 4,
		'priority'    => 5,		
		'choices'     =>  array(
			'min'  => 1,
			'max'  => 36,
			'step' => 1,
		),
		'active_callback' =>  array(
			 array(
				'setting'  => 'munk_wc_product_related',
				'operator' => '==',
				'value'    => true,
			)
		),			
	) );	

	Kirki::add_field( 'munk',  array(
		'type'        => 'slider',
		'settings'    => 'munk_wc_product_col',
		'label'       => esc_html__( 'Related Products Columns', 'munk' ),
		'section'     => 'munk_layout_wc_product',
		'default'     => 4,
		'priority'    => 5,		
		'choices'     =>  array(
			'min'  => 1,
			'max'  => 6,
			'step' => 1,
		),
		'active_callback' =>  array(
			 array(
				'setting'  => 'munk_wc_product_related',
				'operator' => '==',
				'value'    => true,
			)
		),		
	) );	
	
	
}
add_action( 'kirki_config', 'munk_customize_layout_wc_product' );
