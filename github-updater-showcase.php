<?php
/**
 * GitHub Updater Showcase
 *
 * A demo plugin showing how to integrate the github updater
 *
 * @package   GitHub_Updater_Showcase
 * @author    Brad Vincent <bradvin@gmail.com>
 * @license   GPL-2.0+
 * @link      http://themergency.com
 * @copyright 2013 Brad Vincent
 *
 * @wordpress-plugin
 * Plugin Name:       GitHub Updater Showcase
 * Plugin URI:        http://themergency.com
 * Description:       A demo plugin showing how to integrate the github updater
 * Version:           0.0.2
 * Author:            Brad Vincent
 * Author URI:        http://themergency.com
 * Text Domain:       github-updater-showcase
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/bradvin/github-updater-showcase
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-github-updater-showcase.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
register_activation_hook( __FILE__, array( 'GitHub_Updater_Showcase', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'GitHub_Updater_Showcase', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'GitHub_Updater_Showcase', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * TODO:
 *
 * - replace `class-plugin-admin.php` with the name of the plugin's admin file
 * - replace Plugin_Name_Admin with the name of the class defined in
 *   `class-plugin-name-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-github-updater-showcase-admin.php' );
	add_action( 'plugins_loaded', array( 'GitHub_Updater_Showcase_Admin', 'get_instance' ) );

}
