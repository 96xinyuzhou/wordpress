<?php
/**
 * Do not go gentle into that good night,
 * Old age should burn and rave at close of day;
 * Rage, rage against the dying of the light.
 * 
 * Though wise men at their end know dark is right,
 * Because their words had forked no lightning they
 * Do not go gentle into that good night.
 *  
 * Dylan Thomas, 1914 - 1953
 *  
 * Munk functions and definitions
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @package munk
 * @subpackage Functions
 * @author     MetricThemes <support@metricthemes.com>
 * @copyright  Copyright (c) 2019, MetricThemes
 * @link       http://wpmunk.com/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
 
		// Define theme version
		if ( !defined( 'MUNK_THEME_VERSION' ) ) {
			$munk_theme_data = wp_get_theme();
			define ( 'MUNK_THEME_VERSION', $munk_theme_data->get( 'Version' ) );
		} 
		

		require get_template_directory() . '/inc/template-markup.php'; //Theme header footer markup
		require get_template_directory() . '/inc/template-functions.php'; // Basic functions to init theme
		require get_template_directory() . '/inc/template-scripts.php'; //CSS and JS Enqueues
		require get_template_directory() . '/inc/template-widgets.php'; //Theme Widgets Area Declaration
		require get_template_directory() . '/inc/wp-bootstrap-navwalker.php'; // Bootstrap Walker Class
		require get_template_directory() . '/inc/metabox/metabox.php';  //Page Metaboxes
		require get_template_directory() . '/inc/extras.php'; // Extra Functions
		require get_template_directory() . '/inc/theme-hooks.php'; // Theme Hooks
		require get_template_directory() . '/inc/admin/plugins_recommended.php';		// TGM for Plugin Recommendations
		require get_template_directory() . '/inc/sidebar-manager.php'; // Page Layout, Body Classs and Sidebar Functions		
		require get_template_directory() . '/inc/kirki-class/kirki-class-recommend.php'; // Recommend Kirki
		require get_template_directory() . '/inc/kirki-class/class-munk-kirki.php'; // Kirki Fallback
		require get_template_directory() . '/inc/customizer/customizer.php'; // Customizer Options
		require get_template_directory() . '/inc/compatibility/elementor-header-footer.php'; // Elementor Header Footer Builder		
        require get_template_directory() . '/inc/admin/theme-options/class-munk-theme-options.php'; // Theme Options Panel
		
		// Woocommerce Support
		if(munk_is_woocommerce_activated()){
			require get_template_directory() . '/inc/compatibility/woocommerce/class-munk-woocommerce.php';
		}				
    	 // Elementor Support		
		if(munk_is_elementor_activated()){
			require get_template_directory() . '/inc/compatibility/class-munk-elementor.php';
		}