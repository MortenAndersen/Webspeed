<?php
add_shortcode('post', 'web_post');
function web_post($atts) {
    global $post;
    ob_start();

    // define attributes and their defaults
    extract(shortcode_atts(
        array(
            'number' => '3',
            'offset' => '0',
            'img' => 'yes', 
            'read_more' => 'yes', 
            'link' => 'yes',
            'date' => 'yes',
            'date_cat' => 'no', 
            'type' => 'not-set', 
            'excerpt' => 'yes',
            'related' => 'no',
            'grid' => '2',
            'gap' =>'2'
        ), 
    $atts));

require get_parent_theme_file_path('/inc/grid-gap.php');
/* -------------------------------------- */

if ($type != 'not-set' && $related == 'no') {
    $loop = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => $number,
        'offset' => $offset,     
        'category_name' => $type,
    ));
} else {
    $loop = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => $number,
        'offset' => $offset,
    ));
}


if ($type != 'not-set' && $related != 'no') {
    $loop = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => $number,
        'offset' => $offset,     
        'category_name' => $type,
        'category__in' => wp_get_post_categories($post->ID),

     'post__not_in' => array($post->ID) 
    ));
} else {
    $loop = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => $number,
        'offset' => $offset,
        'category__in' => wp_get_post_categories($post->ID),

     'post__not_in' => array($post->ID) 
    ));
}

/* -------------------------------------- */

if ( $loop->have_posts() ) {

    echo '<div class="web-loop-posts grid' . $grid_class . $gap_class . '">';
		while ( $loop->have_posts() ) : $loop->the_post();
			$classes = get_post_class( '', $post->ID );
			echo '<div class="poost-loop ' . esc_attr( implode( ' ', $classes ) ) . '">';

            

            // thumbnail
            if ( has_post_thumbnail() && $img == 'yes' ) {
                echo '<div class="loop-post-img">';
                if ( $link == 'yes') {
                    echo '<div class="img-zoom">';
                        echo '<a href="' . get_the_permalink() . '">';
                            the_post_thumbnail('webspeed-post');
                        echo '</a>';
                        echo '</div>';
                } else {
                    the_post_thumbnail('webspeed-post');
                } 
                echo '</div>';
            }

            // Date
            if ( $date == 'yes' && $date_cat == 'no') {
                web_post_date();
            }

            if ( $date_cat != 'no') {
                web_date_cat();
            }

                        // Title
            if ( $link == 'yes') {
                echo '<h3 class="loop-title"><a href="' . get_the_permalink() . '">' . get_web_title() . '</a></h3>';
            } else {
                echo '<h3 class="loop-title">' . get_web_title() . '</h3>';
            }

            // the_excerpt
            if ( $excerpt == 'yes') {
                web_excerpt();
            }

            // Read more
            if ( $read_more == 'yes' && $link != 'no') {
                web_read_more();
            }

            echo '</div>';
		endwhile; wp_reset_query();
    echo '</div>';
}

    $myvariable = ob_get_clean();
    return $myvariable;
}