<?php



add_shortcode('childmenu', 'child_menu');
function child_menu($atts) {
  
     global $post;
    ob_start();


/* -------------------------------------- */
if (!function_exists('child_menu_list')) {
function child_menu_list(){

    if ( ! is_page() ) {
      return false;
    }

    // Get the current post.
    $post = get_post();


    $ancestors = get_post_ancestors( $post->ID );

    // If there are ancestors, get the top level parent.
    // Otherwise use the current post's ID.
    $parent = ( ! empty( $ancestors ) ) ? array_pop( $ancestors ) : $post->ID;

    // Get all pages that are a child of $parent.
    $pages = get_pages( [
                     'child_of' => $parent,
                     ] );

    // Bail if there are no results.
    if ( ! $pages ) {
        return false;
    }

    // Store array of page IDs to include latere on.
    $page_ids = array();
    foreach ( $pages as $page ) {
        $page_ids[] = $page->ID;
    }

    // Add parent page to beginning of $page_ids array.


    array_unshift( $page_ids, $parent );


    // Get the output and return results if they exist.
    $output = wp_list_pages( [
        'include'  => $page_ids,
        'title_li' => false,
        'echo'     => false,
        'sort_column'   => 'menu_order',
    ] );

    if ( ! $output ) {
        return false;
    } else { 
        echo '<nav class="child-menu"><ul class="child-menu-top">' . PHP_EOL .
                            $output . PHP_EOL .
                        '</ul></nav>' . PHP_EOL;
    }
}
}
/* -------------------------------------- */


     child_menu_list();


    $myvariable = ob_get_clean();
    return $myvariable;
}