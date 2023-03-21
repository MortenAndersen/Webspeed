<?php
if (class_exists('ACF')) {

	$term = get_queried_object();
	$image = get_field('billede', $term);

	if ($image) {
		echo '<main class="woo-page top-img">';
		echo '<div class="top-post-img">';
		echo '<img src="' . $image['url'] . '">';
		echo '<div class="wrap-no-pad">';
		echo '<div class="top-caption">';
		echo '<h1>';
		single_term_title();
		echo '</h1>';
		echo '</div>';
		echo '</div>';
		echo '</div>';

		echo '<div class="wrap woo-wrap aside-article woo-term">';
	} else {

		if (!is_product()) {

			echo '<div class="wrap"><h1>';
			woocommerce_page_title();

			echo '</h1>';
			dynamic_sidebar('woo-top');
			echo '</div>';
		}

		echo '<main class="woo-page">';

		if (!is_product()) {
			echo '<div class="wrap woo-wrap aside-article woo-loop">';
		} else {
			echo '<div class="wrap woo-single">';
		}

	}

} else {
	echo '<main class="woo-page x">';
	echo '<div class="wrap wrap-no-pad">';

	echo '</div>';
	echo '<div class="wrap">';
	echo '<h1>';
	single_term_title();
	echo '</h1>';
}

/**
 * Display category image on category archive
 */
add_action('woocommerce_archive_description', 'woocommerce_category_image', 2);
function woocommerce_category_image() {
	if (is_product_category()) {
		global $wp_query;
		$cat = $wp_query->get_queried_object();
		$thumbnail_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
		$image = wp_get_attachment_url($thumbnail_id);
		if ($image) {
			echo '<img src="' . $image . '" alt="' . $cat->name . '" />';

		}
	}
}
if (!is_product()) {
	echo '<article class="woo-article">';
}
if (have_posts()):
	woocommerce_content();
endif;

if (class_exists('ACF')) {
	$term = get_queried_object();
	$text = get_field('tekst_nederst', $term);
	echo '<div class="text-bottom">';
	echo $text;
	echo '</div>';
}
if (!is_product()) {
	echo '</article>';
}

if (!is_product()) {
	get_template_part('template-parts/aside/woo-aside', 'left');
}

echo '</div>';
echo '</main>';