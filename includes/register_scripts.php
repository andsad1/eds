<?php
function wpt_theme_js()
{
    //lazy
    wp_register_script('lazyload_js', get_template_directory_uri() . '/assets/libs/lazy/lazyload.min.js', array('jquery'));
    wp_enqueue_script('lazyload_js');
    //fancybox
    wp_register_script('fancybox_js', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array('jquery'), null, true);
    wp_enqueue_script('fancybox_js');
    //Slick
    wp_register_script('slick_js', get_template_directory_uri() . '/assets/libs/slick/slick/slick.min.js', array(), null, true);
    wp_enqueue_script('slick_js');
    // wow
    wp_register_script('wow_js', get_template_directory_uri() . '/assets/libs/wow/wow.min.js', array(), null, true);
    wp_enqueue_script('wow_js');
    // App
    wp_register_script('app_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '0.6', true);
    wp_enqueue_script('app_js');
}

add_action('wp_enqueue_scripts', 'wpt_theme_js');
