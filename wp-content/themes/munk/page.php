<?php
/**
 * The main template file for displaying single page.
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
						munk_content_while_before();								
						while ( have_posts() ) : the_post(); //main loop ?>                        
            
							<?php 
							
							munk_entry_before();
																					
                            get_template_part( 'template-parts/content', 'page' );
							
                            munk_entry_after();							
                                               
							munk_comments_before();											            
							$ed_comments = get_theme_mod('ed_comments', true);
                            if ( (comments_open() || get_comments_number()) && $ed_comments ) :
	                            comments_template();
                            endif; 
							munk_comments_after();
                            ?> 
                        
                        <?php 
						endwhile; // End of the loop. 
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