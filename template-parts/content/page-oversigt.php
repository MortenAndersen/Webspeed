<?php 
echo '<main class="page-content">';

if ( is_page_template( 'page-oversigt-topimg.php' ) ) {
	web_topimg();
	echo '<div class="wrap">';
		echo '<article>';
			the_content();

} else {
	echo '<div class="wrap">';
		echo '<article>';
			the_title('<h1 class="entry-title">', '</h1>');
			web_thumbnail(); 
			the_content(); 
}
		echo '</article>';

		echo '<div class="oversigt grid g-d-2 gap-2">';

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
	echo '</div>';
echo '</main>';