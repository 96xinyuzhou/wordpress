<?php
/**
 * Layout Site Header - Primary Header
 *
 */

function munk_customize_layout_site_header_primary ( $config ) {


    Kirki::add_section( 'munk_layout_site_header_primary', array(
        'priority'   => 20,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Primary Header', 'munk' ),
        'panel' =>  'munk_layouts_header',
    ) );

	Kirki::add_field( 'munk', array(
		'type'        => 'select',
		'settings'    => 'munk_layout_site_header_primary_ed',
		'label'       => esc_html__( 'Primary Header Layout', 'munk' ),
		'section'     => 'munk_layout_site_header_primary',
		'default'     => 'layout-one',
		'priority'    => 10,
		'choices'     => array(
			'none' => esc_html__( 'None', 'munk' ),
			'layout-one' => esc_html__( 'Layout 1', 'munk' ),
			'layout-two' => esc_html__( 'Layout 2', 'munk' ),				
		),
	) );
	
	Kirki::add_field( 'munk', array(
		'type'        => 'toggle',
		'settings'    => 'munk_layout_site_header_primary_menu',
		'label'       => esc_html__( 'Enable Primary Menu', 'munk' ),
		'section'     => 'munk_layout_site_header_primary',
		'default'     => '1',
		'priority'    => 20,
	) );
	
	Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_color_primary_header_layout_label',
		'label'       => '',
        'section'     => 'munk_color_button',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Primary Header Layout', 'munk' ) . '</div>',
		'priority'    => '25',
	) );				
	
Kirki::add_field( 'munk', array(
		'type'        => 'dimensions',
		'settings'    => 'munk_layout_site_header_primary_padding',
		'label'       => esc_html__( 'Primary Header Padding', 'munk' ),
		'description' => esc_html__( 'Adjust primary header top and bottom padding', 'munk' ),
		'section'     => 'munk_layout_site_header_primary',
		'transport'   => 'auto',				
		'priority'    => '30',		
		'default'     => array(
			'padding-top'  => '10px',
			'padding-bottom'  => '10px',
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
			  'element'     => '.header-layout-one .munk-header',
			  'property'    => 'padding-top',
			  'suffix' => '!important',			  
			),
			array(
			  'choice'      => 'padding-bottom',
			  'element'     => '.header-layout-one .munk-header',
			  'property'    => 'padding-bottom',
			  'suffix' => '!important',			  
			),
			array(
			  'choice'      => 'padding-top',
			  'element'     => '.header-layout-two .layout-two-header',
			  'property'    => 'padding-top',
			  'suffix' => '!important',			  
			),			
			array(
			  'choice'      => 'padding-bottom',
			  'element'     => '.header-layout-two .layout-two-header',
			  'property'    => 'padding-bottom',
			  'suffix' => '!important',			  
			),						
		),		
	) );	

	Kirki::add_field( 'munk', [
		'type'        => 'dimension',
		'settings'    => 'munk_layout_site_header_primary_border_ed',
		'label'       => esc_html__( 'Bottom Border', 'munk' ),
		'section'     => 'munk_layout_site_header_primary',
		'default'     => '1px',
		'priority'    => '40',		
		'transport'   => 'auto',		
		'output' => array(
			array(
				'element'  => '.munk-header',
				'property' => 'border-bottom-width',				
				'suffix' => '!important',
			),
		),			
	] );		
	
	Kirki::add_field( 'munk', array(
		'type'        => 'color',
		'settings'    => 'munk_layout_site_header_primary_border_color',
		'label'       => __( 'Border Color', 'munk' ),
		'description' => esc_html__( 'Add bottom border color to primary header', 'munk' ),
		'section'     => 'munk_layout_site_header_primary',
		'transport'   => 'auto',
		'priority'    => '45',		
		'default'     => '#d4dadf',
		'output' => array(
			array(
				'element'  => '.munk-header',
				'property' => 'border-color',				
				'suffix' => '!important',				
			),
		),			
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'toggle',
		'settings'    => 'munk_layout_site_header_shadow',
		'label'       => esc_html__( 'Enable Header Box Shadow', 'munk' ),
		'section'     => 'munk_layout_site_header_primary',
		'default'     => '1',
		'priority'    => 50,
		'transport'   => 'auto',		
		'output' => array(
			array(
				'element'  => '.munk-header',
				'property'      => 'box-shadow',
				'value_pattern' => '0 3px 8px 0 rgba(116, 129, 141, 0.1)',
				'exclude'       => array( false ),
			),			
		),					
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'slider',
		'settings'    => 'munk_layout_site_header_primary_margin_bottom',
		'label'       => esc_html__( 'Margin Bottom', 'munk' ),
		'description' => esc_html__( 'Adjust primary header bottom margin', 'munk' ),		
		'transport'   => 'auto',		
		'section'     => 'munk_layout_site_header_primary',
		'default'     => 0,
		'priority'    => '55',		
		'choices'     => array(
			'min'  => 0,
			'max'  => 500,
			'step' => 1,
		),		
		'output' => array(
			array(
				'element'  => '.munk-header',
				'property' => 'margin-bottom',
				'units' => 'px',
			),
		),		
	) );	
	
Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_color_header_primary',
		'label'       => '',
        'section'     => 'munk_layout_site_header_primary',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Color Settings', 'munk' ) . '</div>',
		'priority'    => '60',
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_header_primary_ed',
		'label'       => '',
		'section'     => 'munk_layout_site_header_primary',
		'priority'    => 65,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor-header' => esc_html__( 'Background Color', 'munk' ),
			'text'    => esc_html__( 'Text Color', 'munk' ),
			'link'    => esc_html__( 'Link  Color', 'munk' ),
			'hover'   => esc_html__( 'Hover  Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor-header' => '#FFFFFF',
			'text'    => '#101010',
			'link'    => '#101010',
			'hover'   => '#101010',
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor-header',
			  'element'   => '.site-header',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'text',
			  'element'   => '.site-header, .site-header .site-branding p',
			  'property'  => 'color',
			),			
			array(
			  'choice'    => 'link',
			  'element'   => '.site-header .site-branding h1 a',
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'hover',
			  'element'   => '.site-header .site-branding h1 a:hover',
			  'property'  => 'color',
			),			
		),		
	) );			

}
add_action( 'kirki_config', 'munk_customize_layout_site_header_primary' );