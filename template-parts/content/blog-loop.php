<main class="page-content page-blog">
	<div class="wrap-no-pad pad-top-2">
		<?php single_post_title('<h1 class="entry-title">','</h1>'); ?>
	</div>
	<div class="wrap-no-pad grid g-d-2 gap-2">
		
	<?php if (have_posts()): while (have_posts()): the_post();?>
		<article id="post-<?php the_ID();?>" <?php post_class();?>>
			<?php
			if (has_post_thumbnail()) {
	            echo '<a href="' . get_the_permalink() . '" alt="' . get_the_title() . '">';
	            the_post_thumbnail('thumbnail' , array( 'class' => 'alignleft' ));
	            echo '</a>';
	        }
	        echo '<div class="blog-loop-txt">';
	        	echo '<h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
	        	the_excerpt(); 
	        echo '</div>';
		echo '</article>';
endwhile; ?>

<div class="nav-previous"><?php next_posts_link( '>>' ); ?></div>
<div class="nav-next"><?php previous_posts_link( '<<' ); ?></div>
 
<?php endif;?>
</div>
</main>