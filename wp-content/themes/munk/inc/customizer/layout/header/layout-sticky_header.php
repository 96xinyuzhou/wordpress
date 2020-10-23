<?php
/**
 * Layout Site Header - Sticky Header
 *
 */

function munk_customize_layout_site_header_sticky ( $config ) {


    Kirki::add_section( 'munk_layout_site_header_sticky', array(
        'priority'   => 20,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Sticky Header', 'munk' ),
        'panel' =>  'munk_layouts_header',
    ) );

	Kirki::add_field( 'munk', array(
		'type'        => 'toggle',
		'settings'    => 'munk_layout_site_header_sticky_ed',
		'label'       => esc_html__( 'Enable Sticky Header', 'munk' ),
		'section'     => 'munk_layout_site_header_sticky',
		'default'     => '0',
		'priority'    => 10,
	) );		
	
	Kirki::add_field( 'munk', array(
		'type'        => 'dimensions',
		'settings'    => 'munk_layout_site_header_sticky_padding',
		'label'       => esc_html__( 'Sticky Header Padding', 'munk' ),
		'description' => esc_html__( 'Adjust sticky header top and bottom padding', 'munk' ),
		'section'     => 'munk_layout_site_header_sticky',
		'transport'   => 'auto',				
		'default'     => array(
			'padding-top'  => '5px',
			'padding-bottom'  => '5px',
		),
		'choices'     => array(
			'labels' => array(
				'padding-top'  => esc_html__( 'Padding Top', 'munk' ),
				'padding-bottom'  => esc_html__( 'Padding Bottom', 'munk' ),
			),
		),	
		'output'    => array(
			array(
			  'choice'      => 'padding-top',
			  'element'     => '.header-layout-one .munk-sticky-header',
			  'property'    => 'padding-top',
			  'suffix' => '!important',			  
			),
			array(
			  'choice'      => 'padding-bottom',
			  'element'     => '.header-layout-one .munk-sticky-header',
			  'property'    => 'padding-bottom',
			  'suffix' => '!important',			  
			),
			array(
			  'choice'      => 'padding-top',
			  'element'     => '.header-layout-two .header-bottom.munk-sticky-header .navbar',
			  'property'    => 'padding-top',
			  'suffix' => '!important',			  
			),			
			array(
			  'choice'      => 'padding-bottom',
			  'element'     => '.header-layout-two .header-bottom.munk-sticky-header .navbar',
			  'property'    => 'padding-bottom',
			  'suffix' => '!important',			  
			),						
		  ),		
	) );
	
	Kirki::add_field( 'munk', array(
		'type'        => 'slider',
		'settings'    => 'munk_layout_site_header_sticky_logo',
		'label'       => esc_html__( 'Sticky Header Logo Size', 'munk' ),
		'description' => esc_html__( 'Adjust sticky header logo size.', 'munk' ),		
		'transport'   => 'auto',		
		'section'     => 'munk_layout_site_header_sticky',
		'default'     => 100,
		'choices'     => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		),		
		'output' => array(
			array(
				'element'  => '.munk-sticky-header .site-branding .custom-logo',
				'property' => 'max-width',
				'units' => '%',
			),
		),		
	) );	

	Kirki::add_field( 'munk', [
		'type'        => 'dimension',
		'settings'    => 'munk_layout_site_header_sticky_border_ed',
		'label'       => esc_html__( 'Bottom Border', 'munk' ),
		'section'     => 'munk_layout_site_header_sticky',
		'default'     => '1px',
		'transport'   => 'auto',		
		'output' => array(
			array(
				'element'  => '.munk-sticky-header',
				'property' => 'border-bottom-width',				
				'suffix' => '!important',
			),
		),			
	] );		
	
	Kirki::add_field( 'munk', array(
		'type'        => 'color',
		'settings'    => 'munk_layout_site_header_sticky_border_color',
		'label'       => __( 'Border Color', 'munk' ),
		'description' => esc_html__( 'Add bottom border color to sticky header', 'munk' ),
		'section'     => 'munk_layout_site_header_sticky',
		'transport'   => 'auto',
		'default'     => '#d4dadf',
		'output' => array(
			array(
				'element'  => '.munk-sticky-header',
				'property' => 'border-color',				
				'suffix' => '!important',				
			),
		),			
	) );	
	
}
add_action( 'kirki_config', 'munk_customize_layout_site_header_sticky' );