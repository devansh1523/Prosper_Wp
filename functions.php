<?php

/**
 * 
 *  Template Name : functions.php
 *  Description: Add features to wordpress theme
 * 
 */

 //add customizer file
 require_once('templates/helpers/customizer.php');

 function fn_theme_scripts(){
    /**style files */
    //font awesome file
    wp_enqueue_style('fontawesome',get_template_directory_uri().'/vendor/css/all.min.css');
    
    //stylesheet
    wp_enqueue_style('stylesheet',get_stylesheet_uri());

    //media query
    wp_enqueue_style( 'media-query', get_template_directory_uri() . '/assets/css/_media.css');

 }

 add_action('wp_enqueue_scripts','fn_theme_scripts');

//new features
function fn_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5',array('search-form'));
    add_theme_support('custom-logo');   
}

add_action('after_setup_theme','fn_theme_support');


//custom menu
function fn_nav_menu(){
    register_nav_menus(array(
        'primary-menu'=>__('Primary Menu','text_domain'),
        'footer-menu'=>__('Footer Menu','text_domain')
    ));
}

add_action('init','fn_nav_menu');

function add_link_atts($atts){
    $atts['class'] = "link text-light";
    return $atts;
}

add_filter('nav_menu_link_attributes','add_link_atts');

function fn_custom_excerpt_length($length){
    return 15;
}

add_filter('excerpt_length','fn_custom_excerpt_length');

?>