<?php

// Posttype Elements

function create_posttype_webspeed_elements() {
	register_post_type(
		'elements',
		array(
			'labels' => array(
				'name' => __('Elements', 'webspeed-domain'),
				'singular_name' => __('Element', 'webspeed-domain'),
			),
			'public' => true,
			'show_in_admin_bar' => false,
			'show_in_nav_menus' => false,
			'publicly_queryable' => false,
			'query_var' => false,
			'exclude_from_search' => true,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'page-attributes',
			),
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'element',
			),
		)
	);
}

add_action('init', 'create_posttype_webspeed_elements');
