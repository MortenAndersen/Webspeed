<main class="page-content page-blog">
	<div class="wrap">
		<?php 
			echo '<h1 class="entry-title">';
				single_term_title();
			echo '</h1>';
		?>
		<?php echo category_description(); ?>
	</div>
	<div class="wrap grid g-d-3 gap-2">
		
	<?php if (have_posts()): while (have_posts()): the_post();?>
		<article id="post-<?php the_ID();?>" <?php post_class();?>>
			<?php
		
	        	
	        	web_thumbnail_link();
	        	web_post_date();
	        	echo '<h2 class="loop-title"><a href="' . get_permalink() . '">' . get_web_title() . '</a></h2>';
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
</div>
</main>