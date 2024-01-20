<?php

echo '<ul class="kontakt-con">';

if (get_field('adresse')) {
	echo '<li class="k-loca"><span class="k-label">';
	echo svg_url(5);
	echo '</span><span class="k-info">' . get_field('adresse') . '</span></li>';
}

if (get_field('email')) {
	echo '<li class="k-mail"><span class="k-label">';
	echo svg_url(2);
	echo '</span><span class="k-info"><a href="mailto:' . get_field('email') . '">' . get_field('email') . '</a></span></li>';
}
if (get_field('telefon')) {
	echo '<li class="k-tel"><span class="k-label">';
	echo svg_url(1);
	echo '</span><span class="k-info"><a href="tel:' . str_replace(' ', '', get_field('telefon')) . '">' . get_field('telefon') . '</a></span></li>';
}
if (get_field('telefon_2')) {
	echo '<li class="k-tel-2"><span class="k-label">';
	echo svg_url(1);
	echo '</span><span class="k-info"><a href="tel:' . str_replace(' ', '', get_field('telefon_2')) . '">' . get_field('telefon_2') . '</a></span></li>';
}

$map = get_field('google_map');
if ($map) {
	echo '<li class="k-loca"><span class="k-label">';
	echo svg_url(5);
	echo '</span><span class="k-info"><a href="' . wp_kses_post($map) . '" target="_blank" title="Google Map">Google Map</a></span></li>';
}

if (get_field('info')) {
	echo '<li class="k-info"><span class="k-label"></span><span class="k-info">' . get_field('info') . '</span></li>';
}

if (get_field('facebook') || get_field('linkedin') || get_field('instagram')) {
	echo '<li class="k-some">';
	if (get_field('facebook')) {
		echo '<a href="' . get_field('facebook') . '" class="fb" target="_blank" title="facebook">' . svg_url(7) . '</a>';
	}

	if (get_field('linkedin')) {
		echo '<a href="' . get_field('linkedin') . '" class="li" target="_blank" title="linkedin">' . svg_url(6) . '</a>';
	}

	if (get_field('instagram')) {
		echo '<a href="' . get_field('instagram') . '" class="in" target="_blank" title="instagram">' . svg_url(3) . '</a>';
	}
	echo '</li>';
}

echo '</ul>';