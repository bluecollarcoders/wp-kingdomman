<?php

/**
 * Template Name: About Page Template
 *
 * Template for displaying a the about page of a the site.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<!-- About Header -->
<section class="position-relative py-48" style="background-image: url('https://images.unsplash.com/photo-1627818653012-054f17eb0648?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center;">
	<div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 75%;"></div>
	<div class="position-relative container text-center">

		<h2 class="mt-4 mb-3 h2-size text-white">About</h2>
		<p class="lead lh-lg text-light mb-6">Our mission is to equip and inspire men to live out their God-given purpose. </p>
		<div>
			<a class="btn btn-primary d-block d-sm-inline-block me-sm-4 mb-2 mb-sm-0" href="/contact">Contact</a>
		</div>
	</div>
</section>

<!-- Our Mission -->
<section class="position-relative pb-20 bg-light overflow-hidden">
	<img class="d-none d-lg-block position-absolute end-0 top-0" style="object-fit: cover;" src="<?php echo get_stylesheet_directory_uri() ?>/elements/sign-background-light.svg" alt="">
	<div class="d-none d-lg-block position-absolute top-0 start-0 bottom-0 col-3 col-xl-4 bg-white"></div>

	<div class="container position-relative">
		<div class="row">
			<div class="col-12 col-lg-5 mb-8 mb-lg-0-a">
				<img class="img-fluid mt-10" src="https://images.unsplash.com/photo-1450558415837-1f5e21a17709?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=MnwzMzIzMzB8MHwxfHNlYXJjaHw0MHx8YmlibGUlMjBzdHVkeXxlbnwwfDF8fHwxNjgzNjA2OTM5&amp;ixlib=rb-4.0.3&amp;q=85&amp;w=1920" alt="">
			</div>
			<div class="col-12 col-lg-7">
				<div class="mw-lg-md ms-lg-16 mt-lg-6 mt-xl-12">
					<h2 class="mb-h2 h2-size text-primary">What's our mission?</h2>
					<p class="lead text-muted lh-lg mb-6">Kingdom Man is a Christian men's blog that seeks to inspire and equip men to rediscover their God-given purpose in a world that has lost it's place for men. We center our message on the biblical principles of 1 Corinthians 11:3, recognizing that men today need Christ more than ever before. Our mission is to provide a place where men can find inspiration and encouragement to work in their God-given roles as leaders in their homes, communities, and beyond, living out their faith with integrity, courage, and purpose.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Company Bio -->
<section class="pb-20 pb-lg-10 mb-lg-32 bg-light">
	<div class="navbar navbar-light py-5 mb-10 mb-lg-16">
		<div class="container">

		</div>
	</div>
	<div class="container pt-lg-10">
		<div class="row">
			<div class="col-12 col-lg-6 mb-10">
				<div class="mw-lg-md">
					<h2 class="mb-5 text-primary">About our founder.</h2>
					<p class="lead text-muted lh-lg mb-6">As a devoted father and husband, Caleb Matteis is passioniate about helping men of all ages grow closer to Christ and become the best versions of themselves for God, their family, and their community With this goal in mind, he founded Kingdom Man, a platform dedicated to providing men with the resources, guidance, and inspiration they need to live a purposeful and fulfilling life rooted in Christ. Through insightful articles, practical tips, and anecdotes, Caleb empowers men to embrace their spirtual journey and cultivate a deeper relationship with Christ. Join Kingdom Man and start your own journey towards becoming the man God intended you to be.</p>
				</div>
			</div>
			<div class="col-12 col-lg-6 position-relative">
				<img class="d-none d-lg-block position-absolute top-0 start-0 mt-n20 img-fluid" style="height: 580px; object-fit: cover;" src="<?php echo get_stylesheet_directory_uri() ?>/images/bio-photo.jpeg" alt="Photo of Caleb the founder of Kingdom Man">
				<img class="d-lg-none img-fluid" style="object-fit: cover;" src="<?php echo get_stylesheet_directory_uri() ?>/images/bio-photo.jpeg" alt="">
			</div>
		</div>
	</div>
</section>

<!-- Call to action -->
<?php get_template_part('template-parts/cta'); ?>

<?php
get_footer();
