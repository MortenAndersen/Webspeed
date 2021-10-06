<?php
add_shortcode('web-post', 'web_post');
function web_post($atts) {
    global $post;
    ob_start();

    // define attributes and their defaults
    extract(shortcode_atts(array('number' => '2', 'img' => 'yes', 'read_more' => 'yes', 'link' => 'yes' ), $atts));


/* -------------------------------------- */

    $loop = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => $number,
    )
);

/* -------------------------------------- */

if ( $loop->have_posts() ) {

    echo '<div class="web-loop-posts">';
		while ( $loop->have_posts() ) : $loop->the_post();
			$classes = get_post_class( '', $post->ID );
			echo '<article class="' . esc_attr( implode( ' ', $classes ) ) . '">';

            if ( $link == 'yes') {
                echo '<h3 class="loop-title"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>';
            } else {
                echo '<h3 class="loop-title">' . get_the_title() . '</h3>';
            }

            if ( has_post_thumbnail() && $img == 'yes' ) {
                echo '<div class="loop-post-img">';
                    echo '<div class="img-zoom">';
                        echo '<a href="' . get_the_permalink() . '">';
                            the_post_thumbnail('large');
                        echo '</a>';
                    echo '</div>';
                echo '</div>';
            }
            the_excerpt();
            if ( $read_more == 'yes') {
                web_read_more();
            }
            echo '</article>';
		endwhile; wp_reset_query();
    echo '</div>';
}

    $myvariable = ob_get_clean();
    return $myvariable;
}
/* -------------------------------------- */
/* -------------------------------------- */
