<?php
if (class_exists('ACF')) {
	echo '<aside class="left-aside">';
	dynamic_sidebar('aside-left');
	echo wp_kses_post(get_field('aside_left'));
	echo '</aside>';
} else {
	echo '<aside class="left-aside">';

	if (get_post_meta(get_the_ID(), 'aside-left', true)) {
		echo '<div class="widget aside-widget meta-field">';
		echo get_post_meta(get_the_ID(), 'aside-left', true);
		echo '</div>';
	}

	if (get_post_meta(get_the_ID(), 'shortcode-left', true)) {
		$shortcode = get_post_meta(get_the_ID(), 'shortcode-left', true);
		echo do_shortcode("{$shortcode}");
	}
	dynamic_sidebar('aside-left');
	echo '</aside>';
}