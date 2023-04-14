<?php
if (function_exists('acf_add_local_field_group')):

	acf_add_local_field_group(array(
		'key' => 'group_623c75985c9ed',
		'title' => 'Woo Archive',
		'fields' => array(
			array(
				'key' => 'field_623c76117f264',
				'label' => 'Tekst nederst',
				'name' => 'tekst_nederst',
				'aria-label' => '',
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
				'toolbar' => 'basic',
				'media_upload' => 0,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => 'product_cat',
				),
			),
			array(
				array(
					'param' => 'taxonomy',
					'operator' => '==',
					'value' => 'product_tag',
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