<?php
/**
 * Template Part: Newsletter
 *
 * @package Understrap
 * @since 1.2.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section class="py-20 color-section">
        <div class="container">
          <div class="py-16 py-lg-24 px-10 px-lg-28 bg-primary position-relative">
            <img class="d-none d-md-block position-absolute top-0 start-0 translate-middle" src="<?php echo get_stylesheet_directory_uri() ?>/elements/left-squares.svg" alt="">
            <img class="d-none d-md-block position-absolute top-100 start-100 translate-middle" src="<?php echo get_stylesheet_directory_uri() ?>/elements/right-squares.svg" alt="">
            <div class="row align-items-center">
              <div class="col-12 col-lg-7 mb-6 mb-lg-0">
                <h3 class="fw-bold text-white mb-4">Sign up to our newsletter</h3>
                <p class="text-light">Get exclusive access to resources, events, and stories that will inspire and equip you to be the man God has called you to be.</p>
              </div>
              <div class="col-12 col-lg-5">

                <form action="#">
                  <!-- Contact form 7 -->
                  <?php echo do_shortcode('[contact-form-7 id="8202f03" title="Newsletter"]'); ?>
                </form>

              </div>
            </div>
          </div>
        </div>
      </section>

