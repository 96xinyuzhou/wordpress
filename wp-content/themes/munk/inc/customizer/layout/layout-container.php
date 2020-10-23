<?php
/**
 * Layout Site Container
 *
 */

function munk_customize_layout_site_container ( $config ) {

    Kirki::add_section( 'munk_layout_container', array(
        'priority'   => 16,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Site Container', 'munk' ),
    ) );			
	
	// site container
	Kirki::add_field( 'munk', array(
		'type'        => 'select',
		'settings'    => 'munk_layout_container_default_ed',
		'label'       => esc_html__( 'Default Site Container', 'munk' ),
		'section'     => 'munk_layout_container',
		'default'     => 'default',
		'priority'    => 10,
		'multiple'    => 0,
		'choices'     => array(
			'default' => esc_html__( 'Default', 'munk' ),			
			'boxed' => esc_html__( 'Boxed', 'munk' ),
			'fullwidth-contained' => esc_html__( 'Full Width - Contained', 'munk' ),			
			'fluid' => esc_html__( 'Fluid', 'munk' ),						
		),
	) );	
	
	
	// .container width - if container layout = default
	Kirki::add_field( 'munk', array(
		'type'        => 'slider',
		'settings'    => 'munk_layout_default_container_width',
		'label'       => esc_html__( 'Default Container Width', 'munk' ),
		'section'     => 'munk_layout_container',
		'priority'    => 20,		
		'default'     => 1140,
		'choices'     => array(
			'min'  => 768,
			'max'  => 1920,
			'step' => 1,
		),		
		'active_callback'  => array(
				array(
					'setting'  => 'munk_layout_container_default_ed',
					'operator' => '===',
					'value'    => 'default',
				),
		),				
		'transport' => 'auto',
		'output'    => array(
			array(
				'element'         => '.container',
				'property'        => 'max-width',
				'units' 		  => 'px',
				'media_query' 	  => '@media (min-width: 1200px)',
			),
		),								
	 ) );	 	 	
	 
	// #page width - if container layout = boxed
	Kirki::add_field( 'munk', array(
		'type'        => 'slider',
		'settings'    => 'munk_layout_boxed_container_width',
		'label'       => esc_html__( 'Boxed Container Width', 'munk' ),
		'section'     => 'munk_layout_container',
		'priority'    => 20,		
		'default'     => 1140,
		'choices'     => array(
			'min'  => 768,
			'max'  => 1920,
			'step' => 1,
		),		
		'active_callback'  => array(
				array(
					'setting'  => 'munk_layout_container_default_ed',
					'operator' => '===',
					'value'    => 'boxed',
				),
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element'         => 'body.mt-container-boxed #page',
				'property'        => 'max-width',
				'units' 		  => 'px',
				'media_query' 	  => '@media (min-width: 1200px)',
			),
		),								
	 ) );	
	 
	// .container width - if container layout = boxed	 
	Kirki::add_field( 'munk', array(
		'type'        => 'slider',
		'settings'    => 'munk_layout_boxed_container_inner_width',
		'label'       => esc_html__( 'Inner Container Width', 'munk' ),
		'section'     => 'munk_layout_container',
		'priority'    => 20,		
		'default'     => 1140,
		'choices'     => array(
			'min'  => 768,
			'max'  => 1920,
			'step' => 1,
		),		
		'active_callback'  => array(
				array(
					'setting'  => 'munk_layout_container_default_ed',
					'operator' => '===',
					'value'    => 'boxed',
				),
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element'         => '.container',
				'property'        => 'max-width',
				'units' 		  => 'px',
				'media_query' 	  => '@media (min-width: 1200px)',
			),
		),												
	 ) );
	 
	// .container width - if container layout = default
	Kirki::add_field( 'munk', array(
		'type'        => 'slider',
		'settings'    => 'munk_layout_contained_container_width',
		'label'       => esc_html__( 'Contained Container Width', 'munk' ),
		'section'     => 'munk_layout_container',
		'priority'    => 20,		
		'default'     => 1140,
		'choices'     => array(
			'min'  => 768,
			'max'  => 1920,
			'step' => 1,
		),		
		'active_callback'  => array(
				array(
					'setting'  => 'munk_layout_container_default_ed',
					'operator' => '===',
					'value'    => 'fullwidth-contained',
				),
		),
		'transport' => 'auto',
		'output'    => array(
			array(
				'element'         => '.container',
				'property'        => 'max-width',
				'units' 		  => 'px',
				'media_query' 	  => '@media (min-width: 1200px)',
			),
		),							
	 ) );	 		 			
	

}
add_action( 'kirki_config', 'munk_customize_layout_site_container' );