<?php
/*
*	Kirki configuration
*/

Kirki::add_config( 'Revent_Options', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'Revent_Header', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Header Setting', 'kirki' ),
    'description' => esc_html__( 'Mangae header & its layout', 'kirki' ),
) );

Kirki::add_section( 'Revent_menu', array(
    'title'          => esc_html__( 'My Menu Setting', 'kirki' ),
    'description'    => esc_html__( 'Manage Menus here', 'kirki' ),
    'panel'          => 'Revent_Header',
    'priority'       => 160,
) );

Kirki::add_section( 'Revent_header_layout', array(
    'title'          => esc_html__( 'Header Layout', 'kirki' ),
    'description'    => esc_html__( 'manage Header Styling', 'kirki' ),
    'panel'          => 'Revent_Header',
    'priority'       => 160,
) );

Kirki::add_section( 'Site_typography', array(
    'title'          => esc_html__( 'Typography', 'kirki' ),
    'description'    => esc_html__( 'Site Typography', 'kirki' ),
    'priority'       => 10,
) );

Kirki::add_section( 'Homepage_heading', array(
    'title'          => esc_html__( 'Home texts', 'kirki' ),
    'description'    => esc_html__( 'These are the sections', 'kirki' ),
    'priority'       => 10,
    'icon'           => 'dashicons-bell'
) );


Kirki::add_field( 'Revent_Options', [
	'type'        => 'background',
	'settings'    => 'background_setting',
	'label'       => esc_html__( 'Background Control', 'kirki' ),
	'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'kirki' ),
	'section'     => 'Revent_header_layout',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,1)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.site-header',
		],
	],
] );

Kirki::add_field( 'Revent_Options', [
	'type'        => 'background',
	'settings'    => 'menu_background_setting',
	'label'       => esc_html__( 'Menu Background', 'kirki' ),
	'description' => esc_html__( 'Menu Background conrols used.', 'kirki' ),
	'section'     => 'Revent_menu',
	'default'     => [
		'background-color'      => '#b3b9bd',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.site-navigation',
		],
	],
] );

Kirki::add_field( 'Revent_Options', [
	'type'        => 'background',
	'settings'    => 'menu_item_setting_bg',
	'label'       => esc_html__( 'Menu Item color', 'kirki' ),
	'description' => esc_html__( 'Change bg color of menu items', 'kirki' ),
	'section'     => 'Revent_menu',
	'default'     => [
		'background-color'      => '#ffffff',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.site-navigation ul li a',
		],
	],
] );

Kirki::add_field( 'Revent_Options', [
	'type'        => 'color',
	'settings'    => 'color_setting_rgba',
	'label'       => __( 'Menu color', 'kirki' ),
	'description' => esc_html__( 'This is a color control of menu', 'kirki' ),
	'section'     => 'Revent_menu',
	'default'     => '#0088CC',
	'choices'     => [
		'alpha' => true,
	],
] );

Kirki::add_field( 'Revent_Options', [
	'type'        => 'typography',
	'settings'    => 'typography_setting',
	'label'       => esc_html__( 'Control Label', 'kirki' ),
	'section'     => 'Site_typography',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left',
    ],
    'choices' => [
        'fonts' => [
            'google'   => [ 'popularity', 50 ],
            'standard' => [
                'Georgia,Times,"Times New Roman",serif',
                'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
            ],
        ],
    ],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h1,h2,h3',
		],
	],
] );

Kirki::add_field( 'Revent_Options', [
	'type'        => 'switch',
	'settings'    => 'switch_setting',
	'label'       => esc_html__( 'Slider', 'kirki' ),
	'section'     => 'Homepage_heading',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'kirki' ),
		'off' => esc_html__( 'Hide', 'kirki' ),
	],
] );

Kirki::add_field( 'Revent_Options', [
	'type'     => 'text',
	'settings' => 'Service_heading_change',
	'label'    => esc_html__( 'Name Change', 'kirki' ),
	'section'  => 'Homepage_heading',
	'default'  => esc_html__( 'Our Services', 'kirki' ),
	'priority' => 10,
] );

/**
 * Default behaviour (saves data as a URL).
 */
Kirki::add_field( 'Revent_Options', [
	'type'        => 'image',
	'settings'    => 'image_setting_url',
	'label'       => esc_html__( 'Service1 img url', 'kirki' ),
	'description' => esc_html__( 'Serce1 image is here', 'kirki' ),
	'section'     => 'Homepage_heading',
	'default'     => '',
] );


?>