<?php
/**
 * Runtime configuration for a custom post type.
 *
 * @package     PCianes\Module\Custom
 * @since       1.0.0
 * @author      Pablo Cianes
 * @link        https://pablocianes.com
 * @license     GNU-2.0+
 */
namespace PCianes\Module\Custom;

return array(
	/**================================================
	* The post type name.
	*====================================================*/
	'post_type'	=> '',

	/**================================================
	* These are label configuration.
	*====================================================*/
	'labels'	=> array(
		'custom_type'		 => '', // the post type from above.
		'singular_label' 	 => '',
		'plural_label'	 	 => '',
		'in_sentence_label'	 => '', // the label used within a sentece
		'text_domain'	 	 => '',
	),

	/**================================================
	* Supported features por this post type.
	*====================================================*/
	'features'	=> array(
		'base_post_type'		=> 'post',
		'exclude'				=> array(),
		'additional'			=> array(),
	),

	/**================================================
	* Registration arguments.
	*====================================================*/
	'args'		=> array(
		'description'           => '',
		'label'					=> '',
		'labels'                => '', // automatically generate the labels.
		'public'                => true,
		'supports'              => '', // automatically generate the support features.
		'menu_icon'				=> '',
		'has_archive'           => false,			
	),

);