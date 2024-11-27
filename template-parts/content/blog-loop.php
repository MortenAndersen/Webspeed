<?php
web_topimg_blog();

// Indhold på selve blog siden printes
$post = get_queried_object();
setup_postdata( $post );
$blogBody = get_the_content();
if ($blogBody) {
	echo '<div class="wrap" style="padding-block:0;">';
		the_content();
	echo '</div>';
}
wp_reset_postdata();

// De enkelte blog indlæg
echo '<div class="wrap grid g-d-3 gap-2">';

if (have_posts()): while (have_posts()): the_post();
		$classes = get_post_class('', $post->ID);
		echo '<article class="post-loop ' . esc_attr(implode(' ', $classes)) . '">';
			web_blog_thumbnail();
			web_date_cat();
			echo '<h2 class="loop-title"><a href="' . get_permalink() . '">' . get_web_title() . '</a></h2>';
			web_excerpt();
			web_read_more();
		echo '</article>';
	endwhile;
	wp_reset_query();

	echo '</div>';

// Pagination
echo '<div class="blog-nav wrap flex gap-2">';
	echo '<div class="nav-previous">';
		previous_posts_link('<<');
	echo '</div>';
	echo '<div class="nav-next">';
		next_posts_link('>>');
	echo '</div>';
echo '</div>';

endif;

echo '</main>';