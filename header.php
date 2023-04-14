<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>
<?php root_css();?>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" />

</head>

<body <?php body_class();?> id="top">
  <?php
wp_body_open();

if (is_active_sidebar('pre-header')) {
	echo '<div class="pre-header-con">';
	echo '<div class="' . get_pre_header_class() . '">';
	dynamic_sidebar('pre-header');
	echo '</div>';
	echo '</div>';
}

echo '<header class="page-header' . web_header_class() . '">';

if (class_exists('WooCommerce')) {
	echo '<div class="grid wrap-no-pad woo-menu">';
	echo '<div class="logo-search-menu">';
	echo '<div class="flex menu-inner">';
	web_logo();

	echo '<div class="prod-search-con">';
	if (is_active_sidebar('woo-prod-search')) {
		dynamic_sidebar('woo-prod-search');
	}
	echo '</div>';
	get_template_part('template-parts/nav/main', 'menu');
	echo '</div>';

	echo '</div>';
	echo '<div class="cart-con">';
	if (is_active_sidebar('woo-menu-cart')) {
		dynamic_sidebar('woo-menu-cart');
	}
	echo '</div>';
	echo '<div class="menu-icon">';
	get_template_part('img/menu', 'icon');
	echo '</div>';
	echo '</div>';
} else {
	echo '<div class="flex wrap-no-pad">';
	web_logo();
	echo '<div class="menu-icon">';
	get_template_part('img/menu', 'icon');
	echo '</div>';
	get_template_part('template-parts/nav/main', 'menu');
	echo '</div>';
}

echo '</header>';

do_action('webspeed_after_header');

if (is_active_sidebar('pre-content')) {
	dynamic_sidebar('pre-content');
}

?>