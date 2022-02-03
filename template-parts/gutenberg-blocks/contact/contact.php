<?php


echo '<ul class="contact-con">';

	if( get_field('adresse') ) {
    	echo '<li class="contact-location"><span class="contact-label">';
    	get_template_part('img/contact/icon', 'location');
    	echo '</span><span class="contact-info">' . get_field('adresse') . '</span></li>';
	}
	if( get_field('email') ) {
    	echo '<li class="contact-email"><span class="contact-label">';
    	get_template_part('img/contact/icon', 'mail');
    	echo '</span><span class="contact-info"><a href="mailto:' . get_field('email') . '">' . get_field('email') . '</a></span></li>';
    }
    if( get_field('telefon') ) {
    	echo '<li class="contact-telefon"><span class="contact-label">';
    	get_template_part('img/contact/icon', 'phone');
    	echo '</span><span class="contact-info"><a href="tel:' . str_replace(' ', '',get_field('telefon')) . '">' . get_field('telefon') . '</a></span></li>';
    }
    if( get_field('telefon_2') ) {
    	echo '<li class="contact-telefon-2"><span class="contact-label">';
    	get_template_part('img/contact/icon', 'cell');
    	echo '</span><span class="contact-info"><a href="tel:' . str_replace(' ', '',get_field('telefon_2')) . '">' . get_field('telefon_2') . '</a></span></li>';
    }
    if( get_field('info') ) {
    	echo '<li class="contact-info"><span class="contact-label"></span><span class="contact-info">' . get_field('info') . '</span></li>';
    }

echo '</ul>';  
