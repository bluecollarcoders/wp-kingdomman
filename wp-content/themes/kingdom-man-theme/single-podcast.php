<?php
/**
 * The template for displaying all single posts for podcast CPT.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();

// Start the Loop
if ( have_posts() ) : while ( have_posts() ) : the_post();

    // Get post meta values
    $embedded_player     = get_post_meta(get_the_ID(), 'embedded_player', true);
    $short_description   = get_post_meta(get_the_ID(), 'podcast_short_description', true);
    $summary             = get_post_meta(get_the_ID(), 'podcast_summary', true);
    $verses              = get_post_meta(get_the_ID(), 'podcast_verses', true);
    $notes               = get_post_meta(get_the_ID(), 'podcast_notes', true);
?>

<!-- Banner Section -->
<div class="audio-featured-image-thumbnail format-audio nav-transparent no-featured-image rounded-corners single-featured thumb-size-large">
    <div class="container">
        <div class="background translucent">
            <div class="row">
                <div class="col-md-6">
                    <div class="album-art">
                        <img class="img-fluid" src="<?= get_the_post_thumbnail_url(); ?>" alt="Album Art" style="max-width: 100%; height: auto;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="player_container with_thumbnail audio-url">
                        <div class="player_container_text">
                            <span class="mini-title"><?= get_the_date(); ?></span>
                            <h2><?= get_the_title(); ?></h2>
                        </div>

                        <div class="audio">
                            <div class="audio_player regular-player">
                                <!--[if lt IE 9]><script>document.createElement('audio');</script><![endif]-->
                                <div id="mep_0" class="mejs-container mejs-container-keyboard-inactive wp-audio-shortcode mejs-audio" tabindex="0" role="application" aria-label="Audio Player">
                                    <?php echo $embedded_player ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Main Section -->
    <div class="mb-10 podcast-notes">
        <div>
            <h1 style="text-align: left;"><?= the_title(); ?></h1>
        </div>

        <div class="post-content-body mb-10">
            <article><?php echo the_content(); ?></article>
        </div>
        <h3 style="text-align: left; color:#689EC0;">Show Notes</h3>

        <div class="mt-10 podcast-body">
            <div class="mt-10">
                <h4 style="text-align: left;">Short Description:</h4>
                <p style="text-align: left;"><?php echo $short_description; ?></p>
            </div>

            <div class="mt-10">
                <h4 style="text-align: left;">Summary of Episode:</h4>
                <p style="text-align: left;"><?= $summary ?></p>
            </div>

            <div class="mt-10">
                <h4 style="text-align: left;">Notes and Quotes:</h4>
                <?php
                if ( ! empty( $notes ) ) {
                    $sentences = preg_split( '/(?<=[.?!])\s+/', $notes );
                    if ( ! empty( $sentences ) ) {
                        echo '<ul>';
                        foreach ( $sentences as $sentence ) {
                            echo '<li>' . esc_html( $sentence ) . '</li>';
                        }
                        echo '</ul>';
                    }
                }
                ?>
            </div>

            <div class="mt-10">
                <h4 style="text-align: left;">Verses mentioned in show:</h4>
                <ul>
                    <?php
                    if ( ! empty( $verses ) ) {
                        $verses_array = explode( "\n", $verses );
                        foreach ( $verses_array as $verse ) {
                            echo '<li>' . esc_html( $verse ) . '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
<?php endwhile;
endif;
?>

<!-- Related Post Grid -->
<?php get_template_part('template-parts/related-posts-podcast') ?>

<!-- Comment Section -->
<div class="container">
    <?php get_template_part('template-parts/comments'); ?>
</div>

<!-- Call to action -->
<?php get_template_part('template-parts/news-letter'); ?>

<?php
get_footer();
?>
