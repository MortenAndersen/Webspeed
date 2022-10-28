<?php 
function webspeed_customizer_menu_mobile($wp_customize){
 
    //add section
    $wp_customize->add_section( 'webspeed_section_menu_mobile', array(
 
                'title' => 'Weebspeed Menu mobile color',
                'priority' => 10,
                'description' => 'WebSpeed Menu mobile color'
    ));

    /* ---------------------------------------------------------- */
 
    
    

    $wp_customize->add_setting( 'menu_mobile_bg', array(
                'default' => '#262626;',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_mobile_bg', array(
                'label' => '--menu-mobile-bg',
                'type'  => 'color',
                'section' => 'webspeed_section_menu_mobile',
                'settings' => 'menu_mobile_bg'
    ));

    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'menu_mobile_color', array(
                'default' => '#ffffff;',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_mobile_color', array(
                'label' => '--menu-mobile-color',
                'type'  => 'color',
                'section' => 'webspeed_section_menu_mobile',
                'settings' => 'menu_mobile_color'
    ));

    /* ---------------------------------------------------------- */


    $wp_customize->add_setting( 'menu_mobile_border', array(
                'default' => '#b2b2b2;',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_mobile_border', array(
                'label' => '--menu-mobile-border',
                'type'  => 'color',
                'section' => 'webspeed_section_menu_mobile',
                'settings' => 'menu_mobile_border'
    ));

    /* ---------------------------------------------------------- */
 
}
 
add_action( 'customize_register', 'webspeed_customizer_menu_mobile' );