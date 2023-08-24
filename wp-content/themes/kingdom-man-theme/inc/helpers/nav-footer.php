<?php
/**
 * function to register child theme menus
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

/**
* Adds child theme menu to footer.
*
*/
function register_childtheme_menus() {
register_nav_menu('footer_menu', __( 'Footer Menu', 'child-theme-textdomain' ));
register_nav_menu('copyright_menu', __( 'Copyright Menu', 'child-theme-textdomain' ));
}
add_action( 'init', 'register_childtheme_menus' );
