<?php

add_theme_support('title-tag');


// theme actions 

function dokmeh_test()
{

    $menus = array(
        'main-menu' => 'A Menu For Main Header',
        'complete-menu' => 'A Menu For Completing the main menu',
        'footer-menu' => 'A Menu For Footer'

    );

    register_nav_menus($menus);

    // Post Thumbnails
    add_theme_support('post-thumbnails');

    //
    add_image_size('main-thumbnails', 370, 400);
    add_image_size('team-thumbnails', 370, 555);
    add_image_size('post-thumbnails', 800, 533);
}

function my_theme_scripts()
{

    if (!is_admin()) {
        wp_deregister_script('jquery');

        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', false);
    };

    wp_enqueue_script('load-script', get_template_directory_uri() . '/js/loadmore.js', array('jquery'), null, true);
    wp_localize_script('load-script', 'SiteConfig', [
        'ajax_url' => admin_url('admin-ajax.php'),
    ]);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');



add_action('after_setup_theme', 'dokmeh_test');

// include files

include get_template_directory() . '/inc/custom-post-type.php';
include get_template_directory() . '/inc/ajax.php';
