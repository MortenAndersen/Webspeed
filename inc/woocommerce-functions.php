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

//WooCommerce Change Title from H2 -> H3

function webspeed_products_title() {

	echo '<span class="woo-title" itemprop="name">' . get_the_title() . '</span>';

}

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

add_action('woocommerce_shop_loop_item_title', 'webspeed_products_title', 10);

/**
 * Remove "Description" Heading Title @ WooCommerce Single Product Tabs
 */
add_filter('woocommerce_product_description_heading', '__return_null');
add_filter('woocommerce_product_additional_information_heading', '__return_null');

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
			'description' => __('Widget i toppen af shop-forsiden', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget woo-top-col %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title widget-title-woo-top">',
			'after_title' => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name' => __('Woo Bund', 'webspeed-domain'),
			'id' => 'woo-bund',
			'description' => __('Widget i buden af shop-forsiden', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget woo-bund-col %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title widget-title-woo-bund">',
			'after_title' => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name' => __('Woo menu cart', 'webspeed-domain'),
			'id' => 'woo-menu-cart',
			'description' => __('Widget i menu til cart', 'webspeed-domain'),
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
		)
	);
	register_sidebar(
		array(
			'name' => __('Woo menu search', 'webspeed-domain'),
			'id' => 'woo-prod-search',
			'description' => __('Widget i menu til podukt search', 'webspeed-domain'),
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '',
			'after_title' => '',
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
add_action('woo_meta_webspeed', 'woocommerce_show_product_sale_flash', 15);

remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
add_action('woocommerce_archive_description_webspeed', 'woocommerce_taxonomy_archive_description', 10);

// Besked på single produkt
remove_action('woocommerce_before_single_product', 'woocommerce_output_all_notices', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_output_all_notices', 70);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_action('woo_meta_webspeed', 'woocommerce_template_single_meta', 10);

/**
 * Remove product data tabs
 */
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);

function woo_remove_product_tabs($tabs) {

	unset($tabs['description']); // Remove the description tab
	unset($tabs['reviews']); // Remove the reviews tab
	unset($tabs['additional_information']); // Remove the additional information tab

	return $tabs;
}

// Tabs callback function after single content.
add_action('woocommerce_after_single_product_summary', 'woocommerce_product_description_tab', 10);
add_action('woocommerce_after_single_product_summary', 'woocommerce_product_additional_information_tab', 13);
//add_action('woocommerce_after_single_product_summary', 'comments_template', 12);

add_action('woocommerce_after_single_product_summary', 'div_x', 5);
function div_x() {
	echo '<div class="woo-body grid">';
	echo '<div class="woo-decs">';
	if (class_exists('ACF') && get_field('overskrift')) {
		echo '<h1>' . get_field('overskrift') . '</h1>';
	}
}
add_action('woocommerce_after_single_product_summary', 'div_xx', 11);
function div_xx() {
	web_go_back();
	echo '</div>';
}
add_action('woocommerce_after_single_product_summary', 'div_xxx', 14);
function div_xxx() {
	echo '</div>';
}

// Cart page HTML
add_action('woocommerce_before_cart_table', 'div_cart');
function div_cart() {
	echo '<div class="grid cart-div">';
}

add_action('woocommerce_after_cart', 'div_after_cart');
function div_after_cart() {
	echo '</div>';
}

// Pay page HTML
add_action('woocommerce_checkout_before_customer_details', 'div_pay_det', 1);
function div_pay_det() {
	echo '<div class="checkout-spalter">';
}

add_action('woocommerce_checkout_before_order_review_heading', 'div_pay');
function div_pay() {
	echo '<div class="betaling">';
}

add_action('woocommerce_checkout_after_order_review', 'div_after_pay');
function div_after_pay() {
	echo '</div></div>';
}

remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 10);
add_action('woocommerce_after_cart', 'woocommerce_cross_sell_display', 10);

// remove coupon field on the cart page
function disable_coupon_field_on_cart($enabled) {
	if (is_cart()) {
		$enabled = false;
	}
	return $enabled;
}
add_filter('woocommerce_coupons_enabled', 'disable_coupon_field_on_cart');

function disable_shipping_calc_on_cart($show_shipping) {
	if (is_cart()) {
		return false;
	}
	return $show_shipping;
}
add_filter('woocommerce_cart_ready_to_calc_shipping', 'disable_shipping_calc_on_cart', 99);