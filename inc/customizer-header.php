<?php 
function webspeed_customizer_header($wp_customize){
 
    //add section
    $wp_customize->add_section( 'webspeed_section_header', array(
 
                'title' => 'Webspeed header',
                'priority' => 10,
                'description' => 'WebSpeed header options'
    ));

    /* ---------------------------------------------------------- */
 
    //add setting
    $wp_customize->add_setting( 'webspeed_logo_checkbox', array(
                'default' => '',
    ));
  
 
    //add control
    $wp_customize->add_control( 'logo_name_checkbox_control', array(
                'label' => 'Vis sidetitel sammen med logo',
                'type'  => 'checkbox', 
                'section' => 'webspeed_section_header',
                'settings' => 'webspeed_logo_checkbox'
    ));

    /* ---------------------------------------------------------- */

      //add setting
    $wp_customize->add_setting( 'webspeed_sticky_checkbox', array(
                'default' => '',
    ));

    $wp_customize->add_control( 'sticky_checkbox_control', array(
                'label' => 'Sticky Header',
                'type'  => 'checkbox',
                'section' => 'webspeed_section_header',
                'settings' => 'webspeed_sticky_checkbox'
    ));

    /* ---------------------------------------------------------- */

      //add setting
    $wp_customize->add_setting( 'webspeed_menu_left_checkbox', array(
                'default' => '',
    ));

    $wp_customize->add_control( 'menu_left_checkbox_control', array(
                'label' => 'Menu - Left',
                'type'  => 'checkbox',
                'section' => 'webspeed_section_header',
                'settings' => 'webspeed_menu_left_checkbox'
    ));

    /* ---------------------------------------------------------- */

      //add setting
    $wp_customize->add_setting( 'webspeed_h1', array(
                'default' => '',
    ));

    $wp_customize->add_control( 'h1_control', array(
                'label' => 'Vis H1 i content',
                'type'  => 'checkbox',
                'section' => 'webspeed_section_header',
                'settings' => 'webspeed_h1'
    ));

    /* ---------------------------------------------------------- */

      //add setting
    $wp_customize->add_setting( 'webspeed_menu_pos_dropdown', array(
                'default' => '',
    ));

    $wp_customize->add_control( 'menu_vertical_control', array(
                'label' => 'Menu - Vertical',
                'type'  => 'select',
                'section' => 'webspeed_section_header',
                'settings' => 'webspeed_menu_pos_dropdown',
                'choices' => array(
                    'top' => 'Top',
                    'center' => 'Center',
                    'bottom' => 'Bottom',
                )
    ));


    /* ---------------------------------------------------------- */
 
}
 
add_action( 'customize_register', 'webspeed_customizer_header' );


