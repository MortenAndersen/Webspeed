<?php 
echo '<main class="page-content">';

	echo '<div class="wrap article-aside">';
		echo '<article>';
			web_title();
			web_thumbnail();
			simpleEvent_showdate();
			simleEvent_label();
			simpleEvent_payLink();
			the_content();

			web_go_back();

		echo '</article>';
get_template_part('template-parts/aside/aside', 'event'); 
	echo '</div>';
echo '</main>';
