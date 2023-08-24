<?php

/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
$author_id = get_the_author_meta('ID');
$output    = get_avatar_url($author_id);
?>

<section class="pb-20">
	<div class="position-relative mb-12 mb-md-20">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="image-container">
				<img class="img-fluid w-100" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
				<div class="image-overlay">
				<span class="post-category text-white bg-success mb-3"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name;?></span>
					<h1 class="overlay-text"><?php the_title(); ?></h1>
					<div class="mt-5">
						<figure class="mb-0 mr-3 d-inline-block">
							<img src="<?php echo $output ?>" alt="">
						</figure>
						<span class="overlay-subtext d-inline-block mt-1 pe-2">By <?php echo get_the_author(); ?></span>
						<span class="overlay-subtext">&nbsp;-&nbsp; <?php echo get_the_date(); ?></span>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row blog-entries">
					<div class="d-flex justify-content-center align-items-center mb-4">
						<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
					</div>
					<div class="col-md-12 col-lg-8 main-content">
						<div class="post-content-body">
							<article><?php echo the_content(); ?></article>
						</div>
						<?php get_template_part('global-templates/right-sidebar-check') ?>
					</div>

				</div>
				<?php endwhile;
			endif; ?>
			</div>
		</div>
</section>

<!-- Related Post Grid -->
<?php get_template_part('template-parts/related-posts') ?>

<!-- Comment Section -->
<div class="container">
	<?php get_template_part('template-parts/comments'); ?>
</div>

<!-- Call to action -->
<?php get_template_part('template-parts/news-letter'); ?>

<?php
get_footer();
