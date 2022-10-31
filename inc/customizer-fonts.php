<?php 
function webspeed_customizer_fonts($wp_customize){
 
    //add section
    $wp_customize->add_section( 'webspeed_section_fonts', array(
 
                'title' => 'Weebspeed Fonts',
                'priority' => 10,
                'description' => 'WebSpeed Fonts'
    ));

    /* ---------------------------------------------------------- */



    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'google_font', array(
                'default' => 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'google_font', array(
                'label' => 'Google Font Link',
                'type'  => 'textarea',
                'section' => 'webspeed_section_fonts',
                'settings' => 'google_font'
    ));

    /* ---------------------------------------------------------- */

    $wp_customize->add_setting( 'google_font_family', array(
                'default' => '',
                'transport' => 'refresh'
    ));

    $wp_customize->add_control( 'google_font_family', array(
                'label' => 'Google Font Family',
                'type'  => 'text',
                'section' => 'webspeed_section_fonts',
                'settings' => 'google_font_family'
    ));

    /* ---------------------------------------------------------- */
 
}
 
add_action( 'customize_register', 'webspeed_customizer_fonts' );