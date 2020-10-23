<?php
/**
 * Header Above Markup
 *
 * @package Munk
 */

if( !function_exists('munk_header_above_markup') ) :

function munk_header_above_markup() {  

	$munk_header_above_ed = get_theme_mod('munk_layout_site_header_above_ed', 'none');
	if ( $munk_header_above_ed == 'none' ) {
		return;
	}
	if ($munk_header_above_ed == 'one-col') {
		$munk_col_class = 'col-lg-12 col-xl-12 col-md-12 col-12 above-one-col';
	}
	elseif ($munk_header_above_ed == 'two-col') {
		$munk_col_class = 'col-lg-6 col-xl-6 col-md-12 col-12 above-two-col';
	}
	// phpcs:ignore Generic.CodeAnalysis.EmptyStatement.DetectedElse
	else {
	}
	
	$munk_above_section_one = get_theme_mod('munk_layout_site_header_above_section_one', 'text');
	$munk_above_section_two = get_theme_mod('munk_layout_site_header_above_section_two', 'search');
	?>
	
	
	<div class="mt-header-ed header-above">
		<div class="container">
		
			<div class="row">
			
				<div class="<?php echo esc_attr($munk_col_class); ?>">            
				
					<?php
					// section one content
					if ($munk_above_section_one == 'text') {
					$munk_layout_site_header_above_section_one_text = get_theme_mod('munk_layout_site_header_above_section_one_text', esc_html('Call Us: 1800-123-456-7890', 'munk'));
						if ($munk_layout_site_header_above_section_one_text) {
							echo esc_html($munk_layout_site_header_above_section_one_text);
						}
					}
					elseif ($munk_above_section_one == 'search') {
						get_search_form();
					}
					elseif ($munk_above_section_one == 'widget') {
						if (is_active_sidebar('mt-header-above-one')) {
							dynamic_sidebar( 'mt-header-above-one' );
						}
						else {
							if ( is_customize_preview() ) {
								echo "<a href='" .esc_url(admin_url( 'widgets.php' )). "'>" .esc_html('Add a Widget', 'munk'). "</a>";
							}
						}
					}				
					elseif ($munk_above_section_one == 'shortcode') {
					$munk_top_one_shortcode = get_theme_mod('munk_layout_site_header_above_section_one_shortcode');
						if ($munk_top_one_shortcode) {
							echo do_shortcode( $munk_top_one_shortcode );
						}
					}
					elseif ($munk_above_section_one == 'menu') {
						$munk_top_one_menu = get_theme_mod('munk_layout_site_header_above_section_one_menu');
						if ($munk_top_one_menu) {
							wp_nav_menu( array( 'theme_location' => '', 'menu' => $munk_top_one_menu, 'depth' => 1, 'menu_class' => 'mt-header-ed-menu d-flex flex-fill', 'fallback_cb' => false, ) );
						}
					}								
					?>
				
				</div>
				
				<?php
				if ($munk_header_above_ed == 'two-col') {
				?>
					<div class="<?php echo esc_attr($munk_col_class); ?> second-col">
		
						<?php
						// section two content
						if ($munk_above_section_two == 'text') {
						$munk_layout_site_header_above_section_two_text = get_theme_mod('munk_layout_site_header_above_section_two_text', esc_html('Call Us: 1800-123-456-7890', 'munk'));
							if ($munk_layout_site_header_above_section_two_text) {
								echo esc_html($munk_layout_site_header_above_section_two_text);
							}
						}
						elseif ($munk_above_section_two == 'search') {
							get_search_form();
						}
						elseif ($munk_above_section_two == 'widget') {
							if (is_active_sidebar('mt-header-above-two')) {
								dynamic_sidebar( 'mt-header-above-two' );
							}
							else {
								if ( is_customize_preview() ) {
									echo "<a href='" .esc_url(admin_url( 'widgets.php' )). "'>" .esc_html('Add a Widget', 'munk'). "</a>";
								}
							}
						}				
						elseif ($munk_above_section_two == 'shortcode') {
						$munk_top_two_shortcode = get_theme_mod('munk_layout_site_header_above_section_two_shortcode');
							if ($munk_top_two_shortcode) {
								echo do_shortcode( $munk_top_two_shortcode );
							}
						}
						elseif ($munk_above_section_two == 'menu') {
							$munk_top_two_menu = get_theme_mod('munk_layout_site_header_above_section_two_menu');
							if ($munk_top_two_menu) {
								wp_nav_menu( array( 'theme_location' => '', 'menu' => $munk_top_two_menu, 'depth' => 1, 'menu_class' => 'mt-header-ed-menu d-flex flex-fill', 'fallback_cb' => false, ) );
							}						
						}								
						?>
		
					</div>                        
				<?php } ?>
			</div>
		
		</div>
	</div>
    
<?php
}
add_action( 'munk_header', 'munk_header_above_markup', 10 ); 
endif;