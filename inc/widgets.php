<?php
function mother_widgets_init()
{

    // Aside
    register_sidebar(
        array(
            'name'          => __('Aside left', 'webspeed-domain'),
            'id'            => 'aside-left',
            'description'   => __('Venstre sidebar', 'webspeed-domain'),
            'before_widget' => '<div id="%1$s" class="widget aside-widget aside-left-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title-aside">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Aside Indlæg', 'webspeed-domain'),
            'id'            => 'aside-single',
            'description'   => __('Sidebar på Indlæg', 'webspeed-domain'),
            'before_widget' => '<div id="%1$s" class="widget aside-widget aside-single-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title-aside">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Aside right', 'webspeed-domain'),
            'id'            => 'aside-right',
            'description'   => __('Højre sidebar', 'webspeed-domain'),
            'before_widget' => '<div id="%1$s" class="widget aside-widget aside-right-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title-aside">',
            'after_title'   => '</h4>',
        )
    );

    // Pre content
    register_sidebar(
        array(
            'name'          => __('Pre content', 'webspeed-domain'),
            'id'            => 'pre-content',
            'description'   => __('Widget før indhold', 'webspeed-domain'),
            'before_widget' => '<div id="%1$s" class="widget pre-content-col %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title-pre-content">',
            'after_title'   => '</h4>',
        )
    );

    // Post content
    register_sidebar(
        array(
            'name'          => __('Post content', 'webspeed-domain'),
            'id'            => 'post-content',
            'description'   => __('Widget efter indhold', 'webspeed-domain'),
            'before_widget' => '<div id="%1$s" class="widget post-content-col %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title-post-content">',
            'after_title'   => '</h4>',
        )
    );

    // Post content Frontpage
    register_sidebar(
        array(
            'name'          => __('Post content Frontpage', 'webspeed-domain'),
            'id'            => 'post-content-frontpage',
            'description'   => __('Widget efter indhold på forsiden', 'webspeed-domain'),
            'before_widget' => '<div id="%1$s" class="widget post-content-col %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title-post-content">',
            'after_title'   => '</h4>',
        )
    );

    // Footer
    register_sidebar(
        array(
            'name'          => __('Footer', 'webspeed-domain'),
            'id'            => 'footer',
            'description'   => __('Sidefod', 'webspeed-domain'),
            'before_widget' => '<div id="%1$s" class="widget footer-col %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title-footer">',
            'after_title'   => '</h4>',
        )
    );

    // Post Footer
    register_sidebar(
        array(
            'name'          => __('Post Footer', 'webspeed-domain'),
            'id'            => 'post-footer',
            'description'   => __('Efter sidefod', 'webspeed-domain'),
            'before_widget' => '<div id="%1$s" class="widget widget-post-footer %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title widget-title-post-footer">',
            'after_title'   => '</h5>',
        )
    );

    // Menubar widget
    register_sidebar(
        array(
            'name'          => __('Menu widget', 'webspeed-domain'),
            'id'            => 'menu-widget',
            'description'   => __('Vises KUN i mobilmenu!', 'webspeed-domain'),
            'before_widget' => '<div id="%1$s" class="widget widget-menu %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title widget-title-menu-widget">',
            'after_title'   => '</h5>',
        )
    );

    // Slide in frontpage
    register_sidebar(
        array(
            'name'          => __('Slide in ', 'webspeed-domain'),
            'id'            => 'slide-in-frontpage',
            'description'   => __('Vises KUN på forsiden!', 'webspeed-domain'),
            'before_widget' => '<div id="%1$s" class="widget widget-slide-in %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title widget-title-slide-in-widget">',
            'after_title'   => '</h5>',
        )
    );

    // 404 widget
    register_sidebar(
        array(
            'name'          => __('404', 'webspeed-domain'),
            'id'            => 'no-page',
            'description'   => __('404 siden', 'webspeed-domain'),
            'before_widget' => '<div id="%1$s" class="widget widget-pmenu %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title widget-title-404-widget">',
            'after_title'   => '</h5>',
        )
    );

}

add_action('widgets_init', 'mother_widgets_init');
