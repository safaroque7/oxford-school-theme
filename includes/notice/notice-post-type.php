<?php

function notice_post_type()
{
    register_post_type('notice', array(
        'labels'                => array(
            'name'              => __('Notice', 'School-Theme'),

        ),
        'public'                => true,
        'menu_icon'             => 'dashicons-pressthis',
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'notice'),
        'menu_position'         => 28,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'show_ui'               => true,
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'supports'              => array('title'),
    ));
}
add_action('init', 'notice_post_type');
