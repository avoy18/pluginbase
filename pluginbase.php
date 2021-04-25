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

function dummy_plugin_run()
{
    
}

// add_action('admin_enqueue_scripts', 'seoplus_admin_scripts');

// function seoplus_admin_scripts()
// {
//     wp_enqueue_script('jquery-migrate');
// }

add_action('plugins_loaded', 'dummy_plugin_run', 10, 0);
