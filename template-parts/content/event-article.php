<?php 
echo '<main class="page-content">';

$event_option = get_field('event_options');
if( $event_option && in_array('Skjul tid', $event_option) ) {
    $hide_time = ' hide-all-time';
}
if( $event_option && in_array('Skjul sluttid', $event_option) ) {
  $hide_time = ' hide-end-time';
}

	echo '<div class="wrap article-aside">';
		echo '<article>';
			web_title();
			echo '<div class="eve-info grid gap-1">';
				echo '<div class="eve-img">';
					web_img();
				echo '</div>';
				echo '<div class="eve-txt' . $hide_time . '">';
					simpleEvent_showdate();
					simpleEvent_location();
					simpleEvent_kortBeskrivelse();
					simleEvent_label();
					simpleEvent_payLink();
				echo '</div>';
			echo '</div>';
			the_content();

			web_go_back();

		echo '</article>';
get_template_part('template-parts/aside/aside', 'event'); 
	echo '</div>';
echo '</main>';
