<?php 
echo '<main class="page-content">';

if ( is_page_template( 'single-topimg.php' ) ) {
	web_topimg(); 
	webspeed_breadcrumb();
	echo '<div class="wrap article-aside">';
		echo '<article>';

			while (have_posts()) : the_post();
				web_date_cat_author();
				the_content();
				comment_form();
				web_go_back();
			endwhile;

} else {
	webspeed_breadcrumb();
	echo '<div class="wrap article-aside">';
		echo '<article>';
		
			while (have_posts()) : the_post();
				
				web_img();

				web_date_cat_author();
				web_title();
				the_content();
				//comment_form();
				comments_template();
				web_go_back();
			endwhile;
}
		echo '</article>';

get_template_part('template-parts/aside/aside', 'single'); 
	echo '</div>';
echo '</main>';