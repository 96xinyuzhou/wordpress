<?php
/**
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package Munk
 */
$munk_footer_sidebar_layout = get_theme_mod('munk_layout_footer_ed', 'three-col'); 	 

if ( ! is_active_sidebar( 'footer-1' ) && ! is_active_sidebar( 'footer-2' ) && ! is_active_sidebar( 'footer-3' ) && ! is_active_sidebar( 'footer-4' ) || $munk_footer_sidebar_layout == "none" ) {
	return;
}
 

if ($munk_footer_sidebar_layout == "one-col") {
	$munk_sidebar_cols = "col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12";
}
elseif ($munk_footer_sidebar_layout == "two-col") {
	$munk_sidebar_cols = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6";
}
elseif ($munk_footer_sidebar_layout == "three-col") {
	$munk_sidebar_cols = "col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4";
}
elseif ($munk_footer_sidebar_layout == "four-col") {
	$munk_sidebar_cols = "col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3";
}
else {
	$munk_sidebar_cols = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12";
}


?>
				<div class="widget-area">
                        <div class="row">

                                <div class="<?php echo esc_attr($munk_sidebar_cols); ?>">
									<?php dynamic_sidebar( 'footer-1' ); ?>                                
								</div>

								<?php if ($munk_footer_sidebar_layout == "two-col" || $munk_footer_sidebar_layout == "three-col" || $munk_footer_sidebar_layout == "four-col") { ?>	
                                    <div class="<?php echo esc_attr($munk_sidebar_cols); ?>">
                                        <?php dynamic_sidebar( 'footer-2' ); ?>                                                                
                                    </div>
                                <?php } ?>
                                
								<?php if ($munk_footer_sidebar_layout == "three-col" || $munk_footer_sidebar_layout == "four-col") { ?>	                                
                                    <div class="<?php echo esc_attr($munk_sidebar_cols); ?>">
                                        <?php dynamic_sidebar( 'footer-3' ); ?>                                                                
                                    </div>
								<?php } ?>
                                
								<?php if ($munk_footer_sidebar_layout == "four-col") { ?>	                                
                                    <div class="<?php echo esc_attr($munk_sidebar_cols); ?>">
                                        <?php dynamic_sidebar( 'footer-4' ); ?>                                                                
                                    </div>
                                <?php } ?>                                
                                
                        </div>
                </div>

