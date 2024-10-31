<?php
/**
 * WP Plugin Info · Get and save plugin information from WordPress API.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @package   eliasis-framework\wp-plugin-info
 * @copyright 2017 - 2018 (c) Josantonius - wp-plugin-info
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/eliasis-framework/wp-plugin-info.git
 * @since     1.0.0
 */

namespace Eliasis\Plugins\WP_Plugin_Info\Model;

use Eliasis\Framework\Model;
use Josantonius\Json\Json;

/**
 * Main model.
 *
 * @since 1.0.0
 */
class Main extends Model {

	/**
	 * Get current plugins information.
	 *
	 * @since 1.0.0
	 *
	 * @param string $file → filepath.
	 *
	 * @return array|false → plugins info
	 */
	public function get_plugins_info( $file ) {

		return Json::fileToArray( $file );
	}

	/**
	 * Set plugins Info.
	 *
	 * @since 1.0.0
	 *
	 * @param array  $plugins → plugins information.
	 * @param string $file    → filepath.
	 *
	 * @return bool true or throw JsonException
	 */
	public function set_plugins_info( $plugins, $file ) {

		return Json::arrayToFile( $plugins, $file );
	}
}
