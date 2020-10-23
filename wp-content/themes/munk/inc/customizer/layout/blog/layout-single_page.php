<?php
/**
 * Layout Single Page
 *
 */

function munk_customize_layout_single_page ( $config ) {


    Kirki::add_section( 'munk_customize_layout_single_page', array(
        'priority'   => 10,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Single Page', 'munk' ),
        'panel' =>  'munk_layouts_blog',
    ) );
		
	Kirki::add_field( 'munk', array(
		'type'        => 'radio-image',
		'settings'    => 'munk_layout_single_page_ed',
		'label'       => esc_html__( 'Single Page Layout', 'munk' ),
		'section'     => 'munk_customize_layout_single_page',
		'default'     => 'right-sidebar',
		'priority'    => 10,
		'choices'     => array(
			'no-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/no-sidebar.png',
			'left-sidebar' => get_template_directory_uri() . '/inc/customizer/assets/images/left-sidebar.png',
			'right-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/right-sidebar.png',
		),
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'dimensions',
		'settings'    => 'munk_layout_single_page_entry_padding',
		'label'       => esc_html__( 'Post Content Padding', 'munk' ),
		'description' => esc_html__( 'Adjust page content padding', 'munk' ),
		'section'     => 'munk_customize_layout_single_page',
		'priority'    => 15,		
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
			  'element'     => '.page.mt-content-padding-yes #primary .entry-card',
			  'property'    => 'padding-top',
			  //'media_query' => '@media (min-width: 1024px)',			  
			),
			array(
			  'choice'      => 'padding_right',
			  'element'     => '.page.mt-content-padding-yes #primary .entry-card',
			  'property'    => 'padding-right',
			  //'media_query' => '@media (min-width: 1024px)'			  
			),
			array(
			  'choice'      => 'padding_bottom',
			  'element'     => '.page.mt-content-padding-yes #primary .entry-card',
			  'property'    => 'padding-bottom',
			  //'media_query' => '@media (min-width: 1024px)'			  
			),			
			array(
			  'choice'      => 'padding_left',
			  'element'     => '.page.mt-content-padding-yes #primary .entry-card',
			  'property'    => 'padding-left',
			  //'media_query' => '@media (min-width: 1024px)'			  
			),						
		),				
	) );
	
	Kirki::add_field( 'munk', array(
		'type'        => 'dimensions',
		'settings'    => 'munk_layout_single_page_entry_margin',
		'label'       => esc_html__( 'Post Content Margin', 'munk' ),
		'description' => esc_html__( 'Adjust page content margin', 'munk' ),
		'section'     => 'munk_customize_layout_single_page',
		'priority'    => 20,		
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
			  'element'     => '.page.mt-content-padding-yes #primary .entry-card',
			  'property'    => 'margin-top',
			  //'media_query' => '@media (min-width: 1024px)'			  
			),
			array(
			  'choice'      => 'margin_right',
			  'element'     => '.page.mt-content-padding-yes #primary .entry-card',
			  'property'    => 'margin-right',
			  //'media_query' => '@media (min-width: 1024px)'			  
			),
			array(
			  'choice'      => 'margin_bottom',
			  'element'     => '.page.mt-content-padding-yes #primary .entry-card',
			  'property'    => 'margin-bottom',
			  //'media_query' => '@media (min-width: 1024px)'			  
			),			
			array(
			  'choice'      => 'margin_left',
			  'element'     => '.page.mt-content-padding-yes #primary .entry-card',
			  'property'    => 'margin-left',
			  //'media_query' => '@media (min-width: 1024px)'			  
			),						
		),				
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'sortable',
		'settings'    => 'munk_layout_single_page_content_pos',
		'label'       => esc_html__( 'Page Layout', 'munk' ),
		'section'     => 'munk_customize_layout_single_page',
		'default'     => array(
			'title',
			'image',
			'content'			
		),
		'choices'     => array(
			'title' => esc_html__( 'Title', 'munk' ),
			'image' => esc_html__( 'Featured Image', 'munk' ),
			'content' => esc_html__( 'Content', 'munk' ),
		),
		'priority'    => 25,
	) );		

}
add_action( 'kirki_config', 'munk_customize_layout_single_page' );