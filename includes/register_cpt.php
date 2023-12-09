<?php
//Register cpt
add_action('init', 'create_custom_post_types');
function create_custom_post_types()
{
    register_post_type(
        'Residential',
        array(
            'labels' => array(
                'name' => __('Residential', 'eds'),
                'singular_name' => __('Residential', 'eds')
            ),
            'public' => true,
            'has_archive' => false,
            'menu_icon' => 'dashicons-store',
            'supports' => [
                'title', 'editor', 'thumbnail', 'excerpt'
            ],
            'rewrite' => array('slug' => 'residential', 'with_front' => false)
        )
    );
    register_post_type(
        'Commercial',
        array(
            'labels' => array(
                'name' => __('Commercial', 'eds'),
                'singular_name' => __('Commercial', 'eds')
            ),
            'public' => true,
            'has_archive' => false,
            'menu_icon' => 'dashicons-building',
            'supports' => [
                'title', 'editor', 'thumbnail', 'excerpt'
            ],
            'rewrite' => array('slug' => 'commercial', 'with_front' => false)
        )
    );
    register_post_type(
        'Furniture',
        array(
            'labels' => array(
                'name' => __('Furniture', 'eds'),
                'singular_name' => __('Furniture', 'eds')
            ),
            'public' => true,
            'has_archive' => false,
            'menu_icon' => 'dashicons-hammer',
            'supports' => [
                'title', 'editor'
            ],
            'rewrite' => array('slug' => 'furniture', 'with_front' => false)
        )
    );
}
