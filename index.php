<?php
/**
 * Plugin Name: WordPress Management Tool
 * Plugin URI: https://hardycode.com.au/wordpress
 * Description: A plugin for WorkPress that hooks in to Hardy Code's WordPress Management Tool service. The service WordPress Management Tool service enables administrators the ability to monitor all their WordPress installs from one convient place. For more information checkout hardycode.com.au/wordpress.
 * Version: 0.0.3
 * Author: Aaron Heath
 * Author URI: http://aaronheath.com/
 * License: Creative Commons Attribution-ShareAlike 4.0 International License
 * License URI: http://creativecommons.org/licenses/by-sa/4.0/
 */

/**
 * Absolute path of the WordPress install
 */

$basePath = (defined('ABSPATH')) ? ABSPATH : realpath("../../../");

global $wp, $wp_query, $wp_the_query, $wp_rewrite, $wp_did_header;

/**
 * WordPress Core Dependancies
 */

require_once($basePath . '/wp-load.php');
require_once($basePath . '/wp-admin/includes/plugin-install.php');
require_once($basePath . '/wp-admin/includes/plugin.php');
require_once($basePath . '/wp-admin/includes/update.php');

/**
 * Constants
 */

define('WP_USE_THEMES', false);
define('API_URL', "https://hardycode.com.au/tools/wpmt/api"); // Production: hardycode.com.au, Dev: hc
define('OPTION_KEY', "HC_WPMT_KEY");
define('OPTION_STATUS', "HC_WPMT_STATUS");
define('OPTION_REMOTE_STATUS', "HC_WPMT_REMOTE_STATUS");
define('OPTION_URL', "HC_WPMT_PLUGIN_URL");

define("PAGE_TITLE", "WordPress Management Tool by Hardy Code");
define("PAGE_MENU_TITLE", "WPMT");
define("PAGE_CAPABILITY", "manage_options");
define("PAGE_MENU_SLUG", "wordpress-management-tool");
define("PLUGIN_ABS", plugin_dir_path( __FILE__ ));
define("PLUGIN_URL", plugin_dir_url( __FILE__ ));


$basename   = explode("/", __DIR__);
$basename   = end($basename);
define("PLUGIN_BASENAME", $basename."/index.php");

define('CURL_SSL_CHECKS', false);   // This should be set to true when in a production environment

/**
 * WPMT Classes
 */

require_once('classes/key.php');
require_once('classes/info.php');
require_once('classes/api.php');
require_once('classes/plugin.php');
require_once('classes/page.php');
require_once('classes/repo.php');

/**
 * Activation / Deactivation Hooks
 */

register_activation_hook(__FILE__, array("Plugin", "activate"));
register_deactivation_hook(__FILE__, array("Plugin", "disable"));

/**
 * Plugin admin area page hook
 */

add_action('admin_menu', array("Page", "menu"));
