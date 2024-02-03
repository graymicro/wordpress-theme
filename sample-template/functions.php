<?php

add_theme_support( 'title-tag' );


// theme actions 

function dokmeh_test(){

    $menus = array(
        'main-menu' => 'A Menu For Main Header', 
        'complete-menu' => 'A Menu For Completing the main menu',
        'footer-menu' => 'A Menu For Footer'

    );

    register_nav_menus($menus);

    // Post Thumbnails
    add_theme_support( 'post-thumbnails' );
    
    //
    add_image_size('main-thumbnails',370,400);
}

add_action('after_setup_theme','dokmeh_test');

// include files

include get_template_directory().'/inc/custom-post-type.php';