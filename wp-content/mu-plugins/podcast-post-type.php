<?php
/**
 * Plugin Name: Podcast Post Type
 * Description: Custom post type for podcast content.
 * Version: 1.0
 * Author: Caleb Matteis
 * Text Domain: podcast-post-type
 *
 * @package podcast-post-type
 */
function create_podcast_post_type() {
	$labels = array(
		'name'                  => 'Podcasts',
		'singular_name'         => 'Podcast',
		'menu_name'             => 'Podcasts',
		'add_new'               => 'Add New',
		'add_new_item'          => 'Add New Podcast',
		'edit_item'             => 'Edit Podcast',
		'new_item'              => 'New Podcast',
		'view_item'             => 'View Podcast',
		'search_items'          => 'Search Podcasts',
		'not_found'             => 'No podcasts found',
		'not_found_in_trash'    => 'No podcasts found in trash',
		'parent_item_colon'     => 'Parent Podcast:',
		'all_items'             => 'All Podcasts',
		'archives'              => 'Podcast Archives',
		'insert_into_item'      => 'Insert into podcast',
		'uploaded_to_this_item' => 'Uploaded to this podcast',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'filter_items_list'     => 'Filter podcasts list',
		'items_list_navigation' => 'Podcasts list navigation',
		'items_list'            => 'Podcasts list',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'podcast' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-microphone',
		'show_in_rest'       => true,
		'taxonomies'         => array( 'category', 'post_tag' ),
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'podcast', $args );
}
add_action( 'init', 'create_podcast_post_type' );

/**
 * Adds a custom meta box for podcast information.
 *
 * This function adds a meta box to the WordPress admin interface for the "podcast" post type.
 * The meta box allows users to input and save additional information related to podcasts.
 *
 * @since 1.0.0
 */
function add_podcast_meta_box() {
	add_meta_box(
		'podcast_player',
		'Embedded Player',
		'render_podcast_player_meta_box',
		'podcast',
		'normal',
		'default'
	);

	add_meta_box(
		'podcast_summary',
		'Summary of Episode',
		'render_podcast_summary_meta_box',
		'podcast',
		'normal',
		'default'
	);

	add_meta_box(
		'podcast_notes',
		'Notes',
		'render_podcast_notes_meta_box',
		'podcast',
		'normal',
		'default'
	);

	add_meta_box(
		'podcast_verses',
		'Verses Mentioned',
		'render_podcast_verses_meta_box',
		'podcast',
		'normal',
		'default'
	);

	add_meta_box(
		'podcast_short_description',
		'Short Description',
		'render_short_description_meta_box',
		'podcast',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'add_podcast_meta_box' );

/**
 * Render the meta box for the embedded player.
 *
 * This function displays a meta box for the podcast custom post type,
 * allowing the user to input the embedded player code for the episode.
 *
 * @since 1.0.0
 *
 * @param WP_Post $post The current post object.
 */
function render_podcast_player_meta_box( $post ) {
	$embedded_player = get_post_meta( $post->ID, 'embedded_player', true );
	?>
	<label for="embedded_player">Embedded Player:</label>
	<textarea name="embedded_player" id="embedded_player" style="width: 100%;" rows="5"><?php echo esc_textarea( $embedded_player ); ?></textarea>
	<?php
}

/**
 * Render the meta box for the summary of the episode.
 *
 * This function displays a meta box for the podcast custom post type,
 * allowing the user to input a summary of the episode.
 *
 * @since 1.0.0
 *
 * @param WP_Post $post The current post object.
 */
function render_podcast_summary_meta_box( $post ) {
	$summary = get_post_meta( $post->ID, 'podcast_summary', true );
	?>
	<label for="podcast_summary">Summary of Episode:</label>
	<textarea name="podcast_summary" id="podcast_summary" style="width: 100%;" rows="5"><?php echo esc_textarea( $summary ); ?></textarea>
	<?php
}

/**
 * Render the meta box for notes of the episode.
 *
 * This function displays a meta box for the podcast custom post type,
 * allowing the user to input notes for the episode.
 *
 * @since 1.0.0
 *
 * @param WP_Post $post The current post object.
 */
function render_podcast_notes_meta_box( $post ) {
	$notes = get_post_meta( $post->ID, 'podcast_notes', true );
	?>
	<label for="podcast_notes">Notes:</label>
	<textarea name="podcast_notes" id="podcast_notes" style="width: 100%;" rows="5"><?php echo esc_textarea( $notes ); ?></textarea>
	<?php
}

/**
 * Render the meta box for verses mentioned in the episode.
 *
 * This function displays a meta box for the podcast custom post type,
 * allowing the user to input verses mentioned in the episode.
 *
 * @since 1.0.0
 *
 * @param WP_Post $post The current post object.
 */
function render_podcast_verses_meta_box( $post ) {
	$verses = get_post_meta( $post->ID, 'podcast_verses', true );
	?>
	<label for="podcast_verses">Verses Mentioned:</label>
	<textarea name="podcast_verses" id="podcast_verses" style="width: 100%;" rows="5"><?php echo esc_textarea( $verses ); ?></textarea>
	<?php
}


/**
 * Render the meta box for the short description.
 *
 * This function displays a meta box for the podcast custom post type,
 * allowing the user to input a short description for the episode.
 *
 * @since 1.0.0
 *
 * @param WP_Post $post The current post object.
 */
function render_short_description_meta_box( $post ) {
	$short_description = get_post_meta( $post->ID, 'podcast_short_description', true );
	?>
	<label for="short_description">Short Description:</label>
	<textarea name="podcast_short_description" id="short_description" style="width: 100%;" rows="5"><?php echo esc_textarea( $short_description ); ?></textarea>
	<?php
}


/**
 * Save podcast meta data.
 *
 * This function saves the podcast meta data when the post is saved or updated.
 *
 * @since 1.0.0
 *
 * @param int $post_id The ID of the post being saved.
 */
function save_podcast_meta( $post_id ) {

	// Define custom allowed tags and attributes.
	$allowed_tags = array(
		'iframe' => array(
			'src'             => true,
			'width'           => true,
			'height'          => true,
			'frameborder'     => true,
			'allowfullscreen' => true,
		),
	);

	if ( isset( $_POST['embedded_player'] ) ) {
		// Sanitize the embedded_player field.
		$embedded_player = wp_kses( $_POST['embedded_player'], $allowed_tags );

		// Update the post meta.
		update_post_meta( $post_id, 'embedded_player', $embedded_player );
	}

	if ( isset( $_POST['podcast_summary'] ) ) {
		update_post_meta( $post_id, 'podcast_summary', wp_kses_post( $_POST['podcast_summary'] ) );
	}

	if ( isset( $_POST['podcast_notes'] ) ) {
		update_post_meta( $post_id, 'podcast_notes', wp_kses_post( $_POST['podcast_notes'] ) );
	}

	if ( isset( $_POST['podcast_verses'] ) ) {
		update_post_meta( $post_id, 'podcast_verses', wp_kses_post( $_POST['podcast_verses'] ) );
	}

	if ( isset( $_POST['podcast_short_description'] ) ) {
		update_post_meta( $post_id, 'podcast_short_description', wp_kses_post( $_POST['podcast_short_description'] ) );
	}
}
add_action( 'save_post_podcast', 'save_podcast_meta' );
