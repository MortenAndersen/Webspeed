<?php 
function webspeed_customizer_color($wp_customize){
 
    //add section
    $wp_customize->add_section( 'webspeed_section_color', array(
 
                'title' => 'Webspeed color',
                'priority' => 10,
                'description' => 'WebSpeed color options'
    ));

    /* ---------------------------------------------------------- */
 
    
    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'main_bg', array(
                'default' => '#ffffff',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'main_bg', array(
                'label' => '--main-bg',
                'type'  => 'color',
                'section' => 'webspeed_section_color',
                'settings' => 'main_bg'
    ));
    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'footer_color', array(
                'default' => '#333333',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'footer_color', array(
                'label' => '--footer-color',
                'type'  => 'color',
                'section' => 'webspeed_section_color',
                'settings' => 'footer_color'
    ));
    
    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'body_bg', array(
                'default' => '#f6f6f6',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'body_bg', array(
                'label' => '--body-bg',
                'type'  => 'color',
                'section' => 'webspeed_section_color',
                'settings' => 'body_bg'
    ));
    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'body_color', array(
                'default' => '#222222',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'body_color', array(
                'label' => '--body-color',
                'type'  => 'color',
                'section' => 'webspeed_section_color',
                'settings' => 'body_color'
    ));
    /* ---------------------------------------------------------- */


    $wp_customize->add_setting( 'header_bg', array(
                'default' => '#ffffff',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'header_bg', array(
                'label' => '--header-bg',
                'type'  => 'color',
                'section' => 'webspeed_section_color',
                'settings' => 'header_bg'
    ));
    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'header_color', array(
                'default' => '#222222',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'header_color', array(
                'label' => '--header-color',
                'type'  => 'color',
                'section' => 'webspeed_section_color',
                'settings' => 'header_color'
    ));
    /* ---------------------------------------------------------- */
 
}
 
add_action( 'customize_register', 'webspeed_customizer_color' );