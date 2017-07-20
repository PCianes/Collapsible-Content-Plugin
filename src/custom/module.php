<?php
/**
 * Custom Module Handler - bootstrap file for the module.
 *
 * @package     PCianes\Module\Custom
 * @since       1.0.0
 * @author      Pablo Cianes
 * @link        https://pablocianes.com
 * @license     GNU-2.0+
 */
namespace PCianes\Module\Custom;

define( 'CUSTOM_MODULE_DIR', __DIR__ );

/**
 * Autoload module files
 *
 * @since 1.0.0
 *
 * @return void
 */
function autoload() {

	$files = array(
		'label-generator.php',
		'post-type.php',
		'shortcode.php',
		'taxonomy.php',
	);

	foreach( $files as $file ){	
		include( __DIR__ . '/'. $file);
	}

}

autoload();