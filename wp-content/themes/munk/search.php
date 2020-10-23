<?php
/**
 * The template file for displaying search results
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package munk
 */

get_header(); 
?>
    
	<div id="content" class="site-content">
	    <div class="container">
	        <div class="row">
            
                <div id="primary" class="content-area <?php echo munk_primary_order(); //phpcs:ignore ?>">
                    <main id="main" class="site-main">        

                        
					  <?php if( have_posts() ) : ?>

                        <div class="search-heading">
                        <h1 class="search-title">
                            <?php /* translators: %s: search term */ ?>
							<?php printf( esc_html( 'Search Results for: %s', 'munk' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
                        </h1>
                        </div>                                            
                        
                      <?php
                         /* Start the Loop */
                         while ( have_posts() ) : the_post();
                         get_template_part( 'template-parts/content' );
                         endwhile;
                         
                        echo "<div class='clearfix'></div>";			 
                         
						do_action ('munk_pagination');
                         
                        else :
                        get_template_part( 'template-parts/content', 'none' );
                        endif; 
                    
                    ?>                                                                 		
               						

                    </main><!-- #main -->
                </div><!-- #primary -->    
                
			 <?php get_sidebar(); ?>    
                
			</div> <!-- .row -->   
		</div> <!-- .container -->
    </div><!-- #content -->

<?php  get_footer(); ?>