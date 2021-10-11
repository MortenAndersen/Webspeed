<?php 
echo '<main class="page-content">';
	echo '<div class="wrap article-aside">';
		echo '<article>';
			the_title('<h1 class="entry-title">', '</h1>');
			web_thumbnail();
			web_date_cat();
			the_content();
			comment_form();
			web_go_back();
		echo '</article>';
get_template_part('template-parts/aside/aside', 'single'); 
	echo '</div>';
echo '</main>';
