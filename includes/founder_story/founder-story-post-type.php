<?php

    function founder_story_post_type(){
        register_post_type('founder_story',array (
            'labels'                => array(
                'name'              => __('Founder Story', 'School-Theme'),
            ),
            'public'                => true,
            'menu_icon'             =>'dashicons-image-filter',
            'has_archive'           => true,
            'rewrite'               => array('slug' => 'founder-story'),
            'menu_position'         => 32,
            'publicly_queryable'    => true,
            'query_var'             => true, 
            'show_ui'               => true,
            'capability_type'       =>'post',
            'hierarchical'          => true,
            'supports'              => array('title', 'editor', 'thumbnail'),
        ));
    }
    add_action('init', 'founder_story_post_type');