<?php
echo '<aside class="left-woo-aside">';
	echo '<button id="woo-filter-toggle">Shop kategorier</button>';
	echo '<div class="woo-aside-con">';
		dynamic_sidebar('woo-aside');
	echo '</div>';
echo '</aside>';