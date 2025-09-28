<?php

function banner_post_type()
{
    register_post_type('banner', array(
        'labels'                => array(
            'name'              => __('Banner', 'School-Theme'),
        ),
        'public'                => true,
        'menu_icon'             => 'dashicons-slides',
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'banner'),
        'menu_position'         => 27,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'show_ui'               => true,
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'supports'              => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'banner_post_type');
