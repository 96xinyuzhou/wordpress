<?php
/**
 * The file for Munk Theme Options Page functions
 *
 * @link       https://metricthemes.com
 * @since      1.0.0
 *
 * @package    Munk
 * @since      1.1.0
 * @author     MetricThemes <support@metricthemes.com>
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

        function munk_theme_options_header_logo() {            
            echo '<div class="munk-logo">';
            echo '<img src="' .esc_url(get_template_directory_uri()). '/inc/admin/theme-options/assets/munk-logo.png" />';                    
            echo'</div>';            
        }

        function munk_theme_options_header_desc() {            
            
            echo '<div class="munk-theme-desc">';
            echo '<p>' . esc_html('Munk WordPress Theme is now installed and ready to use. If you have further queries, you can always contact us. We hope you enjoy it!', 'munk') . '</p>';
            echo'</div>';

        }

        function munk_theme_options_customizer_links () {

            $munk_customizer_links = array(
            'header' => array (
                'title' => __('Header', 'munk'),
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M21 3a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18zM4 10v9h16v-9H4zm0-2h16V5H4v3z" fill="rgba(52,72,94,1)"/></svg>',
                'type' => 'panel',
                'link' => 'munk_layouts_header',
            ),
            'main-navigation' => array (
                'title' => __('Main Navigation', 'munk'),
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M18 15l-.001 3H21v2h-3.001L18 23h-2l-.001-3H13v-2h2.999L16 15h2zm-7 3v2H3v-2h8zm10-7v2H3v-2h18zm0-7v2H3V4h18z" fill="rgba(52,72,94,1)"/></svg>',
                'type' => 'section',
                'link' => 'munk_layout_site_navigation',
            ),    
            'blog' => array (
                'title' => __('Blog/Archive', 'munk'),
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 10H2V4.003C2 3.449 2.455 3 2.992 3h18.016A.99.99 0 0 1 22 4.003V10h-1v10.001a.996.996 0 0 1-.993.999H3.993A.996.996 0 0 1 3 20.001V10zm16 0H5v9h14v-9zM4 5v3h16V5H4zm5 7h6v2H9v-2z" fill="rgba(52,72,94,1)"/></svg>',
                'type' => 'panel',
                'link' => 'munk_layouts_blog',
            ),    
            'sidebar' => array (
                'title' => __('Sidebar', 'munk'),
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm5 2H4v14h4V5zm2 0v14h10V5H10z" fill="rgba(52,72,94,1)"/></svg>',
                'type' => 'section',
                'link' => 'munk_layout_sidebar',
            ),        
            'footer' => array (
                'title' => __('Footer', 'munk'),
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M21 3a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h18zM4 16v3h16v-3H4zm0-2h16V5H4v9z" fill="rgba(52,72,94,1)"/></svg>',
                'type' => 'panel',
                'link' => 'munk_layout_footer',
            ),  
            'buttons' => array (
                'title' => __('Buttons', 'munk'),
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.06 8.11l1.415 1.415a7 7 0 0 1 0 9.9l-.354.353a7 7 0 0 1-9.9-9.9l1.415 1.415a5 5 0 1 0 7.071 7.071l.354-.354a5 5 0 0 0 0-7.07l-1.415-1.415 1.415-1.414zm6.718 6.011l-1.414-1.414a5 5 0 1 0-7.071-7.071l-.354.354a5 5 0 0 0 0 7.07l1.415 1.415-1.415 1.414-1.414-1.414a7 7 0 0 1 0-9.9l.354-.353a7 7 0 0 1 9.9 9.9z" fill="rgba(52,72,94,1)"/></svg>',
                'type' => 'section',
                'link' => 'munk_layout_button',
            ),  
            'color' => array (
                'title' => __('Color Customization', 'munk'),
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M19.228 18.732l1.768-1.768 1.767 1.768a2.5 2.5 0 1 1-3.535 0zM8.878 1.08l11.314 11.313a1 1 0 0 1 0 1.415l-8.485 8.485a1 1 0 0 1-1.414 0l-8.485-8.485a1 1 0 0 1 0-1.415l7.778-7.778-2.122-2.121L8.88 1.08zM11 6.03L3.929 13.1H18.07L11 6.03z" fill="rgba(52,72,94,1)"/></svg>',
                'type' => 'section',
                'link' => 'munk_layout_content_color',
            ),      
            'typography' => array (
                'title' => __('Font Customization', 'munk'),
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M15.246 14H8.754l-1.6 4H5l6-15h2l6 15h-2.154l-1.6-4zm-.8-2L12 5.885 9.554 12h4.892zM3 20h18v2H3v-2z" fill="rgba(52,72,94,1)"/></svg>',
                'type' => 'section',
                'link' => 'munk_typography_content_settings',
            ),          
            'container' => array (
                'title' => __('Site Container', 'munk'),
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 5v14h16V5H4zM3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm12 4l3.5 3-3.5 3v-2h-4V9h4V7zM9 17l-3.5-3L9 11v2h4v2H9v2z" fill="rgba(52,72,94,1)"/></svg>',
                'type' => 'section',
                'link' => 'munk_layout_container',
            ),    
            'additional_css' => array (
                'title' => __('Add Custom CSS', 'munk'),
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M2.8 14h2.04l-.545 2.725 5.744 2.154 7.227-2.41L18.36 11H3.4l.4-2h14.96l.8-4H4.6L5 3h17l-3 15-9 3-8-3z" fill="rgba(52,72,94,1)"/></svg>',
                'type' => 'section',
                'link' => 'custom_css',
            ),        
            );

            ?>
                        <div class="munkbox munk-customizer-link">
                            <h4 class="hndle"><span><?php echo esc_html('Customize Your Site', 'munk') ?></span></h4>
                                <ul class="munk-list-flex">
                                    <?php foreach ( $munk_customizer_links as $munk_customizer_link) : 

                                    if ($munk_customizer_link['type'] == 'section') {
                                        $query = 'autofocus[section]=' . $munk_customizer_link['link'];
                                    }
                                    else {
                                        $query = 'autofocus[panel]=' . $munk_customizer_link['link'];
                                    }                                                                                    
                                    ?>                            
                                    <li>                                
                                        <a class="cd-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php' )); ?>?<?php echo esc_attr($query); ?>" target="_blank">
                                            <?php echo $munk_customizer_link['icon']; ?>                                
                                            <?php echo esc_html($munk_customizer_link['title']); ?></a>
                                    </li>
                                    <?php endforeach; ?>

                                </ul>                    

                        </div>        
            <?php

        }

        function munk_theme_options_pro_features () {
                        $munk_pro_features = array(
                            'blog_layout' => array (
                                'title' => __('Blog Layout', 'munk'),
                                'link' => 'https://wpmunk.com/doc/blog-layout-overview/',
                                'description' => __('Create multiple columns blog layout. Show your posts in Grid or in Masonry layout. You can now create a magazine design using Munk Pro', 'munk'),
                            ),
                            'mobile_header' => array (
                                'title' => __('Mobile Header', 'munk'),
                                'link' => 'https://wpmunk.com/doc/mobile-header-overview/',
                                'description' => __('Customize the mobile header. Show your mobile menu in the sliding flyout menu or in full screen mode.', 'munk'),
                            ), 
                            'off_canvas_header' => array (
                                'title' => __('Off Canvas Sidebar', 'munk'),
                                'link' => 'https://wpmunk.com/doc/off-canvas-sidebar-overview/',
                                'description' => __('Munk Pro also comes with a Off Canvas sidebar that lets you create a clean header where you can show your menu and content in a sliding offcanvas sidebar.', 'munk'),
                            ),    
                            'breadcrumbs' => array (
                                'title' => __('Breadcrumbs', 'munk'),
                                'link' => 'https://wpmunk.com/doc/breadcrumbs/',
                                'description' => __('Inbuilt Breadcrumbs are now part of Munk Pro. Use Munk Pro’s schema ready breadcrumbs for that extra boost in search engine ranking.', 'munk'),
                            ),    
                            'singlepost' => array (
                                'title' => __('Single Post Options', 'munk'),
                                'link' => 'https://wpmunk.com/doc/single-post-layout-overview/',
                                'description' => __('Customize the layout of your single blogposts. Break the featured image container and show your images in its full glory.', 'munk'),
                            ),    
                            'scrolltop' => array (
                                'title' => __('Scroll to Top', 'munk'),
                                'link' => 'https://wpmunk.com/doc/scroll-to-top-overview/',
                                'description' => __('Add a scroll to tip button which shows up when the user is at the footer of the site.', 'munk'),
                            ),                                                                         
                            'munk_pro_woocommerce' => array (
                                'title' => __('WooCommerce', 'munk'),
                                'link' => 'https://wpmunk.com/woocommerce-theme/',
                                'description' => __('Extensive features and options to take your WooCommerce store to the next level', 'munk'),
                            ),    
                        );  ?>

                        <div class="munk-pro-features">                                    
                            <?php foreach ( $munk_pro_features as $munk_pro_feature) : ?>
                                    <div class="munk-pro-feature-single">
                                        <div class="text-holder">                             
                                            <p class="title"><?php echo esc_html($munk_pro_feature['title']); ?></p>
                                            <p class="description"><?php echo esc_html($munk_pro_feature['description']); ?></p>
                                        </div>
                                        <a target="_blank" href="<?php echo esc_url($munk_pro_feature['link']); ?>?utm_source=munk&utm_medium=theme-options&utm_campaign=s&utm_content=learn-more" class="button button-secondary"><?php echo esc_html('Learn More', 'munk') ?></a>                        
                                    </div>
                            <?php endforeach; ?>                    


                        </div>    
        <?php    
        }

        function munk_theme_options_pro_upgrade_text() {
            ?>
                <div class="munk-pro-features">
                    <h3><?php echo esc_html('Munk Pro Features', 'munk') ?></h3>
                    <p class="description munk-desc"><?php echo esc_html('Upgrade to Munk Pro for more exciting features', 'munk') ?></p>
                </div>
            <?php        
        }


        function munk_theme_options_instant_site_sidebar_box() { ?>
        <div class="munkbox munk-option-sidebox">
            <h4 class="hndle"><span><?php echo esc_html('Munk Instant Sites', 'munk') ?></span></h4>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/theme-options/assets/munk-sites.jpg" />';      
            <div class="sidebox-body">
             <p><?php echo esc_html('Professionally designed Instant Sites that you can easily import into your website directly from your WordPress Dashboard. New Designs Every Week.', 'munk') ?></p>
             <a class="button button-primary" href="https://wpmunk.com/instant-sites/"><?php echo esc_html('View Instant Sites', 'munk') ?></a>
            </div>
        </div>    
        <?php
        }

        function munk_theme_options_review_us_sidebar_box() { ?>
         <div class="munkbox munk-option-sidebox">
            <h4 class="hndle"><span><?php echo esc_html('Review Us', 'munk') ?></span></h4>                     
            <div class="sidebox-body">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 17l-5.878 3.59 1.598-6.7-5.23-4.48 6.865-.55L12 2.5l2.645 6.36 6.866.55-5.231 4.48 1.598 6.7z" fill="rgba(241,196,14,1)"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 17l-5.878 3.59 1.598-6.7-5.23-4.48 6.865-.55L12 2.5l2.645 6.36 6.866.55-5.231 4.48 1.598 6.7z" fill="rgba(241,196,14,1)"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 17l-5.878 3.59 1.598-6.7-5.23-4.48 6.865-.55L12 2.5l2.645 6.36 6.866.55-5.231 4.48 1.598 6.7z" fill="rgba(241,196,14,1)"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 17l-5.878 3.59 1.598-6.7-5.23-4.48 6.865-.55L12 2.5l2.645 6.36 6.866.55-5.231 4.48 1.598 6.7z" fill="rgba(241,196,14,1)"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 17l-5.878 3.59 1.598-6.7-5.23-4.48 6.865-.55L12 2.5l2.645 6.36 6.866.55-5.231 4.48 1.598 6.7z" fill="rgba(241,196,14,1)"/></svg>                        
             <p><?php echo esc_html('Love using Munk WP Theme? Help us by leaving a review', 'munk') ?></p>
             <a class="button button-primary" href="https://wordpress.org/support/theme/munk/reviews/#new-post"><?php echo esc_html('Write Your Review →', 'munk') ?></a>
            </div>
        </div>     
        <?php
        }

        function munk_theme_options_documentation_sidebar_box() { ?>
        <div class="munkbox munk-option-sidebox">
            <h4 class="hndle"><span><?php echo esc_html('Theme Documentation', 'munk') ?></span></h4>
            <div class="sidebox-body">
             <p><?php echo esc_html('In-depth and well documented articles will help you to use the CosmosWP Themes in easiest way.', 'munk') ?></p>
             <a class="button button-primary" target="_blank" href="https://wpmunk.com/help/"><?php echo esc_html('View Documentation →', 'munk') ?></a>
            </div>
        </div>    
        <?php
        }

        function munk_theme_options_support_sidebar_box() { ?>
        <div class="munkbox munk-option-sidebox">
            <h4 class="hndle"><span><?php echo esc_html('Support Ticket', 'munk') ?></span></h4>
            <div class="sidebox-body">
             <p><?php echo esc_html('Got a question or need some help with the theme? You can always submit a support ticket, and our team will help you out.', 'munk') ?></p>
             <a class="button button-primary" target="_blank" href="https://wpmunk.com/support/"><?php echo esc_html('Contact Support →', 'munk') ?></a>
            </div>
        </div>   
        <?php
        }