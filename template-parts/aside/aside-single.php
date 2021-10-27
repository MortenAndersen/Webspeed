<?php
echo '<aside class="right-aside">';
     
$related = get_posts( array( 
    'category__in' => wp_get_post_categories($post->ID),
     'numberposts' => 5, 
     'post__not_in' => array($post->ID) 
 ) );

    if( $related ) {
        echo '<ul class="related-post">';
            foreach( $related as $post ) {
            setup_postdata($post);
                echo '<li>';
                    echo '<h4><a href="' . get_the_permalink() . '">' . get_web_title() . '</a></h4>';
                    web_post_date();
                    web_thumbnail_link();
                    the_excerpt();
                    web_read_more();
                echo '</li>';
            }
        echo '</ul>';  
    }

wp_reset_postdata(); 

if (is_active_sidebar('aside-single')) {


            dynamic_sidebar('aside-single');

}

echo '</aside>';