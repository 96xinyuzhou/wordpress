<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package munk
 */

$sidebar = apply_filters( 'munk_get_sidebar', 'sidebar-main' );

if ( ! is_active_sidebar( $sidebar ) ) {
 	return;
}
?>
<?php munk_sidebars_before(); ?>
<div itemtype="https://schema.org/WPSideBar" itemscope="itemscope" id="secondary" class="widget-area col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 <?php echo munk_sidebar_position(); //phpcs:ignore  ?>" role="complementary">
	<div class="sidebar-main">

		<?php if ( is_active_sidebar( $sidebar ) ) : ?>
			
			<?php munk_sidebar_top(); ?>
			
				<?php dynamic_sidebar( $sidebar ); ?>
                
			<?php munk_sidebar_bottom(); ?>                

		<?php endif; ?>

	</div><!-- .sidebar-main -->
</div><!-- #secondary -->
<?php munk_sidebars_after(); ?>
