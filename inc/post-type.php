<?php 

// Posttype Elements

add_action( 'init', 'create_posttype_webspeed_elements' );

	function create_posttype_webspeed_elements() {
		 register_post_type(
	    	'elements',
	    	array(
	    		'labels' => array(
	    			'name' => __('Elements', 'webspeed-domain'),
	    			'singular_name' => __('Element', 'webspeed-domain')
	    		),
	    		'public' => true,
	    		'publicly_queryable' => false,
	    		'menu_icon' => 'dashicons-format-gallery',
	    		'supports' => array(
	    			'title',
	    			'editor',
	    			'thumbnail',
	    			'page-attributes'
	    		),
	    		'show_in_rest' => true,
	    		'rewrite' => array(
	    			'slug' => 'element'
	    		),
	    	)
	    );
	}

function posttype_function_webspeed_elements() {
	create_posttype_webspeed_elements();
}