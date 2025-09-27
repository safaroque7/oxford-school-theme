<?php
/** 
     * ============================================
     * Breadcrumbs Background and Text Color  
     * ============================================
     */
    $wp_customize->add_section('npa_breadcrumbs_background_and_text_color', array(
        'title'         => __('Breadcrumbs Page Backgorund and Text Color', 'npa'),
        'priority'      => 90,
        'description'   => 'If you are intersted to change breadcrumbs\'s color, you can do it from here'
    ));

    
    // Breadcrumbs Home Icon Background Color
    $wp_customize->add_setting('npa_breadcrumbs_home_icon_background_color_setting', array(
        'default'   => '#2cb2bc',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_breadcrumbs_home_icon_background_color_setting', array(
        'label'         => __('Choose Home Icon Background Color', 'npa'),
        'section'       => 'npa_breadcrumbs_background_and_text_color',
        'settings'       => 'npa_breadcrumbs_home_icon_background_color_setting',
    )));  

    // Breadcrumbs Home Icon Text Color
    $wp_customize->add_setting('npa_breadcrumbs_home_icon_text_color_setting', array(
        'default'   => '#FFFFFF',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_breadcrumbs_home_icon_text_color_setting', array(
        'label'         => __('Choose Home Icon Text Color', 'npa'),
        'section'       => 'npa_breadcrumbs_background_and_text_color',
        'settings'       => 'npa_breadcrumbs_home_icon_text_color_setting',
    )));  


    

    // Breadcrumbs Text Color
    $wp_customize->add_setting('npa_breadcrumbs_text_color_setting', array(
        'default'   => '#000000',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_breadcrumbs_text_color_setting', array(
        'label'         => __('Choose Text Color', 'npa'),
        'section'       => 'npa_breadcrumbs_background_and_text_color',
        'settings'       => 'npa_breadcrumbs_text_color_setting',
    )));

    // Breadcrumbs Arrow Text Color
    $wp_customize->add_setting('npa_breadcrumbs_arrow_color_setting', array(
        'default'   => '#999999',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_breadcrumbs_arrow_color_setting', array(
        'label'         => __('Choose Arrow Icon Text Color', 'npa'),
        'section'       => 'npa_breadcrumbs_background_and_text_color',
        'settings'       => 'npa_breadcrumbs_arrow_color_setting',
    )));