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

class BasePlugin
{

	function activate(){
		
	}

	function deactivate(){

	}

	function uninstall(){

	}
	
	// __construct(){
	// 	//
	// }
}

if (class_exists('BasePlugin')) {
	$basePlugin = new BasePlugin();
}
