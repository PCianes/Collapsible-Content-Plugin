<?php
/**
 * Plugin Handler
 *
 * @package     PCianes\CollapsibleContent
 * @since       1.2.0
 * @author      Pablo Cianes
 * @link        https://pablocianes.com
 * @license     GNU-2.0+
 */
namespace PCianes\CollapsibleContent;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );

/**
 * Enqueue the plugin assets (scripts and styles)
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_assets() {
	wp_enqueue_style('dashicons');
	wp_enqueue_script(
		'collapsible-content-plugin-script', 
		COLLAPSIBLE_CONTENT_URL . 'assets/dist/js/jquery.project.min.js',
		array('jquery'),
		'1.0.0',
		true
	);

//  We don´t need to pass parameters from PHP to JS because of we have the data in html like data-show-icon
//	$scripts_parameters = array(
//		'showIcon' => 'dashicons dashicons-arrow-down-alt2',
//		'hideIcon' => 'dashicons dashicons-arrow-up-alt2',
//	);

// wp_localize_script( 'collapsible-content-plugin-script', 'collapsibleContentParameters', $scripts_parameters );
// In this case, the variable 'collapsibleContentParameters' is in global scope for DOM
}

/**
 * Autoload plugin files
 *
 * @since 1.2.0
 *
 * @return void
 */
function autoload() {

	$files = array(
		'custom/module.php',
		'shortcode/shortcodes.php',
		'faq/module.php',
	);

	foreach( $files as $file ){	
		include( __DIR__ . '/'. $file);
	}

}

autoload();