<?php
/**
 * Template Name:  Archive Podcast Template
 *
 * The template for displaying the archive page for podcast CPT.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$args = [
	'post_type'     => 'podcast',
	'post_per_page' => -1,
];
$loop = new WP_Query( $args );
?>

<!-- Banner Image Section -->
<section class="position-relative py-48" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/images/podcast-photo.jpg';  ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 75%;"></div>
    <div class="position-relative container text-center">
        <h2 class="mt-4 mb-3 text-white">The Kingdom Man Podcast</h2>
    </div>
</section>

<!-- Start the Loop -->
<div class="row">
    <div class="col-lg-11 mx-auto">
        <h1 class="header-podcast">Episodes</h1>
        <div class="row py-5">
            <?php
            if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <div class="col-lg-4">
                <figure class="rounded p-3 bg-white shadow-sm">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="podcast thumbnail" class="w-100 card-img-top">
                    <figcaption class="p-4 card-img-bottom">
                        <ul><li><a href="<?php echo get_the_permalink(); ?>">Episodes</a></li></ul>
                        <h2 class="h5 font-weight-bold mb-2 font-italic"><?php echo the_title(); ?></h2>
                        <p class="mb-0 text-small text-muted font-italic"><?php echo the_excerpt(); ?></p>
                    </figcaption>
                </figure>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<?php understrap_pagination();?>

<!-- Call to action -->
<?php get_template_part('template-parts/news-letter'); ?>

<?php
get_footer();
