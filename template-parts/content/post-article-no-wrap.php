<?php
echo '<main class="post-content">';
	the_content();
	echo '<div class="wrap">';
		comment_form();
		web_go_back();
	echo '</div>';
echo '</main>';