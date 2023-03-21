<?php
function webspeed_add_woocommerce_support() {
	add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'webspeed_add_woocommerce_support');

// Gallery
//add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');

// Wrapper
add_action('woocommerce_before_main_content', 'webspeed_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'webspeed_wrapper_end', 8);

function webspeed_wrapper_start() {
	echo '<div class="wrap woo">';
}

function webspeed_wrapper_end() {
	echo '</div>';
}

// ACF felt nederst på woo kategorisider
if (class_exists('ACF')) {
	add_action('woocommerce_after_main_content', 'webspeed_taxonmy_txt', 5);
	function webspeed_taxonmy_txt() {
		$term = get_queried_object();
		$text = get_field('tekst_nederst', $term);
		echo $text;
	}
}
// fjerner Woo css
add_filter('woocommerce_enqueue_styles', '__return_empty_array');
/**
 * Disable WooCommerce block styles (back-end).
 */
function webspeed_disable_woocommerce_block_editor_styles() {
	wp_deregister_style('wc-block-editor');
	wp_deregister_style('wc-blocks-style');
}
//add_action('enqueue_block_assets', 'webspeed_disable_woocommerce_block_editor_styles', 1, 1);

// Remove the sorting dropdown from Woocommerce
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
// Remove the result count from WooCommerce
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

/**
 * Customize product data tabs
 */
add_filter('woocommerce_product_tabs', 'woo_custom_description_tab', 98);

function woo_custom_description_tab($tabs) {
	$tabs['description']['callback'] = 'woo_custom_description_tab_content'; // Custom description callback
	return $tabs;
}

function woo_custom_description_tab_content() {
	the_content();
}

//WooCommerce Change Title from H2 -> H3

function webspeed_products_title() {

	echo '<span class="woo-title" itemprop="name">' . get_the_title() . '</span>';

}

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

add_action('woocommerce_shop_loop_item_title', 'webspeed_products_title', 10);

// Relaterede overskrift
function webspeed_related_title() {
	echo '<p class="related-title">' . __('Related products', 'woocommerce') . '</p>';
}
remove_action('woocommerce_product_related_products_heading', 'related', 10);
add_action('woocommerce_product_related_products_heading', 'webspeed_related_title', 10);

// Upsell overskrift
function webspeed_upsell_title() {
	echo '<p class="upsell-title">' . __('You may also like&hellip;', 'woocommerce') . '</p>';
}
remove_action('woocommerce_product_upsells_products_heading', 'woocomerce', 10);
add_action('woocommerce_product_upsells_products_heading', 'webspeed_upsell_title', 10);

// Yderliger information overskrift
function webspeed_add_title() {
	echo '<p class="additional_information">' . __('Additional information', 'woocommerce') . ' :</p>';
}
remove_action('woocommerce_product_additional_information_heading', 'woocomerce', 10);
add_action('woocommerce_product_additional_information_heading', 'webspeed_add_title', 10);

// Fjerner title på kategorisider - da den printes direkte i woocommerce.php
add_filter('woocommerce_show_page_title', 'webspeed_hide_shop_page_title');
function webspeed_hide_shop_page_title($title) {
	if (is_product_category()) {
		$title = false;
	}

	return $title;
}

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

add_filter('woocommerce_get_image_size_thumbnail', function ($size) {
	return array(
		'width' => 420,
		'height' => 560,
		'crop' => 0,
	);
});

function webspeed_woo_widgets_init() {
	// Woo Aside
	register_sidebar(
		array(
			'name' => __('Woo Aside', 'webspeed-domain'),
			'id' => 'woo-aside',
			'description' => __('Widget til venstre i Woo', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget woo-aside-col %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title widget-title-woo-aside">',
			'after_title' => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name' => __('Woo Top', 'webspeed-domain'),
			'id' => 'woo-top',
			'description' => __('Widget i top af Woo', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget woo-top-col %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title widget-title-woo-top">',
			'after_title' => '</h4>',
		)
	);
}

add_action('widgets_init', 'webspeed_woo_widgets_init');

add_filter('woocommerce_show_page_title', '__return_false');

// HTML - div on single product
add_action('woocommerce_before_single_product_summary', 'single_div_start', 5);
function single_div_start() {
	echo '<div class="grid woo-img-sum">';
}

add_action('woocommerce_after_single_product_summary', 'single_div_end', 5);
function single_div_end() {
	echo '</div>';
}

remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_show_product_sale_flash', 2);