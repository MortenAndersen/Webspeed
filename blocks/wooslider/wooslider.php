<div class="carousel">
  <button class="prev">&#10094;</button>
  <ul class="carousel-track products slider">
    <?php
    $filter = get_field('product_filter');
$number = get_field('antal');

$args = [
    'post_type' => 'product',
    'posts_per_page' => $number,
    'orderby' => 'date',
    'order' => 'DESC',
    'meta_query' => [
        [
            'key' => '_stock_status',
            'value' => 'instock',
            'compare' => '='
        ]
    ],
];

// Hvis det er en Woo-kategori (tallene i select er term_ids)
if (is_numeric($filter)) {
    $args['tax_query'] = [
        [
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => intval($filter),
        ]
    ];
} elseif ($filter === 'tilbud') {
    $args['post__in'] = wc_get_product_ids_on_sale();
}

// Hvis det er "nyhed", bruger vi bare default args (intet ekstra filter)

$loop = new WP_Query($args);


    if ($loop->have_posts()) {
        while ($loop->have_posts()) : $loop->the_post();
            wc_get_template_part('content', 'product');
        endwhile;
    } else {
        echo __('No products found');
    }
    wp_reset_postdata();
    ?>
  </ul>
  <button class="next">&#10095;</button>
</div>
