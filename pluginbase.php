<?php

/**
 * @package BasePlugin
 */
/**
 * Plugin Name: Base Plugin
 * Plugin URI: https://base.plugin
 * GitHub Plugin URI: https://github.com/avoy18/pluginbase
 * Description: Plugin starter files
 * Version: 1.0.0
 * Author: Anton Voytenko
 * Author URI: https://avoy.me
 * License: MTI
 */

if (!defined('ABSPATH') && !function_exists('add_action')) {
    die;
}

if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'avoy18' );
$updater->set_repository( 'pluginbase' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();
