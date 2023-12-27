<?php

/**
 * 
 *  Theme Name: Wordpress customizer Settings
 * 
 */

//WP_Customize_Control


function fn_customizer_settings($wp_customizer){
    
    //add customizer setting
    //include section
    $wp_customizer->add_section('header',array(
        'title' => __('Header Settings','Daily'),
        'priority' => 70
    ));

    //add capability to the customizer setting
    $wp_customizer->add_setting('header_image',array(
        'capability' => 'edit_theme_options'
    ));

    //add controls in the customizer settings
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer,'header_image',array(
        'label' => __('Header Image','Daily'),
        'section' => 'header'
    )));


    //add header text
    $wp_customizer->add_setting('header_text_field',array(
        'capability' => 'edit_theme_options',
        'default' => 'Prosper'
    ));

    //adding text control
    $wp_customizer->add_control('header_text_control', array(
      'label' => __('Header Text','Daily'),
      'description'=>'Add your own Header Text here',
      'section'=>'header',
      'settings'=>'header_text_field'
    ));
    
    //add header description field
    $wp_customizer->add_setting('header_desc_field',array(
        'capability' => 'edit_theme_options',
        'default' => 'With the Power of Wordpress'
    ));

    //adding text control
    $wp_customizer->add_control('header_desc_control', array(
      'label' => __('Header Description','Daily'),
      'description'=>'Add your own Header Description here',
      'section'=>'header',
      'settings'=>'header_desc_field'
    ));

}

add_action('customize_register','fn_customizer_settings');




?>