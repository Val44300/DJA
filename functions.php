<?php

add_action('init', 'add_menu');
add_theme_support( 'custom-header' );

function add_menu()
{

  register_nav_menu('main_menu', 'Menu principal');
  register_nav_menu('footer_menu', 'Menu en bas');

}

add_action('widgets_init','add_widget');

function add_widget()

{

    register_sidebar(array(

        'id' => 'widget_footer',

        'name' => 'Zone inférieure',

        'description' => 'Apparait en bas du site',

        'before_widget' => '<div>',

        'after_widget' => '</div>',

        'before_title' => '<h4>',

        'after_title' => '</h4>'

    ));

        register_sidebar(array(

        'id' => 'widget_header',

        'name' => 'Zone supérieure',

        'description' => 'Apparait en haut du site',

        'before_widget' => '<div>',

        'after_widget' => '</div>',

        'before_title' => '',

        'after_title' => ''

    ));
}

$defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

add_theme_support( 'custom-logo', array(
    'height'      => 200,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'Le tour du Numérique', 'Logo tour du Numérique' ),
));

function tour_du_numerique_the_custom_logo() {
    
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }

}

add_theme_support( 'post-thumbnails' );
/*
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'the_content', 'wptexturize');
*/
function bweb_event_manager_booking_fields( $located, $template_name, $load, $args ){    
    if ( $template_name == 'forms/bookingform/booking-fields.php' ) {
        if ( file_exists( get_stylesheet_directory() . '/events/booking-fields.php') ) {
            $located = get_stylesheet_directory() . '/events/booking-fields.php';
        }
    }
    return $located;
}
add_filter( 'em_locate_template', 'bweb_event_manager_booking_fields', 9, 4 );
