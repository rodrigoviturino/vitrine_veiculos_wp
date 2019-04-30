<?php

function rv_load_scripts(){
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );

    // Slick CSS
    wp_enqueue_style( 'slick_css', get_template_directory_uri() . '/assets/library/slick/slick.css' );
    wp_enqueue_style( 'slick_theme_css', get_template_directory_uri() . '/assets/library/slick/slick-theme.css' );
    
    
    // // Slick JS
    // wp_enqueue_script( 'slick_min_js', get_template_directory_uri() . '/assets/library/slick/slick.min.js', array('jquery'), VERSION);
    
    // // Main JS
    // wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), VERSION );
}
