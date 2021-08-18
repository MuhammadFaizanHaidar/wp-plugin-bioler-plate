<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.authoruri.com
 * @since      1.0.0
 *
 * @package    Your_Plugin_Slug
 * @subpackage Your_Plugin_Slug/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Your_Plugin_Slug
 * @subpackage Your_Plugin_Slug/includes
 * @author     Author Name <author@gmail.com>
 */
class Your_Plugin_Slug_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'your-plugin-slug',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
