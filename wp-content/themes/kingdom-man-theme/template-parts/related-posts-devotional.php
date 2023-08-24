<?php
/**
 * The template-part for displaying all related posts.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<div class="py-5 bg-light mb-5">
    <div class="container">
        <?php
        $devotional_categories = wp_get_post_categories(get_the_ID(), ['taxonomy' => 'category']);

        $related_posts = new WP_Query(
            array(
                'posts_per_page' => 3,
                'post_type'      => 'devotional',
                'post__not_in'   => array(get_the_ID()),
                'category__in'   => $devotional_categories,
            )
        );

        $args = ['post_id' => 1, 'count' => true];
        $comments_count = get_comments($args);

        if ($related_posts->have_posts()) :
        ?>
            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="more-h2">More Related Posts</h2>
                </div>
            </div>

            <div class="row">
                <?php
                while ($related_posts->have_posts()) :
                    $related_posts->the_post();
                ?>

                    <div class="col-md-6 col-lg-4">
                        <a href="<?php esc_url(the_permalink()); ?>" class="a-block sm d-flex align-items-center height-md" style="background-image: url('<?php the_post_thumbnail_url('small'); ?>')">
                            <div class="text">
                                <div class="post-meta">
                                    <span class="category-related-posts"><?php echo get_the_category()[0]->name; ?></span>
                                    <span class="mr-2"><?php echo get_the_date(); ?></span>
                                    <span class="ml-2">
                                        <span class="fa fa-comments"><?php echo $comments_count ?></span>
                                    </span>
                                </div>
                                <h3 class="mt-auto more-h3"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata(); // Reset the query data
                ?>
            </div>
        <?php
        endif;
        ?>
    </div>
</div>
