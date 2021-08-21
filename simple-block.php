<?php
/**
 * Plugin Name:       E Simple Block
 * Description:       Simple WordPress bloock using @wordpress/create-block.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Erick Danzer
 * License:           GPL 2.0
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       e-simple-block
 *
 * @package           e-simple-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function e_simple_block_init() {
	register_block_type( __DIR__ );
}
add_action( 'init', 'e_simple_block_init' );
