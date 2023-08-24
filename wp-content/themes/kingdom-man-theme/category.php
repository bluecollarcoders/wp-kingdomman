<?php

/**
 * The template for displaying category pages
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper site-section" id="archive-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php
			// Do the left sidebar check and open div#primary.
			get_template_part('global-templates/left-sidebar-check');
			?>

			<main class="site-main" id="main">

				<div class="row mb-4">
					<div class="col-md-8">
						<h2 class="mb-4">Category: <?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?> </h2>
					</div>
				</div>

				<div class="row blog-entries">
					<div class="col-md-12  main-content">
						<div class="row mb-5 mt-5">
							<div class="col-mb-5 mt-5">
								<div class="col-md-12">
									<?php if (have_posts()) : while (have_posts()) : the_post();
											$args = ['post_id' => 1, 'count' => true,];
											$comments_count = get_comments($args);
									?>
											<div class="post-entry-horzontal">
												<!-- Gets permalink for each posts -->
												<?php $permalink_posts = get_permalink(); ?>
												<a href="<?php echo $permalink_posts ?>">
													<!-- Get the Thumbnail goes here -->
													<div class="image element-animate fadeIn element-animated"><?php echo get_the_post_thumbnail(); ?></div>
													<span class="text">
														<div class="post-meta">
															<span class="author mr-2"><?php echo get_the_author() ?></span>
															<span class="mr-2"><?php echo get_the_date(); ?></span>
															<span class="mr-2"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?></span>
															<span class="ml-2">
																<span class="fa fa-comments"><?php echo $comments_count ?></span>
															</span>
														</div>
														<h2 class="get-the-title"><?php echo get_the_title(); ?></h2>
													</span>
												</a>
											</div>
									<?php endwhile;

									endif; ?>
								</div>

							</div>
						</div>
					</div>

				</div>

				<?php
				// Display the pagination component.
				understrap_pagination();

				// Do the right sidebar check and close div#primary.
				get_template_part('global-templates/right-sidebar-check');
				?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php

get_template_part('template-parts/cta');
?>

<?php
get_footer();
