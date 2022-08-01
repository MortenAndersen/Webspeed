<?php 
// Child pages
// kunne bruge dette som inspiration
// https://wordpress.com/support/list-pages-shortcode/


add_shortcode('child-grid', 'child_grid');
function child_grid($atts) {
    global $post;
    ob_start();

    // define attributes and their defaults
    extract(shortcode_atts(
        array(
            'grid' => '2',
            'gap' => '2',
            'class' => 'no-class',
            'number' => '999',
            'offset' => '0',
            'img' => 'yes',
            'title' => 'yes',
            'excerpt' => 'yes',
            'read_more' => 'yes',
            'slider' => 'no-slider'
        ), $atts));

require get_parent_theme_file_path('/inc/grid-gap.php');

if (is_page_template('page-no-wrap-topimg.php') || is_page_template('page-no-wrap.php') ) { 

    echo '<div class="wide-con wrap-' . $class . '">';
        echo '<div class="wrap-pad">';
}
if ( $slider != 'no-slider')  {
        echo '<div class="Xoversigt ' . $slider . ' ' . $class . '">';
    } else {
echo '<div class="oversigt grid' . $grid_class . $gap_class . $class . '">';
}

$args = array(
    'post_parent' => $post->ID,
    'post_type' => 'page',
    'posts_per_page' => $number,
    'offset' => $offset,
    'orderby' => array( 'menu_order' => 'ASC' ),
);

$child_query = new WP_Query( $args );

while ( $child_query->have_posts() ) : 
    $child_query->the_post();
    echo '<div class="post-loop">';
        if ( $img == 'yes' ) {
            echo '<div class="loop-post-img">';
                if ( $slider != 'no-slider')  {
                    web_thumbnail_link_no_lazy();
                } else {
                    web_thumbnail_link();
                }
            echo '</div>';
        }

        if ( $title == 'yes') {
            echo '<h3><a href="' . get_the_permalink() . '" rel="bookmark" title="' .get_clean_web_title() . '">' . get_web_title() . '</a></h3>';
        }
        
        // the_excerpt
        if ( $excerpt == 'yes') {
            web_excerpt();
        }

        // Read more
        if ( $read_more == 'yes') {
            web_read_more();
        }

        web_edit_link();
    echo '</div>';
endwhile;

wp_reset_postdata();


        echo '</div>';

    if (is_page_template('page-no-wrap-topimg.php') || is_page_template('page-no-wrap.php') ) { 
            echo '</div>';
        echo '</div>';
    }

 $myvariable = ob_get_clean();
    return $myvariable;
}
