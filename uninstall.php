<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   GitHub_Updater_Showcase
 * @author    Brad Vincent <bradvin@gmail.com>
 * @license   GPL-2.0+
 * @link      http://themergency.com
 * @copyright 2013 Brad Vincent
 */

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// TODO: Define uninstall functionality here