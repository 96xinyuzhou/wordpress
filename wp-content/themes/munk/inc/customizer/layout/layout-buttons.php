<?php
/**
 * Layout Site Buttons
 *
 */

function munk_customize_layout_buttons ( $config ) {

    Kirki::add_section( 'munk_layout_button', array(
        'priority'   => 15,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Buttons', 'munk' ),
    ) );					
	
	Kirki::add_field( 'munk', array(
			'type'        => 'custom',
			'settings'    => 'munk_primary_button_color_label',
			'label'       => '',
			'section'     => 'munk_layout_button',
			'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Color Settings', 'munk' ) . '</div>',
			'priority'    => '30',
		) );	
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_primary_button',
		'label'       => '',
		'section'     => 'munk_layout_button',
		'priority'    => 35,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor' => esc_html__( 'Background Color', 'munk' ),
			'text'    => esc_html__( 'Text Color', 'munk' ),
			'hover-bg'    => esc_html__( 'Hover background Color', 'munk' ),
			'hover-text'   => esc_html__( 'Hover Text Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor' => '#0161bd',
			'text'    => '#ffffff',			
			'hover-bg'    => '#075aaa',
			'hover-text'   => '#ffffff',
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor',
               'element'   => '.button, #button, input[type="button"], input[type="submit"], .btn, .btn-primary, .woocommerce a.button, .woocommerce .added_to_cart, .woocommerce add_to_cart_button, .woocommerce button.button, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled[disabled], .navigation.pagination .nav-links a:hover, .navigation.pagination .nav-links .current, .entry-card .read-more a, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current',
			   'property'  => 'background-color',
               'suffix'   => ' !important',
			),
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.button, #button, input[type="button"], input[type="submit"], .btn, .btn-primary, .woocommerce .added_to_cart, .woocommerce add_to_cart_button, .woocommerce a.button, .woocommerce button.button, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled[disabled], .navigation.pagination .nav-links a:hover, .navigation.pagination .nav-links .current, .entry-card .read-more a, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current',
			  'property'  => 'border-color',
              'suffix'   => ' !important',
			),	
            array(
			  'choice'    => 'text',
			  'element'   => '.button, #button, input[type="button"], input[type="submit"], .btn, .btn-primary, .woocommerce a.button, .woocommerce .added_to_cart, .woocommerce add_to_cart_button, .woocommerce button.button, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled[disabled], .navigation.pagination .nav-links a:hover, .navigation.pagination .nav-links .current, .entry-card .read-more a, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current', 
			  'property'  => 'color',
			  'suffix'   => ' !important',			  
			),					
			array(
			  'choice'    => 'hover-bg',
			  'element'   => '.button:hover, #button:hover, input[type="button"]:hover, input[type="submit"]:hover, .btn:hover, .btn-primary:hover, .woocommerce a.button:hover, .woocommerce .added_to_cart:hover, .woocommerce add_to_cart_button:hover, .woocommerce button.button:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled]:hover, .entry-card .read-more a:hover',
			  'property'  => 'background-color',
              'suffix'   => ' !important',
			),
			array(
			  'choice'    => 'hover-text',
			  'element'   => '.button:hover, #button:hover, input[type="button"]:hover, input[type="submit"]:hover, .btn:hover, .btn-primary:hover, .woocommerce a.button:hover, .woocommerce .added_to_cart:hover, .woocommerce add_to_cart_button:hover, .woocommerce button.button:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled]:hover, .entry-card .read-more a:hover',
			  'property'  => 'color',
			  'suffix'   => ' !important',			  			  
			),							
			array(
			  'choice'    => 'hover-text',
			  'element'   => '.button:hover, #button:hover, input[type="button"]:hover, input[type="submit"]:hover, .btn:hover, .btn-primary:hover, .woocommerce a.button:hover, .woocommerce .added_to_cart:hover, .woocommerce add_to_cart_button:hover, .woocommerce button.button:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled]:hover, .navigation.pagination .nav-links .current, .entry-card .read-more a',
			  'property'  => 'border-color',
              'suffix'   => ' !important',                
			),															
		),		
	) );
	
		Kirki::add_field( 'munk', array(
				'type'        => 'custom',
				'settings'    => 'munk_primary_button_typography_label',
				'label'       => '',
				'section'     => 'munk_layout_button',
				'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Typography Settings', 'munk' ) . '</div>',
				'priority'    => '40',
			) );		
				
Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_primary_button',
		'label'       => esc_html__('Primary Button', 'munk'),
		'section'     => 'munk_layout_button',
		'priority'    => 45,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',
			'font-size'      => '15px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
		),
		'output'    => array(
			array(
			  'element'   => '.button, #button, input[type="button"], input[type="submit"], .btn, .btn-primary, .woocommerce table.shop_table td.actions button.button, .navigation.pagination .nav-links a.page-numbers, .navigation.pagination .nav-links a:hover,.navigation.pagination .nav-links .current, .no-results .search-submit, .woocommerce div.product .cart .single_add_to_cart_button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.wp-block-button__link,.is-style-outline .wp-block-button__link, .woocommerce-page ul.products li.product .button, .woocommerce ul.products li.product .button, .woocommerce-js.woocommerce ul.products li.product .button, .wc-block-grid__product .wp-block-button__link, .has-aligned-buttons .wc-block-grid__product .wp-block-button__link, .woocommerce-page ul.products li.product.fixedbutton .button, .woocommerce ul.products li.product.fixedbutton .button, .woocommerce-js.woocommerce ul.products li.product.fixedbutton .button, .entry-card .read-more a, .widget_search .search-submit, .woocommerce form.checkout_coupon button.button, .woocommerce-page ul.products li.product .added_to_cart, .woocommerce ul.products li.product .added_to_cart, .woocommerce-js.woocommerce ul.products li.product .added_to_cart, .woocommerce .woocommerce-form-login .woocommerce-form-login__submit, .error-404 .search-submit, .woocommerce nav.woocommerce-pagination ul li',
            'suffix'   => ' !important',  
			),
			array(
			  'element'   => '.is-block-content .button, .is-block-content #button, .is-block-content input[type="button"], .is-block-content input[type="submit"], .btn, .btn-primary, .woocommerce table.shop_table td.actions button.button, .navigation.pagination .nav-links a.page-numbers, .navigation.pagination .nav-links a:hover,.navigation.pagination .nav-links .current, .no-results .search-submit, .woocommerce div.product .cart .single_add_to_cart_button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.wp-block-button__link,.is-style-outline .wp-block-button__link, .woocommerce-page ul.products li.product .button, .woocommerce ul.products li.product .button, .woocommerce-js.woocommerce ul.products li.product .button, .wc-block-grid__product .wp-block-button__link, .has-aligned-buttons .wc-block-grid__product .wp-block-button__link, .woocommerce-page ul.products li.product.fixedbutton .button, .woocommerce ul.products li.product.fixedbutton .button, .woocommerce-js.woocommerce ul.products li.product.fixedbutton .button, .entry-card .read-more a, .widget_search .search-submit, .woocommerce form.checkout_coupon button.button, .woocommerce-page ul.products li.product .added_to_cart, .woocommerce ul.products li.product .added_to_cart, .woocommerce-js.woocommerce ul.products li.product .added_to_cart, .woocommerce .woocommerce-form-login .woocommerce-form-login__submit, .error-404 .search-submit, .woocommerce nav.woocommerce-pagination ul li',
			  'context'  => array( 'editor' ),
			),			
		),		
	) );			
	

}
add_action( 'kirki_config', 'munk_customize_layout_buttons' );