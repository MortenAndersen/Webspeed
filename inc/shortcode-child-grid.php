<?php
// Child pages
// kunne bruge dette som inspiration
// https://wordpress.com/support/list-pages-shortcode/

add_shortcode('child-grid', 'child_grid');
function child_grid($atts) {
	global $post;
	ob_start();

	// define attributes and their defaults
	extract(shortcode_atts(
		array(
			'grid' => '2',
			'gap' => '2',
			'class' => 'no-class',
			'number' => '999',
			'offset' => '0',
			'img' => 'yes',
			'title' => 'yes',
			'excerpt' => 'yes',
			'read_more' => 'yes',
			'slider' => 'no-slider',
			'orderby' => 'menu_order',
			'order' => 'ASC',
		), $atts));

	require get_parent_theme_file_path('/inc/grid-gap.php');

	if ($slider != 'no-slider') {
		echo '<div class="Xoversigt ' . $slider . ' ' . $class . '">';
	} else {
		echo '<div class="oversigt grid' . $grid_class . $gap_class . $class . '">';
	}

	$args = array(
		'post_parent' => $post->ID,
		'post_type' => 'page',
		'posts_per_page' => $number,
		'offset' => $offset,
		'orderby' => $orderby,
		'order' => $order,
	);

	$child_query = new WP_Query($args);

	while ($child_query->have_posts()):
		$child_query->the_post();
		echo '<div class="post-loop">';
		if ($img == 'yes' && has_post_thumbnail()) {
			echo '<div class="loop-post-img">';
			if ($slider != 'no-slider') {
				web_thumbnail_link_no_lazy();
			} else {
				web_thumbnail_link();
			}
			echo '</div>';
		}
		echo '<div class="loop-post-txt">';
		if ($title == 'yes') {
			echo '<h3><a href="' . get_the_permalink() . '" title="' . get_clean_web_title() . '" aria-label="' . get_clean_web_title() . '">' . get_web_title() . '</a></h3>';
		}

		// the_excerpt
		if ($excerpt == 'yes') {
			web_excerpt();
		}

		// Read more
		if ($read_more == 'yes') {
			web_read_more();
		}

		web_edit_link();
		echo '</div>';
		echo '</div>';
	endwhile;

	wp_reset_postdata();

	echo '</div>';

	$myvariable = ob_get_clean();
	return $myvariable;
}
