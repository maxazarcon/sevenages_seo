<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://maxazarcon.com/
 * @since             1.0.0
 * @package           Sevenages_seo
 *
 * @wordpress-plugin
 * Plugin Name:       Seven Ages SEO
 * Plugin URI:        https://github.com/soulexpression/sevenages_seo
 * Description:       Adds Google Analytics, Facebook Pixels, and Facebook tags
 * Version:           1.0.0
 * Author:            Max Azarcon
 * Author URI:        http://maxazarcon.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sevenages_seo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sevenages_seo-activator.php
 */
function activate_sevenages_seo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sevenages_seo-activator.php';
	Sevenages_seo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sevenages_seo-deactivator.php
 */
function deactivate_sevenages_seo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sevenages_seo-deactivator.php';
	Sevenages_seo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sevenages_seo' );
register_deactivation_hook( __FILE__, 'deactivate_sevenages_seo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sevenages_seo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sevenages_seo() {

	$plugin = new Sevenages_seo();
	$plugin->run();

}
run_sevenages_seo();
