<?php 
echo '<main class="page-content">';
if ( is_page_template( 'page-no-wrap-topimg.php' ) ) {
 	web_topimg();
 	web_front_fokus();
}
	while (have_posts()) : the_post();
		the_content();
	endwhile; 
echo '</main>';