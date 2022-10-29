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

    $wp_customize->add_setting( 'menu_mobile_trigger_bg', array(
                'default' => '',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_mobile_trigger_bg', array(
                'label' => '--menu-mobile-trigger-bg',
                'type'  => 'color',
                'section' => 'webspeed_section_menu_mobile',
                'settings' => 'menu_mobile_trigger_bg'
    ));

    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'menu_mobile_trigger_color', array(
                'default' => '#ffffff',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_mobile_trigger_color', array(
                'label' => '--menu-mobile-trigger-color',
                'type'  => 'color',
                'section' => 'webspeed_section_menu_mobile',
                'settings' => 'menu_mobile_trigger_color'
    ));

    /* ---------------------------------------------------------- */



    $wp_customize->add_setting( 'menu_mobile_trigger_active_bg', array(
                'default' => '',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_mobile_trigger_active_bg', array(
                'label' => '--menu-mobile-trigger-active-bg',
                'type'  => 'color',
                'section' => 'webspeed_section_menu_mobile',
                'settings' => 'menu_mobile_trigger_active_bg'
    ));

    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'menu_mobile_trigger_active_color', array(
                'default' => '',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_mobile_trigger_active_color', array(
                'label' => '--menu-mobile-trigger-active-color',
                'type'  => 'color',
                'section' => 'webspeed_section_menu_mobile',
                'settings' => 'menu_mobile_trigger_active_color'
    ));

    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'menu_icon', array(
                'default' => '#111111',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_icon', array(
                'label' => '--menu-icon',
                'type'  => 'color',
                'section' => 'webspeed_section_menu_mobile',
                'settings' => 'menu_icon'
    ));

    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'menu_icon_close', array(
                'default' => '#ffffff',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_icon_close', array(
                'label' => '--menu-icon-close',
                'type'  => 'color',
                'section' => 'webspeed_section_menu_mobile',
                'settings' => 'menu_icon_close'
    ));

    /* ---------------------------------------------------------- */
 
}
 
add_action( 'customize_register', 'webspeed_customizer_menu_mobile' );