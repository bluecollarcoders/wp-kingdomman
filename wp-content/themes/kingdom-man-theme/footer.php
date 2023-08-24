<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<section class="py-20">
        <div class="container">
          <div class="max-w-xl mx-auto">
            <div class="text-center pb-10 border-bottom">
              <a class="d-inline-block  navbar-brand" href="#">
                <img class="footer-img" src="<?php echo get_stylesheet_directory_uri() ?>/logos/kingdom-logo-footer.svg" alt="" width="280">
              </a>

              <?php get_template_part('global-templates/nav-footer-bootstrap5'); ?>

              <div class="d-flex flex-wrap justify-content-center  align-items-center">
                <a class="text-decoration-none me-10" href="#">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/logos/brands/facebook.svg" alt="">
                </a>
                <a class="text-decoration-none me-10" href="#">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/logos/brands/Twitter.svg" alt="">
                </a>
                <a class="text-decoration-none me-10" href="#">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/logos/brands/Instagram.svg" alt="">
                </a>
                <a class="text-decoration-none me-10" href="#">
                  <img src="<?php echo get_stylesheet_directory_uri() ?>/logos/brands/youtube-svgrepo-com.svg" alt="">
                </a>

                <a class="text-decoration-none me-10" href="#">

                </a>
                <a class="text-decoration-none" href="#">

                </a>
              </div>
            </div>
            <p class="pt-10 small text-muted text-center">All rights reserved © Kingdom Man <?php echo date('Y'); ?></p>
          </div>
        </div>
        <?php get_template_part('global-templates/back-to-top') ?>
      </section>


<?php wp_footer(); ?>

</body>

</html>

