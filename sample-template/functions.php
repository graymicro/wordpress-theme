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
}

add_action('after_setup_theme', 'dokmeh_test');
// user functions 

function get_post_view($post_id)
{

    if (intval($post_id)) {

        $post_view = get_post_meta('$post_id', 'views', true);
        return intval($post_view);
    }
}

function set_post_view($post_id){

    $view = get_post_view($post_id);
    $view++;
    update_post_meta($post_id,'views',$view);
}

// include files

include get_template_directory() . '/inc/custom-post-type.php';
