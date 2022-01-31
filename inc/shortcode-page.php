<?php
add_shortcode('page', 'web_page');
function web_page($atts) {
    global $post;
    ob_start();

    // define attributes and their defaults
    extract(shortcode_atts(
        array(
            'img' => 'yes', 
            'read_more' => 'yes', 
            'link' => 'yes',
            'excerpt' => 'yes',
            'grid' => '2',
            'gap' =>'2',
            'id' => ''
            
        ), 
    $atts));

require get_parent_theme_file_path('/inc/grid-gap.php');
/* -------------------------------------- */


    $loop = new WP_Query( array(
        'post_type' => 'page',
        'post__in' => explode( ',', $id ),
        'orderby' => 'menu_order',
        'order' => 'ASC',
       
    ));



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