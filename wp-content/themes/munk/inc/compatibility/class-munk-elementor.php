<?php
/**
 * Elementor Compatibility File.
 *
 * Since @1.0.2 
 * @package Munk
 */
/*
 *
 * Munk Elementor Compatibility
 */
 
if ( ! defined( 'ABSPATH' ) ) exit; 
 
if ( ! class_exists( 'Munk_Elementor' ) ) :

	/**
	 * Munk Elementor Compatibility
	 *
	 * @since 1.0.2
	 */
	class Munk_Elementor {	
		
		/**
		 * Member Variable
		 *
		 * @var object instance
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}	
		
		/**
		 * Constructor
		 */
		public function __construct() {		
																																	
				add_filter( 'elementor/editor/localize_settings', array( $this, 'munk_elementor_default_colors' ), 99 );
				add_filter( 'elementor/editor/localize_settings', array( $this, 'munk_elementor_default_fonts' ), 99 );
																		
		}		

		function munk_elementor_default_colors ($config) {
	
			$color = get_theme_mod('munk_color_primary_button', '#0161bd'); // primary button color
			
			$config['default_schemes']['color']['items'] = [
				'1' => get_theme_mod('munk_color_general_title_color', '#212529'),
				'2' => get_theme_mod('munk_color_general_title_color', '#212529'),
				'3' => get_theme_mod('munk_color_general_text_color', '#212529'),
				'4' => $color['bgcolor'],
				];
		
			return $config;
		}
		
		function munk_elementor_default_fonts ($config) {
		
			$munk_primary_font = get_theme_mod('munk_typography_general_post_title', array('font-family'=>'IBM Plex Sans', 'variant'=>'900'));
			$munk_secondary_font = get_theme_mod('munk_typography_general_post_title', array('font-family'=>'IBM Plex Sans', 'variant'=>'600') );	
			$munk_text_font = get_theme_mod('munk_typography_general_content', array('font-family'=>'IBM Plex Sans', 'variant'=>'400') );	
			$munk_accent_font = get_theme_mod('munk_typography_primary_button', array('font-family'=>'IBM Plex Sans', 'variant'=>'500') );							
		
		
			$config['default_schemes']['typography']['items'] = [
				'1' => array('font_family' => $munk_primary_font['font-family'],'font_weight' => $munk_primary_font['variant'],),
				'2' => array('font_family' => $munk_secondary_font['font-family'],'font_weight' => $munk_secondary_font['variant'],),
				'3' => array('font_family' => $munk_text_font['font-family'],'font_weight' => $munk_text_font['variant'],),
				'4' => array('font_family' => $munk_accent_font['font-family'],'font_weight' => $munk_accent_font['variant'],),
				];
		
			return $config;
		}			
		
	}
	
endif;	

if(munk_is_elementor_activated()){
	Munk_Elementor::get_instance();
}