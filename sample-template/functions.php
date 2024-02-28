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
add_action('after_setup_theme', 'dokmeh_test');

function my_theme_scripts()
{

    if (!is_admin()) {
        // wp_deregister_script('jquery');

        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', false);
    };

    wp_enqueue_script('load-script', get_template_directory_uri() . '/js/loadmore.js', array('jquery'), null, true);
    wp_localize_script('load-script', 'my_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));

    //register download file counter
    wp_enqueue_script('download-counter-script', get_template_directory_uri() . '/js/downloadfile.js', array('jquery'), null, true);
    wp_localize_script('download-counter-script', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');

function get_post_download_count($post_id)
{
    if (intval($post_id)) {
        $post_download_count = get_post_meta($post_id, 'download_count', true);
        return intval($post_download_count);
    }
}

function set_post_download_count($post_id)
{
    if (intval($post_id)) {

        $downloads = get_post_download_count($post_id);
        $downloads++;
        update_post_meta($post_id, "download_count", $downloads);
        return  $downloads;
    }
    return 0;
}

add_action('get_download', 'get_post_download_count');
add_action('set_download', 'set_post_download_count');

function comments_callback($comment, $args, $depth) {
    // Set the global comment variable
    $GLOBALS['comment'] = $comment; 

    // Check the type of comment
    switch ($comment->comment_type) :
        case 'pingback':
        case 'trackback':
            ?>
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
                <p>Pingback <?php comment_author_link(); ?> <?php edit_comment_link('Edit', '<span class="edit-link">', '</span>'); ?></p>
            <?php
            break;
        default:
            global $post;
            ?>
            <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                <div id="comment-<?php comment_ID(); ?>">
                    <div class="comment-author vcard">
                        <?php 
                        // Display the avatar
                        echo '<div>' . get_avatar($comment, 44) . '</div>';
                        // Display the author's name
                        printf('<cite class="fn %2$s">%1$s</cite>', get_comment_author_link(), ($comment->user_id === $post->post_author) ? 'author' : '');
                        ?>
                    </div>

                    <?php if ('0' == $comment->comment_approved) : ?>
                        <p class="bg-danger comment-awaiting-moderation">Your comment is awaiting moderation.</p>
                    <?php endif; ?>  

                    <div class="comment-text">
                        <?php comment_text(); ?>
                        <?php edit_comment_link('<span></span>', '<p class="edit-link">', '</p>'); ?>
                    </div>

                    <div class="reply">
                        <?php 
                        // Display the comment reply link
                        comment_reply_link(array_merge($args, array('reply_text' => '<span class="reply"></span>', 'depth' => $depth, 'max_depth' => $args['max_depth'])));
                        ?>
                    </div>
                </div>
            <?php 
            break;
    endswitch;
}


// include files

include get_template_directory() . '/inc/custom-post-type.php';
include get_template_directory() . '/inc/custom-taxonomy.php';
include get_template_directory() . '/inc/ajax.php';
include get_template_directory() . '/inc/shortcode.php';
