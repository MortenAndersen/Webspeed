<?php 

echo '<main class="page-content">';
 if ( is_page_template( 'page-topimg.php' ) ) {
	web_topimg(); 
	echo '<div class="wrap">';
		echo '<article>';
			while (have_posts()) : the_post();
				the_content();
			endwhile;

} else {

	echo '<div class="wrap">';
		echo '<article>';
			while (have_posts()) : the_post();
				the_title('<h1 class="entry-title">', '</h1>');
				web_thumbnail();
				the_content();
			endwhile; 
}
	 	if ( is_page() && $post->post_parent ) {
    				web_go_back();
		}
		
		echo '</article>';
	echo '</div>';
echo '</main>';