<?php 
echo '<main class="page-content search-results-page">';
	echo '<div class="wrap">';
		echo '<article>';

		if ( have_posts() ) { 
			echo '<h1 class="search-results">' . __( 'Search Results for', 'webspeed-domain' ) . ': <span>' . get_search_query() . '</span></h1>';
		} else { 
			echo '<h1 class="search-results">' . __( 'Nothing Found', 'webspeed-domain' ) . '</h1>';
			echo '<p><strong>' . __( 'Search Suggestions', 'webspeed-domain') . ':</strong></p>';
			echo '<ol class="search-suggest">';
				echo '<li>' . __( 'Check your spelling', 'webspeed-domain') . '</li>';
				echo '<li>' . __( 'Try more general words', 'webspeed-domain') . '</li>';
				echo '<li>' . __( 'Try different words that mean the same thing', 'webspeed-domain') . '</li>';
			echo '</ol>';
 		} 
		
		if ( have_posts() ) {
	        echo '<ol class="search-results">';
	            while ( have_posts() ) : the_post();
	                echo '<li class="search-result-type--' . get_post_type() . '"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a><div class="small-font">' . get_the_excerpt() . '</div></li>';
	            endwhile;
	        echo '</ol>';
	    }

		echo '</article>';
	echo '</div>';
echo '</main>';
