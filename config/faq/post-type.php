<?php
/**
 * Runtime configuration for the FAQ custom post type.
 *
 * @package     PCianes\Module\FAQ\Custom
 * @since       1.0.0
 * @author      Pablo Cianes
 * @link        https://pablocianes.com
 * @license     GNU-2.0+
 */
namespace PCianes\Module\FAQ\Custom;

return array(
	'post_type'	=> 'faq',

	'labels'	=> array(
		'post_type'		 	 => 'faq',
		'singular_label' 	 => 'FAQ',
		'plural_label'	 	 => 'FAQs',
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
		'label'					=> __( 'FAQs', FAQ_MODULE_TEXT_DOMAIN ),
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