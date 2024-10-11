<?php
function webspeed_widgets_init() {
	// Pre header
	register_sidebar(
		array(
			'name' => __('Pre header', 'webspeed-domain'),
			'id' => 'pre-header',
			'description' => __('Widget før header', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget pre-header-col %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="wp-block-heading">',
			'after_title' => '</p>',
		)
	);

	// Aside
	register_sidebar(
		array(
			'name' => __('Aside left', 'webspeed-domain'),
			'id' => 'aside-left',
			'description' => __('Venstre sidebar', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget aside-widget aside-left-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="wp-block-heading">',
			'after_title' => '</p>',
		)
	);

	register_sidebar(
		array(
			'name' => __('Aside Indlæg', 'webspeed-domain'),
			'id' => 'aside-single',
			'description' => __('Sidebar på Indlæg', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget aside-widget aside-single-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="wp-block-heading">',
			'after_title' => '</p>',
		)
	);

	register_sidebar(
		array(
			'name' => __('Aside right', 'webspeed-domain'),
			'id' => 'aside-right',
			'description' => __('Højre sidebar', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget aside-widget aside-right-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="wp-block-heading">',
			'after_title' => '</p>',
		)
	);

	// Pre content
	register_sidebar(
		array(
			'name' => __('Pre content', 'webspeed-domain'),
			'id' => 'pre-content',
			'description' => __('Widget før indhold', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget pre-content-col %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="wp-block-heading">',
			'after_title' => '</p>',
		)
	);

	// Post content
	register_sidebar(
		array(
			'name' => __('Post content', 'webspeed-domain'),
			'id' => 'post-content',
			'description' => __('Widget efter indhold', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget post-content-col %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="wp-block-heading">',
			'after_title' => '</p>',
		)
	);

	// Post content Frontpage
	register_sidebar(
		array(
			'name' => __('Post content Frontpage', 'webspeed-domain'),
			'id' => 'post-content-frontpage',
			'description' => __('Widget efter indhold på forsiden', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget post-content-col %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="wp-block-heading">',
			'after_title' => '</p>',
		)
	);

	// Frontpage fokus
	register_sidebar(
		array(
			'name' => __('Frontpage fokus', 'webspeed-domain'),
			'id' => 'fokus-frontpage',
			'description' => __('Widget til forsiden fokus indhold', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget fokus-frontpage %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="wp-block-heading">',
			'after_title' => '</p>',
		)
	);

	// Pre Footer
	register_sidebar(
		array(
			'name' => __('Pre Footer', 'webspeed-domain'),
			'id' => 'pre-footer',
			'description' => __('Før sidefod', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget widget-post-footer %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="wp-block-heading">',
			'after_title' => '</p>',
		)
	);

	// Footer
	register_sidebar(
		array(
			'name' => __('Footer', 'webspeed-domain'),
			'id' => 'footer',
			'description' => __('Sidefod', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget footer-col %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="wp-block-heading">',
			'after_title' => '</p>',
		)
	);

	// Post Footer
	register_sidebar(
		array(
			'name' => __('Post Footer', 'webspeed-domain'),
			'id' => 'post-footer',
			'description' => __('Efter sidefod', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget widget-post-footer %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="wp-block-heading">',
			'after_title' => '</p>',
		)
	);

	// Menubar widget
	register_sidebar(
		array(
			'name' => __('Menu widget', 'webspeed-domain'),
			'id' => 'menu-widget',
			'description' => __('Vises KUN i mobilmenu!', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget widget-menu %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<p class="wp-block-heading">',
			'after_title' => '</p>',
		)
	);

	// Slide in frontpage
	register_sidebar(
		array(
			'name' => __('Slide in ', 'webspeed-domain'),
			'id' => 'slide-in-frontpage',
			'description' => __('Vises KUN på forsiden!', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget widget-slide-in %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="wp-block-heading">',
			'after_title' => '</h5>',
		)
	);

	// 404 widget
	register_sidebar(
		array(
			'name' => __('404', 'webspeed-domain'),
			'id' => 'no-page',
			'description' => __('404 siden', 'webspeed-domain'),
			'before_widget' => '<div id="%1$s" class="widget widget-pmenu %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="wp-block-heading">',
			'after_title' => '</h5>',
		)
	);

}

add_action('widgets_init', 'webspeed_widgets_init');
