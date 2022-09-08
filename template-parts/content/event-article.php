<?php 
echo '<main class="page-content">';

$event_option = get_field('event_options');
if( $event_option && in_array('Skjul tid', $event_option) ) {
    $hide_time = ' hide-all-time';
} elseif( $event_option && in_array('Skjul sluttid', $event_option) ) {
  $hide_time = ' hide-end-time';
} else {
	$hide_time = ' viser-alle-tider';
}

	echo '<div class="wrap article-aside">';
		echo '<article>';
			web_title();
			echo '<div class="eve-info grid gap-1">';
				echo '<div class="eve-img">';
					web_img();
				echo '</div>';
				echo '<div class="eve-txt' . $hide_time . '">';
					if( have_rows('alternative_datoer') ) {
    					event_alt_dato();
					} else {
    					simpleEvent_showdate();
					}					
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
