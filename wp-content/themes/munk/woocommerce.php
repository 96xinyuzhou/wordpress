<?php
/**
 * The main template file for woocommerce pages.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package munk
 */

get_header(); 
?>
    <?php munk_content_before(); ?>
	<div id="content" class="site-content">
	<?php munk_content_top(); ?>           
	    <div class="container">
	        <div class="row">
            
                <div id="primary" class="content-area <?php echo munk_primary_order(); //phpcs:ignore ?>">
                    <main id="main" class="site-main">        
                    
							 <?php 
							 $munk_shop_breadcrumbs = get_theme_mod('munk_woocommerce_shop_breadcrumbs', '1');	
								if ( is_shop() && $munk_shop_breadcrumbs == '1' ) {
									woocommerce_breadcrumb();                            
								}  
							 ?>

							<?php 
							munk_content_while_before();													
								woocommerce_content(); 
							munk_content_while_after();          													
							?>

                    </main><!-- #main -->
                </div><!-- #primary -->    
                
			 <?php get_sidebar(); ?>        
                
			</div> <!-- .row -->   
		</div> <!-- .container -->
		<?php munk_content_bottom(); ?>                      
    </div><!-- #content -->
	<?php munk_content_after(); ?>

<?php  get_footer(); ?>