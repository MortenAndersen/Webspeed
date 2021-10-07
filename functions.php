<?php

add_action('init', function () {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
});


// Theme jQuery fil
function web_scripts()
{
    wp_register_script('theme-script', get_template_directory_uri() . '/js/starter-min.js', array('jquery'));
    wp_enqueue_script('theme-script');


}
add_action('wp_enqueue_scripts', 'web_scripts');


// ---------------------------------------------------
// The Excerpt length

function web_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'web_custom_excerpt_length', 999 );


// ---------------------------------------------------

if (!function_exists('web_setup')):
    function web_setup()
{

        // Fjern elementer i WP
        remove_action( 'wp_head', 'feed_links_extra', 3 );
        remove_action( 'wp_head', 'feed_links' );
        remove_action( 'wp_head', 'wp_shortlink_wp_head' );
        remove_action( 'wp_head', 'rsd_link' );
        remove_action( 'wp_head', 'rest_output_link_wp_head' );
        remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
        remove_action( 'wp_head', 'wlwmanifest_link' );
        remove_action( 'wp_head', 'wp_generator' );
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
        remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
        remove_action( 'admin_print_styles', 'print_emoji_styles' );

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
        add_image_size('web-content-image', 2000, 1200, true);

        // Shortkoder i widget
        add_filter('widget_text', 'do_shortcode');

        // Menu
        register_nav_menus(array(
            'main-menu' => __('Main Menu', 'webspeed-domain'),
        ));

    }
    add_action('after_setup_theme', 'web_setup');
endif;

// Sprogfiler
function web_localize_theme() {
  load_theme_textdomain( 'webspeed-domain', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'web_localize_theme' );


// ---------------------------------------------------

// Remove jQuery Migrate Script from header and Load jQuery from Google API
function crunchify_stop_loading_wp_embed_and_jquery() {
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
        //wp_deregister_script('jquery');  // Bonus: remove jquery too if it's not required
    }
}
add_action('init', 'crunchify_stop_loading_wp_embed_and_jquery');



//Remove JQuery migrate
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        
        if ($script->deps) { // Check whether the script has any dependencies
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}

add_action('wp_default_scripts', 'remove_jquery_migrate');
// ---------------------------------------------------

// Theme Widget
require get_parent_theme_file_path('/inc/widgets.php');

// Theme Posttype
require get_parent_theme_file_path('/inc/post-type.php');
require get_parent_theme_file_path('/inc/taxonomy.php');
require get_parent_theme_file_path('/inc/post-type-shortcode.php');

// Theme functions
require get_parent_theme_file_path('/inc/web-functions.php');

// Theme shortcode
require get_parent_theme_file_path('/inc/shortcode.php');

if( class_exists('ACF') ) {
    // ACF
    require get_parent_theme_file_path('/inc/acf.php');
}