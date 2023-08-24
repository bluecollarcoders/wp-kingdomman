<?php

/**
 * Template Name: Signup Page Template
 *
 * Template for displaying the contact page of a the site.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
?>

<div class="">

        <section class="position-relative py-lg-20">
          <div class="d-lg-none d-flex mb-10">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri() ?>/elements/left-top.svg" alt="">
          </div>
          <img class="d-none d-lg-block position-absolute top-0 start-0" src="<?php echo get_stylesheet_directory_uri() ?>/elements/left-top.svg" alt="">
          <img class="d-none d-lg-block position-absolute top-0 end-0" src="<?php echo get_stylesheet_directory_uri() ?>/elements/right-top.svg" alt="">
          <img class="d-none d-lg-block position-absolute bottom-0 start-0" src="<?php echo get_stylesheet_directory_uri() ?>/elements/left-bottom.svg" alt="">
          <img class="d-none d-lg-block position-absolute bottom-0 end-0" src="<?php echo get_stylesheet_directory_uri() ?>/elements/right-bottom.svg" alt="">
          <div class="container" style="margin-top: 100px;">
            <div class="mw-md mx-auto text-center">
              <div class="text-center">
                <form action="#">
                  <span class="badge bg-secondary-light text-uppercase">Sign Up</span>
                  <h3 class="mt-6 mb-8">Join the Communtiy</h3>

                  <!-- Contact form 7 -->
                  <?php echo do_shortcode('[contact-form-7 id="0da8d4b" title="Signup form-1"]'); ?>

                    <input class="form-check-input me-4" type="checkbox" name="terms" value="1">
                    <small class="text-muted">By signing up, you agree to our <a class="text-muted text-decoration-none fw-bold" href="#">Terms, Data Policy</a> and <a class="text-muted text-decoration-none fw-bold" href="#">Cookies Policy</a>.</small>
                </form>
              </div>
            </div>
          </div>
          <div class="d-lg-none d-flex mt-10">
            <img class="img-fluid ms-auto" src="<?php echo get_stylesheet_directory_uri() ?>/elements/right-bottom.svg" alt="">
          </div>
        </section>
      </div>

      <?php
get_footer('clean');
