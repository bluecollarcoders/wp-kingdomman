<?php
/**
 * The header for the front-page our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar" class="header">

		<a class="skip-link <?php echo understrap_get_screen_reader_class( true ); ?>" href="#content">
			<?php esc_html_e( 'Skip to content', 'understrap' ); ?>
		</a>

		<section id="header">
	<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>
		</section>

<section class="main position-relative">
  <div class="bg-dark bottom-0 end-0 position-absolute start-0 top-0" style="opacity: 80%;"></div>
  <div class="container position-relative" style="z-index: 1;">
    <div class="mw-2xl mx-auto text-center mb-20 mb-lg-32">
      <span class="text-light">Discover what it means</span>
      <h1 class="text-white mt-2">
        <span>To Live with Biblical</span>
        <span class="d-block text-secondary">manhood</span>
        <span>in action.</span>
      </h1>
    </div>
    <div class="row">
      <div class="col-12 col-lg-4 mb-10 mb-lg-0">
        <div class="d-flex">
          <span class="mt-n2 me-5">

          </span>
          <div>

          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 mb-10 mb-lg-0">
        <div class="d-flex">
          <span class="mt-n2 me-5">
          </span>
          <div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

	</header><!-- #wrapper-navbar -->
