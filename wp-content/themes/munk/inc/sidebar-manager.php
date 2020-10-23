<?php
/**
 * Munk Sidebar Manager
 *
 * @package munk
 */
 
if ( !defined( 'ABSPATH' ) )
    die( 'Direct access forbidden.' ); 
	
/* classes for sidebar layout
* @since 1.0.0
*/
if ( ! function_exists( 'munk_sidebar_manager' ) ) :

function munk_sidebar_manager() {				

		global $post;			
		
		$munk_cpt_args = array(
		   'public'   => true,
		);
		$munk_cpt_output = 'names';
		$munk_cpt_operator = 'and';
		$munk_cpt_types_raw = get_post_types( $munk_cpt_args, $munk_cpt_output, $munk_cpt_operator ); 		
   	    $munk_cpt_types = array_diff($munk_cpt_types_raw, array("product"));
		
		
		$layout_no_sidebar = array();
		$layout_no_sidebar[0]= 'no-sidebar';
		$layout_no_sidebar[1] = 'd-none';				
		$layout_no_sidebar[2] = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';			
		
		$layout_left_sidebar = array();
		$layout_left_sidebar[0]= 'left-sidebar';
		$layout_left_sidebar[1] = 'order-xl-1 order-lg-1 order-md-2 order-2';				
		$layout_left_sidebar[2] = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-2 order-lg-2 order-md-2 order-2';
		
		$layout_right_sidebar = array();
		$layout_right_sidebar[0]= 'right-sidebar';
		$layout_right_sidebar[1] = 'order-xl-2 order-lg-2 order-md-2 order-2';
		$layout_right_sidebar[2] = 'col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-xl-1 order-lg-1 order-md-2 order-2';		
		
		$page_layout = $layout_right_sidebar;
		
		if ( is_home() || is_search() || is_archive() ) {
	
			$munk_archive_ed = get_theme_mod('munk_layout_blog_archive_ed', 'right-sidebar');
			if ($munk_archive_ed == 'right-sidebar') {
				$page_layout = $layout_right_sidebar;
			}
			if ($munk_archive_ed == 'left-sidebar') {
				$page_layout = $layout_left_sidebar;
			}
			if ($munk_archive_ed == 'no-sidebar') {
				$page_layout = $layout_no_sidebar;
			}			
			
		}								
		
		if ( is_singular($munk_cpt_types) ) {
		
				$post_type = get_post_type();		
				$munk_meta_layout = get_post_meta( $post->ID, 'munk_settings_main_sidebar', true );			
				$munk_single_global_ed = get_theme_mod('munk_layout_single_' .$post_type. '_ed', 'right-sidebar');				
			
				if ($munk_meta_layout && $munk_meta_layout != 'default') {
				
					if ($munk_meta_layout == 'right-sidebar') {
						$page_layout = $layout_right_sidebar;
					}
					if ($munk_meta_layout == 'left-sidebar') {
						$page_layout = $layout_left_sidebar;
					}
					if ($munk_meta_layout == 'no-sidebar') {
						$page_layout = $layout_no_sidebar;
					}					
				
				}
				else {
				
					if ($munk_single_global_ed == 'right-sidebar') {
						$page_layout = $layout_right_sidebar;
					}
					if ($munk_single_global_ed == 'left-sidebar') {
						$page_layout = $layout_left_sidebar;
					}
					if ($munk_single_global_ed == 'no-sidebar') {
						$page_layout = $layout_no_sidebar;
					}					
				
				}
				
		
		}							
									
		return apply_filters( 'munk_page_layout', $page_layout );
		
}
endif;

/*
* Adds a class to <body> based on the page layout selected
* @since 1.0.0
*/
if ( ! function_exists( 'munk_body_classes' ) ) :
	function munk_body_classes($classes) {	
				
		$class_var = munk_sidebar_manager();
		$classes[] = $class_var[0];		
		return $classes;
	}
endif;
add_filter('body_class', 'munk_body_classes');	
	
/* Sidebar classes
* Adds a class to #secondary sidebar based on the page layout selected
* @since 1.0.0
*/
if ( ! function_exists( 'munk_sidebar_position' ) ) :
	function munk_sidebar_position() {			
			
		$class_var = munk_sidebar_manager();
		$munk_side_order = $class_var[1];		
		return esc_attr($munk_side_order);
		
	}
endif;
/* $primary classes
* Adds a class to #primary based on the page layout selected
* @since 1.0.0
*/
if ( ! function_exists( 'munk_primary_order' ) ) :
	function munk_primary_order() {			
			
		$class_var = munk_sidebar_manager();
		$munk_content_order = $class_var[2];		
		return esc_attr($munk_content_order);
		
	}
endif;
/**
 * Display Sidebars in Theme
 */
if ( ! function_exists( 'munk_get_sidebar' ) ) {
	/**
	 * Get Sidebar
	 *
	 */
	function munk_get_sidebar( $sidebar_id ) {
		if ( is_active_sidebar( $sidebar_id ) ) {
			dynamic_sidebar( $sidebar_id );
		} elseif ( current_user_can( 'edit_theme_options' ) ) {
			?>
			<div class="widget mt-no-widget">
				<p class='empty-widget-text'>
					<a href='<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>'>
						<?php esc_html_e( 'Add Widget', 'munk' ); ?>
					</a>
				</p>
			</div>
			<?php
		}
	}
}