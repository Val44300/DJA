<?php

add_action('init', 'add_menu');


function add_menu()
{

  register_nav_menu('main_menu', 'Menu principal');
  register_nav_menu('footer_menu', 'Menu en bas');

}

add_action('widgets_init','add_widget');

function add_widget()

{

    register_sidebar(array(

        'id' => 'my_custom_zone',

        'name' => 'Zone inférieure',

        'description' => 'Apparait en bas du site',

        'before_widget' => '<div>',

        'after_widget' => '</div>',

        'before_title' => '<h1>',

        'after_title' => '</h1>'

    ));

}