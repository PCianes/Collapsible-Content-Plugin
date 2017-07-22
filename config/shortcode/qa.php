<?php
/**
 * Runtime configuration defaults for the 'qa' shortcode.
 *
 * @package     PCianes\CollapsibleContent\Shortcode
 * @since       1.0.0
 * @author      Pablo Cianes
 * @link        https://pablocianes.com
 * @license     GNU-2.0+
 */
namespace PCianes\CollapsibleContent\Shortcode;

return array(
	/**=================================================
	 * Shortcode name [qa]
	 *==================================================*/
	'shortcode_name' => 'qa',
	/**=================================================
	 * Paths to the view files
	 *==================================================*/
	'view'    => COLLAPSIBLE_CONTENT_DIR . 'src/shortcode/views/qa.php',
	/**=================================================
	 * Defined shortcode default attributes.  Each is
	 * overridable by the author.
	 *==================================================*/
	'defaults' => array(
		'show_icon' => 'dashicons dashicons-arrow-down-alt2',
		'hide_icon' => 'dashicons dashicons-arrow-up-alt2',
		'question' => '',
	),
);