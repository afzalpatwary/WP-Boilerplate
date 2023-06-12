<?php

function my_theme_load_theme_textdomain()
{
  load_theme_textdomain('my-theme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'my_theme_load_theme_textdomain');




// for enqueue
require_once(get_template_directory() . '/inc/enqueue.php');
// for dropdown
require_once(get_template_directory() . '/inc/navwalker.php');


// register_nav_menus
register_nav_menus(
  array(
    'header_menu' => __('Header Menu'),
    'footer_menu' => __('Footer Menu'),
    'mobile_menu' => __('Mobile Menu'),
  )
);



add_theme_support('post-thumbnails');