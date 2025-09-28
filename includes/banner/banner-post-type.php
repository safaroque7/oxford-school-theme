<?php

function banner_post_type()
{
    register_post_type('banner', array(
        'labels'                => array(
            'name'              => __('Banner', 'School-Theme'),
            'singular_name'         => 'Banner Item',
            'add_new_item'          => 'Add New Banner Item',
            'edit_item'             => 'Edit Banner Item',
            'new_item'              => 'New Banner Item',
            'view_item'             => 'View Banner Item',
            'search_items'          => 'Search Banner Items',
            'not_found'             => 'No Banner Items found',
            'not_found_in_trash'    => 'No Banner Items found in Trash',
            'all_items'             => 'All Banner Items',
            'featured_image'        =>  'Use Featured Image',
            'set_featured_image'    =>  'Image Size width: 856px,  height: 460px',


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
