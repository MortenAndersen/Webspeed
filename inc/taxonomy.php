<?php
// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'webspeed_elements_create_events_custom_taxonomy', 0 );

//create a custom taxonomy name it "type" for your posts
function webspeed_elements_create_events_custom_taxonomy() {

  $labels = array(
    'name' => _x( 'Element Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Element Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Søg Element Type' ),
    'all_items' => __( 'Alle Elements Typer' ),
    'parent_item' => __( 'Parent Element Type' ),
    'parent_item_colon' => __( 'Parent Element Type:' ),
    'edit_item' => __( 'Ret Element Type' ),
    'update_item' => __( 'Updater Element Type' ),
    'add_new_item' => __( 'Tilføj ny Element Type' ),
    'new_item_name' => __( 'Ny Element Type navn' ),
    'menu_name' => __( 'Typer' ),
  );

  register_taxonomy('webspeeed_element_type',array('elements'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'publicly_queryable' => false,
    'show_in_rest' => true,
    'show_in_nav_menus'          => false,
    'rewrite' => array( 'slug' => 'element-type' ),
  ));
}