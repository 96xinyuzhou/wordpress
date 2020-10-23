<?php
/**
 * Support for Header Footer Composer for Elementor
 *
 * @link https://wordpress.org/plugins/header-footer-composer/
 *
 * since 1.0.1 
 *
 * @package munk
 */ 
 
function munk_header_footer_compposer_support() {
	add_theme_support( 'header-footer-composer' );
}
add_action( 'after_setup_theme', 'munk_header_footer_compposer_support' );