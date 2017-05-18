<?php

add_action('init', 'add_menu');

function add_menu()
{

  register_nav_menu('main_menu', 'Menu principal');
  register_nav_menu('footer_menu', 'Menu en bas');

}