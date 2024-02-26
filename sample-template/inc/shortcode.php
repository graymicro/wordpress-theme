<?php


function main_sub_title($atts, $content = null)
{
    if(!is_null($content)){
        return '<h3 class="post-sub-title">'.do_shortcode($content).'</h3>';
    };
};
add_shortcode('sub_title', 'main_sub_title');
