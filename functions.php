<?php
/*
*   this is our function file
*/

function wpepic_theme_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_image_size( 'home-feature', 240,200, array( 'center','center' ) );
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'wpepic' ),
    ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    
    $args = array(
        'default-image' => get_template_directory_uri().'/assets/image/banner.png',
        'default-text-color' => '000',
        'width' => 1920,
        'height' => 500,
        'flex-width' => true,
        'flex-height' => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'wpepic_theme_setup' );

function wpepic_theme_scripts(){
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri().'/assets/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'owl-carousel-css', get_stylesheet_directory_uri().'/owl-carousel/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri().'/assets/bootstrap/js/bootstrap.min.js' );
    wp_enqueue_script( 'owl-carousel-js', get_stylesheet_directory_uri().'/owl-carousel/owl.carousel.min.js' );
    wp_enqueue_script( 'myjs-js', get_stylesheet_directory_uri().'/assets/js/my-js.js' );
}
add_action( 'wp_enqueue_scripts','wpepic_theme_scripts' );

function wpepic_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'wpepic' ),
        'id'            => 'sidebarwid1',
        'description'   => 'Widget on sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'wpepic' ),
        'id'            => 'footerwid1',
        'description'   => 'Widget on footer col1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 2', 'wpepic' ),
        'id'            => 'footerwid2',
        'description'   => 'Widget on footer col2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 3', 'wpepic' ),
        'id'            => 'footerwid3',
        'description'   => 'Widget on footer col3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wpepic_widgets_init' );

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Include Customizer
require get_template_directory().'/inc/customizer_api.php';

function wpepic_customize_css()
{
    ?>
        <style type="text/css">
            body{
                background: <?php echo get_theme_mod( 'wpepic_body_bg_color','#008000' ); ?>
            }
            .site-navigation{
                background: <?php echo get_theme_mod( 'wpepic_nav_bg_color','#ff0000' ); ?>
            }
            .site-navigation ul li a{
                color: <?php echo get_theme_mod( 'color_setting_rgba','#000' ); ?>
            }
        </style>
    <?php
}
add_action( 'wp_head', 'wpepic_customize_css');

// Include Services post type
require get_template_directory().'/inc/service-posttype.php';

// Include Services post type
require get_template_directory().'/inc/projects.php';

// Include meta-box
require get_template_directory().'/inc/meta-box/meta-box.php';

// Include new-metabox
require get_template_directory().'/inc/new-metabox.php';

// Include TGM class for activation
require_once get_template_directory().'/lib/class-tgm-plugin-activation.php';
require get_template_directory().'/lib/install-plugins.php';

// Kirki Embbed
require_once get_template_directory().'/inc/kirki/kirki.php';
require get_template_directory().'/inc/kirki-config.php';


?>