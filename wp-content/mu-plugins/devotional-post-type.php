<?php
/**
 * Plugin Name: Devotional Post Type
 * Description: Custom post type for devotional content.
 * Plugin Name: Devotional Post Type
 * Version: 1.0
 * Author: Caleb Matteis
 */

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Devotional post type.
 *
 * @return void
 */
function register_devotional_post_type() {
	$labels = array(
		'name'               => 'Devotionals',
		'singular_name'      => 'Devotional',
		'menu_name'          => 'Devotionals',
		'name_admin_bar'     => 'Devotional',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Devotional',
		'new_item'           => 'New Devotional',
		'edit_item'          => 'Edit Devotional',
		'view_item'          => 'View Devotional',
		'all_items'          => 'All Devotionals',
		'search_items'       => 'Search Devotionals',
		'parent_item_colon'  => 'Parent Devotionals:',
		'not_found'          => 'No devotionals found.',
		'not_found_in_trash' => 'No devotionals found in Trash.',
	);

	$args = array(
		'labels'              => $labels,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'           => true,
		'rewrite'             => array( 'slug' => 'devotional' ),
		'capability_type'     => 'post',
		'has_archive'         => true,
		'menu_icon'           => 'dashicons-text-page',
		'taxonomies'          => array( 'category', 'post_tag' ),
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'hierarchical'        => false,
		'menu_position'       => null,
		'show_in_rest'        => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'devotional', $args );
}
add_action( 'init', 'register_devotional_post_type' );

/**
 * Fetch api function for bible verse.
 *
 * @param int $post_id The ID of the post.
 * @return void
 */
function fetch_and_save_devotional_bible_verse( $post_id ) {
	$dotenv = Dotenv\Dotenv::createImmutable( __DIR__ );

	// Build the API endpoint URL for verse of the day.
	$env          = $dotenv->load();
	$api_key      = $env['API_KEY'];
	$endpoint     = 'https://api.scripture.api.bible/v1/bibles/06125adad2d5898a-01/search?query=verse-of-the-day';
	$api_endpoint = $endpoint;

	// Check if it's a devotional post.
	if ( get_post_type( $post_id ) === 'devotional' ) {
		$api_endpoint = $endpoint;
	}

	// Set the request headers.
	$headers = array(
		'Content-Type' => 'application/json',
		'api-key'      => $api_key,
	);

	// Make the API request.
	$response = wp_remote_get( $api_endpoint, array( 'headers' => $headers ) );

	// Parse the API response.
	$data = json_decode( wp_remote_retrieve_body( $response ), true );

	// Check if any verses were found.
	if ( isset( $data['data']['verses'] ) && ! empty( $data['data']['verses'] ) ) {

		// Randomly select a verse.
		$random_verse = $data['data']['verses'][ array_rand( $data['data']['verses'] ) ];

		// Extract the verse and reference details.
		$verse_text = isset( $random_verse['text'] ) ? $random_verse['text'] : '';
		$reference  = isset( $random_verse['reference'] ) ? $random_verse['reference'] : '';

		// Save the verse as custom fields for the devotional post.
		update_post_meta( $post_id, 'bible_verse', $verse_text );
		update_post_meta( $post_id, 'bible_reference', $reference );
	}
}
add_action( 'save_post', 'fetch_and_save_devotional_bible_verse' );
