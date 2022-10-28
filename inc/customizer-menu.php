<?php 
function webspeed_customizer_menu($wp_customize){
 
    //add section
    $wp_customize->add_section( 'webspeed_section_menu', array(
 
                'title' => 'Weebspeed Menu color',
                'priority' => 10,
                'description' => 'WebSpeed Menu color'
    ));

    /* ---------------------------------------------------------- */
 
    
    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'menu_desktop_color', array(
                'default' => '#222222',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_desktop_color', array(
                'label' => '--menu-desktop-color',
                'type'  => 'color',
                'section' => 'webspeed_section_menu',
                'settings' => 'menu_desktop_color'
    ));


    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'menu_desktop_hover_color', array(
                'default' => '#222222',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_desktop_hover_color', array(
                'label' => '--menu-desktop-hover-color',
                'type'  => 'color',
                'section' => 'webspeed_section_menu',
                'settings' => 'menu_desktop_hover_color'
    ));

    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'menu_desktop_current_color', array(
                'default' => '#0073e5',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_desktop_current_color', array(
                'label' => '--menu-desktop-current-color',
                'type'  => 'color',
                'section' => 'webspeed_section_menu',
                'settings' => 'menu_desktop_current_color'
    ));
    
    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'menu_desktop_sub_bg', array(
                'default' => '#ffffff',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_desktop_sub_bg', array(
                'label' => '--menu-desktop-sub-bg',
                'type'  => 'color',
                'section' => 'webspeed_section_menu',
                'settings' => 'menu_desktop_sub_bg'
    ));

    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'menu_desktop_sub_color', array(
                'default' => '#222222',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_desktop_sub_color', array(
                'label' => '--menu-desktop-sub-color',
                'type'  => 'color',
                'section' => 'webspeed_section_menu',
                'settings' => 'menu_desktop_sub_color'
    ));
    
    /* ---------------------------------------------------------- */


    $wp_customize->add_setting( 'menu_desktop_sub_current_bg', array(
                'default' => '#0073e5;',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_desktop_sub_current_bg', array(
                'label' => '--menu-desktop-sub-current-bg',
                'type'  => 'color',
                'section' => 'webspeed_section_menu',
                'settings' => 'menu_desktop_sub_current_bg'
    ));

    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'menu_desktop_sub_current_color', array(
                'default' => '#ffffff;',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_desktop_sub_current_color', array(
                'label' => '--menu-desktop-sub-current-color',
                'type'  => 'color',
                'section' => 'webspeed_section_menu',
                'settings' => 'menu_desktop_sub_current_color'
    ));

    /* ---------------------------------------------------------- */


    $wp_customize->add_setting( 'menu_desktop_sub_hover_bg', array(
                'default' => '#f2f2f2',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_desktop_sub_hover_bg', array(
                'label' => '--menu-desktop-sub-hover-bg',
                'type'  => 'color',
                'section' => 'webspeed_section_menu',
                'settings' => 'menu_desktop_sub_hover_bg'
    ));

    /* ---------------------------------------------------------- */

     $wp_customize->add_setting( 'menu_desktop_sub_hover_color', array(
                'default' => '#222222',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_desktop_sub_hover_color', array(
                'label' => '--menu-desktop-sub-hover-color',
                'type'  => 'color',
                'section' => 'webspeed_section_menu',
                'settings' => 'menu_desktop_sub_hover_color'
    ));

    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'menu_desktop_sub_border', array(
                'default' => '#eeeeee',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'menu_desktop_sub_border', array(
                'label' => '--menu-desktop-sub-border',
                'type'  => 'color',
                'section' => 'webspeed_section_menu',
                'settings' => 'menu_desktop_sub_border'
    ));

    /* ---------------------------------------------------------- */
 
}
 
add_action( 'customize_register', 'webspeed_customizer_menu' );