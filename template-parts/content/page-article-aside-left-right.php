<?php 
echo '<main class="page-content">';

 if ( is_page_template( 'page-aside-left-right-topimg.php' ) ) {
	web_topimg();
	web_front_fokus();
    echo '<div class="wrap aside-article-aside">';
		echo '<article>';
			while (have_posts()) : the_post();
				the_content();
			endwhile;

	} else {
	web_front_fokus();
	echo '<div class="wrap aside-article-aside">';
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

get_template_part('template-parts/aside/aside', 'left');
get_template_part('template-parts/aside/aside', 'right');
	echo '</div>';
echo '</main>';