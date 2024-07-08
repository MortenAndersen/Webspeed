<?php
do_action('webspeed_before_footer');

if (get_post_meta(get_the_ID(), 'footer', true)) {
	echo '<div class="footer-meta-field meta-field">';
	echo get_post_meta(get_the_ID(), 'footer', true);
	echo '</div>';
}

if (is_active_sidebar('post-content')) {
	dynamic_sidebar('post-content');
}

if (is_active_sidebar('post-content-frontpage') && is_front_page()) {
	dynamic_sidebar('post-content-frontpage');
}

if (is_active_sidebar('footer') || is_active_sidebar('pre-footer') || is_active_sidebar('post-footer')) {
	echo '<div class="page-footer">';
	echo '<div class="wrap">';

	if (is_active_sidebar('pre-footer')) {
		echo '<div class="pre-footer">';
		dynamic_sidebar('pre-footer');
		echo '</div>';
	}

	if (is_active_sidebar('footer')) {
		echo '<div class="footer-widget grid gap-2">';
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

if (is_active_sidebar('slide-in-frontpage') && is_front_page()) {
	echo '<div class="slide-in-content">';
	dynamic_sidebar('slide-in-frontpage');
	echo '</div>';
}
echo '<a class="to-top" href="#top">
<svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg"><path d="m843.314 969.168c2.905 2.897 4.702 6.903 4.702 11.329 0 8.836-7.163 16-16 16-4.427 0-8.434-1.798-11.331-4.703l-308.686-308.684-308.686 308.684c-2.894 2.886-6.887 4.671-11.298 4.671-8.836 0-16-7.163-16-16 0-4.409 1.784-8.402 4.669-11.296l320-320c2.895-2.896 6.896-4.688 11.314-4.688s8.419 1.791 11.314 4.687zm-640-297.375 308.686-308.684 308.686 308.684c2.894 2.886 6.887 4.671 11.298 4.671 8.836 0 16-7.163 16-16 0-4.409-1.784-8.402-4.669-11.296l-320-320c-2.895-2.896-6.896-4.688-11.314-4.688s-8.419 1.791-11.314 4.687l-320 320c-2.885 2.894-4.669 6.886-4.669 11.296 0 8.836 7.163 16 16 16 4.41 0 8.404-1.785 11.298-4.671z" transform="matrix(.104167 0 0 .104164 -18.3349 -33.7991)"/></svg>
</a>';
wp_footer();
do_action('webspeed_before_body_end');
?>

</body>
</html>