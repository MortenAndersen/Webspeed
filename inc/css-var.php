<?php 

function root_css() {
	echo '<style>';
		echo ':root {';

		if( get_theme_mod( 'main_bg' ) ) {
			echo '--main-bg:' . get_theme_mod( 'main_bg' ) . '; ';
		} else {
			echo '--main-bg:#fff;';
		}

		if( get_theme_mod( 'footer_color' ) ) {
			echo '--footer-color:' . get_theme_mod( 'footer_color' ) . '; ';
		} else {
			echo '--footer-color:#333;';
		}

		if( get_theme_mod( 'body_bg' ) ) {
			echo '--body-bg:' . get_theme_mod( 'body_bg' ) . '; ';
		} else {
			echo '--body-bg:#f6f6f6;';
		}

		if( get_theme_mod( 'body_color' ) ) {
			echo '--body-color:' . get_theme_mod( 'body_color' ) . '; ';
		} else {
			echo '--body-color:#222;';
		}

		if( get_theme_mod( 'header_bg' ) ) {
			echo '--header-bg:' . get_theme_mod( 'header_bg' ) . '; ';
		} else {
			echo '--header-bg:#fff;';
		}

		if( get_theme_mod( 'header_color' ) ) {
			echo '--header-color:' . get_theme_mod( 'header_color' ) . '; ';
		} else {
			echo '--header-color:#222;';
		}

		if( get_theme_mod( 'menu_desktop_color' ) ) {
			echo '--menu-desktop-color:' . get_theme_mod( 'menu_desktop_color' ) . '; ';
		} else {
			echo '--menu-desktop-color:#222;';
		}

		if( get_theme_mod( 'menu_desktop_hover_color' ) ) {
			echo '--menu-desktop-hover-color:' . get_theme_mod( 'menu_desktop_hover_color' ) . '; ';
		} else {
			echo '--menu-desktop-hover-color:#222;';
		}

		if( get_theme_mod( 'menu_desktop_current_color' ) ) {
			echo '--menu-desktop-current-color:' . get_theme_mod( 'menu_desktop_current_color' ) . '; ';
		} else {
			echo '--menu-desktop-current-color:#0073e5;';
		}

		if( get_theme_mod( 'menu_desktop_sub_bg' ) ) {
			echo '--menu-desktop-sub-bg:' . get_theme_mod( 'menu_desktop_sub_bg' ) . '; ';
		} else {
			echo '--menu-desktop-sub-bg:#fff;';
		}

		if( get_theme_mod( 'menu_desktop_sub_color' ) ) {
			echo '--menu-desktop-sub-color:' . get_theme_mod( 'menu_desktop_sub_color' ) . '; ';
		} else {
			echo '--menu-desktop-sub-color:#222;';
		}

		if( get_theme_mod( 'menu_desktop_sub_current_bg' ) ) {
			echo '--menu-desktop-sub-current-bg:' . get_theme_mod( 'menu_desktop_sub_current_bg' ) . '; ';
		} else {
			echo '--menu-desktop-sub-current-bg:#0073e5;';
		}

		if( get_theme_mod( 'menu_desktop_sub_current_color' ) ) {
			echo '--menu-desktop-sub-current-color:' . get_theme_mod( 'menu_desktop_sub_current_color' ) . '; ';
		} else {
			echo '--menu-desktop-sub-current-color:#fff;';
		}

		if( get_theme_mod( 'menu_desktop_sub_hover_bg' ) ) {
			echo '--menu-desktop-sub-hover-bg:' . get_theme_mod( 'menu_desktop_sub_hover_bg' ) . '; ';
		} else {
			echo '--menu-desktop-sub-hover-bg:#f2f2f2;';
		}

		if( get_theme_mod( 'menu_desktop_sub_hover_color' ) ) {
			echo '--menu-desktop-sub-hover-color:' . get_theme_mod( 'menu_desktop_sub_hover_color' ) . '; ';
		} else {
			echo '--menu-desktop-sub-hover-color:#222;';
		}

		if( get_theme_mod( 'menu_desktop_sub_border' ) ) {
			echo '--menu-desktop-sub-border:' . get_theme_mod( 'menu_desktop_sub_border' ) . '; ';
		} else {
			echo '--menu-desktop-sub-border:#eee;';
		}

		if( get_theme_mod( 'menu_mobile_bg' ) ) {
			echo '--menu-mobile-bg:' . get_theme_mod( 'menu_mobile_bg' ) . '; ';
		} else {
			echo '--menu-mobile-bg:#262626;';
		}

		if( get_theme_mod( 'menu_mobile_color' ) ) {
			echo '--menu-mobile-color:' . get_theme_mod( 'menu_mobile_color' ) . '; ';
		} else {
			echo '--menu-mobile-color:#fff;';
		}

		if( get_theme_mod( 'menu_mobile_border' ) ) {
			echo '--menu-mobile-border:' . get_theme_mod( 'menu_mobile_border' ) . '; ';
		} else {
			echo '--menu-mobile-border:#b2b2b2';
		}



		echo '}';
	echo '</style>';
}