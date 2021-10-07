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


// Child pages
// kunne bruge dette som inspiration
// https://wordpress.com/support/list-pages-shortcode/


add_shortcode('child-grid', 'child_grid');
function child_grid($atts) {
    global $post;
    ob_start();

    // define attributes and their defaults
    extract(shortcode_atts(array('grid' => '2', 'class' => 'no-class'), $atts));

if( $grid == 2 ) {
    $grid_class = ' g-d-2 ';
} elseif ( $grid == 3) {
    $grid_class = ' g-d-3 ';
} elseif ( $grid == 4) {
    $grid_class = ' g-d-4 ';
}else {
    $grid_class = ' g-d-1 ';
}


echo '<div class="oversigt grid' . $grid_class . 'gap-2 ' . $class . '">';

$args = array(
    'post_parent' => $post->ID,
    'post_type' => 'page',
    'orderby' => 'menu_order'
);

$child_query = new WP_Query( $args );

while ( $child_query->have_posts() ) : 
    $child_query->the_post();
    $classes = get_post_class( '', $post->ID );

    echo '<div class="' . esc_attr( implode( ' ', $classes ) ) . '">';  
        echo '<h3><a href="' . get_the_permalink() . '" rel="bookmark" title="' .get_the_title() . '">' .get_the_title() . '</a></h3>';
        web_thumbnai_link();
        the_excerpt();
        web_read_more();
    echo '</div>';
endwhile;

wp_reset_postdata();


        echo '</div>';

 $myvariable = ob_get_clean();
    return $myvariable;
}
