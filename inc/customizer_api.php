<?php
/*
*   WP EPIC CUSTOMIZER API
*/
function wpepic_customize_register( $wp_customize ) {
    $wp_customize->add_panel( 'wpepic_settings',array(
        'title' => __( 'WpEpic Settings' ),
        'priority' => 10
    ));
    //color section
    $wp_customize->add_section( 'wpepic_colors',array(
        'title' => 'Colors',
        'panel' => 'wpepic_settings'
    ));
    //Label section
    $wp_customize->add_section( 'wpepic_labels',array(
        'title' => 'Label',
        'panel' => 'wpepic_settings'
    ));
    //Misc Settings
    $wp_customize->add_section( 'wpepic_misc',array(
        'title' => 'Misc Settings',
        'panel' => 'wpepic_settings'
    ));

    //serice img1
    $wp_customize->add_section( 'wpepic_service_img1',array(
        'title' => 'Service feature img 1',
        'panel' => 'wpepic_settings'
    ));

    // navigation bgcolor
    $wp_customize->add_setting( 'wpepic_nav_bg_color',array(
        'type' => 'theme_mod',
        'compatibility' => 'edit_theme_options',
        'default' => '#ff0000',
        'transport' => 'refresh',  // or post message
        'sanitize_callback' => 'sanitize_hex_color' // for only colors
    ));
    $wp_customize->add_control( 'wpepic_nav_bg_color',array(
        'label' => __( 'Menu Background' ),
        'type' => 'color',
        'section' => 'wpepic_colors'
    ));
    // body bgcolor
    $wp_customize->add_setting( 'wpepic_body_bg_color',array(
        'type' => 'theme_mod',
        'compatibility' => 'edit_theme_options',
        'default' => '#008000',
        'transport' => 'refresh',   // or post message
        'sanitize_callback' => 'sanitize_hex_color'     // value check hex colors
    ));
    $wp_customize->add_control( 'wpepic_body_bg_color',array(
        'label' => __( 'Body Background' ),
        'type' => 'color',
        'section' => 'wpepic_colors'
    ));
   
    $wp_customize->add_control( 'wpepic_label1',array(
        'label' => __( 'Feature Box 1 Title' ),
        'type' => 'text',
        'section' => 'wpepic_labels'
    ));
    // Label Section1
    $wp_customize->add_setting( 'wpepic_label2',array(
        'type' => 'theme_mod',
        'compatibility' => 'edit_theme_options',
        'default' => 'Latest From Interior Design',
        'transport' => 'refresh',   // or post message
        'sanitize_callback' => 'esc_attr'   // value check as text
    ));
    $wp_customize->add_control( 'wpepic_label2',array(
        'label' => __( 'Feature Box 2 Title' ),
        'type' => 'text',
        'section' => 'wpepic_labels'
    ));
    // Banner Show/Hide
    $wp_customize->add_setting( 'wpepic_banner',array(
        'type' => 'theme_mod',
        'compatibility' => 'edit_theme_options',
        'default' => 'yes',
        'transport' => 'refresh',   // or post message
        'sanitize_callback' => 'esc_attr'   // value check as text
    ));
    $wp_customize->add_control( 'wpepic_banner',array(
        'label' => __( 'Show/Hide' ),
        'type' => 'radio',
        'section' => 'wpepic_misc',
        'choices' => array( 
            'yes' => 'Yes',
            'no'  => 'No'
         )
    ));
}



add_action('customize_register','wpepic_customize_register');


?>