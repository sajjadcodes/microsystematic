<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'MICROSYSTEMATIC_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function microsystamtic_scripts_styles() {

	wp_enqueue_style(
		'microsystematic-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'microsystematic-theme-style',
		],
		MICROSYSTEMATIC_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'microsystematic_scripts_styles', 20 );