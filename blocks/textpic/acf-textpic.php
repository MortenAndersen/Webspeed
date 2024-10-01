<?php
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_66fa83d9b2d11',
	'title' => 'Webspeed TextPic',
	'fields' => array(
		array(
			'key' => 'field_66fa856f94740',
			'label' => 'Layout',
			'name' => 'layout',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				100 => '1',
				50 => '1/1',
				33 => '2/1',
				25 => '3/1',
			),
			'default_value' => false,
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'allow_in_bindings' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_66fbdb13fad29',
			'label' => 'Tekst før billede',
			'name' => 'tekst_forst',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'allow_in_bindings' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'ui' => 1,
		),
		array(
			'key' => 'field_66fbe4c4935fe',
			'label' => 'Text-align',
			'name' => 'textalign',
			'aria-label' => '',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top' => 'top',
				'center' => 'center',
				'end' => 'end',
			),
			'default_value' => 'top',
			'return_format' => 'value',
			'allow_null' => 0,
			'other_choice' => 0,
			'allow_in_bindings' => 0,
			'layout' => 'vertical',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_66fbdc226a43d',
			'label' => 'Baggrund',
			'name' => 'baggrund',
			'aria-label' => '',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'enable_opacity' => 1,
			'return_format' => 'string',
			'allow_in_bindings' => 0,
		),
		array(
			'key' => 'field_66fbdc4ee507c',
			'label' => 'Tekst farve',
			'name' => 'tekst_farve',
			'aria-label' => '',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'enable_opacity' => 0,
			'return_format' => 'string',
			'allow_in_bindings' => 0,
		),
		array(
			'key' => 'field_66fa83da639d0',
			'label' => 'Tekst',
			'name' => 'tekst',
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
			'allow_in_bindings' => 0,
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
		),
		array(
			'key' => 'field_66fa8412639d1',
			'label' => 'Billeder',
			'name' => 'billeder',
			'aria-label' => '',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'library' => 'all',
			'min' => '',
			'max' => 4,
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'insert' => 'append',
			'preview_size' => 'thumbnail',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/textpic',
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
