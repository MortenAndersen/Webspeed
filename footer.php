<?php

if ( get_post_meta( get_the_ID(), 'footer', true ) ) {
    echo '<div class="footer-meta-field meta-field">';
        echo get_post_meta( get_the_ID(), 'footer', true);
    echo '</div>';
} 

if ( get_post_meta( get_the_ID(), 'google-map', true ) ) {
    echo '<div class="google-map-meta-field meta-field">';
        echo get_post_meta( get_the_ID(), 'google-map', true);
    echo '</div>';
}

if( class_exists('ACF') ) {
    if( get_field('google_map') ) {
    	echo '<div class="google-map-meta-field ACF-field">';
    		the_field('google_map');
    	echo '</div>';
	}
}

if (is_active_sidebar('post-content')) {
    dynamic_sidebar('post-content');
} 

if (is_active_sidebar('post-content-frontpage') && is_front_page() ) {
    dynamic_sidebar('post-content-frontpage');
} 

if (is_active_sidebar('footer')) {
	echo '<div class="page-footer">';
		echo '<div class="wrap grid g-d-4 gap-2">';
			dynamic_sidebar('footer');
		echo '</div>';
	echo '</div>';
}

if (is_active_sidebar('post-footer')) {
	echo '<div class="post-footer">';
		echo '<div class="wrap">';
			dynamic_sidebar('post-footer');
		echo '</div>';
	echo '</div>';
}

if (is_active_sidebar('slide-in-frontpage') && is_front_page() ) {
	echo '<div class="slide-in-content">';
    	dynamic_sidebar('slide-in-frontpage');
    echo '</div>';
} 
web_reference();
wp_footer();

?>
</body>
</html>