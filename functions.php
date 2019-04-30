<?php

// include
require get_template_directory( ) . './include/setup.php';



// Hoocks
add_action( 'wp_enqueue_script', 'rv_load_scripts' );

// add_action( 'wp_enqueue_js', 'load_js_files' );

// Adicionando MENU ao painel
// add_action( 'after_setup_theme', 'rv_after_setup' );

// Ativando o SIDEBAR