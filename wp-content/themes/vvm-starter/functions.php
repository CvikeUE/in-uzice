<?php
/**
 * gcus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gcus
 */

function print_pr($array) {
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}


add_action('after_setup_theme', 'vvm_theme_setup');

function vvm_theme_setup(){
   load_theme_textdomain('applic-child', get_stylesheet_directory() . '/languages');
}

if ( ! function_exists( 'vvm_starter_setup' ) ) :
	function vvm_starter_setup() {
		load_theme_textdomain( 'vvm-starter', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'main_navigation' => esc_html__( 'Main Navigation', 'vvm-starter' ),
				'mobile_navigation' => esc_html__( 'Mobile Navigation', 'vvm-starter' ),
				'footer_navigation' => esc_html__( 'Footer Navigation', 'vvm-starter' )
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'vvm_starter_setup' );

// Disable Gutenberg editor
add_filter('use_block_editor_for_post', '__return_false', 10);

// VVM Loader
include('vvm_loader.php');

// Backend
include('backend/index.php');

// Frontend
include('frontend/index.php');
