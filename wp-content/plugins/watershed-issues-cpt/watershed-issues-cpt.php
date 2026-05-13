<?php
/*
Plugin Name: Watershed Issues CPT
Description: Custom Post Type for magazine issues.
Version: 1.0
Author: William Jurreit
*/

function watershed_register_issue_cpt() {

    $args = array(
        'labels' => array(
            'name' => 'Issues',
            'singular_name' => 'Issue'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'issues'),
        'show_in_rest' => true
    );

    register_post_type('issue', $args);
}

add_action('init', 'watershed_register_issue_cpt');