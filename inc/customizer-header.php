<?php
function webspeed_customizer_header($wp_customize) {

	//add section
	$wp_customize->add_section('webspeed_section_header', array(

		'title' => 'Webspeed header',
		'priority' => 10,
		'description' => 'WebSpeed header options',
	));

	/* ---------------------------------------------------------- */

	//add setting
	$wp_customize->add_setting('webspeed_logo_checkbox', array(
		'default' => '',
		//'sanitize_callback' => 'webspeed_sanitize_check',
	));

	//add control
	$wp_customize->add_control('logo_name_checkbox_control', array(
		'label' => 'Vis sidetitel sammen med logo',
		'type' => 'checkbox',
		'section' => 'webspeed_section_header',
		'settings' => 'webspeed_logo_checkbox',
	));

	/* ---------------------------------------------------------- */

	//add setting
	$wp_customize->add_setting('webspeed_sticky_checkbox', array(
		'default' => '',
		//'sanitize_callback' => 'webspeed_sanitize_check',
	));

	$wp_customize->add_control('sticky_checkbox_control', array(
		'label' => 'Sticky Header',
		'type' => 'checkbox',
		'section' => 'webspeed_section_header',
		'settings' => 'webspeed_sticky_checkbox',
	));

	/* ---------------------------------------------------------- */

	//add setting
	$wp_customize->add_setting('webspeed_woo_card', array(
		'default' => '',
		//'sanitize_callback' => 'webspeed_sanitize_check',
	));

	$wp_customize->add_control('woo_card_checkbox_control', array(
		'label' => 'Woo Card',
		'type' => 'checkbox',
		'section' => 'webspeed_section_header',
		'settings' => 'webspeed_woo_card',
	));

	/* ---------------------------------------------------------- */

	//add setting
	$wp_customize->add_setting('webspeed_menu_left_checkbox', array(
		'default' => '',
		//'sanitize_callback' => 'webspeed_sanitize_check',
	));

	$wp_customize->add_control('menu_left_checkbox_control', array(
		'label' => 'Menu - Left (ikke WOO)',
		'type' => 'checkbox',
		'section' => 'webspeed_section_header',
		'settings' => 'webspeed_menu_left_checkbox',
	));

	/* ---------------------------------------------------------- */

	//add setting
	$wp_customize->add_setting('webspeed_h1', array(
		'default' => '',
		//'sanitize_callback' => 'webspeed_sanitize_check',
	));

	$wp_customize->add_control('h1_control', array(
		'label' => 'Vis H1 i content',
		'type' => 'checkbox',
		'section' => 'webspeed_section_header',
		'settings' => 'webspeed_h1',
	));
	

}

add_action('customize_register', 'webspeed_customizer_header');

// function webspeed_sanitize_check( $values ) {
// 	$multi_values = !is_array( $values ) ? explode( ',', $values ) : $values;
// 	return !empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
// }