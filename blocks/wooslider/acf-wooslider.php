<?php
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_680294b16603f',
	'title' => 'WooSlider',
	'fields' => array(
		array(
			'key' => 'field_6803804cb72e3',
			'label' => 'Antal',
			'name' => 'antal',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 8,
			'min' => '',
			'max' => '',
			'allow_in_bindings' => 0,
			'placeholder' => '',
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_6804ba76410e5',
			'label' => 'Kategori',
			'name' => 'product_filter',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'nyhed' => 'Nyheder',
				'tilbud' => 'Tilbud',
				73 => 'Kategori: Accessories',
				70 => 'Kategori: Clothing',
				75 => 'Kategori: Decor',
				72 => 'Kategori: Hoodies',
				211 => 'Kategori: Løbesko',
				74 => 'Kategori: Music',
				71 => 'Kategori: Tshirts',
				69 => 'Kategori: Ukategoriseret',
			),
			'default_value' => false,
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 1,
			'allow_in_bindings' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/wooslider',
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
) );
} );
