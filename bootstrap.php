<?php
/**
 * Collapsible Content plugin
 *
 * @package     	PCianes\CollapsibleContent
 * @author      	Pablo Cianes
 * @license     	GPL-2.0+
 * @link 			https://pablocianes.com
 *
 * @wordpress-plugin
 * Plugin Name: 	Collapsible content plugin
 * Plugin URI:  	https://github.com/PCianes/Collapsible-Content-Plugin
 * Description: 	Collapsible Content is a WordPress Plugin that shows and hides content.
 * Version:     	1.0.0
 * Author:      	Pablo Cianes
 * Author URI:  	https://pablocianes.com
 * Text Domain: 	collapsible_content
 * Requires WP:		4.8
 * Requires PHP:	5.5
 * License:     	GPL-2.0+
 * License URI: 	http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Collapsible content plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 * 
 * Collapsible content plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Collapsible content plugin. If not, see http://www.gnu.org/licenses/gpl-2.0.txt.
 *
 */

namespace PCianes\CollapsibleContent;

if ( !defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

include( __DIR__ . '/src/shortcode/shortcodes.php');


add_action( 'init', __NAMESPACE__ . '\plugin_launch');

function plugin_launch(){

}