<?php 

echo '<main class="page-content">';
 if ( is_page_template( 'page-topimg.php' ) ) {
	web_topimg();
	web_front_fokus();
	echo '<div class="wrap">';
		echo '<article>';
			while (have_posts()) : the_post();
				the_content();
			endwhile;

} else {
	web_front_fokus();
	echo '<div class="wrap">';
		echo '<article>';
			while (have_posts()) : the_post();
				web_title();
				web_img();
				the_content();
			endwhile; 
}
	 	if ( is_page() && $post->post_parent ) {
    				web_go_back();
		}
		
		echo '</article>';
	echo '</div>';
echo '</main>';