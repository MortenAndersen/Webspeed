<?php

// Top på woo oversigtsider
if (!is_product()) {
	echo '<div class="wrap">';
	echo '<h1>';
	woocommerce_page_title();
	echo '</h1>';
	if (is_shop() && !is_search()) {
		dynamic_sidebar('woo-top');
	}
	do_action('woocommerce_archive_description_webspeed');
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