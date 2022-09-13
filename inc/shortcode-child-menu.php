<?php 

// https://wordpress.stackexchange.com/questions/299138/generate-a-menu-that-displays-all-child-pages-of-top-level-parent

add_shortcode('child-menu', 'child_menu');
function child_menu($atts) {
  
    ob_start();
    extract(shortcode_atts(
        array(
            'show_parent' => 'yes',
        ), $atts));


/* -------------------------------------- */


	if ( ! is_page() ) {
      return false;
    }

    // Get the current post.
    $post = get_post();

    /**
     * Get array of post ancestor IDs.
     * Note: The direct parent is returned as the first value in the array.
     * The highest level ancestor is returned as the last value in the array.
     * See https://codex.wordpress.org/Function_Reference/get_post_ancestors
     */
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

    if ( $show_parent == 'yes' ) {
    array_unshift( $page_ids, $parent );
}

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
        return '<nav class="child-menu"><ul class="child-menu-top">' . PHP_EOL .
                            $output . PHP_EOL .
                        '</ul></nav>' . PHP_EOL;
    }


    $myvariable = ob_get_clean();
    return $myvariable;
}