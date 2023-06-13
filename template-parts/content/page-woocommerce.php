<?php
// Banner på woo cat sider
if (is_product_category()) {
	global $wp_query;
	// get the query object
	$cat = $wp_query->get_queried_object();
	// get the thumbnail id user the term_id
	$thumbnail_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
	// get the image URL
	$image = wp_get_attachment_url($thumbnail_id);
	// print the IMG HTML
	if ($image) {
		echo '<div class="top-post-img">';
		echo '<img src="' . $image . '" />';
		echo '</div>';
	}
}

// Top på woo oversigtsider
if (!is_product()) {
	echo '<div class="woo-cat">';
	echo '<div class="wrap">';

	if (class_exists('ACF')) {
		$term_overskrift = get_queried_object();
		$overskrift = get_field('overskrift', $term_overskrift);
		if ($overskrift) {
			echo '<h1>';

			echo $overskrift;
			echo '</h1>';
		} else {
			echo '<h1>';
			woocommerce_page_title();
			echo '</h1>';
		}
	} else {
		echo '<h1>';
		woocommerce_page_title();
		echo '</h1>';
	}

	if (is_shop() && !is_search()) {
		dynamic_sidebar('woo-top');
	}
	do_action('woocommerce_archive_description_webspeed');

	echo '</div>';
	echo '</div>';
}

echo '<main class="woo-page">';

if (!is_product()) {
	echo '<div class="wrap woo-wrap aside-article woo-loop">';
} else {
	echo '<div class="wrap woo-single">';
}

if (!is_product()) {
	echo '<article class="woo-article">';
}

woocommerce_content();

if (class_exists('ACF')) {
	$term = get_queried_object();
	$text = get_field('tekst_nederst', $term);
	if ($text) {
		echo '<div class="text-bottom">';
		echo $text;
		echo '</div>';
	}
}

if (is_shop() && !is_search()) {
	if (is_active_sidebar('woo-bund')) {
		echo '<div class="text-bottom">';
		dynamic_sidebar('woo-bund');
		echo '</div>';
	}
}

if (!is_product()) {
	echo '</article>';
}

if (!is_product()) {
	get_template_part('template-parts/aside/woo-aside', 'left');
}

echo '</div>';
echo '</main>';