<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


/**
 * Helper functions located in inc folder.
 */
require_once(get_stylesheet_directory() . '/inc/helpers/breadcrumb.php');
require_once(get_stylesheet_directory() . '/inc/helpers/nav-footer.php');
require_once(get_stylesheet_directory() . '/inc/helpers/sanitize-the-content.php');


/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );


/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @return string
 */
function understrap_default_bootstrap_version() {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );


/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );


/**
 * Adds signup button to navigation.
 */
function add_signup_button_to_menu( $items, $args ) {
    // Check if the primary menu is being displayed
    if ( $args->theme_location == 'primary' ) {
        // Add the sign up button to the end of the menu items
        $items .= '<li class="nav-item"><a class="nav-link btn-secondary" href="/sign-up">Sign Up</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_signup_button_to_menu', 10, 2 );


/**
 * Adds google fonts.
 */
function enqueue_google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_google_fonts' );


/*
	==========================================
	Register New Image Sizes
	==========================================
*/
add_theme_support( 'post-thumbnails' );
//  custom images
add_image_size( 'featured-large', 1880, 460, true );
add_image_size( 'featured-medium', 1200, 900, true );
add_image_size( 'blog-width', 876, 493, true );
add_image_size( 'river-width', 498, 277, true );
add_image_size( 'thumbnail-width', 271, 152, true );
add_image_size( 'thumbnail-archive', 563, 375, true );


/*
	==========================================
	Filter image src
	==========================================
*/
add_filter(
	'wp_calculate_image_srcset',
	function( $sources, $size_array, $image_src, $image_meta, $attachment_id ) {
		$full_src = wp_get_attachment_url( $attachment_id );
		if ( ! $full_src ) {
			return $sources;
		}

		$widths = [ 480, 680, 960, 1080 ];
		foreach ( $widths as $width ) {
			if ( isset( $sources[ $width ] )
			|| $width >= $size_array[0] ) {
				continue;
			}
			$url = sprintf(
				'https://pinchofyum.com/cdn-cgi/image/width=%d,height=%s,fit=scale-down/%s',
				$width,
				99999,
				ltrim( wp_parse_url( $full_src, PHP_URL_PATH ), '/' )
			);

			$sources[ $width ] = [
				'url'        => $url,
				'descriptor' => 'w',
				'value'      => $width,
			];
		}
		return $sources;
	},
	10,
	5
);
