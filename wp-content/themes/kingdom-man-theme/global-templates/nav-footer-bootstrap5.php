<?php
/**
 * Footer Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<?php
  wp_nav_menu(
    array(
      'theme_location'  => 'footer_menu',
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => 'list-unstyled d-flex flex-wrap justify-content-center mb-10',
      'fallback_cb'     => '',
      'menu_id'         => 'footer_menu',
      'depth'           => 1,
      'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
    )
  );
?>
