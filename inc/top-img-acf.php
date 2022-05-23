<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_628b587630961',
	'title' => 'Theme (Top img)',
	'fields' => array(
		array(
			'key' => 'field_628b58aa031ca',
			'label' => 'Skjul titel',
			'name' => 'skjul_titel',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
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
				'value' => 'page-aside-left-topimg.php',
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
				'value' => 'page-no-wrap-topimg.php',
			),
		),
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'page-topimg.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

endif;		