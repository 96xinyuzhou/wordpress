<?php
/**
 * Site Title and Description Sections
 *
 */

function munk_customize_typography_site_title( $config ) {


	Kirki::add_field( 'munk', array(
		'type'        => 'slider',
		'settings'    => 'munk_custom_logo_size_ed',
		'label'       => esc_html__( 'Logo Size', 'munk' ),
		'section'     => 'title_tagline',
		'default'     => 100,
		'priority'    => 8,		
		'transport'   => 'auto',		
		'choices'     => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		),
		'output'    => array(
			array(
			  'element'   => '.munk-header .site-branding .custom-logo',
			  'property' => 'max-width',
			  'suffix' => '%',
              'media_query' => '@media (min-width: 1024px)'
			),
		),		
		'active_callback' => array(
			array(
				'setting'  => 'custom_logo',
				'operator' => '!==',
				'value'    => '',
			),
		),		
	) );


	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_header_primary_title_ed',
		'label'       => esc_html__('Site Title Font', 'munk'),
		'section'     => 'title_tagline',
		'priority'    => 60,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',
			'font-size'      => '22px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
			'text-align'     => 'center',		
		),
		'output'    => array(
			array(
			  'element'   => '.site-header .site-branding h1, .site-header .site-branding h1 a',
			),
		),							
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_header_primary_desc_ed',
		'label'       => esc_html__('Site Description Font', 'munk'),
		'section'     => 'title_tagline',
		'priority'    => 70,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',
			'font-size'      => '14px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
			'text-align'     => 'center',		
		),
		'output'    => array(
			array(
			  'element'   => '.site-header .site-branding, .site-header .site-branding p',
			),
		),					
	) );					
	

}
add_action( 'kirki_config', 'munk_customize_typography_site_title' );