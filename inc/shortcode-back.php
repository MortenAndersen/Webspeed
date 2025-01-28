<?php
add_shortcode('back', 'web_back');
function web_back($atts) {
	global $post;
	ob_start();

	web_go_back();

	$myvariable = ob_get_clean();
	return $myvariable;
}