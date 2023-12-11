<?php
function wpt_theme_styles()
{
    // bootstrap
    wp_enqueue_style('bootstrap_reboot', get_template_directory_uri() . '/assets/libs/bootstrap/dist/css/bootstrap-reboot.css');
    wp_enqueue_style('bootstrap_grid', get_template_directory_uri() . '/assets/libs/bootstrap/dist/css/bootstrap-grid.css');
    // animate
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/libs/animate/animate.css');
    // fancybox
    wp_enqueue_style('fancybox_css', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
    // Slick
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/libs/slick/slick/slick.css');
    wp_enqueue_style('slick_theme', get_template_directory_uri() . '/assets/libs/slick/slick/slick-theme.css');
    // App stylesheet
    wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/dist/css/app.min.css', array(), '1.5.1');
}

add_action('wp_enqueue_scripts', 'wpt_theme_styles');
