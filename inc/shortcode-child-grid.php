<?php 
// Child pages
// kunne bruge dette som inspiration
// https://wordpress.com/support/list-pages-shortcode/


add_shortcode('child-grid', 'child_grid');
function child_grid($atts) {
    global $post;
    ob_start();

    // define attributes and their defaults
    extract(shortcode_atts(array('grid' => '2', 'gap' => '2', 'class' => 'no-class'), $atts));

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

echo '<div class="oversigt grid' . $grid_class . $gap_class . $class . '">';

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
        web_thumbnail_link();
        echo '<h3><a href="' . get_the_permalink() . '" rel="bookmark" title="' .get_clean_web_title() . '">' . get_web_title() . '</a></h3>';
        
        the_excerpt();
        web_read_more();
        web_edit_link();
    echo '</div>';
endwhile;

wp_reset_postdata();


        echo '</div>';

 $myvariable = ob_get_clean();
    return $myvariable;
}
