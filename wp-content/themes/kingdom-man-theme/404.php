<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

	<div class="d-flex align-items-center justify-content-center">
			<div class="text-center row">
				<div class=" col-md-6">
					<img src="https://cdn.pixabay.com/photo/2017/03/09/12/31/error-2129569__340.jpg" alt=""
						class="img-fluid">
				</div>
				<div class=" col-md-6 mt-5">
					<p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
					<p class="lead">
						The page you’re looking for doesn’t exist.
					</p>
					<a href="<?php echo esc_url( site_url( '/' ) ); ?>" class="btn btn-primary">Go Home</a>

				</div>

			</div>
		</div>

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->
