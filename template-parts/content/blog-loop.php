<?php 
web_topimg_blog();

echo '<div class="wrap grid g-d-3 gap-2">';
		
	if (have_posts()): while (have_posts()): the_post();
		$classes = get_post_class( '', $post->ID );
		echo '<article class="' . esc_attr( implode( ' ', $classes ) ) . '">';
		 
	        	web_thumbnail_link();
	        	web_date_cat();
	        	echo '<h3 class="loop-title"><a href="' . get_permalink() . '">' . get_web_title() . '</a></h3>';
	        	web_excerpt(); 
	        	web_read_more();
	        
		echo '</article>';
endwhile; ?>
</div>

<div class="blog-nav wrap flex gap-2">
	<div class="nav-previous"><?php previous_posts_link( '<<' ); ?></div>
	<div class="nav-next"><?php next_posts_link( '>>' ); ?></div>
</div>

<?php endif;?>

</main>