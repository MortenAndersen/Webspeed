<?php
// Logo

if (!function_exists('web_logo')) {
    function web_logo()
    {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo           = wp_get_attachment_image_src($custom_logo_id, 'full');

        if (has_custom_logo()) {
            echo '<div class="logo"><a href="' . home_url() . '"><img id="logo" width="' . $logo[1] . '" height="' . $logo[2]. '" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a></div>';
        } else {
            if ( get_bloginfo( 'name' )  !== '' ) { 
                echo '<div class="name">';
                echo '<span class="blog-name"><a href="' . home_url() . '">' . get_bloginfo( 'name' ) . '</a></span>';
            
                if ( get_bloginfo( 'description' )  !== '' ) {
                    echo '<span class="blog-desc">' . get_bloginfo('description') . '</span>';
                } 
                echo '</div>';
            } 
        }
    }
}

// Menu type

if (!function_exists('web_menu')) {
    function web_menu() {
        return 'site-menu';
        // megamenu
    }
}

// BackButton

function web_go_back()
{
        echo '<div class="go-back-con">';
        echo '<button onclick="goBack()" class="go-back">' . esc_html__('Go Back', 'webspeed-domain') . '</button>';
        echo '<script>function goBack() {window.history.back();}</script>';
        echo '</div>';
}

// Read More

function web_read_more()
{
    echo '<p class="read-more"><a href="' . get_the_permalink() . '">' . esc_html__('Read More', 'webspeed-domain') . '</a></p>';
}

// Edit link
function web_edit_link()
{
    if (!is_single()) {
        edit_post_link(__('edit', 'webspeed-domain'), '<p>', '</p>');
    }
}

// Header style
if (!function_exists('web_header_style')) {
    function web_header_style()
    {
        echo 'flex wrap-no-pad';
    }
}

if (!function_exists('web_header_sticky')) {
    function web_header_sticky()
    {
        echo 'sticky-header';
    }
}

function web_excerpt() {
    echo '<div class="the-excerpt">';
        the_excerpt();
    echo '</div>';
}

// Thumbnail

function web_thumbnail_link() {
    if ( has_post_thumbnail() ) {
        echo '<div class="img-zoom">';
            echo '<div class="oversigt-post-img overflow">';
                echo '<a href="' . get_the_permalink() . '">';
                    the_post_thumbnail('webspeed-post');
                echo '</a>';
            echo '</div>';
        echo '</div>';
    }
}

function web_thumbnail() {
    $caption = get_the_post_thumbnail_caption();
    if ( has_post_thumbnail() ) {
        echo '<div class="post-img">';
        the_post_thumbnail('webspeed-post');
        if(!empty($caption)) {
            echo '<div class="caption">' . $caption . '</div>';
        }
        echo '</div>';
    }
}

function web_img() {
    $caption = get_the_post_thumbnail_caption();
    if ( has_post_thumbnail() ) {
        echo '<div class="post-img">';
        the_post_thumbnail();
        if(!empty($caption)) {
            echo '<div class="caption">' . $caption . '</div>';
        }
        echo '</div>';
    }
}

function web_topimg() {
    $caption = get_the_post_thumbnail_caption();
    if ( has_post_thumbnail() ) {
        echo '<div class="top-post-img">';
        the_post_thumbnail( '', [ 'loading' => false]);
        
            echo '<div class="wrap-no-pad">';
            echo '<div class="top-caption">';

            $arr = array(" | " => "<br />");
            echo '<h1 class="entry-title-big">' . strtr(get_the_title(),$arr) . '</h1>';

            if(!empty($caption)) {
                echo '<h2 class="sub-title-big">' . $caption . '</h2>';
            }
             echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}

function web_topimg_blog() {
    if ( has_post_thumbnail() ) {
        
        // Get the ID of the page set to Display Posts in Settings > Reading
        $page_for_posts = get_option( 'page_for_posts' ); 

        // If that page ID exists, and that page has a Featured Image....
        if ($page_for_posts && has_post_thumbnail($page_for_posts)) {

            // Get the ID of that page's Featured Image
            $thumb_id = get_post_thumbnail_id( $page_for_posts);
            echo '<main class="page-content page-blog top-img">';
            echo '<div class="top-post-img">';

                // Display that image
                echo wp_get_attachment_image($thumb_id, 'full');
            
                echo '<div class="wrap-no-pad">';
                    echo '<div class="top-caption">';
                        echo '<h1 class="entry-title-big">';
                            single_post_title();
                        echo '</h1>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        } 
        else {
            echo '<main class="page-content page-blog">';
            echo '<div class="wrap">';
                echo '<h1 class="entry-title">';
                    single_post_title();
                echo '</h1>';
            echo '</div>';
        }
    }
}

function web_small_topimg() {
    $caption = get_the_post_thumbnail_caption();
    if ( has_post_thumbnail() ) {
        echo '<div class="small-top-post-img">';
        the_post_thumbnail();
        

            echo '<div class="top-caption">';

            $arr = array(" | " => "<br />");
            echo '<h1 class="entry-title-big">' . strtr(get_the_title(),$arr) . '</h1>';

             echo '</div>';

        echo '</div>';
    }
}

// Frontpage fokus

function web_front_fokus() {
    if ( is_front_page() && is_active_sidebar( 'fokus-frontpage' )  ) {
        echo '<div class="fokus">';
            echo '<div class="wrap">';
                dynamic_sidebar('fokus-frontpage');
            echo '</div>';
        echo '</div>';
    }
}

// Menu desktop align
if (!function_exists('web_menu_pos')) {
    function web_menu_pos()
    {
        echo 'right-align align-end';
    }
}


// Reference
if (!function_exists('web_reference')) {
    function web_reference() {
        echo '<div class="reference"><a href="https://www.web.dk" target="_blank" rel="nofollow noreferrer">Made by Web.dK</a></div>';
    }
}

// Post date
function web_post_date() {
    $post_date = get_the_date( 'j. F - Y' ); 
    echo '<div class="post-date">' . $post_date . '</div>';
}
// List cat
function web_category() {
    echo '<div class="list-category">';
        the_category(', ');
    echo '</div>';
}
// Post date + List cat
function web_date_cat() {
    $post_date = get_the_date( 'j. F - Y' );
    echo '<div class="post-date-cat post-date">' . $post_date . ' / '; the_category(', ');
    echo '</div>';
}

// Post date + List cat + Author
function web_date_cat_author() {
    $post_date = get_the_date( 'j. F - Y' );
    echo '<div class="post-date-cat post-date">' . $post_date . ' / '; the_category(', ');
    echo  '<div class="author">' . get_the_author_meta('display_name') . '</div>';
    echo '</div>';
}

// Title 
function web_title() {
    $arr = array(" | " => "<br />");
    echo '<h1 class="entry-title">' . strtr(get_the_title(),$arr) . '</h1>';
}
function get_web_title() {
    $arr = array(" | " => "<br />");
    $title = strtr(get_the_title(),$arr);
    return $title;
}
function get_clean_web_title() {
    $arr = array(" | " => " ","<" => "",">" => "");
    $title = strtr(get_the_title(),$arr);
    return $title;
}

// Icons
Function svg_url($type_key) {
    $svg_type = ['calendar', 'phone', 'mail', 'instagram', 'globe', 'map', 'linkedin', 'facebook'];
    $svg_url = '<svg class="icon meeting"><use href="' . get_template_directory_uri() . '/img/contact/sprite-sheet.svg#' .  $svg_type[$type_key]  . '" /></svg>';

    return $svg_url ;
}