<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package _s_foudation
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function _s_foudation_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', '_s_foudation_jetpack_setup' );
