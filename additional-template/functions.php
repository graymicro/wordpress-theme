<?php

add_theme_support('title-tag');

function theme_action()
{

    $menus = array(
        'main-menu' => 'A Menu For Main Header',
        'footer-menu' => 'A Menu For Footer'

    );

    register_nav_menus($menus);

    // Post Thumbnails
    add_theme_support('post-thumbnails');
    //
    add_image_size('port-thumbnails', 1302, 873);
}

add_action('after_setup_theme', 'theme_action');

// include files

include get_template_directory() . '/inc/custom-post-type.php';
