<?php
/**
 * Layout Site Header
 *
 */

function munk_customize_layout_site_header ( $config ) {

    /**
     * Site Header Sub Panel
     */
    Kirki::add_panel('munk_layouts_header', array(
        'title' =>  esc_html__( 'Header', 'munk' ),
        'description'   =>  esc_html__( 'Panel for the Theme Header Layout Customization', 'munk' ),
        'priority' => 10,		
    ));		

}
add_action( 'kirki_config', 'munk_customize_layout_site_header' );