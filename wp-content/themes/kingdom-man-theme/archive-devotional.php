<?php
/**
 *Template Name:  Archive Devotional Template
 *
 * The template for displaying the archive page for devotional CPT.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$args = [
	'post_type'     => 'devotional',
	'post_per_page' => -1,
];
$loop = new WP_Query($args);
?>

<!-- Start Posts Grid -->
<div class="py-20">
  <div class="container">
  <h3 class="text-center mt-10 mb-5">Latest Devotionals</h3>
    <div class="row">

	<!-- Start the Loop -->
      <?php
      $counter = 0;
      if ( have_posts() ) : while ( have_posts() ) : the_post();
        $counter++;
      ?>

        <?php if ( $counter == 1 ) : ?>
          <div class="col-12 col-lg-8 mb-16">
        <?php elseif ( $counter == 2 ) : ?>
          <div class="col-12 col-lg-4 mb-16">
        <?php else : ?>
          <div class="col-12 col-lg-4 mb-16 mb-lg-0">
        <?php endif; ?>

          <div class="mb-10">
            <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid w-100', 'style' => 'height:400px; object-fit: cover;' ) ); ?>
          </div>
          <span class="small text-muted" style="font-size: 12px;"><?php echo get_the_date( 'j M Y H:i' ); ?></span>
          <h3 class="mt-4 mb-4"><?php the_title(); ?></h3>
          <h6 class="mb-6 fw-normal lh-lg text-muted"><?php the_excerpt(); ?></h6>
          <a class="link-primary text-decoration-none fw-bold" href="<?php the_permalink(); ?>"></a>
        </div>

      <?php endwhile; endif; ?>
	  <!-- End the Loop -->
    </div>
    <?php echo paginate_links(); ?>
  </div>
</div>

	<!-- Call to action -->
<?php get_template_part('template-parts/news-letter'); ?>

<?php
get_footer();
