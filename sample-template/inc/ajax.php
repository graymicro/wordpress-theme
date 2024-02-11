<?php

add_action('wp_ajax_load_more_post', 'load_more_post');
add_action('wp_ajax_nopriv_load_more_post', 'load_more_post');

function load_more_post()
{

    $page = intval($_POST['page']);

    $posts_per_page = 1;

    $offset = ($page - 1) * $posts_per_page;

    $load_more_args = array(
        'post_type' => array('post'),
        'offset' => $offset,
        'posts_per_page' => $posts_per_page

    );

    $load_more_query = new WP_Query($load_more_args());
    $output_html = '';
    if ($load_more_query->have_posts()) :

        
        while ($load_more_query->have_posts()) : $load_more_query->the_post();


        $output_html.='<div class="col-wrap">';
                $output_html.= '<div class="post-grid reverse-grid" href="'.get_the_permalink().'">';
                $output_html.= '<div class="img-block post-img">';
                     get_the_post_thumbnail($load_more_query->post->ID, 'post-thumbnails');
                    $output_html.= '<time class="post-date" datetime="2016-10-10">17 Jun</time>';
                $output_html.= '</div>';
                $output_html.= '<div class="post-text-block bg-gray-light">';
                    $output_html.='<strong class="content-title mb-0">'.get_the_title($load_more_query->post->ID).'</strong>';
                    $output_html.= '<span class="content-sub-title">Thechnology and Trends</span>';
                    $output_html.= '<p>This is Photoshops version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>';
                    $output_html.= '<div class="post-meta clearfix">';
                        $output_html.= '<div class="post-link-holder">';
                            $output_html.= '<a href="#">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>';
                        $output_html.= '</div>';
                        $output_html.= ' <div class="post-social text-right">';
                            $output_html.= '<ul class="social-network social-small">';
                                $output_html.= '<li><a href="#"><span class="icon-facebook"><span class="sr-only">&nbsp;</span></span></a></li>';
                                $output_html.= '<li><a href="#"><span class="icon-twitter"><span class="sr-only">&nbsp;</span></span></a></li>';
                            $output_html.= '</ul>';
                        $output_html.= '</div>';
                    $output_html.= '</div>';
                $output_html.= '</div>';
            $output_html.= '</div>';
        $output_html.= '</div>';


        endwhile;

    endif;
    $count = $load_more_query->found_posts;
    wp_reset_postdata();
    $result = array();
    $result['count'] = $count;
    $result['content'] = $output_html;
    wp_die(json_encode($result)); 

    die();
};
