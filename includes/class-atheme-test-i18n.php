<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://ridwan-arifandi.com
 * @since      1.0.0
 *
 * @package    Atheme_Test
 * @subpackage Atheme_Test/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Atheme_Test
 * @subpackage Atheme_Test/includes
 * @author     Ridwan Arifandi <orangerdigiart@gmail.com>
 */
class Atheme_Test_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'atheme-test',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
