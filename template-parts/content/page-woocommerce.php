<?php 
if( class_exists('ACF') ) {

		$term = get_queried_object();
		$image = get_field('billede', $term);

		if ( $image ) {
			echo '<main class="page-content page-blog top-img">';
			echo '<div class="top-post-img">';
				echo '<img src="' . $image['url'] . '">';    
            	echo '<div class="wrap-no-pad">';
            	echo '<div class="top-caption">';
            		echo '<h1 class="entry-title">';
						single_term_title();
					echo '</h1>';
            	echo '</div>';
            	echo '</div>';
            echo '</div>';
            echo '<div class="woo-bread wrap-no-pad">';
	woocommerce_breadcrumb();
echo '</div>';
			echo '<div class="wrap">';
		} else {
			echo '<main class="page-content page-blog">';
			echo '<div class="woo-bread wrap-no-pad">';
	woocommerce_breadcrumb();
echo '</div>';
				echo '<div class="wrap">';
					echo '<h1 class="entry-title">';
						single_term_title();
					echo '</h1>';
		}

	}
else {
echo '<main class="page-content page-blog">';
echo '<div class="woo-bread wrap-no-pad">';
	woocommerce_breadcrumb();
echo '</div>';
		 echo '<div class="wrap">';
			echo '<h1 class="entry-title">';
				single_term_title();
			echo '</h1>';
}








	/**
 * Display category image on category archive
 */
add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );
function woocommerce_category_image() {
    if ( is_product_category() ){
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
	    if ( $image ) {
		    echo '<img src="' . $image . '" alt="' . $cat->name . '" />';


		}
	}
}


			if ( have_posts() ) :
				woocommerce_content();
			endif; 


if( class_exists('ACF') ) {
	$term = get_queried_object();
	$text = get_field('tekst_nederst', $term);
	echo $text;
}
	

echo '</div>';
echo '</main>';