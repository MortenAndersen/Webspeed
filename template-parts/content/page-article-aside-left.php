<?php 
echo '<main class="page-content">';
if ( is_page_template( 'page-aside-left-topimg.php' ) ) {
			web_topimg();
	echo '<div class="wrap aside-article">';
		echo '<article>';
			while (have_posts()) : the_post();
				the_content();
			endwhile;
} else {

	echo '<div class="wrap aside-article">';
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
 get_template_part('template-parts/aside/aside', 'left'); 
	echo '</div>';
echo '</main>';