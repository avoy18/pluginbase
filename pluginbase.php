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

define('BASE_PLUGIN_VERSION', '1.0.0');

define('BASE_PLUGIN_PREFIX', 'base_plugin_');

define('BASE_PLUGIN_PATH', plugin_dir_path(__FILE__));


class BasePlugin
{
	function __construct()
	{
	}

	function activate()
	{
		$this->cpt();
		flush_rewrite_rules();
	}

	function deactivate()
	{
		flush_rewrite_rules();
	}

	function cpt()
	{
		$postTypes = array();

		foreach ($postTypes as $postType) {
			$args = array(
				'public'    => true,
				'menu_icon' => $postType['icon'],
				'rewrite'   => array('slug' => $postType['slug']),
				'with_front'          => false, // This is optional but just in case your posts are set to /blog/post-name this will make it /post-name for your custom post type
				'publicly_queryable' => isset($postType['publicly_queryable']) ? $postType['publicly_queryable'] : true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'show_in_admin_bar'  => true,
				'show_in_rest'       => isset($postType['show_in_rest']) ? $postType['show_in_rest'] : false,
				'hierarchical'       => true,
				'has_archive'        => false,
				'taxonomies' => !empty($postType['taxonomies']) ? $postType['taxonomies'] : array(),
				'supports'  => !empty($postType['supports']) ? $postType['supports'] : array('title', 'excerpt', 'thumbnail', 'editor', 'revisions'),
				'labels'    => array(
					'name'                  => __($postType['plural'], BASE_PLUGIN_PREFIX),
					'singular_name'         => __($postType['single'], BASE_PLUGIN_PREFIX),
					'menu_name'             => __($postType['plural'], BASE_PLUGIN_PREFIX),
					'name_admin_bar'        => __($postType['single'], BASE_PLUGIN_PREFIX),
					'add_new'               => __('Add New ', BASE_PLUGIN_PREFIX),
					'add_new_item'          => __('Add New ' . $postType['single'], BASE_PLUGIN_PREFIX),
					'new_item'              => __('New ' . $postType['single'], BASE_PLUGIN_PREFIX),
					'edit_item'             => __('Edit ' . $postType['single'], BASE_PLUGIN_PREFIX),
					'view_item'             => __('View ' . $postType['single'], BASE_PLUGIN_PREFIX),
					'featured_image'        => __($postType['single'] . ' Cover Image', BASE_PLUGIN_PREFIX),
					'archives'              => __($postType['single'] . ' archives', BASE_PLUGIN_PREFIX),
					'insert_into_item'      => __('Insert into ' . $postType['single'], BASE_PLUGIN_PREFIX),
					'uploaded_to_this_item' => __('Uploaded to this ' . $postType['single'], BASE_PLUGIN_PREFIX),
					'items_list_navigation' => __($postType['plural'] . ' list navigation', BASE_PLUGIN_PREFIX),
					'items_list'            => __($postType['plural'] . ' list', BASE_PLUGIN_PREFIX),
				)
			);
			register_post_type($postType['name'], $args);
		}
	}

	function admin_enqueue()
	{
		wp_enqueue_style(BASE_PLUGIN_PREFIX . '-styles', BASE_PLUGIN_PATH . '/assets/pluginbase.css', array(), BASE_PLUGIN_VERSION, 'all');
		wp_enqueue_script(BASE_PLUGIN_PREFIX . '-scripts', BASE_PLUGIN_PATH . '/assets/pluginbase.js', array(), BASE_PLUGIN_VERSION, true);
	}
}

if (class_exists('BasePlugin')) {
	$basePlugin = new BasePlugin();

	register_activation_hook(__FILE__, array($basePlugin, 'activate'));
	register_deactivation_hook(__FILE__, array($basePlugin, 'deactivate'));

	add_action('init', array($basePlugin, 'cpt'));
	add_action('admin_enqueue_scripts', array($basePlugin, 'admin_enqueue'));
}
