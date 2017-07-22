<?php
/**
 * Runtime configuration for the Topic taxonomy
 *
 * @package     PCianes\Module\FAQ
 * @since       1.0.0
 * @author      Pablo Cianes
 * @link        https://pablocianes.com
 * @license     GNU-2.0+
 */
namespace PCianes\Module\FAQ;

return array(
	/**================================================
	* The taxonomy name.
	*====================================================*/
	'taxonomy'	=> 'topic',

	/**================================================
	* These are label configuration.
	*====================================================*/
	'labels'	=> array(
		'custom_type'		 => 'topic',
		'singular_label' 	 => 'Topic',
		'plural_label'	 	 => 'Topics',
		'in_sentence_label'	 => 'topics',
		'text_domain'	 	 => FAQ_MODULE_TEXT_DOMAIN,
		'specific_labels'	 => array(),
	),
	/**================================================
	* These are the arguments for registering the taxonomy.
	*====================================================*/
	'args'		=> array(
		'label'             => __( 'Topics', FAQ_MODULE_TEXT_DOMAIN ),
		'labels'            => '', // automatically generate the labels.
		'hierarchical'      => true,
		'show_admin_column' => true,
		'public'            => true,
		'show_ui'           => true,
	//	'rewrite'			=> array( 'with_front' => false),
	),
	/**================================================
	* These are the post types to bind the taxonomy to.
	*====================================================*/
	'post_types'			=> array( 'faq' ),


);