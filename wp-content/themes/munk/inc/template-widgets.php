<?php
/**
 * Theme Widgets Areas
 *
 * @package Munk
 */
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function munk_widgets_init(){    
    $sidebars = array(
        'main-sidebar'   => array(
            'name'        => __( 'Main Sidebar', 'munk' ),
            'id'          => 'sidebar-main', 
            'description' => __( 'Default Sidebar', 'munk' ),
        ),
        'footer-one'=> array(
            'name'        => __( 'Footer One', 'munk' ),
            'id'          => 'footer-1', 
            'description' => __( 'Add footer one widgets here.', 'munk' ),
        ),
        'footer-two'=> array(
            'name'        => __( 'Footer Two', 'munk' ),
            'id'          => 'footer-2', 
            'description' => __( 'Add footer two widgets here.', 'munk' ),
        ),
        'footer-three'=> array(
            'name'        => __( 'Footer Three', 'munk' ),
            'id'          => 'footer-3', 
            'description' => __( 'Add footer three widgets here.', 'munk' ),
        ),
        'footer-four'=> array(
            'name'        => __( 'Footer Four', 'munk' ),
            'id'          => 'footer-4', 
            'description' => __( 'Add footer four widgets here.', 'munk' ),
        ),
    );
		
	// above header widgets
	$munk_header_above_ed = get_theme_mod('munk_layout_site_header_above_ed', 'two-col');
	$munk_above_section_one = get_theme_mod('munk_layout_site_header_above_section_one', 'text');
	$munk_above_section_two = get_theme_mod('munk_layout_site_header_above_section_two', 'search');
	
	if ($munk_header_above_ed != 'none') {
	
		if ($munk_above_section_one == 'widget') {
			$sidebars['mt-header-above-one'] = array(
				'name'        => __( 'Header Above Section One', 'munk' ),
				'id'          => 'mt-header-above-one', 
				'description' => __( 'Add above header section one widgets here', 'munk' ),
			);		
		}
		if ($munk_above_section_two == 'widget') {
			$sidebars['mt-header-above-two'] = array(
				'name'        => __( 'Header Above Section Two', 'munk' ),
				'id'          => 'mt-header-above-two', 
				'description' => __( 'Add above header section two widgets here', 'munk' ),
			);		
		}		
	
	}
	
	// below header widgets
	$munk_header_below_ed = get_theme_mod('munk_layout_site_header_below_ed', 'two-col');
	$munk_below_section_one = get_theme_mod('munk_layout_site_header_below_section_one', 'text');
	$munk_below_section_two = get_theme_mod('munk_layout_site_header_below_section_two', 'search');
	
	if ($munk_header_below_ed != 'none') {
	
		if ($munk_below_section_one == 'widget') {
			$sidebars['mt-header-below-one'] = array(
				'name'        => __( 'Header Below Section One', 'munk' ),
				'id'          => 'mt-header-below-one', 
				'description' => __( 'Add below header section one widgets here', 'munk' ),
			);		
		}
		if ($munk_below_section_two == 'widget') {
			$sidebars['mt-header-below-two'] = array(
				'name'        => __( 'Header Below Section Two', 'munk' ),
				'id'          => 'mt-header-below-two',
				'description' => __( 'Add below header section two widgets here', 'munk' ),
			);		
		}		
	
	}	
	
    foreach( $sidebars as $sidebar ){
        register_sidebar( array(
    		'name'          => esc_html( $sidebar['name'] ),
    		'id'            => esc_attr( $sidebar['id'] ),
    		'description'   => esc_html( $sidebar['description'] ),
    		'before_widget' => '<section id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</section>',
    		'before_title'  => '<h2 class="widget-title" itemprop="name">',
    		'after_title'   => '</h2>',
    	) );
    }   
   
}
add_action( 'widgets_init', 'munk_widgets_init' );