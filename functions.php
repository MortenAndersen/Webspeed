<?php

add_action('init', function () {
	remove_action('wp_head', 'wp_print_scripts');
	remove_action('wp_head', 'wp_print_head_scripts', 9);
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	add_action('wp_footer', 'wp_print_scripts', 25);
	add_action('wp_footer', 'wp_print_head_scripts', 25);
});

// Theme jQuery fil

function web_scripts() {
	wp_register_script('lightbox', get_template_directory_uri() . '/js/lightbox.js', array('jquery'));
	// Lightbox script skal aktiveres i child-theme!
	wp_register_script('theme-script', get_template_directory_uri() . '/js/starter-min.js', array('jquery'));
	wp_enqueue_script('theme-script');
}
add_action('wp_enqueue_scripts', 'web_scripts');

// ----------------------------------------------------------

// ---------------------------------------------------
// The Excerpt length

function web_custom_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'web_custom_excerpt_length', 999);

// ---------------------------------------------------

if (!function_exists('web_setup')):
	function web_setup() {

		// Fjern elementer i WP
		remove_action('wp_head', 'feed_links_extra', 3);
		remove_action('wp_head', 'feed_links');
		remove_action('wp_head', 'wp_shortlink_wp_head');
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'rest_output_link_wp_head');
		remove_action('wp_head', 'wp_oembed_add_discovery_links');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('admin_print_scripts', 'print_emoji_detection_script');
		remove_action('wp_print_styles', 'print_emoji_styles');
		remove_action('admin_print_styles', 'print_emoji_styles');

		// HTML5
		add_theme_support('html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Logo
		add_theme_support('custom-logo');

		// Title Tag
		add_theme_support('title-tag');

		// Images
		add_theme_support('post-thumbnails');
		add_image_size('webspeed-post', 705, 395, true);

		// Menu
		register_nav_menus(array(
			'main-menu' => __('Main Menu', 'webspeed-domain'),
		));
		// Excerpt in pages
		add_post_type_support('page', 'excerpt');

		// Style and Scripts
		add_theme_support('html5', array('script', 'style'));

	}

	add_action('after_setup_theme', 'web_setup');
endif;

// Sprogfiler
function web_localize_theme() {
	load_theme_textdomain('webspeed-domain', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'web_localize_theme');

// ---------------------------------------------------

//Remove JQuery migrate
function remove_jquery_migrate($scripts) {
	if (!is_admin() && isset($scripts->registered['jquery'])) {
		$script = $scripts->registered['jquery'];

		if ($script->deps) {
			// Check whether the script has any dependencies
			$script->deps = array_diff($script->deps, array(
				'jquery-migrate',
			));
		}
	}
}

add_action('wp_default_scripts', 'remove_jquery_migrate');

// ---------------------------------------------------

function webspeed_thumbnail_remove_class($output) {
	$output = preg_replace('/class=".*?"/', '', $output);
	return $output;
}
add_filter('post_thumbnail_html', 'webspeed_thumbnail_remove_class');

// ---------------------------------------------------
// Contact Form 7

add_filter('wpcf7_load_css', '__return_false');

function rjs_lwp_contactform_css_js() {
	global $post;
	if (is_a($post, 'WP_Post') && has_shortcode($post->post_content, 'contact-form-7')) {
		wp_enqueue_script('contact-form-7');

	} else {
		wp_dequeue_script('contact-form-7');
	}
}
add_action('wp_enqueue_scripts', 'rjs_lwp_contactform_css_js');
// ---------------------------------------------------

// Theme Widget
require get_parent_theme_file_path('/inc/widgets.php');

// Theme Posttype
require get_parent_theme_file_path('/inc/elements.php');
require get_parent_theme_file_path('/inc/taxonomy.php');
require get_parent_theme_file_path('/inc/elements-shortcode.php');

// Theme functions
require get_parent_theme_file_path('/inc/web-functions.php');
require get_parent_theme_file_path('/inc/customizer-header.php');


// For at Theme Adjuster virker med farver
add_action('admin_enqueue_scripts', 'webspeed_backend_scripts');
if (!function_exists('webspeed_backend_scripts')) {
	function webspeed_backend_scripts($hook) {
		wp_enqueue_style('wp-color-picker');
		wp_enqueue_script('wp-color-picker');
	}
}

// Theme shortcode
require get_parent_theme_file_path('/inc/shortcode-child-grid.php');
require get_parent_theme_file_path('/inc/shortcode-child-menu.php');
require get_parent_theme_file_path('/inc/shortcode-post.php');
require get_parent_theme_file_path('/inc/shortcode-post-related.php');
require get_parent_theme_file_path('/inc/shortcode-page.php');

if (class_exists('ACF')) {
	// ACF
	require get_parent_theme_file_path('/inc/design-list.php');
	require get_parent_theme_file_path('/inc/acf.php');
	require get_parent_theme_file_path('/inc/fullwidth-acf.php');
	require get_parent_theme_file_path('/inc/accordion-acf.php');
	require get_parent_theme_file_path('/inc/contact-acf.php');
	require get_parent_theme_file_path('/inc/gutenberg/acf-blocks.php');
}

if (class_exists('WooCommerce')) {
	// WooCommerce
			require get_parent_theme_file_path('/inc/woocommerce-functions.php');
	}

if (class_exists('WooCommerce') && class_exists('ACF')) {
	require get_parent_theme_file_path('/inc/acf-woocommerce.php');
}
