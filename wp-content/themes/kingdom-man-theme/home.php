<?php
/**
 * Template Name:  Blog Template
 *
 * Template for displaying a the about page of a the site.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<!-- Posts Section -->
<section class="py-20-h">
    <div class="container">
        <div class="mw-5xl text-center mx-auto title-sep mb-16">
            <span class="badge bg-warning-light">Kingdom Man</span>
            <h2 class="mt-6 h2-bp mb-4 ">Latest Posts</h2>
        </div>
        <div class="row mb-5">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-12 col-md-6 mb-8">
                        <div class="bg-light p-6">
                            <div class="mb-4">
                                <?php the_post_thumbnail('river-width'); ?>
                            </div>
                            <span class="text-muted" style="font-size: 12px;"><?php echo get_the_date(); ?></span>
                            <h3 class="my-4 h3-bp"><?php the_title(); ?></h3>
                            <p class="lead lh-lg text-muted mb-6"><?php the_excerpt(); ?></p>
                            <!-- <a class="link-primary fw-bold text-decoration-none" href="#"><?php echo get_permalink(); ?></a> -->
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
            <!-- end of Loop  -->
        </div>
            <?php understrap_pagination(); ?>

    </div>
</section>

<!-- Call to action -->
<?php get_template_part('template-parts/cta'); ?>

<?php
get_footer();
