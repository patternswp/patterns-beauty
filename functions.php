<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Beauty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Beauty
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_BEAUTY_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_BEAUTY_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_BEAUTY_VERSION', '1.0.2' );
define( 'PATTERNS_BEAUTY_THEME_NAME', 'patterns-beauty' );
define( 'PATTERNS_BEAUTY_OPTION_NAME', 'patterns-beauty' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_BEAUTY_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_beauty_run() {
	new Patterns_Beauty();
}
patterns_beauty_run();
