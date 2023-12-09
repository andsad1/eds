<?php

require_once("includes/register_stylesheets.php");
require_once("includes/register_scripts.php");
require_once("includes/register_cpt.php");

add_image_size('big', 1600, 9999);
add_image_size('very_big', 1920, 9999);
add_theme_support('post-thumbnails');

function register_my_menu()
{
    register_nav_menus(
        array(
            'pagrindinis-meniu' => __('Pagrindinis meniu')
        )
    );
}
add_action('after_setup_theme', 'register_my_menu');

//Remove wp version
function wpb_remove_version()
{
    return '';
}
add_filter('the_generator', 'wpb_remove_version');

require_once(get_template_directory() . "/includes/register_acf_options.php");


add_action('admin_menu', 'remove_default_post_type');

function remove_default_post_type()
{
    remove_menu_page('edit.php');
}


function wpdocs_custom_excerpt_length($length)
{
    return 50;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);
function remove_update_acf_notifications($value)
{
    if (isset($value) && is_object($value)) {
        unset($value->response['advanced-custom-fields-pro/acf.php']);
    }

    return $value;
}
add_filter('site_transient_update_plugins', 'remove_update_acf_notifications');
