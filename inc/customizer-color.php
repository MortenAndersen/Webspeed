<?php
function webspeed_customizer_color($wp_customize) {

	//add section
	$wp_customize->add_section('webspeed_section_color', array(

		'title' => 'Webspeed color',
		'priority' => 10,
		'description' => 'WebSpeed color options',
	));

	/* ---------------------------------------------------------- */

	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('main_bg', array(
		'default' => '#ffffff',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('main_bg', array(
		'label' => '--main-bg',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'main_bg',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('footer_color', array(
		'default' => '#333333',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('footer_color', array(
		'label' => '--footer-color',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'footer_color',
	));

	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('body_bg', array(
		'default' => '#f6f6f6',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('body_bg', array(
		'label' => '--body-bg',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'body_bg',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('body_color', array(
		'default' => '#222222',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('body_color', array(
		'label' => '--body-color',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'body_color',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('link', array(
		'default' => '#065099',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('link', array(
		'label' => '--link',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'link',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('link_hover', array(
		'default' => '#0073e5',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('link_hover', array(
		'label' => '--link-hover',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'link_hover',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('pre_header_bg', array(
		'default' => '#ffffff',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('pre_header_bg', array(
		'label' => '--pre-header-bg',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'pre_header_bg',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('pre_header_color', array(
		'default' => '#222222',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('pre_header_color', array(
		'label' => '--pre-header-color',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'pre_header_color',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('header_bg', array(
		'default' => '#ffffff',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('header_bg', array(
		'label' => '--header-bg',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'header_bg',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('header_color', array(
		'default' => '#222222',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('header_color', array(
		'label' => '--header-color',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'header_color',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('border_color', array(
		'default' => '#eeeeee',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('border_color', array(
		'label' => '--border',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'border_color',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('pil_op', array(
		'default' => '#c60202',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('pil_op', array(
		'label' => '--pil-op',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'pil_op',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('slider_bg', array(
		'default' => '#0073e5;',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('slider_bg', array(
		'label' => '--slider-bg',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'slider_bg',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('slider_color', array(
		'default' => '#ffffff;',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('slider_color', array(
		'label' => '--slider-color',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'slider_color',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('top_caption_bg', array(
		'default' => '#000000',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('top_caption_bg', array(
		'label' => '--top-caption-bg (80%)',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'top_caption_bg',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('top_caption_color', array(
		'default' => '#ffffff',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('top_caption_color', array(
		'label' => '--top-caption-color',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'top_caption_color',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('submit_bg', array(
		'default' => '#0073e5',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('submit_bg', array(
		'label' => '--submit-bg',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'submit_bg',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('submit_color', array(
		'default' => '#ffffff',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('submit_color', array(
		'label' => '--submit-color',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'submit_color',
	));
	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('sticky_scroll_bg', array(
		'default' => '#f2f2f2',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('sticky_scroll_bg', array(
		'label' => '--sticky-scroll-bg',
		'type' => 'color',
		'section' => 'webspeed_section_color',
		'settings' => 'sticky_scroll_bg',
	));
	/* ---------------------------------------------------------- */

}

add_action('customize_register', 'webspeed_customizer_color');