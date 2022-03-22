<?php


if( have_rows('person') ):
echo '<ul class="contact-con meeting">';

    while( have_rows('person') ) : the_row();
        $name = get_sub_field('name');
        $link = get_sub_field('link');

        echo '<li class="meeting-person"><span class="contact-label">';
            echo svg_url(0);
        echo '</span><span class="contact-info"><a href="' .$link . '" target="_blank">' . $name . '</a></span></li>';
    endwhile;
echo '</ul>';  
endif;