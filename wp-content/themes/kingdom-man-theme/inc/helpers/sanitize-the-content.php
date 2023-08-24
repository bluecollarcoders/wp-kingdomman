<?php
/**
 * Sanitize html function.
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


function sanitize_the_content( $content ) {
    return wp_kses_post( $content );
}
add_filter('the_content', 'sanitize_the_content', 1);