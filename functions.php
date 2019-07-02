<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

add_action('after_setup_theme', function () {
  // Add post thumbnails support.
  add_theme_support('post-thumbnails');
  // Add title tag theme support.
  add_theme_support('title-tag');
  // Add HTML5 theme support.
  add_theme_support('html5', [
    'caption',
    'comment-form',
    'comment-list',
    'gallery',
    'search-form',
    'widgets',
  ]);
  // Register navigation menus.
  register_nav_menus([
    'navigation' => __('Navigation', 'wordplate'),
  ]);
});

// Enqueue and register scripts.
add_action('wp_enqueue_scripts', function () {
  wp_deregister_script('jquery');

  wp_enqueue_style("$theme-style", get_template_directory_uri() . '/dist/main.css', [], time(), 'all');

  wp_enqueue_script("$theme-script", get_template_directory_uri() . '/dist/bundle.js', [], time(), true);
});