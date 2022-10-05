<?php

web_pre_footer_inject();

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

if (is_active_sidebar('footer') || is_active_sidebar('pre-footer') || is_active_sidebar('post-footer') ) {
	echo '<div class="page-footer">';
		echo '<div class="wrap">';

			if (is_active_sidebar('pre-footer')) {
				echo '<div class="pre-footer">';
					dynamic_sidebar('pre-footer');
				echo '</div>';
			}

			if (is_active_sidebar('footer')) {
				$the_sidebars = wp_get_sidebars_widgets();
				echo '<div class="grid g-d-' . count( $the_sidebars['footer'] ) .' gap-2">';
				
				dynamic_sidebar('footer');
				echo '</div>';
			}

			if (is_active_sidebar('post-footer')) {
				echo '<div class="post-footer">';
					dynamic_sidebar('post-footer');
				echo '</div>';
			}

		echo '</div>';
	echo '</div>';
}

if (is_active_sidebar('slide-in-frontpage') && is_front_page() ) {
	echo '<div class="slide-in-content">';
    	dynamic_sidebar('slide-in-frontpage');
    echo '</div>';
} 
echo '<a class="g-t-t" href="#top">
<svg width="100%" height="100%" viewBox="0 0 70 70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
    <g id="pil-op" transform="matrix(0.104167,0,0,0.104164,-18.3349,-33.7991)">
        <path d="M843.314,969.168C846.219,972.065 848.016,976.071 848.016,980.497C848.016,989.333 840.853,996.497 832.016,996.497C827.589,996.497 823.582,994.699 820.685,991.794L511.999,683.11L203.313,991.794C200.419,994.68 196.426,996.465 192.015,996.465C183.179,996.465 176.015,989.302 176.015,980.465C176.015,976.056 177.799,972.063 180.684,969.169L500.684,649.169C503.579,646.273 507.58,644.481 511.998,644.481C516.416,644.481 520.417,646.272 523.312,649.168L843.314,969.168ZM203.314,671.793L512,363.109L820.686,671.793C823.58,674.679 827.573,676.464 831.984,676.464C840.82,676.464 847.984,669.301 847.984,660.464C847.984,656.055 846.2,652.062 843.315,649.168L523.315,329.168C520.42,326.272 516.419,324.48 512.001,324.48C507.583,324.48 503.582,326.271 500.687,329.167L180.687,649.167C177.802,652.061 176.018,656.053 176.018,660.463C176.018,669.299 183.181,676.463 192.018,676.463C196.428,676.463 200.422,674.678 203.316,671.792L203.314,671.793Z"/>
    </g>
</svg>
</a>';
wp_footer();
web_reference();
?>
</body>
</html>