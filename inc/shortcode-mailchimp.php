<?php
add_shortcode('mailchimp', 'web_mailchimp');
function web_mailchimp($atts) {

// mailchimp() skal opsættes i childtheme functions.php

	if (function_exists('mailchimp')) {
		return mailchimp();
	}

	$myvariable = ob_get_clean();
	return $myvariable;
}