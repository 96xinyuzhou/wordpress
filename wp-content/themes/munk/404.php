<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package munk
 */
get_header(); 
?>
    
	<div id="content" class="site-content">
	    <div class="container">
			<div class="row">
            
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">        

                            <div class="error-404 not-found">
                                <header class="page-header">
                                    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'munk' ); ?></h1>
                                </header><!-- .page-header -->
                
                                <div class="page-content">
                                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'munk' ); ?></p>
                                    <?php get_search_form(); ?>
                                </div><!-- .page-content -->
                            </div><!-- .error-404 -->               						

                    </main><!-- #main -->
                </div><!-- #primary -->    
                
                
			</div> <!-- .row -->   
		</div> <!-- .container -->
    </div><!-- #content -->


<?php get_footer(); ?>