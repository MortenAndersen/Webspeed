<?php
if( have_rows('accordion') ):
	$i = 1;
    echo '<div class="details">';

    while( have_rows('accordion') ) : the_row();
        $sub_title = get_sub_field('title');
        $sub_body = get_sub_field('body');
        $sub_class_master = get_sub_field('class');
        $sub_chortcode = get_sub_field('shortcode');

        if ($sub_class_master) {
            $sub_class = ' ' . get_sub_field('class');
            } else {
                $sub_class = '';
        }

        echo '<details  class="acc-' . $i . '' . $sub_class .'">';
            echo '<summary>';
                echo $sub_title;
            echo '</summary>';
                echo $sub_body;
                echo $sub_chortcode;
        echo '</details>';
        
    ++$i;
    endwhile;
    echo '</div>';
endif;
