<?php
/**
 * Navbar branding
 *
 * @package Understrap
 * @since 1.2.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! has_custom_logo() ) { ?>

	<?php if ( is_front_page() && is_home() ) : ?>

		<h1 class="navbar-brand mb-0">
		<a class="navbar-brand" href="#">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/logos//cronos-logo-white.svg" alt="" width="132">
              </a>
		</h1>

	<?php else : ?>

		<h1 class="navbar-brand mb-0">
		<a class="navbar-brand" href="/">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/logos//kingdom-logo-transparent.png" alt="" height="40" width="198">
              </a>
		</h1>

	<?php endif; ?>

	<?php
} else {
	the_custom_logo();
}
