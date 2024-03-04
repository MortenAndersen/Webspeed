<?php
if (class_exists('ACF')) {

	$term = get_queried_object();
	$image = get_field('billede', $term);

	if ($image) {
		echo '<main class="page-content page-blog top-img">';
		echo '<div class="top-post-img">';
		echo '<img src="' . $image['url'] . '">';
		echo '<div class="wrap-no-pad">';
		echo '<div class="top-caption">';
		echo '<h1>';
		single_term_title();
		echo '</h1>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '<div class="wrap">';
	} else {
		echo '<main class="page-content page-blog">';
		echo '<div class="wrap">';
		echo '<h1>';
		single_term_title();
		echo '</h1>';
	}

} else {
	echo '<main class="page-content page-blog">';
	echo '<div class="wrap">';
	echo '<h1>';
	single_term_title();
	echo '</h1>';
}

?>


		<?php echo category_description(); ?>

	<div class="grid g-d-3 gap-2">

	<?php if (have_posts()): while (have_posts()): the_post();?>
								<article id="post-<?php the_ID();?>" <?php post_class();?>>
									<?php

		web_blog_thumbnail();
		web_post_date();
		echo '<h3 class="loop-title"><a href="' . get_permalink() . '">' . get_web_title() . '</a></h3>';
		web_excerpt();
		web_read_more();

		echo '</article>';
	endwhile;?>
				</div>

			<div class="blog-nav wrap flex gap-2">
				<div class="nav-previous"><?php previous_posts_link('<<');?></div>
				<div class="nav-next"><?php next_posts_link('>>');?></div>
			</div>

			<?php endif;?>
</div>
</main>