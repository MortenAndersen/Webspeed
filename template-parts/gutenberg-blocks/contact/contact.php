<?php



echo '<ul class="contact-con">';

	if( get_field('adresse') ) {
    	echo '<li class="contact-location"><span class="contact-label">';
    	   echo svg_url(5);
    	echo '</span><span class="contact-info">' . get_field('adresse') . '</span></li>';
	}

	if( get_field('email') ) {
    	echo '<li class="contact-email"><span class="contact-label">';
    	   echo svg_url(2);
    	echo '</span><span class="contact-info"><a href="mailto:' . get_field('email') . '">' . get_field('email') . '</a></span></li>';
    }
    if( get_field('telefon') ) {
    	echo '<li class="contact-telefon"><span class="contact-label">';
    	   echo svg_url(1);
    	echo '</span><span class="contact-info"><a href="tel:' . str_replace(' ', '',get_field('telefon')) . '">' . get_field('telefon') . '</a></span></li>';
    }
    if( get_field('telefon_2') ) {
    	echo '<li class="contact-telefon-2"><span class="contact-label">';
    	   echo svg_url(1);
    	echo '</span><span class="contact-info"><a href="tel:' . str_replace(' ', '',get_field('telefon_2')) . '">' . get_field('telefon_2') . '</a></span></li>';
    }
    if( get_field('info') ) {
    	echo '<li class="contact-info"><span class="contact-label"></span><span class="contact-info">' . get_field('info') . '</span></li>';
    }


    if( get_field('facebook') || get_field('linkedin') || get_field('instagram') ) {
        echo '<li class="contact-social">';
            if( get_field('facebook') ) {
                echo '<a href="' . get_field('facebook') . '" class="fb" target="_blank">' . svg_url(7) . '</a>';
            }

            if( get_field('linkedin') ) {
                echo '<a href="' . get_field('linkedin') . '" class="li" target="_blank">' . svg_url(6) . '</a>';
            }

            if( get_field('instagram') ) {
                echo '<a href="' . get_field('instagram') . '" class="in" target="_blank">' . svg_url(3) . '</a>';
            }
        echo '</li>';
    }

echo '</ul>';  