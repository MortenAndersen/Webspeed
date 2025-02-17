<?php
/* -------------------------------------- */
/* -------------------------------------- */
add_shortcode('elements', 'webspeed_elements');
function webspeed_elements($atts) {
	global $post;
	ob_start();

	// define attributes and their defaults
	extract(shortcode_atts(array(
		'grid' => '1',
		'gap' => '0',
		'type' => 'none',
		'class' => 'no-class',
		'visning' => 'normal',
		'orderby' => 'menu_order',
		'order' => 'ASC',
	), $atts));

	require get_parent_theme_file_path('/inc/grid-gap.php');

/* -------------------------------------- */

	$loop = new WP_Query(array(
		'post_type' => 'elements',
		'orderby' => $orderby,
		'order' => $order,
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
		if ($visning == 'details') {
			echo '<div class="details">';
				while ($loop->have_posts()): $loop->the_post();
					echo '<details name="det">';
						echo '<summary><strong>' . get_the_title() . '</strong></summary>';
						echo '<div class="details-content">';
							web_thumbnail();
							the_content();
							web_edit_link();
						echo '</div>';
					echo '</details>';
				endwhile;
				wp_reset_query();
			echo '</div>';
		} elseif ($visning == 'menu') {
			
	// Ancher menu
	echo '<nav class="anchor">';
		echo '<ul id="nav">';
			while ($loop->have_posts()): $loop->the_post();
			$id = get_the_ID();
				echo '<li id="id-' . $id . '">';
					echo '<a href="#' . $id . '">' . get_the_title() . '</a>';
				echo '</li>';
			endwhile;
			wp_reset_query();
    echo '</ul>';
	echo '</nav>';
        
	// Ancher menu end

				echo '<div class="grid' . $grid_class . $gap_class . $type . ' ' . $class . '">';
        while ($loop->have_posts()): $loop->the_post();
			$id = get_the_ID();
			echo '<div id="' . $id . '">';
				
				web_thumbnail();
				the_title('<h2>', '</h2>');
				the_content();
				web_edit_link();

			echo '</div>';
		endwhile;
		wp_reset_query();
		echo '</div>';
		}
		
		else {

		echo '<div class="grid' . $grid_class . $gap_class . $type . ' ' . $class . '">';

		while ($loop->have_posts()): $loop->the_post();
			echo '<div class="grid-item element">';
			web_thumbnail();
			the_content();
			web_edit_link();
			echo '</div>';

		endwhile;
		
		echo '</div>';
	}
	wp_reset_query();
	}

	$myvariable = ob_get_clean();
	return $myvariable;
}
/* -------------------------------------- */
/* -------------------------------------- */