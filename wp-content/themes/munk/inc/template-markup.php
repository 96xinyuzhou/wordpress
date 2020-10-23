<?php
/**
 * Default theme markup functions
 *
 * @package Munk
*/


/**
 * Header Markup Hooks
*/
$munk_header_markups = array( 
	'above',	
	'primary',	
	'below',	
     );
foreach( $munk_header_markups as $munk_markup ) {
 get_template_part('template-parts/markup/header/header', $munk_markup);
}

/**
 * Entry Markup Hooks
*/
$munk_layout_markups = array( 	
	'title',
	'content',
	'image',
	'meta',	
	'card',	
     );
foreach( $munk_layout_markups as $munk_markup ) {
 get_template_part('template-parts/markup/entry', $munk_markup);
}

/**
 * Generic Markup Hooks
*/
$munk_layout_markups = array( 
	'footer',
	'author_bio',
     );
foreach( $munk_layout_markups as $munk_markup ) {
 get_template_part('template-parts/markup/' . $munk_markup);
}