<?php
/**
 * Layout Site Footer
 *
 */

function munk_customize_layout_footer( $config ) {
    
    Kirki::add_panel( 'munk_layout_footer', array(
        'priority'   => 14,
        'capability' => 'edit_theme_options',
        'title'      => esc_html__( 'Footer', 'munk' ),
    ) );	    

}
add_action( 'kirki_config', 'munk_customize_layout_footer' );