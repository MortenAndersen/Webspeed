<div class="carousel">
<button class="prev">&#10094;</button>
<ul class="carousel-track products slider">
	<?php
    // Antal
    $number = get_field('antal');

if( get_field('filter_woo') == 'tilbud' ) {
    $sale_products = wc_get_product_ids_on_sale();

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => $number,
        'orderby' => 'date',
        'order' => 'DESC',
        'post__in' => $sale_products,
        'meta_query' => array(
            array(
                'key' => '_stock_status',
                'value' => 'instock',
                'compare' => '=',
            ),
        ),
    );
}
    if( get_field('filter_woo') == 'nyhed' ) {
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => $number,
            'orderby' => 'date',
            'order' => 'DESC',
            'meta_query' => array(
                array(
                    'key' => '_stock_status',
                    'value' => 'instock',
                    'compare' => '=',
                ),
            ),
		);
    }


		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
</ul>
  <button class="next">&#10095;</button>
    </div>