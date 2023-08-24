<?php
/**
 * Template Name: Front Page Template
 *
 * Template for displaying a the home page of a the site.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header('front');
?>

<!-- Purpose -->
<section class="py-20">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6 mb-10 mb-lg-0">
				<div class="position-relative mw-lg-md" style="height: 536px;">
					<img class="d-none d-xl-block position-absolute bottom-0 start-0 translate-middle-x" src="<?php echo get_stylesheet_directory_uri() ?>/elements/green-light-left.svg" alt="">
					<img class="d-none d-xl-block position-absolute top-0 end-0" src="<?php echo get_stylesheet_directory_uri() ?>/elements/warning-light-small.svg" alt="">
					<img class="img-fluid h-100 w-100" style="object-fit: cover;" src="https://images.unsplash.com/photo-1442115597578-2d0fb2413734?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=MnwzMzIzMzB8MHwxfHNlYXJjaHwzMnx8bWFuJTIwaG9sZGluZyUyMEJpYmxlJTIwfGVufDB8fHx8MTY4MzYwMTkxMw&amp;ixlib=rb-4.0.3&amp;q=85&amp;w=1920" alt="">
				</div>
			</div>
			<div class="col-12 col-lg-6 mb-10 mb-lg-0">
				<div class="mw-lg-md">
					<h3 class="mb-14">Discover purpose as Godly men</h3>
					<div class="row">
						<div class="col-12 col-lg-6 mb-10">
							<span class="d-flex mb-6 align-items-center justify-content-center h6 bg-light" style="width: 64px; height: 64px;">1</span>
							<h6 class="mb-3">Connect</h6>
							<p class="lead lh-lg text-muted">Join a community of like-minded Christian men who are passioniate about living out 1 Corinthians 11:3.</p>
						</div>
						<div class="col-12 col-lg-6 mb-10">
							<span class="d-flex mb-6 align-items-center justify-content-center h6 bg-light" style="width: 64px; height: 64px;">2</span>
							<h6 class="mb-3">Grow</h6>
							<p class="lead lh-lg text-muted">Access exclusive resources, events, and small groups designed to help you deepen your faith and become a stronger leader.</p>
						</div>
						<div class="col-12 col-lg-6 mb-10 mb-lg-0">
							<span class="d-flex mb-6 align-items-center justify-content-center h6 bg-light" style="width: 64px; height: 64px;">3</span>
							<h6 class="mb-3">Learn</h6>
							<p class="lead lh-lg text-muted">Gain personalized guidance and support from a biblical perspective. Let God's word empower you!</p>
						</div>
						<div class="col-12 col-lg-6">
							<span class="d-flex mb-6 align-items-center justify-content-center h6 bg-light" style="width: 64px; height: 64px;">4</span>
							<h6 class="mb-3">Impact</h6>
							<p class="lead lh-lg text-muted">Experience the power biblical manhood as we come together as like-minded Christian men.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Newsletter template-part -->
<?php get_template_part('template-parts/news-letter'); ?>

<!-- Who we are -->
<section class="position-relative py-20 overflow-hidden">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 mb-8 mb-lg-0">
				<div class="mw-lg-md">
					<div class="position-relative mb-6" style="height: 445px;">
						<img class="position-absolute bottom-0 start-0 translate-middle-x no-show" src="<?php echo get_stylesheet_directory_uri() ?>/elements/green-light-left.svg" alt="">
						<img class="position-absolute top-0 end-0 no-show" src="<?php echo get_stylesheet_directory_uri() ?>/elements/dark-green-dark-warning.svg" alt="">
						<img class="img-fluid h-100" style="object-fit: cover;" src="https://images.unsplash.com/photo-1509021436665-8f07dbf5bf1d?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=MnwzMzIzMzB8MHwxfHNlYXJjaHwyMnx8YmlibGUlMjBzdHVkeXxlbnwwfHx8fDE2ODM2MDI2MDc&amp;ixlib=rb-4.0.3&amp;q=85&amp;w=1920" alt="">
					</div>
					<div class="text-center">
						<button class="btn btn-light p-0 me-2" style="width: 12px; height: 12px; transform: rotate(45deg);"></button>
						<button class="btn btn-light p-0 me-2" style="width: 12px; height: 12px; transform: rotate(45deg);"></button>
						<button class="btn btn-primary p-0 me-2" style="width: 12px; height: 12px; transform: rotate(45deg);"></button>
						<button class="btn btn-light p-0" style="width: 12px; height: 12px; transform: rotate(45deg);"></button>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 h-100">
				<img class="mb-8" style="width: 64px;" src="<?php echo get_stylesheet_directory_uri() ?>/elements/quote.svg" alt="">
				<h2 class="mb-4">Iron sharpeneth iron; so a man sharpeneth the countenance of his friend.</h2>
				<p class="lead lh-lg text-muted mb-8">Welcome to the Kingdom Man blog, where we explore God's expectations for men as revealed in the Bible. Our focus is on the scripture found in 1 Corinthians 11:3, which speaks to the order that God has established for us as men. As Christian men, we have a responsibility to love sacrificially and be servant leaders. Through this blog, we provide insights and encouragement for Christian and non-Christian men alike, inviting you to join us on this journey of growth and discovery.</p>
				<h6 class="text-primary">Proverbs 27:17</h6>
				<p class="text-bold">King Solomon</p>
			</div>
		</div>
	</div>
</section>

<!-- Call to action -->
<?php get_template_part('template-parts/cta'); ?>

<?php
get_footer();
