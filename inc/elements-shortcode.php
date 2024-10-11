<?php
/* -------------------------------------- */
/* -------------------------------------- */
add_shortcode('elements', 'webspeed_elements');
function webspeed_elements($atts) {
	global $post;
	ob_start();

	// define attributes and their defaults
	extract(shortcode_atts(array('grid' => '1', 'gap' => '0', 'type' => 'none', 'class' => 'no-class', 'visning' => 'normal'), $atts));

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
		if ($visning == 'details') {
			echo '<div class="details">';
				while ($loop->have_posts()): $loop->the_post();
					echo '<details>';
						echo '<summary>' . get_the_title() . '</summary>';
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
				echo '<p><a href="#nav" title="Scroll op til menuen"><svg style="width:20px" width="100%" height="100%" viewBox="0 0 70 70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
				<g transform="matrix(0.104167,0,0,0.104164,-18.3349,-33.7991)"><path d="M843.314,969.168C846.219,972.065 848.016,976.071 848.016,980.497C848.016,989.333 840.853,996.497 832.016,996.497C827.589,996.497 823.582,994.699 820.685,991.794L511.999,683.11L203.313,991.794C200.419,994.68 196.426,996.465 192.015,996.465C183.179,996.465 176.015,989.302 176.015,980.465C176.015,976.056 177.799,972.063 180.684,969.169L500.684,649.169C503.579,646.273 507.58,644.481 511.998,644.481C516.416,644.481 520.417,646.272 523.312,649.168L843.314,969.168ZM203.314,671.793L512,363.109L820.686,671.793C823.58,674.679 827.573,676.464 831.984,676.464C840.82,676.464 847.984,669.301 847.984,660.464C847.984,656.055 846.2,652.062 843.315,649.168L523.315,329.168C520.42,326.272 516.419,324.48 512.001,324.48C507.583,324.48 503.582,326.271 500.687,329.167L180.687,649.167C177.802,652.061 176.018,656.053 176.018,660.463C176.018,669.299 183.181,676.463 192.018,676.463C196.428,676.463 200.422,674.678 203.316,671.792L203.314,671.793Z"/></g></svg></a></p>';
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