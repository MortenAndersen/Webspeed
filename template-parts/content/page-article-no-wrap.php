<?php 
echo '<main class="page-content">';
if ( is_page_template( 'page-no-wrap-topimg.php' ) ) {
 	web_topimg();
}
	echo '<div class="no-wrap">';
		echo '<article>';
			while (have_posts()) : the_post();
				the_content();
			endwhile; 

		echo '</article>';
	echo '</div>';
echo '</main>';