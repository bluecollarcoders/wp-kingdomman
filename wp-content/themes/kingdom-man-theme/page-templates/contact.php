<?php

/**
 * Template Name: Contact Page Template
 *
 * Template for displaying the contact page of a the site.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<h1 class="text-center hc-1" style="margin-top: 150px; margin-bottom:50px;">Contact</h1>
        <section class="position-relative overflow-hidden contact-bottom bg-primary py-20">
          <div class="bg-white contact-display-block d-none h-100 position-absolute start-0 top-0 w-75"></div>
          <div class="d-md-none position-absolute top-0 start-0 bg-white w-100 h-100"></div>
          <div class="container position-relative">
            <div class="row align-items-center">
              <div class="col-12 col-lg-6 mb-10 mb-lg-0">
                <div class="mw-lg-md mb-10 mb-lg-24">
                  <h2 class="mb-4">Got questions?</h2>
                  <p class="lead lh-lg text-muted">If you have any inquiries, thoughts, or feedback, we're here to listen. Feel free to reach out to us using the form below. Your messages are important to us, and we're eager to connect with you.</p>
                </div>
                <div class="row">
                  <div class="col-12 col-md-6 mb-5 mb-md-0">

                  </div>
                  <div class="col-12 col-md-6">
                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">

                    </svg>

                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6 position-relative">
                <div class="position-relative py-12 px-10 bg-white shadow-lg text-center">
                  <img class="d-none d-lg-block position-absolute bottom-100 start-50" style="height: 88px;" src="<?php echo get_stylesheet_directory_uri() ?>/elements/green-light-left.svg" alt="">
                  <img class="d-none d-lg-block position-absolute top-100 start-50" style="height: 88px;" src="<?php echo get_stylesheet_directory_uri() ?>/elements/light-green-left.svg" alt="">
                    <span class="badge bg-secondary-light"></span>
                    <h3 class="heading-contact mt-6 mb-6">Please fill in the details and your message</h3>

                    <!-- Contact form 7 -->
                    <?php echo do_shortcode('[contact-form-7 id="b6cb8a8" title="Contact Form"]'); ?>
                </div>
              </div>
            </div>
          </div>
        </section>

<!-- Call to action -->
<?php get_template_part('template-parts/news-letter'); ?>

<?php
get_footer();
