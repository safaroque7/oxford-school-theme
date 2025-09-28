<?php

    function important_link_post_type(){
        register_post_type('important_link',array (
            'labels'                => array(
                'name'              => __('Important Link', 'School-Theme'),
            ),
            'public'                => true,
            'menu_icon'             =>'dashicons-admin-links',
            'has_archive'           => true,
            'rewrite'               => array('slug' => 'important-link'),
            'menu_position'         => 31,
            'publicly_queryable'    => true,
            'query_var'             => true, 
            'show_ui'               => true,
            'capability_type'       =>'post',
            'hierarchical'          => true,
            'supports'              => array('title'),
        ));
    }
    add_action('init', 'important_link_post_type');