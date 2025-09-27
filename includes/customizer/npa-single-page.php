<?php
/** 
     * ===================================
     * Single Page Sub heading and Title Color 
     * ===================================
     */
    $wp_customize->add_section('npa_single_page_sub_heading_and_title_color', array(
        'title'         => __('Single Page Sub heading and Title Color ', 'npa'),
        'priority'      => 60,
        'description'   => 'If you are intersted to change theme color, you can do it from here'
    ));

    // Single Page Sub heading Font Size
    $wp_customize->add_setting('npa_single_page_sub_title_font_size_setting', array(
        'default'   => 16,
        'sanitize_callback' => 'absint', //converts value to a non-negative integer
        'transport' => 'refresh'
    ));
    $wp_customize->add_control('npa_single_page_sub_title_font_size_setting', array(
        'type'          => 'number',
        'label'         => __('Subtile Font Size', 'npa'),
        'section'       => 'npa_single_page_sub_heading_and_title_color',
        'settings'      => 'npa_single_page_sub_title_font_size_setting',
        
    ));

    // Single Page Sub heading Text Color 
    $wp_customize->add_setting('npa_single_page_sub_heading_text_color_setting', array(
        'default'   => '#dc3545',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_single_page_sub_heading_text_color_setting', array(
        'label'         => __('Choose Sub Title Text Color', 'npa'),
        'section'       => 'npa_single_page_sub_heading_and_title_color',
        'settings'       => 'npa_single_page_sub_heading_text_color_setting',
    )));


    // Single Page Title Font Size
    $wp_customize->add_setting('npa_single_page_title_font_size_setting', array(
        'default'   => 30,
        'sanitize_callback' => 'absint', //converts value to a non-negative integer
        'transport' => 'refresh'
    ));
    $wp_customize->add_control('npa_single_page_title_font_size_setting', array(
        'type'          => 'number',
        'label'         => __('Title Font Size', 'npa'),
        'section'       => 'npa_single_page_sub_heading_and_title_color',
        'settings'      => 'npa_single_page_title_font_size_setting',
        
    ));

    // Single Page Title Text Color
    $wp_customize->add_setting('npa_single_page_title_color_setting', array(
        'default'   => '#004F8B',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_single_page_title_color_setting', array(
        'label'         => __('Choose Main Heading Text Color', 'npa'),
        'section'       => 'npa_single_page_sub_heading_and_title_color',
        'settings'       => 'npa_single_page_title_color_setting',
    )));