<?php 
echo '<main class="page-content xx">';

	web_front_fokus();
	echo '<div class="wrap article-aside">';
		echo '<article>';
			if ( have_posts() ) :
				woocommerce_content();
			endif; 

		echo '</article>';
 get_template_part('template-parts/aside/aside', 'right'); 
	echo '</div>';
echo '</main>';