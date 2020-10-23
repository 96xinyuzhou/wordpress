<?php
/**
 * The template for displaying site footer
 *
 * @package munk
 */ 
		munk_footer_before();
		
        /*
        * @hooked munk_footer_markup - 10
        */
		do_action('munk_footer');
		
		munk_footer_after();
		
		munk_body_bottom();

		wp_footer();
		
?>
</div> <!-- #page -->
</body>
</html>
