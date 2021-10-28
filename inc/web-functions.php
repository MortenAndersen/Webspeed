<?php
// Logo

function web_logo()
{
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo           = wp_get_attachment_image_src($custom_logo_id, 'full');

    if (has_custom_logo()) {
        echo '<div class="logo"><a href="' . home_url() . '"><img id="logo" width="' . $logo[1] . '" height="' . $logo[2]. '" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a></div>';
    } else {
        if ( get_bloginfo( 'name' )  !== '' ) { 
            echo '<div class="name">';
            echo '<span class="blog-name">' . get_bloginfo( 'name' ) . '</span>';
        
            if ( get_bloginfo( 'description' )  !== '' ) {
                echo '<span class="blog-desc">' . get_bloginfo('description') . '</span>';
            } 
            echo '</div>';
        } 
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

// Thumbnail

function web_thumbnail_link() {
    if ( has_post_thumbnail() ) {
        echo '<div class="img-zoom">';
            echo '<div class="oversigt-post-img overflow">';
            echo '<a href="' . get_the_permalink() . '">';
            the_post_thumbnail();
            echo '</a>';
            echo '</div>';
        echo '</div>';
    }
}

function web_thumbnail() {
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
        the_post_thumbnail();
        
            echo '<div class="wrap-no-pad">';
            echo '<div class="top-caption">';


            $arr = array(" | " => "<br />","<" => "<span>",">" => "</span>");
            echo '<h1 class="entry-title-big">' . strtr(get_the_title(),$arr) . '</h1>';

            //echo '<h1 class="entry-title-big">' . str_replace(' | ', '<br />', get_the_title()) . '</h1>';
            if(!empty($caption)) {
                echo '<h2 class="sub-title-big">' . $caption . '</h2>';
            }
             echo '</div>';
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

// Social Icon
if (!function_exists('web_social_menu')) {
    function web_social_menu()
    {
    echo '<div class="social">';
        echo '<a href="https://linkedin.com" target="_blank"><img src="' . get_template_directory_uri() . '/img/linkedin.svg" alt="Linkedin"></a>';
        echo '<a href="https://facebook.com" target="_blank"><img src="' . get_template_directory_uri() . '/img/facebook.svg" alt="Facebook"></a>';
        echo '<a href="https://twitter.com" target="_blank"><img src="' . get_template_directory_uri() . '/img/twitter.svg" alt="Twitter"></a>';
        echo '<a href="https://youtube.com" target="_blank"><img src="' . get_template_directory_uri() . '/img/youtube.svg" alt="Youtybe"></a>';
    echo '</div>';

    }
}

// Reference
function web_reference() {
    echo '<div class="reference"><a href="https://www.web.dk" target="_blank" rel="nofollow">Made by Web.dK</a></div>';
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

// Title 
function web_title() {
    $arr = array(" | " => "<br />","<" => "<span>",">" => "</span>");
    echo '<h1 class="entry-title">' . strtr(get_the_title(),$arr) . '</h1>';
}
function get_web_title() {
    $arr = array(" | " => "<br />","<" => "<span>",">" => "</span>");
    $title = strtr(get_the_title(),$arr);
    return $title;
}
function get_clean_web_title() {
    $arr = array(" | " => " ","<" => "",">" => "");
    $title = strtr(get_the_title(),$arr);
    return $title;
}