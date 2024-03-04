<?php
/* -------------------------------------- */
/* -------------------------------------- */
add_shortcode('elements', 'webspeed_elements');
function webspeed_elements($atts) {
	global $post;
	ob_start();

	// define attributes and their defaults
	extract(shortcode_atts(array('grid' => '1', 'gap' => '0', 'type' => 'none', 'class' => 'no-class'), $atts));

	require get_parent_theme_file_path('/inc/grid-gap.php');

/* -------------------------------------- */

	$loop = new WP_Query(array(
		'post_type' => 'elements',
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'webspeeed_element_type',
				'field' => 'slug',
				'terms' => $type,
			),
		),
	)
	);

/* -------------------------------------- */

	if ($loop->have_posts()) {

		echo '<div class="grid' . $grid_class . $gap_class . $type . ' ' . $class . '">';

		while ($loop->have_posts()): $loop->the_post();
			echo '<div class="grid-item element">';
			web_thumbnail();
			the_content();
			web_edit_link();
			echo '</div>';

		endwhile;
		wp_reset_query();
		echo '</div>';
	}

	$myvariable = ob_get_clean();
	return $myvariable;
}
/* -------------------------------------- */
/* -------------------------------------- */