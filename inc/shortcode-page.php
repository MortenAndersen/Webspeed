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
            'id' => '',
            'class' => 'no-class',
            'slider' => 'no-slider',
            'orderby' => 'menu_order',
            'order' => 'ASC',         
        ), 
    $atts));

require get_parent_theme_file_path('/inc/grid-gap.php');
/* -------------------------------------- */
    $loop = new WP_Query( array(
        'post_type' => 'page',
        'post__in' => explode( ',', $id ),
        'orderby' => $orderby,
        'order' => $order,     
    ));
/* -------------------------------------- */

if ( $loop->have_posts() ) {

    if ( $slider != 'no-slider')  {
        echo '<div class="web-loop-posts ' . $slider . ' ' . $class . '">';
    } else {
        echo '<div class="web-loop-posts grid' . $grid_class . $gap_class . $class . '">';
    }

		while ( $loop->have_posts() ) : $loop->the_post();
			$classes = get_post_class( '', $post->ID );
			echo '<div class="post-loop ' . esc_attr( implode( ' ', $classes ) ) . '">';

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

            echo '<div class="loop-post-txt">';
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
                web_edit_link();
            echo '</div>';

            echo '</div>';
		endwhile; wp_reset_query();
    echo '</div>';
}

    $myvariable = ob_get_clean();
    return $myvariable;
}