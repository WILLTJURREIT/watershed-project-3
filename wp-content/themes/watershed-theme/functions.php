<?php

function watershed_enqueue_styles() {
    wp_enqueue_style('watershed-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'watershed_enqueue_styles');

function watershed_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu',
    ));
}
add_action('after_setup_theme', 'watershed_theme_setup');