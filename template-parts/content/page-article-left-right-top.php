<?php

echo '<main class="page-content">';

	
	while (have_posts()): the_post();

    echo '<div class="lr-top-main">';
    echo '<div class="wrap lr-top grid">';
      echo '<div class="lt-top__first">';
          web_title();
          the_field('top');
      echo '</div>';
      echo '<div class="lt-top__sec">';
        web_img();
      echo '</div>';
    echo '</div>';
    echo '</div>';

    echo '<div class="wrap">';
      echo '<article>';
		    the_content();

	

	echo '</article>';
	echo '</div>';
endwhile;
echo '</main>';