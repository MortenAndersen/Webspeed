<?php 


echo '<main class="page-content">';


 if ( is_page_template( 'single-topimg.php' ) ) {
	web_topimg(); 
	echo '<div class="wrap article-aside">';
		echo '<article>';
			while (have_posts()) : the_post();
				web_date_cat();
			the_content();
			comment_form();
			web_go_back();
			endwhile;

} else {
	echo '<div class="wrap article-aside">';
		echo '<article>';
			the_title('<h1 class="entry-title">', '</h1>');
			web_thumbnail();
			web_date_cat();
			the_content();
			comment_form();
			web_go_back();
}
		echo '</article>';
get_template_part('template-parts/aside/aside', 'single'); 
	echo '</div>';
echo '</main>';
