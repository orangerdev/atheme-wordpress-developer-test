<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://ridwan-arifandi.com
 * @since             1.0.0
 * @package           Atheme_Test
 *
 * @wordpress-plugin
 * Plugin Name:       Atheme Test
 * Plugin URI:        https://ridwan-arifandi.com
 * Description:       For atheme test
 * Version:           1.0.0
 * Author:            Ridwan Arifandi
 * Author URI:        https://ridwan-arifandi.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       atheme-test
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('ATHEME_TEST_VERSION', '1.0.0');
define('ATHEME_TEST_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('ATHEME_TEST_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-atheme-test-activator.php
 */
function activate_atheme_test()
{
  require_once plugin_dir_path(__FILE__) . 'includes/class-atheme-test-activator.php';
  Atheme_Test_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-atheme-test-deactivator.php
 */
function deactivate_atheme_test()
{
  require_once plugin_dir_path(__FILE__) . 'includes/class-atheme-test-deactivator.php';
  Atheme_Test_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_atheme_test');
register_deactivation_hook(__FILE__, 'deactivate_atheme_test');

/**
 * Require composer autoload.
 */
require 'vendor/autoload.php';

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-atheme-test.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_atheme_test()
{

  $plugin = new Atheme_Test();
  $plugin->run();
}
run_atheme_test();
