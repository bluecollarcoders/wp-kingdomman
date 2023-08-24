<?php
/**
 * The template for displaying all single posts for devotional CPT.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
?>

<!-- Start the Loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- Banner Image Section -->
    <section class="position-relative py-48" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 75%;"></div>
        <div class="position-relative container text-center">
            <h2 class="mt-4 mb-3 text-white"><?php echo the_title() ?></h2>
        </div>
    </section>

    <!-- Main Section -->
    <div class="mb-5">
        <h3 class="text-center mt-5">Daily Devotion</h3>
        <section class="">
            <div class="container">
                <div class="position-relative mb-12 mb-md-20">
                </div>
                <div class="mw-3xl mx-auto mb-12 mb-md-16 text-center">
                    <h4 class="" contenteditable="false"><?php echo the_title(); ?></h4>

                    <!-- Custom Field Scripture & Verse: get_field is an ACF function -->
                    <?php
                    $scripture = get_field('scripture_field');
                    $verse     = get_field('verse_text');
                    ?>
                    <h5 class="text-center mt-5 mb-3"><?php echo $scripture ?></h5>
                    <blockquote class="text-center mt-5 mb-5"><?php echo $verse ?></blockquote>

                    <!-- Verse of the day: gets pulled from CPT plugin using the bible API -->
                    <?php
                    $verseText = get_post_meta(get_the_ID(), 'bible_verse', true);
                    $reference = get_post_meta(get_the_ID(), 'bible_reference', true);
                    ?>

                    <h6 class="mb-1" contenteditable="false">Verse Of The Day</h6>
                    <div class="verse-of-the-day">
                        <p><?php echo $verseText ?></p>
                        <p><?php echo $reference ?></p>
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <div class="me-4">
                        </div>
                        <div class="text-start">
                        </div>
                    </div>
                </div>
                <div class="mw-2xl mx-auto">
                    <p class="mb-6 lead lh-lg text-muted"><?php echo get_the_content(); ?></p>
                </div>
            </div>
        </section>
        <?php understrap_pagination();?>
    </div>

<?php endwhile;
endif; ?>
<!-- End the Loop -->

<!-- Related Post Grid -->
<?php get_template_part('template-parts/related-posts-devotional') ?>

<!-- Comment Section -->
<div class="container">
    <?php get_template_part('template-parts/comments'); ?>
</div>

<!-- Call to action -->
<?php get_template_part('template-parts/news-letter'); ?>

<?php
get_footer();
