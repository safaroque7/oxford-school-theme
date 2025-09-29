<?php

/** 
 * ============================================
 * Pagination Page Backgorund and Text Color 
 * ============================================
 */
$wp_customize->add_section('npa_pagination_background_and_text_color', array(
    'title'         => __('Pagination Page Backgorund and Text Color', 'school-theme'),
    'priority'      => 90,
    'description'   => 'If you are intersted to change pagination\'s color, you can do it from here'
));

// Pagination Border Color
$wp_customize->add_setting('npa_pagination_border_color_setting', array(
    'default'   => '#2cb2bc',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_pagination_border_color_setting', array(
    'label'         => __('Choose Pagination Border Color', 'school-theme'),
    'section'       => 'npa_pagination_background_and_text_color',
    'settings'       => 'npa_pagination_border_color_setting',
)));

// Pagination Text Color
$wp_customize->add_setting('npa_pagination_text_color_setting', array(
    'default'   => '#000000',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_pagination_text_color_setting', array(
    'label'         => __('Choose Pagination Text Color', 'school-theme'),
    'section'       => 'npa_pagination_background_and_text_color',
    'settings'       => 'npa_pagination_text_color_setting',
)));

// Pagination Active and Hover Background Color
$wp_customize->add_setting('npa_pagination_hover_and_background_color_setting', array(
    'default'   => '#2cb2bc',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_pagination_hover_and_background_color_setting', array(
    'label'         => __('Choose Hover and Active Background Color', 'school-theme'),
    'section'       => 'npa_pagination_background_and_text_color',
    'settings'       => 'npa_pagination_hover_and_background_color_setting',
)));

// Pagination Active and Hover Text Color
$wp_customize->add_setting('npa_pagination_hover_and_text_color_setting', array(
    'default'   => '#ffffff',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_pagination_hover_and_text_color_setting', array(
    'label'         => __('Choose Hover Text Color', 'school-theme'),
    'section'       => 'npa_pagination_background_and_text_color',
    'settings'       => 'npa_pagination_hover_and_text_color_setting',
)));
