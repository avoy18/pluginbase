<?

/**
 * Fired when the plugin is uninstalled.
 *
 * When populating this file, consider the following flow
 * of control:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * - Run an admin referrer check to make sure it goes through authentication
 * - Verify the output of $_GET makes sense
 * - Repeat with other user roles. Best directly by using the links/query string parameters.
 * - Repeat things for multisite. Once for a single site in the network, once sitewide.
 *
 * This file may be updated more in future version of the Boilerplate; however, this is the
 * general skeleton and outline for how the file should work.
 *
 * For more information, see the following discussion:
 * https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate/pull/123#issuecomment-28541913
 *
 * @package    BasePlugin
 */

// If uninstall not called from WordPress, then exit.
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

// Clear database stored data

// Delete post types data

// foreach ($postTypes as $postType) {
//     $postTypeEntries = get_posts(array('post_type' => $postType, 'numberposts' => -1));

//     foreach ($postTypeEntries as $entry) {
//         wp_delete_post($entry->ID, true);
//     }

// }


// global $wpdb;

// $postTypes = array(); // post type slugs go here

// $theQuery = 'DELETE FROM ' . $wpdb->prefix() . 'posts WHERE post_type IN (' . $postTypes.implode(',') . ')' ;

// $wpdb->query($theQuery);
