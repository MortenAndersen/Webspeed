<?php

echo '<main class="page-content">';
if (is_page_template('page-topimg.php')) {
	web_topimg();
	web_front_fokus();
	webspeed_breadcrumb();
	echo '<div class="wrap">';
	echo '<article>';
	while (have_posts()): the_post();
		$show_h1 = get_theme_mod('webspeed_h1');
		if ($show_h1) {
			web_title();
		}
		the_content();
	endwhile;
	echo '</article>';
	echo '</div>';
} elseif (is_page_template('page-normal-titleimg.php')) {
	echo '<div class="wrap">';
	web_small_topimg();
	webspeed_breadcrumb();
	echo '<article>';
	while (have_posts()): the_post();
		$show_h1 = get_theme_mod('webspeed_h1');
		if ($show_h1) {
			web_title();
		}
		the_content();
	endwhile;
	echo '</article>';
	echo '</div>';
} elseif (is_singular('tribe_events')) {

	while (have_posts()): the_post();
		the_content();
	endwhile;

} else {
	web_front_fokus();
	webspeed_breadcrumb();
	echo '<div class="wrap">';
	echo '<article>';
	while (have_posts()): the_post();
		if (class_exists('WooCommerce')) {
			if (!is_checkout() && !is_cart()) {
				web_title();
			}
		} else {
			web_title();
		}
		web_img();
		the_content();
	endwhile;

	if (is_page() && $post->post_parent) {
		web_go_back();
	}

	echo '</article>';
	echo '</div>';
}
echo '</main>';