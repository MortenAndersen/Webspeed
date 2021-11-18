<?php
/* -------------------------------------- */
/* -------------------------------------- */
add_shortcode('elements', 'webspeed_elements');
function webspeed_elements($atts) {
    global $post;
    ob_start();

    // define attributes and their defaults
    extract(shortcode_atts(array('grid' => '2', 'gap' =>'2', 'type' => 'none', 'class' => 'no-class'), $atts));

    if( $grid == 2 ) {
    $grid_class = ' g-d-2 ';
    } elseif ( $grid == 3) {
        $grid_class = ' g-d-3 ';
    } elseif ( $grid == 4) {
        $grid_class = ' g-d-4 ';
    }else {
    $grid_class = ' g-d-1 ';
    }

    if( $gap == 1 ) {
    $gap_class = 'gap-1 ';
    } elseif( $gap == 2 ) {
    $gap_class = 'gap-2 ';
    } elseif ( $gap == 3) {
        $gap_class = 'gap-3 ';
    } elseif ( $gap == 4) {
        $gap_class = 'gap-4 ';
    }else {
    $gap_class = 'no-gap ';
    }


/* -------------------------------------- */

    $loop = new WP_Query( array(
        'post_type' => 'elements',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1,
        'tax_query' => array(
            array (
                'taxonomy' => 'webspeeed_element_type',
                'field' => 'slug',
                'terms' => $type,
            )
        ),
    )
);

/* -------------------------------------- */

if ( $loop->have_posts() ) {
 
	   echo '<div class="grid' . $grid_class . $gap_class . $type . ' ' . $class . '">';


	while ( $loop->have_posts() ) : $loop->the_post();
        echo '<div class="grid-item element">';
            web_thumbnail();
            the_content();
            web_edit_link();
        echo '</div>';

    endwhile; wp_reset_query();
    echo '</div>';
}

    $myvariable = ob_get_clean();
    return $myvariable;
}
/* -------------------------------------- */
/* -------------------------------------- */