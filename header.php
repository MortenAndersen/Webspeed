<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>
<?php //root_css();?>
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

/**
 * web_header_class normal eller sticky header
 */

echo '<header class="page-header' . web_header_class() . '">';


$woo_cart = get_theme_mod('webspeed_woo_card');
if ($woo_cart == true && class_exists('WooCommerce')) {
	echo '<div class="grid wrap-no-pad woo-menu">';
		echo '<div class="logo-search-menu">';
			echo '<div class="flex menu-inner">';
				web_logo();

				if (is_active_sidebar('woo-prod-search')) {
					echo '<div class="prod-search-con">';
						dynamic_sidebar('woo-prod-search');
					echo '</div>';
				}
	
				get_template_part('template-parts/nav/main', 'menu');
			echo '</div>';

		echo '</div>';

		echo '<div class="cart-con">';
			if (is_active_sidebar('woo-menu-cart')) {
				dynamic_sidebar('woo-menu-cart');
			} else {
					echo '<a href="' . wc_get_cart_url() . '" title="Gå til kurven"><svg id="webcart" viewBox="0 0 32 32" width="38" height="38" aria-hidden="true" focusable="false"><circle class="cir" cx="12.6667" cy="24.6667" r="2"></circle><circle class="cir" cx="23.3333" cy="24.6667" r="2"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M9.28491 10.0356C9.47481 9.80216 9.75971 9.66667 10.0606 9.66667H25.3333C25.6232 9.66667 25.8989 9.79247 26.0888 10.0115C26.2787 10.2305 26.3643 10.5211 26.3233 10.8081L24.99 20.1414C24.9196 20.6341 24.4977 21 24 21H12C11.5261 21 11.1173 20.6674 11.0209 20.2034L9.08153 10.8701C9.02031 10.5755 9.09501 10.269 9.28491 10.0356ZM11.2898 11.6667L12.8136 19H23.1327L24.1803 11.6667H11.2898Z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M5.66669 6.66667C5.66669 6.11438 6.1144 5.66667 6.66669 5.66667H9.33335C9.81664 5.66667 10.2308 6.01229 10.3172 6.48778L11.0445 10.4878C11.1433 11.0312 10.7829 11.5517 10.2395 11.6505C9.69614 11.7493 9.17555 11.3889 9.07676 10.8456L8.49878 7.66667H6.66669C6.1144 7.66667 5.66669 7.21895 5.66669 6.66667Z"></path></svg></a>';
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
if (is_front_page()) {
	do_action('webspeed_after_header_front');
}

if (is_active_sidebar('pre-content')) {
	dynamic_sidebar('pre-content');
}
