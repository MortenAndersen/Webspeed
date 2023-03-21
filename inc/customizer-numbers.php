<?php
function webspeed_customizer_numbers($wp_customize) {

	//add section
	$wp_customize->add_section('webspeed_section_numbers', array(

		'title' => 'Weebspeed Numbers',
		'priority' => 10,
		'description' => 'WebSpeed Numbers',
	));

	/* ---------------------------------------------------------- */

	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('page_width', array(
		'default' => '1440',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('page_width', array(
		'label' => '--page-width (1440px)',
		'type' => 'number',
		'section' => 'webspeed_section_numbers',
		'settings' => 'page_width',
	));

	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('aside_left', array(
		'default' => '24',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('aside_left', array(
		'label' => '--aside-left (24%)',
		'type' => 'number',
		'section' => 'webspeed_section_numbers',
		'settings' => 'aside_left',
	));

	/* ---------------------------------------------------------- */

	$wp_customize->add_setting('aside_right', array(
		'default' => '24',
		'transport' => 'refresh',
	));

	$wp_customize->add_control('aside_right', array(
		'label' => '--aside-right (24%)',
		'type' => 'number',
		'section' => 'webspeed_section_numbers',
		'settings' => 'aside_right',
	));

	/* ---------------------------------------------------------- */

}

add_action('customize_register', 'webspeed_customizer_numbers');