<?php
add_shortcode('mailchimp', 'web_mailchimp');
function web_mailchimp($atts) {
	ob_start();

// mailchimp() skal opsættes i childtheme functions.php

	mailchimp();

	$myvariable = ob_get_clean();
	return $myvariable;
}