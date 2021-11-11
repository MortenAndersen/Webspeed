<main class="page-content search-results-page">
	<div class="wrap">
		<article>
			<?php if ( have_posts() ) : ?>
					<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'webspeed-domain' ), '<span>"' . get_search_query() . '"</span>' ); ?></h1>
				<?php else : ?>
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'webspeed-domain' ); ?></h1>
				<?php endif; ?>
			<?php
			if ( have_posts() ) :


        echo '<ol class="search-results">';
            while ( have_posts() ) : the_post();
                echo '<li class="search-result-type--' . get_post_type() . '"><a href="' . get_the_permalink() . '">' . get_clean_web_title() . '</a><div class="small-font">' . get_the_excerpt() . '</div></li>';
            endwhile;
        echo '</ol>';
    endif;
    ?>
		</article>
	</div>
</main>
