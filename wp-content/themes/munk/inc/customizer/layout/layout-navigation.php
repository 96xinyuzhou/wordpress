<?php
/**
 * Layout Site Header - Main Navigation
 *
 */

function munk_customize_layout_site_navigation ( $config ) {


    Kirki::add_section( 'munk_layout_site_navigation', array(
        'priority'   => 11,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Main Navigation', 'munk' ),
    ) );

	Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_color_main_nav_label',
		'label'       => '',
        'section'     => 'munk_layout_site_navigation',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Color Settings', 'munk' ) . '</div>',
		'priority'    => '5',
	) );	
	

	Kirki::add_field( 'munk', array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_main_nav_ed',
		'label'       => '',
		'section'     => 'munk_layout_site_navigation',
		'priority'    => 10,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor' => esc_html__( 'Background Color', 'munk' ),
			'link'    => esc_html__( 'Link  Color', 'munk' ),
			'hover'   => esc_html__( 'Hover  Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor' => '#ffffff',
			'link'    => '#101010',
			'hover'   => MUNK_ACCENT_COLOR,
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.site-header .navbar',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.layout-two-navbar',
			  'property'  => 'background-color',
			),                        
			array(
			  'choice'    => 'link',
			  'element'   => '.navbar .navbar-nav .nav-link',
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'hover',
			  'element'   => '.navbar .navbar-nav .nav-link:hover',
			  'property'  => 'color',
			),			
		),		
	) );							
	
	Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_color_main_nav_submenu_label',
		'label'       => '',
        'section'     => 'munk_layout_site_navigation',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Main Navigation Dropdown', 'munk' ) . '</div>',
		'priority'    => '15',
	) );		
	
	Kirki::add_field( 'munk', array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_main_nav_submenu',
		'label'       => '',
		'section'     => 'munk_layout_site_navigation',
		'priority'    => 20,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor' => esc_html__( 'Background Color', 'munk' ),
			'link'    => esc_html__( 'Link  Color', 'munk' ),
			'hover'   => esc_html__( 'Hover  Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor' => '#292E37',
			'link'    => '#ffffff',
			'hover'   => '#ffffff',
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.site-header .dropdown-menu, .navbar-expand-sm .navbar-nav .nav-item.dropdown:hover .nav-link.dropdown-toggle',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'link',
			  'element'   => '.site-header .dropdown-menu .dropdown-item, .navbar-expand-sm .navbar-nav .nav-item.dropdown:hover .nav-link.dropdown-toggle',
			  'property'  => 'color',
			),
			array(
			  'choice'    => 'hover',
			  'element'   => '.site-header .dropdown-menu .dropdown-item:hover',
			  'property'  => 'color',
			),			
		),		
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_color_main_nav_toggle_label',
		'label'       => '',
        'section'     => 'munk_layout_site_navigation',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Mobile Menu', 'munk' ) . '</div>',
		'priority'    => '30',
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_main_nav_toggle',
		'label'       => '',
		'section'     => 'munk_layout_site_navigation',
		'priority'    => 35,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor' => esc_html__( 'Background Color', 'munk' ),
			'link'    => esc_html__( 'Link  Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor' => '#101010',
			'link'    => '#ffffff',
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.navbar-toggler',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'link',
			  'element'   => '.navbar-toggler',
			  'property'  => 'color',
			),
		),		
	) );			
	
	Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_typography_main_nav_toggle_label',
		'label'       => '',
        'section'     => 'munk_layout_site_navigation',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Typography Menu', 'munk' ) . '</div>',
		'priority'    => '40',
	) );		
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_main_nav_ed',
		'label'       => esc_html__('Main Navigation', 'munk'),
		'section'     => 'munk_layout_site_navigation',
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
			  'element'   => '.site-header .navbar, .navbar .navbar-nav .nav-link, .site-header .dropdown-menu .dropdown-item',
			),
		),		
	) );		
			

}
add_action( 'kirki_config', 'munk_customize_layout_site_navigation' );