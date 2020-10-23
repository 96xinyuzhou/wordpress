<?php
/**
 * Woocommerce Colors Sections
 *
 */

function munk_customize_colors_woocommerce( $config ) {

    Kirki::add_section( 'munk_colors_woocommerce', array(
        'priority'   => 50,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Colors Settings', 'munk' ),
        'panel' =>  'woocommerce'
    ) );    
		
	
	Kirki::add_field( 'munk', array(
			'type'        => 'custom',
			'settings'    => 'munk_color_shop_layout_layout',
			'label'       => '',
			'section'     => 'munk_colors_woocommerce',
			'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Shop', 'munk' ) . '</div>',
			'priority'    => '1',
		) );
		
	Kirki::add_field( 'munk',  array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_shop_layout',
		'label'       => '',
		'section'     => 'munk_colors_woocommerce',
		'priority'    => 2,
		'transport'   => 'auto',
		'choices'     => array(
			'shop-bg'    => esc_html__( 'Product Container Background', 'munk' ),
			'shop-title'    => esc_html__( 'Shop Page Title', 'munk' ),
			'shop-content'   => esc_html__( 'Shop Content', 'munk' ),
			'shop-selectbg' => esc_html__( 'Shop Order Background', 'munk' ),									
			'shop-selectcolor' => esc_html__( 'Shop Order Color', 'munk' ),												
		),
		'default'     => array(
			'shop-bg'    => '#ffffff',
			'shop-title'    => '#212529',
			'shop-content'   => '#212529',
			'shop-selectbg'   => '#ffffff',			
			'shop-selectcolor'   => '#212529',						
		),
		'output'    => array(
			array(
			  'choice'    => 'shop-bg',
			  'element'   => '.woocommerce #primary .site-main',
			  'property'  => 'background-color',
			),			
			array(
			  'choice'    => 'shop-title',
			  'element'   => '.woocommerce.archive h1.page-title',
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'shop-content',
			  'element'   => '.woocommerce p.woocommerce-result-count, .woocommerce .woocommerce-breadcrumb, .woocommerce .woocommerce-breadcrumb a',
			  'property'  => 'color',
			),	
			array(
			  'choice'    => 'shop-selectbg',
			  'element'   => '.woocommerce .woocommerce-ordering select',
			  'property'  => 'background-color',
			),	
			array(
			  'choice'    => 'shop-selectcolor',
			  'element'   => '.woocommerce .woocommerce-ordering select',
			  'property'  => 'color',
			),									
		),		
	) );			
		
	Kirki::add_field( 'munk', array(
			'type'        => 'custom',
			'settings'    => 'munk_color_product_card_label',
			'label'       => '',
			'section'     => 'munk_colors_woocommerce',
			'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Product Cards', 'munk' ) . '</div>',
			'priority'    => '5',
		) );
		
	Kirki::add_field( 'munk',  array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_product_card_ed',
		'label'       => '',
		'section'     => 'munk_colors_woocommerce',
		'priority'    => 10,
		'transport'   => 'auto',
		'choices'     => array(
			'category'    => esc_html__( 'Product Category', 'munk' ),
			'title'    => esc_html__( 'Product Title', 'munk' ),
			'price'   => esc_html__( 'Product Price', 'munk' ),
			'rating' => esc_html__( 'Product Rating', 'munk' ),									
		),
		'default'     => array(
			'category'    => '#999999',
			'title'    => '#101010',
			'price'   => '#101010',
			'rating'   => '#ee9e13',			
		),
		'output'    => array(
			array(
			  'choice'    => 'category',
			  'element'   => '.woocommerce-page ul.products li.product .mt-woo-product-category p, .woocommerce ul.products li.product .mt-woo-product-category p',
			  'property'  => 'color',
			),			
			array(
			  'choice'    => 'title',
			  'element'   => '.woocommerce-page ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product .woocommerce-loop-product__title',
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'price',
			  'element'   => '.woocommerce-page ul.products li.product .price, .woocommerce ul.products li.product .price',
			  'property'  => 'color',
			),	
			array(
			  'choice'    => 'rating',
			  'element'   => '.woocommerce .star-rating',
			  'property'  => 'color',
			),						
		),		
	) );		
	
	Kirki::add_field( 'munk', array(
			'type'        => 'custom',
			'settings'    => 'munk_color_single_product_card_label',
			'label'       => '',
			'section'     => 'munk_colors_woocommerce',
			'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Single Product', 'munk' ) . '</div>',
			'priority'    => '15',
		) );	

	Kirki::add_field( 'munk', array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_single_product_ed',
		'label'       => '',
		'section'     => 'munk_colors_woocommerce',
		'priority'    => 20,
		'transport'   => 'auto',
		'choices'     => array(
			'title'    => esc_html__( 'Product Title', 'munk' ),
			'content'    => esc_html__( 'Product Content', 'munk' ),
			'price'   => esc_html__( 'Product Price', 'munk' ),
		),
		'default'     => array(
			'title'    => '#212529',
			'content'    => '#212529',
			'price'   => '#0161bd',
		),
		'output'    => array(
			array(
			  'choice'    => 'title',
			  'element'   => '.woocommerce div.product .product_title, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .single-product .up-sells h2,  .single-product .related h2',
			  'property'  => 'color',
			),			
			array(
			  'choice'    => 'content',
			  'element'   => '.woocommerce.single-product #content div.product div.summary, .woocommerce.single-product div.product div.summary, .woocommerce-page #content div.product div.summary, .woocommerce-page div.product div.summary,  .woocommerce-page div.product div.summary p,  .woocommerce-page div.product div.summary, .woocommerce div.product .woocommerce-tabs .panel, .woocommerce div.product .woocommerce-tabs .panel p, .woocommerce div.product .woocommerce-tabs .panel h2, .woocommerce div.product form.cart .mt-qty-wrap .plus, .woocommerce div.product form.cart .mt-qty-wrap .minus, .woocommerce div.product form.cart div.quantity input, .woocommerce table.shop_attributes th, .woocommerce table.shop_attributes td, #review_form span, #review_form label,.woocommerce div.product .woocommerce-tabs ul.tabs li a, .single-product .product_meta, .single-product .product_meta span, .single-product .product_meta span a',
			  'property'  => 'color',
			),						
			array(
			  'choice'    => 'price',
			  'element'   => '.woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce-page div.product div.summary p.price, #review_form #respond form p.stars a',
			  'property'  => 'color',
			),
		),		
	) );	
	
Kirki::add_field( 'munk', array(
			'type'        => 'custom',
			'settings'    => 'munk_color_sale_label',
			'label'       => '',
			'section'     => 'munk_colors_woocommerce',
			'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Sale Badge', 'munk' ) . '</div>',
			'priority'    => '25',
		) );					
							
							
	Kirki::add_field( 'munk',  array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_sale_ed',
		'label'       => '',
		'section'     => 'munk_colors_woocommerce',
		'priority'    => 30,
		'transport'   => 'auto',
		'choices'     => array(
			'background'    => esc_html__( 'Background', 'munk' ),
			'content'    => esc_html__( 'Content', 'munk' ),
		),
		'default'     => array(
			'background'    => '#0161bd',
			'content'    => '#ffffff',
		),
		'output'    => array(
			array(
			  'choice'    => 'background',
			  'element'   => '.woocommerce span.onsale,.wc-block-grid__product-onsale',
			  'property'  => 'background-color',
			),						
			array(
			  'choice'    => 'content',
			  'element'   => '.woocommerce span.onsale,.wc-block-grid__product-onsale',
			  'property'  => 'color',
			  'suffix' => '!important',
			),
			array(
			  'choice'    => 'background',
			  'element'   => '.woocommerce span.onsale,.wc-block-grid__product-onsale',
			  'property'  => 'background-color',
			  'context'  => array( 'editor' ),	
			),						
			array(
			  'choice'    => 'content',
			  'element'   => '.woocommerce span.onsale,.wc-block-grid__product-onsale',
			  'property'  => 'color',
			  'suffix' => '!important',
			  'context'  => array( 'editor' ),	
			),			
		),		
	) );		
	
}
add_action( 'kirki_config', 'munk_customize_colors_woocommerce' );