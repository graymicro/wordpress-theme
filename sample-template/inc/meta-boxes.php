<?php

function sample_slider_meta_box(){

    $screens = array('post','download');

    foreach($screens as $screens){

        add_meta_box('sample_slider_box', 'slider picture','sample_slider_meta_box',$screens );
    }


};

function sample_slider_box_content(){


}

add_action('add_meta_boxes','sl_slider_meta_box');