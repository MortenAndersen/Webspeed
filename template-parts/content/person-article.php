<?php 
echo '<main class="page-content">';
echo '<div class="wrap article-aside">';
echo '<article>';

			web_img();
			web_title();
			
			the_content();

			web_go_back();

		echo '</article>';
get_template_part('template-parts/aside/aside', 'person'); 
	echo '</div>';
echo '</main>';
