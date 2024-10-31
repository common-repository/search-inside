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

use Eliasis\Complement\Type\Plugin;
use Eliasis\Framework\App;

$root_path = Plugin::WP_Plugin_Info()->getOption( 'path', 'root' );

return [
	'path' => [
		'components' => $root_path . 'src/template/components/',
		'data'       => $root_path . 'src/data/',
	],
];
