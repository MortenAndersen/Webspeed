<?php 
echo '<main class="page-content">';

	echo '<div class="wrap article-aside">';
		echo '<article>';
			web_title();
			echo '<div class="eve-info grid gap-1">';
				echo '<div class="eve-img">';
					web_img();
				echo '</div>';
				echo '<div class="eve-txt">';
					simpleEvent_showdate_year();
					simpleEvent_location();
					simpleEvent_kortBeskrivelse();
					simleEvent_label();
					simpleEvent_payLink();
				echo '</div>';
			echo '</div>';
			the_content();

			web_go_back();

		echo '</article>';
get_template_part('template-parts/aside/aside', 'event'); 
	echo '</div>';
echo '</main>';
