<?php
if( have_rows('accordion') ):
	$i = 1;
echo '<div class="acc-con">';

    while( have_rows('accordion') ) : the_row();
        $sub_title = get_sub_field('title');
        $sub_body = get_sub_field('body');

        echo '<div id="accordion-' . $i . '">';
            echo '<div class="acc-head">';
                echo '<p class="acc-title">' . $sub_title . '</p>';
                echo '<i class="arrow"></i>';
            echo '</div>';
            echo '<div class="acc-content">';
                echo $sub_body;
            echo '</div>';
        echo '</div>';
        
    ++$i;
    endwhile;

echo '</div>';  
endif;