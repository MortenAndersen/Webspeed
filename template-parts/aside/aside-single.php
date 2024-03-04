<?php
echo '<aside class="right-aside">';

dynamic_sidebar('aside-single');

$loop = new WP_Query(array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'category__in' => wp_get_post_categories($post->ID),
	'post__not_in' => array($post->ID),
));

/* -------------------------------------- */

if ($loop->have_posts()) {

	echo '<div class="web-loop-posts grid g-d-1 gap-1">';
	while ($loop->have_posts()): $loop->the_post();
		$classes = get_post_class('', $post->ID);
		echo '<div class="post-loop ' . esc_attr(implode(' ', $classes)) . '">';

		// thumbnail
		if (has_post_thumbnail()) {
			echo '<div class="loop-post-img">';

			echo '<div class="img-zoom">';
			echo '<a href="' . get_the_permalink() . '" aria-label="' . get_the_title() . '">';
			the_post_thumbnail('webspeed-post');
			echo '</a>';
			echo '</div>';

			echo '</div>';
		}
		echo '<div class="loop-post-txt">';
		// Date

		web_post_date();

		// Title

		echo '<h4 class="loop-title"><a href="' . get_the_permalink() . '" aria-label="' . get_the_title() . '">' . get_web_title() . '</a></h4>';

		// the_excerpt

		web_excerpt();

		// Read more

		web_read_more();

		echo '</div>';
		echo '</div>';
	endwhile;
	wp_reset_query();
	echo '</div>';
}

echo '</aside>';