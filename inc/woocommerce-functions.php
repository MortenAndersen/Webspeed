<?php
function webspeed_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'webspeed_add_woocommerce_support' );

// Gallery
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

// Wrapper
add_action('woocommerce_before_main_content', 'webspeed_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'webspeed_wrapper_end', 8);

function webspeed_wrapper_start() {
    echo '<div class="wrap woo">';
}

function webspeed_wrapper_end() {
    echo '</div>';
}

// ACF felt nederst på woo kategorisider
if( class_exists('ACF') ) {
    add_action('woocommerce_after_main_content', 'webspeed_taxonmy_txt', 5);
    function webspeed_taxonmy_txt() {
        $term = get_queried_object();
        $text =  get_field('tekst_nederst', $term);
        echo  $text ; 
    }
}

// Remove each style one by one
//add_filter( 'woocommerce_enqueue_styles', 'webspeed_dequeue_styles' );
function webspeed_dequeue_styles( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-general'] );    // Remove the gloss
    //unset( $enqueue_styles['woocommerce-layout'] );       // Remove the layout
    //unset( $enqueue_styles['woocommerce-smallscreen'] );  // Remove the smallscreen optimisation
    return $enqueue_styles;
}

// Remove the sorting dropdown from Woocommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );
// Remove the result count from WooCommerce
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );

/**
 * Customize product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_custom_description_tab', 98 );

function woo_custom_description_tab( $tabs ) {
    $tabs['description']['callback'] = 'woo_custom_description_tab_content';    // Custom description callback
    return $tabs;
}

function woo_custom_description_tab_content() {
    the_content();
}


//WooCommerce Change Title from H2 -> H3
 
function webspeed_products_title() {
 
    echo '<h3 class="woocommerce-loop-product__title">'. get_the_title() . '</h3>';
 
}
 
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
 
add_action('woocommerce_shop_loop_item_title', 'webspeed_products_title', 10);


// Relaterede overskrift
function webspeed_related_title() {
    echo '<h4 class="related">'. __( 'Related products', 'woocommerce' ) . '</h4>';
}
remove_action('woocommerce_product_related_products_heading', 'related', 10);
add_action('woocommerce_product_related_products_heading', 'webspeed_related_title', 10);

// Upsell overskrift
function webspeed_upsell_title() {
    echo '<h4 class="upsell">'. __( 'You may also like&hellip;', 'woocommerce' ) . '</h4>';
}
remove_action('woocommerce_product_upsells_products_heading', 'woocomerce', 10);
add_action('woocommerce_product_upsells_products_heading', 'webspeed_upsell_title', 10);


// Yderliger information overskrift
function webspeed_add_title() {
    echo '<p class="additional_information">'. __( 'Additional information', 'woocommerce' ) . ' :</p>';
}
remove_action('woocommerce_product_additional_information_heading', 'woocomerce', 10);
add_action('woocommerce_product_additional_information_heading', 'webspeed_add_title', 10);

