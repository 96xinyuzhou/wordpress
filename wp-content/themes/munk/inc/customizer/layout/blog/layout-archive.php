<?php
/**
 * Layout Blog Archive
 *
 */

function munk_customize_layout_blog_archive ( $config ) {


    Kirki::add_section( 'munk_layout_blog_archive', array(
        'priority'   => 10,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Archive', 'munk' ),
        'panel' =>  'munk_layouts_blog',
    ) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'radio-image',
		'settings'    => 'munk_layout_blog_archive_ed',
		'label'       => esc_html__( 'Archive Layout', 'munk' ),
		'section'     => 'munk_layout_blog_archive',
		'default'     => 'right-sidebar',
		'priority'    => 5,
		'choices'     => array(                        
			'no-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/no-sidebar.png',
			'left-sidebar' => get_template_directory_uri() . '/inc/customizer/assets/images/left-sidebar.png',
			'right-sidebar'  => get_template_directory_uri() . '/inc/customizer/assets/images/right-sidebar.png',
		),
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'dimensions',
		'settings'    => 'munk_layout_blog_archive_entry_padding',
		'label'       => esc_html__( 'Post Content Padding', 'munk' ),
		'description' => esc_html__( 'Adjust post content padding', 'munk' ),
		'section'     => 'munk_layout_blog_archive',
		'priority'    => 6,		
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
			  'element'     => '.home #primary .entry-card, .blog #primary .entry-card, .archive #primary .entry-card',
			  'property'    => 'padding-top',
			  'media_query' => '@media (min-width: 1024px)'
			),
			array(
			  'choice'      => 'padding_right',
			  'element'     => '.home #primary .entry-card, .blog #primary .entry-card, .archive #primary .entry-card',
			  'property'    => 'padding-right',
			  'media_query' => '@media (min-width: 1024px)'			  
			),
			array(
			  'choice'      => 'padding_bottom',
			  'element'     => '.home #primary .entry-card, .blog #primary .entry-card, .archive #primary .entry-card',
			  'property'    => 'padding-bottom',
			  'media_query' => '@media (min-width: 1024px)'			  
			),			
			array(
			  'choice'      => 'padding_left',
			  'element'     => '.home #primary .entry-card, .blog #primary .entry-card, .archive #primary .entry-card',
			  'property'    => 'padding-left',
			  'media_query' => '@media (min-width: 1024px)'			  
			),						
		),				
	) );
	
	Kirki::add_field( 'munk', array(
		'type'        => 'dimensions',
		'settings'    => 'munk_layout_blog_archive_entry_margin',
		'label'       => esc_html__( 'Post Content Margin', 'munk' ),
		'description' => esc_html__( 'Adjust post content margin', 'munk' ),
		'section'     => 'munk_layout_blog_archive',
		'priority'    => 7,		
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
			  'element'     => '.home #primary .entry-card, .blog #primary .entry-card, .archive #primary .entry-card',
			  'property'    => 'margin-top',
			  'media_query' => '@media (min-width: 1024px)'			  
			),
			array(
			  'choice'      => 'margin_right',
			  'element'     => '.home #primary .entry-card, .blog #primary .entry-card, .archive #primary .entry-card',
			  'property'    => 'margin-right',
			  'media_query' => '@media (min-width: 1024px)'			  
			),
			array(
			  'choice'      => 'margin_bottom',
			  'element'     => '.home #primary .entry-card, .blog #primary .entry-card, .archive #primary .entry-card',
			  'property'    => 'margin-bottom',
			  'media_query' => '@media (min-width: 1024px)'			  
			),			
			array(
			  'choice'      => 'margin_left',
			  'element'     => '.home #primary .entry-card, .blog #primary .entry-card, .archive #primary .entry-card',
			  'property'    => 'margin-left',
			  'media_query' => '@media (min-width: 1024px)'			  
			),						
		),				
	) );		
	
	Kirki::add_field( 'munk', array(
		'type'        => 'sortable',
		'settings'    => 'munk_layout_blog_archive_content_ed',
		'label'       => esc_html__( 'Post Layout', 'munk' ),
		'section'     => 'munk_layout_blog_archive',
		'default'     => array(
			'title',
			'meta',
			'image',
			'content'			
		),
		'choices'     => array(
			'title' => esc_html__( 'Title', 'munk' ),
			'meta' => esc_html__( 'Post Meta', 'munk' ),
			'image' => esc_html__( 'Featured Image', 'munk' ),
			'content' => esc_html__( 'Content', 'munk' ),
		),
		'priority'    => 10,
		'transport' => 'refresh',
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'sortable',
		'settings'    => 'munk_layout_blog_archive_post_meta',
		'label'       => esc_html__( 'Post Meta', 'munk' ),
		'section'     => 'munk_layout_blog_archive',
		'default'     => array(
			'author',
			'date',
			'category',
			'comments',
		),
		'choices'     => array(
			'author' => esc_html__( 'Author', 'munk' ),
			'date' => esc_html__( 'Date', 'munk' ),
			'category' => esc_html__( 'Category', 'munk' ),
			'comments' => esc_html__( 'Comment Link', 'munk' ),
			'tags' => esc_html__( 'Tag', 'munk' ),			
		),
		'priority'    => 15,
		'transport' => 'refresh',		
	) );		
	
	Kirki::add_field( 'munk', array(
		'type'        => 'toggle',
		'settings'    => 'munk_layout_blog_archive_meta_icon',
		'label'       => esc_html__( 'Show Icons in Post Meta', 'munk' ),
		'description' => esc_html__( 'Enable to show icons in post meta info.', 'munk' ),		
		'section'     => 'munk_layout_blog_archive',
		'default'     => '1',
		'priority'    => 18,
        'transport' => 'auto',	
        'output' => [
            [
                'element'       => '.home .entry-card .entry-meta svg',
                'property'      => 'display',
                'value_pattern' => 'inline-block',
                'exclude'       => [ false, 0, '0', 'false' ]
            ],
            [
                'element'       => '.home .entry-card .entry-meta svg',
                'property'      => 'display',
                'value_pattern' => 'none',
                'exclude'       => [ true, 1, '1', 'true' ]
            ],
        ],
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'select',
		'settings'    => 'munk_layout_blog_archive_post_content',
		'label'       => esc_html__( 'Post Content', 'munk' ),
		'section'     => 'munk_layout_blog_archive',
		'default'     => 'excerpt',
		'priority'    => 20,
		'multiple'    => 0,
		'choices'     => array(
			'excerpt' => esc_html__( 'Excerpt', 'munk' ),
			'content' => esc_html__( 'Full Content', 'munk' ),
			'none' => esc_html__( 'None', 'munk' ),
		),
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'        => 'slider',
		'settings'    => 'munk_layout_blog_archive_excert_length',
		'label'       => esc_html__( 'Excerpt Length', 'munk' ),
		'section'     => 'munk_layout_blog_archive',
		'default'     => 55,
		'priority'    => 25,		
		'choices'     => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
			),
		'active_callback'  => array(
			array(
			'setting'  => 'munk_layout_blog_archive_post_content',
			'operator' => '===',
			'value'    => 'excerpt',
			),
		)		
	) );	
	
	Kirki::add_field( 'munk', array(
		'type'     => 'text',
		'settings' => 'munk_layout_blog_archive_excert_read_more',
		'label'    => esc_html__( 'Read More Text', 'munk' ),
		'section'  => 'munk_layout_blog_archive',
		'default'  => esc_html__( 'Read More', 'munk' ),
		'priority' => 30,				
		'active_callback'  => array(
			array(
			'setting'  => 'munk_layout_blog_archive_post_content',
			'operator' => '===',
			'value'    => 'excerpt',
		),
		)				
	) );	
		
	
	Kirki::add_field( 'munk', array(
		'type'        => 'select',
		'settings'    => 'munk_layout_blog_archive_pagination',
		'label'       => esc_html__( 'Pagination Type', 'munk' ),
		'section'     => 'munk_layout_blog_archive',
		'default'     => 'default',
		'priority'    => 70,
		'multiple'    => 0,
		'choices'     => array(
			'default' => esc_html__( 'Default', 'munk' ),
			'numbered' => esc_html__( 'Numbered', 'munk' ),
		),
	) );	
	

}
add_action( 'kirki_config', 'munk_customize_layout_blog_archive' );