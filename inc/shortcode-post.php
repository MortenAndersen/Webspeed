<?php
add_shortcode('post', 'web_post');
function web_post($atts) {
    global $post;
    ob_start();

    // define attributes and their defaults
    extract(shortcode_atts(
        array(
            'number' => '3', 
            'img' => 'yes', 
            'read_more' => 'yes', 
            'link' => 'yes',
            'date' => 'yes',
            'date_cat' => 'no', 
            'type' => 'not-set', 
            'excerpt' => 'yes',
            'related' => 'no'
        ), 
    $atts));


/* -------------------------------------- */

if ($type != 'not-set' && $related == 'no') {
    $loop = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => $number,     
        'category_name' => $type,
    ));
} else {
    $loop = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => $number,
    ));
}


if ($type != 'not-set' && $related != 'no') {
    $loop = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => $number,     
        'category_name' => $type,
        'category__in' => wp_get_post_categories($post->ID),

     'post__not_in' => array($post->ID) 
    ));
} else {
    $loop = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => $number,
        'category__in' => wp_get_post_categories($post->ID),

     'post__not_in' => array($post->ID) 
    ));
}

/* -------------------------------------- */

if ( $loop->have_posts() ) {

    echo '<div class="web-loop-posts">';
		while ( $loop->have_posts() ) : $loop->the_post();
			$classes = get_post_class( '', $post->ID );
			echo '<article class="' . esc_attr( implode( ' ', $classes ) ) . '">';

            // Title
            if ( $link == 'yes') {
                echo '<h3 class="loop-title"><a href="' . get_the_permalink() . '">' . get_web_title() . '</a></h3>';
            } else {
                echo '<h3 class="loop-title">' . get_web_title() . '</h3>';
            }

            // Date
            if ( $date == 'yes' && $date_cat == 'no') {
                web_post_date();
            }

            if ( $date_cat != 'no') {
                web_date_cat();
            }

            // thumbnail
            if ( has_post_thumbnail() && $img == 'yes' ) {
                echo '<div class="loop-post-img">';
                if ( $link == 'yes') {
                    echo '<div class="img-zoom">';
                        echo '<a href="' . get_the_permalink() . '">';
                            the_post_thumbnail('large');
                        echo '</a>';
                        echo '</div>';
                } else {
                    the_post_thumbnail('large');
                } 
                echo '</div>';
            }

            // the_excerpt
            if ( $excerpt == 'yes') {
                the_excerpt();
            }

            // Read more
            if ( $read_more == 'yes' && $link != 'no') {
                web_read_more();
            }

            echo '</article>';
		endwhile; wp_reset_query();
    echo '</div>';
}

    $myvariable = ob_get_clean();
    return $myvariable;
}