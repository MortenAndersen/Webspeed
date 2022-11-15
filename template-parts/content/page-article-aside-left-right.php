<?php 

echo '<main class="page-content">';

 if ( is_page_template( 'page-aside-left-right-topimg.php' ) ) {
	web_topimg();
	web_front_fokus();
	webspeed_breadcrumb();
    echo '<div class="wrap aside-article-aside">';
		echo '<article>';
			while (have_posts()) : the_post();
				$show_h1  = get_theme_mod( 'webspeed_h1' );
				if ( $show_h1 ) {
					web_title();
				}
				the_content();
			endwhile;

	} else {
	web_front_fokus();
	webspeed_breadcrumb();
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