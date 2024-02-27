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
            $html .= '<a class="download_file" data-id="'.$post->ID.'" style="color: #333;text-decoration: none;font-weight: bold;" href="' . $atts['link'] . '">' . $atts['title'] . ' </a> ';
            $html .= '</div> ';

            return $html;
        } else {
            $html .= '<div class="dl_box" style="width: 350px;height: 100px;background-color: #f0f0f0;border: 1px solid #ccc;border-radius: 5px;text-align: center;padding: 20px;margin: 20px;">';
            $html .= '<a class="download_file" data-id="'.$post->ID.'" style="color: #333;text-decoration: none;font-weight: bold;" href="' . wp_login_url(get_permalink(get_the_ID())) . '"> </a> ';
            $html .= '</div> ';

            return $html;
        }
    } else {
        $html .= '<div class="dl_box" style="width: 350px;height: 100px;background-color: #f0f0f0;border: 1px solid #ccc;border-radius: 5px;text-align: center;padding: 20px;margin: 20px;">';
        $html .= '<a class="download_file" data-id="'.$post->ID.'" style="color: #333;text-decoration: none;font-weight: bold;" href="' . $atts['link'] . '">' . $atts['title'] . ' </a> ';
        $html .= '</div> ';

        return $html;
    }
}

add_shortcode('dl_box', 'dl_box_callback');
