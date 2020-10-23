<?php
/**
 * Layout Site Footer - Copyright Area
 * @since 1.0.9
 *
 */

function munk_customize_layout_footer_copyright( $config ) {

    Kirki::add_section( 'munk_layout_footer_copyright_area', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Copyright Area', 'munk' ),
        'panel'      => 'munk_layout_footer',        
    ) );		
	        
    
    /** Footer Copyright*/
    
	Kirki::add_field( 'munk', array(
		'type'        => 'select',
		'settings'    => 'munk_layout_footer_copyright_layout',
		'label'       => esc_html__( 'Copyright Layout', 'munk' ),
		'section'     => 'munk_layout_footer_copyright_area',
		'default'     => 'left-align',
		'description' => esc_html__( 'Select Footer Copyright Layout', 'munk' ),
		'priority'    => 10,        
		'multiple'    => 0,
		'choices'     => array(
			'left-align' => esc_html__( 'Left Aligned', 'munk' ),
			'right-align' => esc_html__( 'Right Aligned', 'munk' ),            
			'center-align' => esc_html__( 'Center Aligned', 'munk' ),
		),
	) );        
    
    Kirki::add_field( 'munk', array(
        'type'        => 'text',
        'settings'    => 'munk_footer_copyright',
        'label'       => esc_html__( 'Footer Copyright', 'munk' ),
        'help'        => esc_html__( 'You can change footer copyright and use your own custom text from here.', 'munk' ),
        'section'     => 'munk_layout_footer_copyright_area',
        'default'     => '',
    ) );
    
    /** Hide Author Link */
    Kirki::add_field( 'munk', array(
        'type'        => 'toggle',
        'settings'    => 'munk_ed_author_link',
        'label'       => esc_html__( 'Show Author Link', 'munk' ),
        'section'     => 'munk_layout_footer_copyright_area',
        'default'     => '1',
    ) );
    
    /** Hide WordPress Link */
    Kirki::add_field( 'munk', array(
        'type'        => 'toggle',
        'settings'    => 'munk_ed_wp_link',
        'label'       => esc_html__( 'Show WordPress Link', 'munk' ),
        'section'     => 'munk_layout_footer_copyright_area',
        'default'     => '1',
    ) );
    /** Footer Settings Ends */	
	
	// Footer Color Settings		
	Kirki::add_field( 'munk', array(
		'type'        => 'custom',
        'settings'    => 'munk_color_footer_label',
		'label'       => '',
        'section'     => 'munk_layout_footer_copyright_area',
		'default'     => '<div style="color: #191919;font-weight:600;font-size: 13px;border: 1px solid #d5d0d0;padding: 5px 15px;background-color: #fff;text-transform: uppercase;margin-left: -12px;margin-right: -14px;">' . esc_html__( 'Color Settings - Footer Copyright Section', 'munk' ) . '</div>',
		'priority'    => '40',
	) );	
	
	Kirki::add_field( 'munk',  array(
		'type'        => 'multicolor',
		'settings'    => 'munk_color_footer_copyright',
		'label'       => '',
		'section'     => 'munk_layout_footer_copyright_area',
		'priority'    => 45,
		'transport'   => 'auto',
		'choices'     => array(
			'bgcolor' => esc_html__( 'Background Color', 'munk' ),
			'text'    => esc_html__( 'Text Color', 'munk' ),
			'link'    => esc_html__( 'Link Color', 'munk' ),
		),
		'default'     => array(
			'bgcolor' => '#262b33',
			'text'    => '#afb7c5',			
			'link'    => '#afb7c5',
		),
		'output'    => array(
			array(
			  'choice'    => 'bgcolor',
			  'element'   => '.site-footer .site-info',
			  'property'  => 'background-color',
			),
			array(
			  'choice'    => 'text',
			  'element'   => '.site-footer .site-info, .site-footer .site-info p',
			  'property'  => 'color',
			),			
			array(
			  'choice'    => 'link',
			  'element'   => '.site-footer .site-info a,  .site-footer .site-info a:hover,  .site-footer .site-info a:active',
			  'property'  => 'color',
			),
		),		
	) );			
	
	

	Kirki::add_field( 'munk', array(
		'type'        => 'typography',
		'settings'    => 'munk_typography_footer_copyright',
		'label'       => esc_html__('Copyright Section', 'munk'),
		'section'     => 'munk_layout_footer_copyright_area',
		'priority'    => 65,
		'transport'   => 'auto',
		'default'     => array(
			'font-family'    => 'IBM Plex Sans',
			'variant'        => 'regular',		
			'font-size'      => '14px',
			'line-height'    => '1.6',
			'text-transform' => 'none',
		),
		'output'    => array(
			array(
			  'element'   => '.site-footer .site-info,.site-footer .site-info, .site-footer .site-info p, .site-footer .site-info a,  .site-footer .site-info a:hover,  .site-footer .site-info a:active',
			),	
		),		
	) );				
		
	

}
add_action( 'kirki_config', 'munk_customize_layout_footer_copyright' );