<?php
if( class_exists('ACF') ) {
    echo '<aside class="right-aside">';
        dynamic_sidebar('aside-right');
        the_field('aside_right');
    echo '</aside>';
} else {
    echo '<aside class="right-aside">';
        
       if ( get_post_meta( get_the_ID(), 'aside-right', true ) ) {
            echo '<div class="widget aside-widget meta-field">';
                echo get_post_meta( get_the_ID(), 'aside-right', true);
            echo '</div>';
       } 

        dynamic_sidebar('aside-right');
    echo '</aside>';
}
