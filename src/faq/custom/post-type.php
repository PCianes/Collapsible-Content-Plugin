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

add_filter( 'add_custom_post_type_runtime_config', __NAMESPACE__ . '\register_faq_custom_post_type' );

/**
 * Add 'FAQ' custom post type
 *
 * @since 1.0.0
 *
 * @param array $config Array of all the custom post type configurations
 *
 * @return $configs
 */
function register_faq_custom_post_type( array $configs) {

	$config = include( COLLAPSIBLE_CONTENT_DIR . 'config/faq/post-type.php');

	$configs[ $config['post_type']] = $config;

	return $configs;
}


add_filter( 'add_custom_post_type_runtime_config', __NAMESPACE__ . '\register_portfolio_custom_post_type' );

/**
 * Add 'FAQ' custom post type
 *
 * @since 1.0.0
 *
 * @param array $config Array of all the custom post type configurations
 *
 * @return $configs
 */
function register_portfolio_custom_post_type( array $configs) {

	$config = array(
	'post_type'	=> 'portfolio',

	'labels'	=> array(
		'post_type'		 	 => 'portfolio',
		'singular_label' 	 => 'portfolio',
		'plural_label'	 	 => 'portfolios',
		'in_sentence_label'	 => 'frecuently asked questions (FAQs)',
		'text_domain'	 	 => FAQ_MODULE_TEXT_DOMAIN,
	),

	'features'	=> array(
		'base_post_type'		=> 'post',
		'exclude'				=> array(
			'excerpt',
			'comments',
			'trackbacks',
			'custom-fields',
			'thumbnail',
		),
		'additional'			=> array(
			'page-attributes',
		),

	),

	'args'		=> array(
		'label'					=> __( 'portfolios', FAQ_MODULE_TEXT_DOMAIN ),
		'description'           => __( 'Frecuently Asked Questions (FAQ)', FAQ_MODULE_TEXT_DOMAIN ),
		'labels'                => '', // automatically generate the labels.
		'supports'              => '', // automatically generate the support features.
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
	),


);
	$configs[ $config['post_type']] = $config;

	return $configs;
}
