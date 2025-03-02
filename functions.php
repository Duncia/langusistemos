<?php
require_once get_template_directory() . '/inc/customizer-functions.php';
require_once get_template_directory() . '/inc/cs-posts.php';
//Theme setup
function langusistemos_setup(){
    //Title in the tab of every page
    add_theme_support('title-tag');
    //Enabling thumbnails
    add_theme_support('post-thumbnails');
    //Load translations in languages folder
    load_theme_textdomain( 'langusistemos', get_template_directory() . '/languages' );
    //Register menu
    register_nav_menu('header-meniu', 'Viršus / Header');
}
add_action('after_setup_theme', 'langusistemos_setup');

//Add JS/CSS files
wp_enqueue_style('langusistemos_main_styles', get_theme_file_uri('/build/index.css'));
wp_enqueue_script('index', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0.1', true);

//Remove dash from page title
add_filter( 'document_title_separator', 'document_title_separator' );
function document_title_separator( $sep ) {
    $sep = "|";
    return $sep;
}

//Upload SVG
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');