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
            'grid' => '2',
            'gap' =>'2',
            'class' => 'no-class',
            'slider' => 'no-slider'
        ), 
    $atts));

require get_parent_theme_file_path('/inc/grid-gap.php');
/* -------------------------------------- */

if ($type != 'not-set') {
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

/* -------------------------------------- */

if ( $loop->have_posts() ) {

    if ( $slider != 'no-slider')  {
        echo '<div class="web-loop-posts ' . $slider . ' ' . $class . '">';
    } else {
        echo '<div class="web-loop-posts grid' . $grid_class . $gap_class . $class . '">';
    }

		while ( $loop->have_posts() ) : $loop->the_post();
			$classes = get_post_class( '', $post->ID );
            echo '<div class="post-loop">';

            
            // thumbnail
            if ( has_post_thumbnail() && $img == 'yes' ) {
                echo '<div class="loop-post-img">';
                if ( $link == 'yes') {
                        if ( $slider != 'no-slider')  {
                            web_thumbnail_link_no_lazy();
                        } else {
                            web_thumbnail_link();
                        }
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