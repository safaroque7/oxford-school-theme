<?php

/** 
 * ===================================
 * All Division News Background and Text Color
 * ===================================
 */
$wp_customize->add_section('npa_all_division_bg_and_text_color', array(
    'title'         => __('All Division News Background and Text Color', 'school-theme'),
    'priority'      => 60,
    'description'   => 'If you are intersted to chang theme color, you can do it from here'
));

// All Division Title Background Color
$wp_customize->add_setting('npa_all_division_bg_color_setting', array(
    'default'   => '#2cb2bc',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_all_division_bg_color_setting', array(
    'label'         => __('Choose Background Color', 'school-theme'),
    'section'       => 'npa_all_division_bg_and_text_color',
    'settings'       => 'npa_all_division_bg_color_setting',
)));

// All Division Title Text Color
$wp_customize->add_setting('npa_all_division_news_text_color_setting', array(
    'default'   => '#ffffff',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_all_division_news_text_color_setting', array(
    'label'         => __('Choose Text Color', 'school-theme'),
    'section'       => 'npa_all_division_bg_and_text_color',
    'settings'       => 'npa_all_division_news_text_color_setting',
)));
