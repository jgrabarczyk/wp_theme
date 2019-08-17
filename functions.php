<?php
/**
 *wp_theme functions and definitions
 *
 * @packagewp_theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$wp_theme_includes = array(
	'/theme-settings.php',                     // Initialize theme default settings.
	'/setup.php',                              // Theme setup and custom theme supports.
	'/widgets.php',                            // Register widget area.
	'/enqueue.php',                            // Enqueue scripts and styles.
	'/pagination.php',                         // Custom pagination for this theme.
	'/hooks.php',                              // Custom hooks.
	'/custom-comments.php',                    // Custom Comments file.
	'/template-tags.php',                      // Custom template tags for this theme.
	'/custom-fucntions.php',                   // Custom function specific for this theme.
	'/custom-post_types.php',                   // Custom function specific for this theme.
);

foreach ( $wp_theme_includes as $file ) {
	$filepath = locate_template( '/inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}


