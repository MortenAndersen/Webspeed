<main class="page-content page-blog">
	<div class="wrap-no-pad pad-top-2">
		<?php 
			echo '<h1 entry-title>';
				single_term_title();
			echo '</h1>';
		?>
		<?php echo category_description(); ?>
	</div>
	<div class="wrap-no-pad grid g-d-2 gap-2">
		
	<?php if (have_posts()): while (have_posts()): the_post();?>
		<article id="post-<?php the_ID();?>" <?php post_class();?>>
			<?php
			

	        	echo '<h2 class="loop-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
	        	web_post_date();
	        	web_thumbnail_link();
	        	the_excerpt(); 
	        	web_read_more();

		echo '</article>';
	endwhile; ?>
	</div>
	
<div class="wrap">
	<div class="nav-previous"><?php next_posts_link( '>>' ); ?></div>
	<div class="nav-next"><?php previous_posts_link( '<<' ); ?></div>
</div>

<?php endif;?>
</div>
</main>