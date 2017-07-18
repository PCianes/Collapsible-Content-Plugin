<?php
/**
 * FAQ Module Handler
 *
 * @package     PCianes\Module\FAQ\Custom
 * @since       1.0.0
 * @author      Pablo Cianes
 * @link        https://pablocianes.com
 * @license     GNU-2.0+
 */
namespace PCianes\Module\FAQ\Custom;

add_action( 'init', __NAMESPACE__ . '\register_faq_custom_post_type' );

/**
 * Add 'FAQ' custom post type
 *
 * @since 1.0.0
 *
 * @return void
 */
function register_faq_custom_post_type() {

	$features = get_all_post_type_features( 'post' , array(
		'excerpt',
		'comments',
		'trackbacks',
		'custom-fields',
		'thumbnail',
	));

	$features[] = 'page-attributes';

	$args = array(
		'label'					=> __( 'FAQs', FAQ_MODULE_TEXT_DOMAIN ),
		'description'           => __( 'Frecuently Asked Questions (FAQ)', FAQ_MODULE_TEXT_DOMAIN ),
		'labels'                => get_post_type_labels_config( 'faq', 'FAQ', 'FAQs'),
		'supports'              => $features,
	//	'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'				=> 'dashicons-editor-help',
		'rewrite'				=> array( 'with_front' => false),
	);

	register_post_type( 'faq', $args);
}

/**
 * Get the post type labels configuration
 *
 * @since 1.0.0
 *
 * @param string $post_type
 * @param string $singular_label
 * @param string $plural_label
 *
 * @return array
 */
function get_post_type_labels_config( $post_type, $singular_label, $plural_label ) {

	return array(
		'name'                  => _x( $plural_label, 'Post Type General Name', FAQ_MODULE_TEXT_DOMAIN ),
		'singular_name'         => _x( $singular_label, 'Post Type Singular Name', FAQ_MODULE_TEXT_DOMAIN ),
		'menu_name'             => __( $plural_label, FAQ_MODULE_TEXT_DOMAIN ),
		'name_admin_bar'        => __( $singular_label, FAQ_MODULE_TEXT_DOMAIN ),
		'archives'              => __( 'Item Archives', FAQ_MODULE_TEXT_DOMAIN ),
		'attributes'            => __( 'Item Attributes', FAQ_MODULE_TEXT_DOMAIN ),
		'parent_item_colon'     => __( 'Parent ' . $singular_label . ':', FAQ_MODULE_TEXT_DOMAIN ),
		'all_items'             => __( 'All ' . $plural_label , FAQ_MODULE_TEXT_DOMAIN ),
		'add_new_item'          => __( 'Add New '. $singular_label, FAQ_MODULE_TEXT_DOMAIN ),
		'add_new'               => __( 'Add New', $post_type, FAQ_MODULE_TEXT_DOMAIN ),
		'new_item'              => __( 'New '. $singular_label, FAQ_MODULE_TEXT_DOMAIN ),
		'edit_item'             => __( 'Edit '. $singular_label, FAQ_MODULE_TEXT_DOMAIN ),
		'update_item'           => __( 'Update '. $singular_label, FAQ_MODULE_TEXT_DOMAIN ),
		'view_item'             => __( 'View '. $singular_label, FAQ_MODULE_TEXT_DOMAIN ),
		'view_items'            => __( 'View Items', FAQ_MODULE_TEXT_DOMAIN ),
		'search_items'          => __( 'Search ' . $plural_label, FAQ_MODULE_TEXT_DOMAIN ),
		'not_found'             => __( 'Not found ' . $plural_label, FAQ_MODULE_TEXT_DOMAIN ),
		'not_found_in_trash'    => __( 'Not found in Trash ' . $plural_label, FAQ_MODULE_TEXT_DOMAIN ),
		'featured_image'        => __( 'Featured Image', FAQ_MODULE_TEXT_DOMAIN ),
		'set_featured_image'    => __( 'Set featured image', FAQ_MODULE_TEXT_DOMAIN ),
		'remove_featured_image' => __( 'Remove featured image', FAQ_MODULE_TEXT_DOMAIN ),
		'use_featured_image'    => __( 'Use as featured image', FAQ_MODULE_TEXT_DOMAIN ),
		'insert_into_item'      => __( 'Insert into item', FAQ_MODULE_TEXT_DOMAIN ),
		'uploaded_to_this_item' => __( 'Uploaded to this ' . $singular_label, FAQ_MODULE_TEXT_DOMAIN ),
		'items_list'            => __( 'Items list', FAQ_MODULE_TEXT_DOMAIN ),
		'items_list_navigation' => __( 'Items list navigation', FAQ_MODULE_TEXT_DOMAIN ),
		'filter_items_list'     => __( 'Filter items list', FAQ_MODULE_TEXT_DOMAIN ),
	);
}

/**
 * Get all the post type features for the given post type.
 *
 * @since 1.0.0
 *
 * @param string $post_type Given post type
 * @param array $exclude_features Array of features to exclude
 *
 * @return array
 */
function get_all_post_type_features( $post_type = 'post', $exclude_features = array() ) {
	$configured_features = get_all_post_type_supports( $post_type );
	if ( ! $exclude_features ) {
		return array_keys( $configured_features );
	}
	$features = array();
	foreach ( $configured_features as $feature => $value ) {
		if ( in_array( $feature, $exclude_features ) ) {
			continue;
		}
		$features[] = $feature;
	}
	return $features;
}