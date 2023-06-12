<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage WP Boilerplate
 * @since WP Boilerplate 1.0
 */

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->
<!--[if gte IE 9] <style type="text/css"> .gradient {filter: none;}</style><![endif]-->
<!--[if !IE]><html lang="en"><![endif]-->
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Required meta tags for responsive -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Favicon and touch icons -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
  <meta name="misapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="">
  <meta name="twitter:site" content="@twitter_username">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">
  <!-- Open Graph data -->
  <meta property="og:title" content="">
  <meta property="og:type" content="article">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:description" content="">
  <meta property="og:site_name" content="R">
  <meta property="fb:admins" content="Facebook numeric ID">
  <!-- gmail verification -->
  <meta name="google-site-verification" content="">
  <!-- Website title -->
  <title>
    <?php get_the_title(); ?>
  </title>


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Main Coding Start Here -->


  <!-- header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <?php wp_nav_menu(
          array(
            'theme_location' => 'header_menu',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'menu_class' => 'navbar-nav m-auto mb-2 mb-lg-0',
            'depth' => '3',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker(),
          )
        );
        ?>
        <div class="d-flex">
          <a class="btn btn-info text-white px-4" href="#">Apply</a>
        </div>

      </div>
    </nav>
  </header>
  <!--/ header -->