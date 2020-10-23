<?php
/**
 * Header Below Markup
 *
 * @package Munk
 */

if( !function_exists('munk_header_below_markup') ) :

function munk_header_below_markup() {  

	$munk_header_below_ed = get_theme_mod('munk_layout_site_header_below_ed', 'none');
	if ( $munk_header_below_ed == 'none' ) {
		return;
	}
	
	if ($munk_header_below_ed == 'one-col') {
		$munk_col_class = 'col-lg-12 col-xl-12 col-md-12 col-12 below-one-col';
	}
	elseif ($munk_header_below_ed == 'two-col') {
		$munk_col_class = 'col-lg-6 col-xl-6 col-md-12 col-12 below-two-col';
	}
	// phpcs:ignore Generic.CodeAnalysis.EmptyStatement.DetectedElse
	else {
	}
	
	$munk_below_section_one = get_theme_mod('munk_layout_site_header_below_section_one', 'text');
	$munk_below_section_two = get_theme_mod('munk_layout_site_header_below_section_two', 'search');
	?>
	<div class="mt-header-ed header-below">
		<div class="container">
		
			<div class="row">
			
				<div class="<?php echo esc_attr($munk_col_class); ?>">            
				
					<?php
					// section one content
					if ($munk_below_section_one == 'text') {
					$munk_layout_site_header_below_section_one_text = get_theme_mod('munk_layout_site_header_below_section_one_text', esc_html('Call Us: 1800-123-456-7890', 'munk'));
						if ($munk_layout_site_header_below_section_one_text) {
							echo esc_html($munk_layout_site_header_below_section_one_text);
						}
					}
					elseif ($munk_below_section_one == 'search') {
						get_search_form();
					}
					elseif ($munk_below_section_one == 'widget') {
						if (is_active_sidebar('mt-header-below-one')) {
							dynamic_sidebar( 'mt-header-below-one' );
						}
						else {
							if ( is_customize_preview() ) {
								echo "<a href='" .esc_url(admin_url( 'widgets.php' )). "'>" .esc_html('Add a Widget', 'munk'). "</a>";
							}
						}
					}				
					elseif ($munk_below_section_one == 'shortcode') {
					$munk_below_one_shortcode = get_theme_mod('munk_layout_site_header_below_section_one_shortcode');
						if ($munk_below_one_shortcode) {
							echo do_shortcode( $munk_below_one_shortcode );
						}
					}
					elseif ($munk_below_section_one == 'menu') {
						$munk_below_one_menu = get_theme_mod('munk_layout_site_header_below_section_one_menu');
						if ($munk_below_one_menu) {
							wp_nav_menu( array( 'theme_location' => '', 'menu' => $munk_below_one_menu, 'depth' => 1, 'menu_class' => 'mt-header-ed-menu d-flex flex-fill', 'fallback_cb' => false, ) );
						}		
					}								
					?>
				
				</div>
				
				<?php
				if ($munk_header_below_ed == 'two-col') {
				?>
					<div class="<?php echo esc_attr($munk_col_class); ?> second-col">
		
						<?php
						// section two content
						if ($munk_below_section_two == 'text') {
						$munk_layout_site_header_below_section_two_text = get_theme_mod('munk_layout_site_header_below_section_two_text', esc_html('Call Us: 1800-123-456-7890', 'munk'));
							if ($munk_layout_site_header_below_section_two_text) {
								echo esc_html($munk_layout_site_header_below_section_two_text);
							}
						}
						elseif ($munk_below_section_two == 'search') {
							get_search_form();
						}
						elseif ($munk_below_section_two == 'widget') {
							if (is_active_sidebar('mt-header-below-two')) {
								dynamic_sidebar( 'mt-header-below-two' );
							}
							else {
								if ( is_customize_preview() ) {
									echo "<a href='" .esc_url(admin_url( 'widgets.php' )). "'>" .esc_html('Add a Widget', 'munk'). "</a>";
								}
							}
						}				
						elseif ($munk_below_section_two == 'shortcode') {
						$munk_below_two_shortcode = get_theme_mod('munk_layout_site_header_below_section_two_shortcode');
							if ($munk_below_two_shortcode) {
								echo do_shortcode( $munk_below_two_shortcode );
							}
						}
						elseif ($munk_below_section_two == 'menu') {
							$munk_below_two_menu = get_theme_mod('munk_layout_site_header_below_section_two_menu');
							if ($munk_below_two_menu) {
								wp_nav_menu( array( 'theme_location' => '', 'menu' => $munk_below_two_menu, 'depth' => 1, 'menu_class' => 'mt-header-ed-menu d-flex flex-fill', 'fallback_cb' => false, ) );
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
add_action( 'munk_header', 'munk_header_below_markup', 30 ); 
endif;

