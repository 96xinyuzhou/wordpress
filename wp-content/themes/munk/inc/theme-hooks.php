<?php
/**
 * Theme Hook Alliance hook stub list.
 *
 * @package  munk
 * @since    1.0.2
 * @license  http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 * @link https://github.com/zamoose/themehookalliance
 *
 */

/**
 * Define the version of Munk Hooks support, in case that becomes useful down the road.
 */
define( 'MUNK_HOOKS_VERSION', '1.0.1' );

/**
 * Themes and Plugins can check for munk_hooks using current_theme_supports( 'munk_hooks', $hook )
 * to determine whether a theme declares itself to support this specific hook type.
 *
 * Example:
 * <code>
 * 		// Declare support for all hook types
 * 		add_theme_support( 'munk_hooks', array( 'all' ) );
 *
 * 		// Declare support for certain hook types only
 * 		add_theme_support( 'munk_hooks', array( 'header', 'content', 'footer' ) );
 * </code>
 */
add_theme_support( 'munk_hooks', array(

	/**
	 * As a Theme developer, use the 'all' parameter, to declare support for all
	 * hook types.
	 * Please make sure you then actually reference all the hooks in this file,
	 * Plugin developers depend on it!
	 */
	'all',

	/**
	 * Themes can also choose to only support certain hook types.
	 * Please make sure you then actually reference all the hooks in this type
	 * family.
	 *
	 * When the 'all' parameter was set, specific hook types do not need to be
	 * added explicitly.
	 */
	'html',
	'body',
	'head',
	'header',
	'content',
	'entry',
	'comments',
	'sidebars',
	'sidebar',
	'footer',

	/**
	 * If/when WordPress Core implements similar methodology, Themes and Plugins
	 * will be able to check whether the version of Munk supplied by the theme
	 * supports Core hooks.
	 */
	//'core',
) );

/**
 * Determines, whether the specific hook type is actually supported.
 *
 * Plugin developers should always check for the support of a <strong>specific</strong>
 * hook type before hooking a callback function to a hook of this type.
 *
 * Example:
 * <code>
 * 		if ( current_theme_supports( 'munk_hooks', 'header' ) )
 * 	  		add_action( 'munk_head_top', 'prefix_header_top' );
 * </code>
 *
 * @param bool $bool true
 * @param array $args The hook type being checked
 * @param array $registered All registered hook types
 *
 * @return bool
 */
function munk_current_theme_supports( $bool, $args, $registered ) {
	return in_array( $args[0], $registered[0] ) || in_array( 'all', $registered[0] );
}
add_filter( 'current_theme_supports-munk_hooks', 'munk_current_theme_supports', 10, 3 );

/**
 * HTML <html> hook
 * Special case, useful for <DOCTYPE>, etc.
 * $munk_supports[] = 'html;
 */
function munk_html_before() {
	do_action( 'munk_html_before' );
}
/**
 * HTML <body> hooks
 * $munk_supports[] = 'body';
 */
function munk_body_top() {
	do_action( 'munk_body_top' );
}

function munk_body_bottom() {
	do_action( 'munk_body_bottom' );
}

/**
 * HTML <head> hooks
 *
 * $munk_supports[] = 'head';
 */
function munk_head_top() {
	do_action( 'munk_head_top' );
}

function munk_head_bottom() {
	do_action( 'munk_head_bottom' );
}

/**
 * Semantic <header> hooks
 *
 * $munk_supports[] = 'header';
 */
function munk_header_before() {
	do_action( 'munk_header_before' );
}

function munk_header_after() {
	do_action( 'munk_header_after' );
}

function munk_header_top() {
	do_action( 'munk_header_top' );
}

function munk_header_bottom() {
	do_action( 'munk_header_bottom' );
}

function munk_header_main_navigation_before() {
	do_action( 'munk_header_main_navigation_before' );
}

function munk_header_main_navigation_after() {
	do_action( 'munk_header_main_navigation_after' );
}

/**
 * Semantic <content> hooks
 *
 * $munk_supports[] = 'content';
 */
function munk_content_before() {
	do_action( 'munk_content_before' );
}

function munk_content_after() {
	do_action( 'munk_content_after' );
}

function munk_content_top() {
	do_action( 'munk_content_top' );
}

function munk_content_bottom() {
	do_action( 'munk_content_bottom' );
}

function munk_content_while_before() {
	do_action( 'munk_content_while_before' );
}

function munk_content_while_after() {
	do_action( 'munk_content_while_after' );
}

/**
 * Semantic <entry> hooks
 *
 * $munk_supports[] = 'entry';
 */
function munk_entry_before() {
	do_action( 'munk_entry_before' );
}

function munk_entry_after() {
	do_action( 'munk_entry_after' );
}

function munk_entry_title_before() {
	do_action( 'munk_entry_title_before' );
}

function munk_entry_title_after() {
	do_action( 'munk_entry_title_after' );
}

function munk_entry_image_before() {
	do_action( 'munk_entry_image_before' );
}

function munk_entry_image_after() {
	do_action( 'munk_entry_image_after' );
}

function munk_entry_content_before() {
	do_action( 'munk_entry_content_before' );
}

function munk_entry_content_after() {
	do_action( 'munk_entry_content_after' );
}

function munk_entry_meta_before() {
	do_action( 'munk_entry_meta_before' );
}

function munk_entry_meta_after() {
	do_action( 'munk_entry_meta_after' );
}

function munk_entry_author_bio_before() {
	do_action( 'munk_entry_author_bio_before' );
}

function munk_entry_author_bio_after() {
	do_action( 'munk_entry_author_bio_after' );
}

function munk_entry_top() {
	do_action( 'munk_entry_top' );
}

function munk_entry_bottom() {
	do_action( 'munk_entry_bottom' );
}

/**
 * Comments block hooks
 *
 * $munk_supports[] = 'comments';
 */
function munk_comments_before() {
	do_action( 'munk_comments_before' );
}

function munk_comments_after() {
	do_action( 'munk_comments_after' );
}

/**
 * Semantic <sidebar> hooks
 *
 * $munk_supports[] = 'sidebar';
 */
function munk_sidebars_before() {
	do_action( 'munk_sidebars_before' );
}

function munk_sidebars_after() {
	do_action( 'munk_sidebars_after' );
}

function munk_sidebar_top() {
	do_action( 'munk_sidebar_top' );
}

function munk_sidebar_bottom() {
	do_action( 'munk_sidebar_bottom' );
}

/**
 * Semantic <footer> hooks
 *
 * $munk_supports[] = 'footer';
 */
function munk_footer_before() {
	do_action( 'munk_footer_before' );
}

function munk_footer_after() {
	do_action( 'munk_footer_after' );
}

function munk_footer_top() {
	do_action( 'munk_footer_top' );
}

function munk_footer_bottom() {
	do_action( 'munk_footer_bottom' );
}
