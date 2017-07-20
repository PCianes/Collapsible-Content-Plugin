<?php
/**
 * Custom label Handler for post type and taxonomy
 *
 *
 * @package     PCianes\Module\Custom
 * @since       1.0.0
 * @author      Pablo Cianes
 * @link        https://pablocianes.com
 * @license     GNU-2.0+
 */
namespace PCianes\Module\Custom;

/**
 * Generate the labels for either a taxonomy or post type.
 *
 * @since 1.0.0
 *
 * @param array $config Array of runtime configuration parameters.
 *
 * @return array
 */
function generate_the_custom_labels( array $config, $custom_type = 'post_type' ) {
	
	$labels = array(
		'name'                  => _x( $config['plural_label'], 'Post Type General Name', $config['text_domain'] ),
		'singular_name'         => _x( $config['singular_label'], 'Post Type Singular Name', $config['text_domain'] ),
		'menu_name'             => __( $config['plural_label'], $config['text_domain'] ),
		'name_admin_bar'        => __( $config['singular_label'], $config['text_domain'] ),
		'archives'              => __( 'Item Archives', $config['text_domain'] ),
		'attributes'            => __( 'Item Attributes', $config['text_domain'] ),
		'parent_item_colon'     => __( 'Parent ' . $config['singular_label'] . ':', $config['text_domain'] ),
		'all_items'             => __( 'All ' . $config['plural_label'] , $config['text_domain'] ),
		'add_new_item'          => __( 'Add New '. $config['singular_label'], $config['text_domain'] ),
		'add_new'               => __( 'Add New', $config['post_type'], $config['text_domain'] ),
		'new_item'              => __( 'New '. $config['singular_label'], $config['text_domain'] ),
		'edit_item'             => __( 'Edit '. $config['singular_label'], $config['text_domain'] ),
		'update_item'           => __( 'Update '. $config['singular_label'], $config['text_domain'] ),
		'view_item'             => __( 'View '. $config['singular_label'], $config['text_domain'] ),
		'view_items'            => __( 'View Items', $config['text_domain'] ),
		'search_items'          => __( 'Search ' . $config['plural_label'], $config['text_domain'] ),
		'not_found'             => __( 'No ' . config['in_sentence_label'] . 'found.', $config['text_domain'] ),
		'not_found_in_trash'    => __( 'No ' . config['in_sentence_label'] . 'found in Trash.', $config['text_domain'] ),
		'featured_image'        => __( 'Featured Image', $config['text_domain'] ),
		'set_featured_image'    => __( 'Set featured image', $config['text_domain'] ),
		'remove_featured_image' => __( 'Remove featured image', $config['text_domain'] ),
		'use_featured_image'    => __( 'Use as featured image', $config['text_domain'] ),
		'insert_into_item'      => __( 'Insert into item', $config['text_domain'] ),
		'uploaded_to_this_item' => __( 'Uploaded to this ' . $config['singular_label'], $config['text_domain'] ),
		'items_list'            => __( 'Items list', $config['text_domain'] ),
		'items_list_navigation' => __( 'Items list navigation', $config['text_domain'] ),
		'filter_items_list'     => __( 'Filter items list', $config['text_domain'] ),
	);

	return $labels;
}