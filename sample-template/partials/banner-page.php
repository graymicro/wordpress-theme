<?php

$background_image = get_field('main_banner');
$main_title = get_field('main_title');
$title = get_field('title');
$description = get_field('description');
$title_of_button = get_field('title-of-button');
$link_of_button = get_field('link-of-button');
$output_html = '';

$output_html .= '<div class="banner banner-home">';
$output_html .= '<div id="rev_slider_unique_id" class="rev_slider_wrapper fullscreen-container" data-alias="restaurant-header" style="margin:0px auto;background-color:#fff;padding:0px;margin-top:0px;margin-bottom:0px;">';
$output_html .= '<div id="rev_slider_70_1" class="rev_slider fullscreenabanner" style="display:none;" data-version="5.1.4">';
$output_html .= '<ul>';
$output_html .= '<li class="slider-color-schema-dark" data-index="rs-2" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">';
$output_html .= '<img src="' . $background_image['url'] . '" alt="image description" data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-bgfit="cover" data-no-retina>';
$output_html .= '<div class="tp-caption tp-shape tp-shapewrapper" id="slide-1699-layer-10" data-x="left" data-hoffset="0" data-y="middle" data-voffset="0" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames=\'[{"from":"y:0;sX:1;sY:1;opacity:0;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]\' data-textAlign="left" data-paddingtop="0" data-paddingright="0" data-paddingbottom="0" data-paddingleft="0" style="background-color:rgba(0, 0, 0, 0.57);">';
$output_html .= '</div>';
$output_html .= '<div class="slider-sub-title text-white tp-caption tp-resizeme rs-parallaxlevel-0" data-x="left" data-hoffset="0" data-y="top" data-voffset="145" data-width="1200" data-textalign="left" data-fontsize="30" data-lineheight="72" data-letterspacing="5" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-paddingright="25" data-paddingleft="25">';
$output_html .= $title;
$output_html .= '</div>';
$output_html .= '<div class="slider-main-title text-white tp-caption tp-resizeme rs-parallaxlevel-1" data-x="left" data-hoffset="0" data-y="top" data-voffset="250" data-width="1200" data-textalign="left" data-fontsize="160" data-fontweight="900" data-letterspacing="25" data-lineheight="184" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-paddingright="25" data-paddingleft="25">';
$output_html .= $main_title;
$output_html .= '</div>';
$output_html .= '<div class="slider-text text-white tp-caption tp-resizeme rs-parallaxlevel-2" data-x="left" data-hoffset="0" data-y="top" data-voffset="450" data-width="600" data-textalign="left" data-fontsize="16" data-lineheight="30" data-fontweight="400" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-paddingright="25" data-paddingleft="25">';
$output_html .= $description;
$output_html .= '</div>';
$output_html .= '<div class="tp-caption rev-btn rs-parallaxlevel-10" id="slide-163-layer-1" data-x="left" data-hoffset="0" data-y="middle" data-voffset="320" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="1250" data-splitin="none" data-splitout="none" data-actions=\'[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]\' data-responsive_offset="on" data-paddingtop="0" data-paddingright="25" data-paddingbottom="0" data-paddingleft="25">';
$output_html .= '<a class="btn has-radius-small" href="' . $link_of_button . '">';
$output_html .= $title_of_button;
$output_html .= '</a>';
$output_html .= '</div>';
$output_html .= '</li>';
$output_html .= '</ul>';
$output_html .= '</div>';
$output_html .= '</div>';
$output_html .= '</div>';

echo $output_html

?>
