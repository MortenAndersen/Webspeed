<?php 
echo '<main class="page-content">';
if ( is_page_template( 'page-aside-right-topimg.php' ) ) {
			web_topimg();
			web_front_fokus();
			webspeed_breadcrumb();
	echo '<div class="wrap article-aside">';
		echo '<article>';
			while (have_posts()) : the_post();
				the_content();
			endwhile;
} elseif ( is_page_template( 'page-aside-right-titleimg.php' ) ) {
	webspeed_breadcrumb();
	echo '<div class="wrap article-aside">';
		echo '<article>';
		web_small_topimg();
			while (have_posts()) : the_post();
				the_content();
			endwhile; 
}

else {
	web_front_fokus();
	webspeed_breadcrumb();
	echo '<div class="wrap article-aside">';
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
 get_template_part('template-parts/aside/aside', 'right'); 
	echo '</div>';
echo '</main>';