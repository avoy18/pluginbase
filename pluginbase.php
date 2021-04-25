<?php

/**
 * @package BasePlugin
 */
/**
 * Plugin Name: Base Plugin
 * Plugin URI: https://base.plugin
 * Description: Plugin starter files
 * Version: 1.0.0
 * Author: Anton Voytenko
 * Author URI: https://avoy.me
 * License: MTI
 */

if (!defined('ABSPATH') && !function_exists('add_action')) {
    die;
}

/**
 * Selectively uncomment the sections below to enable updates with WP Plugin Update Server.
 *
 * WARNING - READ FIRST:
 * Before deploying the plugin or theme, make sure to change the following value
 * - https://your-update-server.com  => The URL of the server where WP Plugin Update Server is installed
 * - $prefix_updater                 => Replace "prefix" in this variable's name with a unique plugin prefix
 *
 * @see https://github.com/froger-me/wp-package-updater
 **/

require_once plugin_dir_path(__FILE__) . 'lib/wp-package-updater/class-wp-package-updater.php';

/** Enable plugin updates with license check **/
// $prefix_updater = new WP_Package_Updater(
// 	'https://your-update-server.com',
// 	wp_normalize_path( __FILE__ ),
// 	wp_normalize_path( plugin_dir_path( __FILE__ ) ),
// 	true
// );

/** Enable plugin updates without license check **/
$prefix_updater = new WP_Package_Updater(
	'https://your-update-server.com',
	wp_normalize_path( __FILE__ ),
	wp_normalize_path( plugin_dir_path( __FILE__ ) )
);

/* ================================================================================================ */

function dummy_plugin_run()
{
    
}

// add_action('admin_enqueue_scripts', 'seoplus_admin_scripts');

// function seoplus_admin_scripts()
// {
//     wp_enqueue_script('jquery-migrate');
// }

add_action('plugins_loaded', 'dummy_plugin_run', 10, 0);
