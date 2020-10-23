<?php
/**
 * Layout Blog Archive
 *
 */

function munk_customize_layout_content_color ( $config ) {


    Kirki::add_section( 'munk_layout_content_color', array(
        'priority'   => 10,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Color Settings', 'munk' ),
        'panel' =>  'munk_layouts_blog',
    ) );	
	
	Kirki::add_field( 'munk', array(
        'type'        => 'color',
        'settings'    => 'munk_color_general_bgcolor',
        'label'       => esc_html__( 'Background Color', 'munk' ),
        'description' => esc_html__( 'Applies to primary content area', 'munk' ),		
        'section'     => 'munk_layout_content_color',
		'default'     => '#ffffff',		
        'priority'    => 5,
		'transport'   => 'auto',
		'output' => array(
			array(
				'element'  => '#primary .entry-card, body.mt-container-fullwidth-contained #page',
				'property' => 'background-color',
			),
			array(
				'element'  => 'body',
				'property' => 'background-color',
				'context'  => array( 'editor' ),				
			),				
		),		
	));				
	
	Kirki::add_field( 'munk', array(
        'type'        => 'color',
        'settings'    => 'munk_color_general_title_color',
        'label'       => esc_html__( 'Post/Page Title', 'munk' ),
        'section'     => 'munk_layout_content_color',
		'default'     => '#212529',		
        'priority'    => 15,
		'transport'   => 'auto',
		'output' => array(
			array(
				'element'  => '.entry-card .entry-title a, .single h1.entry-title, .page h1.entry-title, .archive-title',
				'property' => 'color',
			),
			array(
				'element'  => '.editor-post-title__input',
				'property' => 'color',
				'context'  => array( 'editor' ),				
			),				
		),		
	));	
	
	Kirki::add_field( 'munk', array(
        'type'        => 'color',
        'settings'    => 'munk_color_general_text_color',
        'label'       => esc_html__( 'Post/Page Content', 'munk' ),
        'section'     => 'munk_layout_content_color',
		'default'     => '#212529',		
        'priority'    => 15,
		'transport'   => 'auto',
		'output' => array(            
			array(
				'element'  => 'body:not(.has-blocks)  .entry-card .entry-content *, body:not(.has-blocks) .entry-card .entry-excerpt',
				'property' => 'color',
			),            
			array(
				'element'  => 'body.has-blocks .entry-card .entry-content, .entry-card .entry-excerpt',
				'property' => 'color',
			),            
            array(
                'element'  => '.edit-post-visual-editor.editor-styles-wrapper .is-block-content *',
                'property' => 'color',			
                'context'  => array( 'editor' ),
            ),            
		),		
	));							
	
	Kirki::add_field( 'munk', array(
        'type'        => 'color',
        'settings'    => 'munk_color_general_link_color',
        'label'       => esc_html__( 'Content Link', 'munk' ),
        'section'     => 'munk_layout_content_color',
		'default'     => '#212529',		
        'priority'    => 15,
		'transport'   => 'auto',
		'output' => array(
			array(
				'element'  => '.entry-card .entry-content a:not(.wp-block-button__link), .comment-list a', 
				'property' => 'color',
			),
			array(
				'element'  => '.edit-post-visual-editor.editor-styles-wrapper a, .edit-post-visual-editor.editor-styles-wrapper a:visited',
				'property' => 'color',
				'context'  => array( 'editor' ),				
			),			
		),			
	));					
	
	Kirki::add_field( 'munk', array(
        'type'        => 'color',
        'settings'    => 'munk_color_general_link_hover',
        'label'       => esc_html__( 'Content Link Hover', 'munk' ),
        'section'     => 'munk_layout_content_color',
		'default'     => '#212529',		
        'priority'    => 15,
		'transport'   => 'auto',
		'output' => array(
			array(
				'element'  => ' body:not(.has-blocks) .entry-card a:hover, body:not(.has-blocks) .entry-content a:hover,.comment-list .reply a:hover',
				'property' => 'color',
			),
			array(
				'element'  => '.edit-post-visual-editor.editor-styles-wrapper a:hover, .edit-post-visual-editor.editor-styles-wrapper a:focus',
				'property' => 'color',
				'context'  => array( 'editor' ),				
			),			
		),		
	));	
	
	Kirki::add_field( 'munk', array(
        'type'        => 'color',
        'settings'    => 'munk_color_general_post_meta',
        'label'       => esc_html__( 'Post Meta', 'munk' ),
        'section'     => 'munk_layout_content_color',
		'default'     => '#212529',		
        'priority'    => 15,
		'transport'   => 'auto',
		'output' => array(
			array(
				'element'  => '.entry-card .entry-meta a, .entry-card .entry-meta span, .entry-card .entry-meta, .entry-card .entry-meta .comments svg, .entry-card .entry-meta .posted-on svg, .entry-card .entry-meta .tags svg, .entry-card .entry-meta .post-category svg, .entry-card .entry-meta .byline svg',
				'property' => 'color',
			),
		),		
	));				
	

}
add_action( 'kirki_config', 'munk_customize_layout_content_color' );