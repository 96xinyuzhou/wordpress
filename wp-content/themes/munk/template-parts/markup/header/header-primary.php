<?php
/**
 * Header Primary Markup
 *
 * @package Munk
 */

//header action
if( !function_exists('munk_header_primary_markup') ) :

function munk_header_primary_markup() { 

$single_header_ed = '';
if (is_singular()) {
	global $post;
	$single_header_ed = get_post_meta( $post->ID, 'munk_settings_disable_primary_header', true );
}

$munk_header_primary_ed = get_theme_mod('munk_layout_site_header_primary_ed', 'layout-one');
if ( $munk_header_primary_ed == 'none' || $single_header_ed ) {
	return;
}

$munk_primary_menu = get_theme_mod ('munk_layout_site_header_primary_menu', '1');
?>



        <?php if ($munk_header_primary_ed == 'layout-one') { ?>
        <!-- Header Layout 1 Starts -->
        <header id="masthead" class="site-header munk-header layout-one" role="banner">
	            <?php munk_header_top(); ?>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-9">
                        <div class="site-branding text-center">
                                <?php the_custom_logo(); ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php
                                    $description = get_bloginfo( 'description', 'display' );
                                    if ( $description || is_customize_preview() ) : ?>
                                    <p class="site-description"><?php echo esc_html( $description ); // phpcs:ignore ?></p>
                                <?php endif; ?>
                          </div> 
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-3 d-xl-none d-lg-none d-sm-none">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
	                            <span class="navbar-toggler-icon"><?php echo esc_html('&#9776;', 'munk'); ?></span>
                            </button>                        
                        </div>
                        <?php munk_header_main_navigation_before(); ?>
                        <?php if ($munk_primary_menu) { ?>
                            <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                                <nav class="navbar navbar-expand-sm" role="navigation">
                                    <div class="navbar-collapse collapse justify-content-sm-center justify-content-md-center justify-content-lg-end justify-content-xl-end" id="navbar">
                                      <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'menu-1',
                                            'depth'	          => 4,
                                            'container'       => '',
                                            'container_class' => '',
                                            'container_id'    => '',
                                            'menu_class'      => 'navbar-nav',
                                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'          => new WP_Bootstrap_Navwalker(),						  							  
                                        ) );
                                      ?>                                                   
                                    </div>
                                </nav> 
                            </div>
                        <?php } ?>
                        <?php munk_header_main_navigation_after(); ?>
                    </div>
                </div>
            <?php munk_header_bottom(); ?>
        </header><!-- #masthead -->    		
		<?php munk_header_after(); ?>	
        <!-- Header Layout 1 Ends -->
        <?php
        }
        elseif ($munk_header_primary_ed == 'layout-two') {
        ?>
        <!-- Header Layout 2 Starts -->
        <header id="masthead" class="site-header munk-header layout-two" role="banner">
	        <div class="layout-two-header">    
            <?php munk_header_top(); ?>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-9">
                        <div class="site-branding text-center">
                                <?php the_custom_logo(); ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                <?php
                                    $description = get_bloginfo( 'description', 'display' );
                                    if ( $description || is_customize_preview() ) : ?>
                                    <p class="site-description"><?php echo esc_html( $description ); // phpcs:ignore ?></p>
                                <?php endif; ?>
                          </div> 
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-3 d-xl-none d-lg-none d-sm-none">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
	                            <span class="navbar-toggler-icon"><?php echo esc_html('&#9776;', 'munk'); ?></span>
                            </button>                        
                        </div>
                    </div><!-- .row -->
                </div><!-- .container -->
            </div>
            <div class="layout-two-navbar">            
                <div class="container">
                    <div class="row">   
                        <?php munk_header_main_navigation_before(); ?>
                        <?php if ($munk_primary_menu) { ?>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 header-bottom">
                                <nav class="navbar navbar-expand-sm" role="navigation">
                                    <div class="navbar-collapse collapse" id="navbar">
                                      <?php
                                        wp_nav_menu( array(
                                            'theme_location' => 'menu-1',
                                            'depth'	          => 4,
                                            'container'       => '',
                                            'container_class' => '',
                                            'container_id'    => '',
                                            'menu_class'      => 'navbar-nav ml-auto mx-auto',
                                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'          => new WP_Bootstrap_Navwalker(),						  							  
                                        ) );
                                      ?>                                                   
                                    </div>
                                </nav> 
                            </div>
                        <?php } ?>
                        <?php munk_header_main_navigation_after(); ?>
                    </div>
                </div>
            </div>
            <?php munk_header_bottom(); ?>
        </header><!-- #masthead -->    		
		<?php munk_header_after(); ?>	
        <!-- Header Layout 2 Ends -->
        <?php } 
        else {
            // no header
        }
        ?>


<?php			
}
add_action( 'munk_header', 'munk_header_primary_markup', 20 ); 
endif;