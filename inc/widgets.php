<?php
function mother_widgets_init()
{

    // Aside
    register_sidebar(
        array(
            'name'          => __('Aside left', 'web-doamin'),
            'id'            => 'aside-left',
            'description'   => __('Venstre sidebar', 'web-doamin'),
            'before_widget' => '<div id="%1$s" class="widget aside-widget aside-left-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title-aside">',
            'after_title'   => '</h4>',
        )
    );

     register_sidebar(
        array(
            'name'          => __('Aside right', 'web-doamin'),
            'id'            => 'aside-right',
            'description'   => __('Højre sidebar', 'web-doamin'),
            'before_widget' => '<div id="%1$s" class="widget aside-widget aside-right-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title-aside">',
            'after_title'   => '</h4>',
        )
    );

    // Pre content
    register_sidebar(
        array(
            'name'          => __('Pre content', 'web-doamin'),
            'id'            => 'pre-content',
            'description'   => __('Widget før indhold', 'web-doamin'),
            'before_widget' => '<div id="%1$s" class="widget pre-content-col %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title-pre-content">',
            'after_title'   => '</h4>',
        )
    );

    // Post content
    register_sidebar(
        array(
            'name'          => __('Post content', 'web-doamin'),
            'id'            => 'post-content',
            'description'   => __('Widget efter indhold', 'web-doamin'),
            'before_widget' => '<div id="%1$s" class="widget post-content-col %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title-post-content">',
            'after_title'   => '</h4>',
        )
    );

    // Post content Frontpage
    register_sidebar(
        array(
            'name'          => __('Post content Frontpage', 'web-doamin'),
            'id'            => 'post-content-frontpage',
            'description'   => __('Widget efter indhold på forsiden', 'web-doamin'),
            'before_widget' => '<div id="%1$s" class="widget post-content-col %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title-post-content">',
            'after_title'   => '</h4>',
        )
    );

    // Footer
    register_sidebar(
        array(
            'name'          => __('Footer', 'web-doamin'),
            'id'            => 'footer',
            'description'   => __('Sidefod', 'web-doamin'),
            'before_widget' => '<div id="%1$s" class="widget footer-col %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title widget-title-footer">',
            'after_title'   => '</h4>',
        )
    );

    // Post Footer
    register_sidebar(
        array(
            'name'          => __('Post Footer', 'web-doamin'),
            'id'            => 'post-footer',
            'description'   => __('Efter sidefod', 'web-doamin'),
            'before_widget' => '<div id="%1$s" class="widget widget-post-footer %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title widget-title-post-footer">',
            'after_title'   => '</h5>',
        )
    );

    // Menubar widget
    register_sidebar(
        array(
            'name'          => __('Menu widget', 'web-doamin'),
            'id'            => 'menu-widget',
            'description'   => __('Vises KUN i mobilmenu!', 'web-doamin'),
            'before_widget' => '<div id="%1$s" class="widget widget-pmenu %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title widget-title-menu-widget">',
            'after_title'   => '</h5>',
        )
    );

    // 404 widget
    register_sidebar(
        array(
            'name'          => __('404', 'web-doamin'),
            'id'            => 'no-page',
            'description'   => __('404 siden', 'web-doamin'),
            'before_widget' => '<div id="%1$s" class="widget widget-pmenu %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="widget-title widget-title-404-widget">',
            'after_title'   => '</h5>',
        )
    );

}

add_action('widgets_init', 'mother_widgets_init');
