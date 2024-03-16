<?php


function main_sub_title($atts, $content = null)
{
    if (!is_null($content)) {
        return '<h3 class="post-sub-title">' . do_shortcode($content) . '</h3>';
    };
};
add_shortcode('sub_title', 'main_sub_title');



// download box shortcode 

function dl_box_callback($atts, $content = null)
{
    global $post;
    $atts =  shortcode_atts(array('title' => get_the_title($post->ID), 'link' => home_url(), 'user_logged' => 0), $atts);
    $html = '';
    if (intval($atts['user_logged']) == 1) {

        if (is_user_logged_in()) {
            $html .= '<div class="dl_box" style="width: 350px;height: 100px;background-color: #f0f0f0;border: 1px solid #ccc;border-radius: 5px;text-align: center;padding: 20px;margin: 20px;">';
            $html .= '<a class="download_file" data-id="' . $post->ID . '" style="color: #333;text-decoration: none;font-weight: bold;" href="' . $atts['link'] . '">' . $atts['title'] . ' </a> ';
            $html .= '</div> ';

            return $html;
        } else {
            $html .= '<div class="dl_box" style="width: 350px;height: 100px;background-color: #f0f0f0;border: 1px solid #ccc;border-radius: 5px;text-align: center;padding: 20px;margin: 20px;">';
            $html .= '<a class="download_file" data-id="' . $post->ID . '" style="color: #333;text-decoration: none;font-weight: bold;" href="' . wp_login_url(get_permalink(get_the_ID())) . '"> </a> ';
            $html .= '</div> ';

            return $html;
        }
    } else {
        $html .= '<div class="dl_box" style="width: 350px;height: 100px;background-color: #f0f0f0;border: 1px solid #ccc;border-radius: 5px;text-align: center;padding: 20px;margin: 20px;">';
        $html .= '<a class="download_file" data-id="' . $post->ID . '" style="color: #333;text-decoration: none;font-weight: bold;" href="' . $atts['link'] . '">' . $atts['title'] . ' </a> ';
        $html .= '</div> ';

        return $html;
    }
}

add_shortcode('dl_box', 'dl_box_callback');

// ################

function project_details_box($atts, $content = null)
{
    global $post;
    $atts = shortcode_atts(array(
        'title' => 'Project Name',
        'created_by' => 'Sanjeev Jha',
        'completed_on' => '07th August 2017',
        'skills_used' => 'PHP / MySQL / HTML5',
        'client_name' => '<a href="#">Roxine Web Studio</a>'
    ), $atts);

    $html = '<ul class="content-list info-list bottom-space">';
    $html .= '<li class="row">';
    $html .= '<div class="col">';
    $html .= '<span class="custom-icon-folder"><span class="sr-only">&nbsp;</span></span>';
    $html .= '<span class="text title">Project Name</span>';
    $html .= '</div>';
    $html .= '<div class="col">';
    $html .= '<p>' . esc_html($atts['title']) . '</p>';
    $html .= '</div>';
    $html .= '</li>';
    $html .= '<li class="row">';
    $html .= '<div class="col">';
    $html .= '<span class="custom-icon-user"><span class="sr-only">&nbsp;</span></span>';
    $html .= '<span class="text title">Created By:</span>';
    $html .= '</div>';
    $html .= '<div class="col">';
    $html .= '<p>' . esc_html($atts['created_by']) . '</p>';
    $html .= '</div>';
    $html .= '</li>';
    $html .= '<li class="row">';
    $html .= '<div class="col">';
    $html .= '<span class="custom-icon-calendar"><span class="sr-only">&nbsp;</span></span>';
    $html .= '<span class="text title">Completed on:</span>';
    $html .= '</div>';
    $html .= '<div class="col">';
    $html .= '<p>' . esc_html($atts['completed_on']) . '</p>';
    $html .= '</div>';
    $html .= '</li>';
    $html .= '<li class="row">';
    $html .= '<div class="col">';
    $html .= '<span class="custom-icon-skill"><span class="sr-only">&nbsp;</span></span>';
    $html .= '<span class="text title">Skills Used:</span>';
    $html .= '</div>';
    $html .= '<div class="col">';
    $html .= '<p>' . esc_html($atts['skills_used']) . '</p>';
    $html .= '</div>';
    $html .= '</li>';
    $html .= '<li class="row">';
    $html .= '<div class="col">';
    $html .= '<span class="custom-icon-link2"><span class="sr-only">&nbsp;</span></span>';
    $html .= '<span class="text title">Client Name:</span>';
    $html .= '</div>';
    $html .= '<div class="col">';
    $html .= '<p>' . $atts['client_name'] . '</p>';
    $html .= '</div>';
    $html .= '</li>';
    $html .= '</ul>';

    return $html;
}

add_shortcode('project_details', 'project_details_box');
