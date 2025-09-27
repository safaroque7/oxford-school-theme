<?php

    function committee_post_type(){
        register_post_type('committee',array (
            'labels'                => array(
                'name'              => __('Committee', 'School-Theme'),

            ),
            'public'                => true,
            'menu_icon'             =>'dashicons-groups',
            'has_archive'           => true,
            'rewrite'               => array('slug' => 'committee'),
            'menu_position'         => 25,
            'publicly_queryable'    => true,
            'query_var'             => true, 
            'show_ui'               => true,
            'capability_type'       =>'post',
            'hierarchical'          => true,
            'supports'              => array('title', 'thumbnail'),
        ));
    }
    add_action('init', 'committee_post_type');