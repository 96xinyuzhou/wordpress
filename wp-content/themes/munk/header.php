<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package munk
 */

?>
<!doctype html>
<?php munk_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
	<?php munk_head_top(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">    
    <?php munk_head_bottom(); ?>
<?php wp_head(); ?>        
</head>
<body <?php body_class(); ?>>
<?php munk_body_top(); ?>
<?php do_action( 'wp_body_open' ); // phpcs:ignore ?>
<div id="page" class="hfeed site">	
<a class="skip-link sr-only" href="#content">
<?php esc_html_e( 'Skip to content', 'munk' ); ?></a>


<?php				
munk_header_before(); 
/*
* @hooked munk_header_above_markup - 10
* @hooked munk_header_primary_markup - 20
* @hooked munk_header_below_markup - 30		
*/
do_action('munk_header');		            	
?>	