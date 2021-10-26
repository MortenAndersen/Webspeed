<?php 
echo '<main class="page-content">';
if ( is_page_template( 'page-aside-right-topimg.php' ) ) {
			web_topimg();
	echo '<div class="wrap article-aside">';
		echo '<article>';
			while (have_posts()) : the_post();
				the_content();
			endwhile;
} else {

	echo '<div class="wrap article-aside">';
		echo '<article>';
			while (have_posts()) : the_post();
				web_title();
				web_thumbnail();
				the_content();
			endwhile; 
}

			if ( is_page() && $post->post_parent ) {
    			web_go_back();
			}
		echo '</article>';
 get_template_part('template-parts/aside/aside', 'right'); 
	echo '</div>';
echo '</main>';