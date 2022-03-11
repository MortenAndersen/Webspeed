<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_60e81507036ee',
	'title' => 'Web left',
	'fields' => array(
		array(
			'key' => 'field_60e8155c5acfc',
			'label' => 'Aside left',
			'name' => 'aside_left',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-aside-left-right.php',
			),
		),
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-aside-left-right-topimg.php',
			),
		),
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-aside-left.php',
			),
		),
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-aside-left-topimg.php',
			),
		),
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-aside-left-titleimg.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

acf_add_local_field_group(array(
	'key' => 'group_60e8157739728',
	'title' => 'Web right',
	'fields' => array(
		array(
			'key' => 'field_60e8158d2ad5a',
			'label' => 'Aside right',
			'name' => 'aside_right',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-aside-left-right.php',
			),
		),
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-aside-left-right-topimg.php',
			),
		),
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-aside-right.php',
			),
		),
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-aside-right-topimg.php',
			),
		),
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-aside-right-titleimg.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

endif;