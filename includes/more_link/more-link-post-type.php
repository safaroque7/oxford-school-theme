<?php

    function more_link_post_type(){
        register_post_type('more_link',array (
            'labels'                => array(
                'name'              => __('More Link', 'School-Theme'),
            ),
            'public'                => true,
            'menu_icon'             => 'dashicons-admin-links',
            'has_archive'           => true,
            'rewrite'               => array('slug' => 'more-link'),
            'menu_position'         => 34,
            'publicly_queryable'    => true,
            'query_var'             => true, 
            'show_ui'               => true,
            'capability_type'       =>'post',
            'hierarchical'          => true,
            'supports'              => array('title', 'editor', 'thumbnail'),
        ));
    }
    add_action('init', 'more_link_post_type');