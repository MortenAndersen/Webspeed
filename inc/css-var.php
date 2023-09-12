<?php

function root_css() {
	echo '<style>';
	echo ':root {';

	if (get_theme_mod('main_bg')) {
		echo '--main-bg:' . get_theme_mod('main_bg') . '; ';
	} else {
		echo '--main-bg:#fff;';
	}

	if (get_theme_mod('footer_color')) {
		echo '--footer-color:' . get_theme_mod('footer_color') . '; ';
	} else {
		echo '--footer-color:#333;';
	}

	if (get_theme_mod('body_bg')) {
		echo '--body-bg:' . get_theme_mod('body_bg') . '; ';
	} else {
		echo '--body-bg:#f6f6f6;';
	}

	if (get_theme_mod('body_color')) {
		echo '--body-color:' . get_theme_mod('body_color') . '; ';
	} else {
		echo '--body-color:#222;';
	}

	if (get_theme_mod('link')) {
		echo '--link:' . get_theme_mod('link') . '; ';
	} else {
		echo '--link:#065099;';
	}

	if (get_theme_mod('link_hover')) {
		echo '--link-hover:' . get_theme_mod('link_hover') . '; ';
	} else {
		echo '--link-hover:#0073e5;';
	}

	if (get_theme_mod('header_bg')) {
		echo '--header-bg:' . get_theme_mod('header_bg') . '; ';
	} else {
		echo '--header-bg:#fff;';
	}

	if (get_theme_mod('pre_header_bg')) {
		echo '--pre-header-bg:' . get_theme_mod('pre_header_bg') . '; ';
	} else {
		echo '--pre-header-bg:#fff;';
	}

	if (get_theme_mod('pre_header_color')) {
		echo '--pre-header-color:' . get_theme_mod('pre_header_color') . '; ';
	} else {
		echo '--pre-header-color:#222;';
	}

	if (get_theme_mod('header_color')) {
		echo '--header-color:' . get_theme_mod('header_color') . '; ';
	} else {
		echo '--header-color:#222;';
	}

	if (get_theme_mod('border_color')) {
		echo '--border:' . get_theme_mod('border_color') . '; ';
	} else {
		echo '--border:#eee;';
	}

	if (get_theme_mod('pil_op')) {
		echo '--pil-op:' . get_theme_mod('pil_op') . '; ';
	} else {
		echo '--pil-op:#c60202;';
	}

	if (get_theme_mod('slider_bg')) {
		echo '--slider-bg:' . get_theme_mod('slider_bg') . '; ';
	} else {
		echo '--slider-bg:#0073e5;';
	}

	if (get_theme_mod('slider_color')) {
		echo '--slider-color:' . get_theme_mod('slider_color') . '; ';
	} else {
		echo '--slider-color:#fff;';
	}

	if (get_theme_mod('top_caption_bg')) {
		echo '--top-caption-bg:' . get_theme_mod('top_caption_bg') . 'cc; ';
	} else {
		echo '--top-caption-bg:#000000cc;';
	}

	if (get_theme_mod('top_caption_color')) {
		echo '--top-caption-color:' . get_theme_mod('top_caption_color') . '; ';
	} else {
		echo '--top-caption-color:#fff;';
	}

	if (get_theme_mod('submit_bg')) {
		echo '--submit-bg:' . get_theme_mod('submit_bg') . '; ';
	} else {
		echo '--submit-bg:#072f42d9;';
	}

	if (get_theme_mod('submit_color')) {
		echo '--submit-color:' . get_theme_mod('submit_color') . '; ';
	} else {
		echo '--submit-color:#fff;';
	}

	if (get_theme_mod('sticky_scroll_bg')) {
		echo '--sticky-scroll-bg:' . get_theme_mod('sticky_scroll_bg') . '; ';
	} else {
		echo '--sticky-scroll-bg:#f2f2f2;';
	}

	if (get_theme_mod('menu_desktop_color')) {
		echo '--menu-desktop-color:' . get_theme_mod('menu_desktop_color') . '; ';
	} else {
		echo '--menu-desktop-color:#222;';
	}

	if (get_theme_mod('menu_desktop_hover_color')) {
		echo '--menu-desktop-hover-color:' . get_theme_mod('menu_desktop_hover_color') . '; ';
	} else {
		echo '--menu-desktop-hover-color:#222;';
	}

	if (get_theme_mod('menu_desktop_current_color')) {
		echo '--menu-desktop-current-color:' . get_theme_mod('menu_desktop_current_color') . '; ';
	} else {
		echo '--menu-desktop-current-color:#0073e5;';
	}

	if (get_theme_mod('menu_desktop_sub_bg')) {
		echo '--menu-desktop-sub-bg:' . get_theme_mod('menu_desktop_sub_bg') . '; ';
	} else {
		echo '--menu-desktop-sub-bg:#f2f2f2;';
	}

	if (get_theme_mod('menu_desktop_sub_color')) {
		echo '--menu-desktop-sub-color:' . get_theme_mod('menu_desktop_sub_color') . '; ';
	} else {
		echo '--menu-desktop-sub-color:#222;';
	}

	if (get_theme_mod('menu_desktop_sub_current_bg')) {
		echo '--menu-desktop-sub-current-bg:' . get_theme_mod('menu_desktop_sub_current_bg') . '; ';
	} else {
		echo '--menu-desktop-sub-current-bg:#0073e5;';
	}

	if (get_theme_mod('menu_desktop_sub_current_color')) {
		echo '--menu-desktop-sub-current-color:' . get_theme_mod('menu_desktop_sub_current_color') . '; ';
	} else {
		echo '--menu-desktop-sub-current-color:#fff;';
	}

	if (get_theme_mod('menu_desktop_sub_hover_bg')) {
		echo '--menu-desktop-sub-hover-bg:' . get_theme_mod('menu_desktop_sub_hover_bg') . '; ';
	} else {
		echo '--menu-desktop-sub-hover-bg:#fff;';
	}

	if (get_theme_mod('menu_desktop_sub_hover_color')) {
		echo '--menu-desktop-sub-hover-color:' . get_theme_mod('menu_desktop_sub_hover_color') . '; ';
	} else {
		echo '--menu-desktop-sub-hover-color:#222;';
	}

	if (get_theme_mod('menu_desktop_sub_border')) {
		echo '--menu-desktop-sub-border:' . get_theme_mod('menu_desktop_sub_border') . '; ';
	} else {
		echo '--menu-desktop-sub-border:#fff;';
	}

	if (get_theme_mod('menu_mobile_bg')) {
		echo '--menu-mobile-bg:' . get_theme_mod('menu_mobile_bg') . '; ';
	} else {
		echo '--menu-mobile-bg:#262626;';
	}

	if (get_theme_mod('menu_mobile_color')) {
		echo '--menu-mobile-color:' . get_theme_mod('menu_mobile_color') . '; ';
	} else {
		echo '--menu-mobile-color:#fff;';
	}

	if (get_theme_mod('menu_mobile_border')) {
		echo '--menu-mobile-border:' . get_theme_mod('menu_mobile_border') . '; ';
	} else {
		echo '--menu-mobile-border:#b2b2b2;';
	}

	if (get_theme_mod('menu_mobile_trigger_bg')) {
		echo '--menu-mobile-trigger-bg:' . get_theme_mod('menu_mobile_trigger_bg') . '; ';
	} else {
		echo '--menu-mobile-trigger-bg:transparent;';
	}

	if (get_theme_mod('menu_mobile_trigger_color')) {
		echo '--menu-mobile-trigger-color:' . get_theme_mod('menu_mobile_trigger_color') . '; ';
	} else {
		echo '--menu-mobile-trigger-color:#fff;';
	}

	if (get_theme_mod('menu_mobile_trigger_active_bg')) {
		echo '--menu-mobile-trigger-active-bg:' . get_theme_mod('menu_mobile_trigger_active_bg') . '; ';
	} else {
		echo '--menu-mobile-trigger-active-bg:rgba(0,0,0,.2);';
	}

	if (get_theme_mod('menu_mobile_trigger_active_color')) {
		echo '--menu-mobile-trigger-active-color:' . get_theme_mod('menu_mobile_trigger_active_color') . '; ';
	} else {
		echo '--menu-mobile-trigger-active-color:#fff;';
	}

	if (get_theme_mod('menu_icon')) {
		echo '--menu-icon:' . get_theme_mod('menu_icon') . '; ';
	} else {
		echo '--menu-icon:#111;';
	}

	if (get_theme_mod('menu_icon_close')) {
		echo '--menu-icon-close:' . get_theme_mod('menu_icon_close') . '; ';
	} else {
		echo '--menu-icon-close:#fff;';
	}

	if (get_theme_mod('page_width')) {
		echo '--page-width:' . get_theme_mod('page_width') . 'px; ';
	} else {
		echo '--page-width:1440px;';
	}

	if (get_theme_mod('aside_left')) {
		echo '--aside-left:' . get_theme_mod('aside_left') . '%; ';
	} else {
		echo '--aside-left:24%;';
	}

	if (get_theme_mod('aside_right')) {
		echo '--aside-right:' . get_theme_mod('aside_right') . '%; ';
	} else {
		echo '--aside-right:24%;';
	}

	if (get_theme_mod('google_font_family')) {
		echo '--font-family:' . get_theme_mod('google_font_family') . '; ';
	} else {
		echo '--font-family:arial,x-locale-body,sans-serif;';
	}

	echo '}';
	echo '</style>';
}