<?php
/**
 * alpha functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package alpha
 */

/**
 * Custom theme-supports for this theme.
 */
require get_template_directory() . '/inc/theme-supports.php';

/**
 * Custom Widget for this theme.
 */
require get_template_directory() . '/inc/theme-custom-widget.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Enqueue custom scripts and styles.
 */
require ( get_stylesheet_directory() . '/inc/theme-custom-scripts.php' );

/**
 * CMB2 Custom Metabox Functions
 */
require ( get_stylesheet_directory() . '/inc/theme-custom-metabox.php' );

/**
 * Theme customize options
 */
require ( get_stylesheet_directory() . '/inc/theme-customizer.php' );

/**
 * Theme Shortcode options
 */
require ( get_stylesheet_directory() . '/inc/theme-custom-shortcode.php' );

/**
 * Theme Custom PostType options
 */
require ( get_stylesheet_directory() . '/inc/theme-custom-posttypes.php' );
