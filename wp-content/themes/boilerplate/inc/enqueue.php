<?php

function common_cs_js()
{
  // all css file enqueue
  wp_enqueue_style('nioicon', get_template_directory_uri() . '/assets/css/nioicon.css', array(), '1.0', 'all');
  wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0', 'all');
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all');
  wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');


  // all js file enqueue
  // wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.1.min.js', array('jquery'), '3.6.1', false);
  wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.1.0', true);
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.1.0', true);
  wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.1.0', true);
}
add_action('wp_enqueue_scripts', 'common_cs_js');