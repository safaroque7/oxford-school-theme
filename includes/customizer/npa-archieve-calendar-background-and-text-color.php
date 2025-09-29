<?php

/** 
 * ===================================
 * Archieve Backgrlund and Text Color
 * ===================================
 */
$wp_customize->add_section('npa_archive_bg_and_text_color', array(
    'title'         => __('Archive Background and Text Color', 'school-theme'),
    'priority'      => 60,
    'description'   => 'If you are intersted to change archieve title background and text color, you can do it from here'
));

// Scroll Background Color
$wp_customize->add_setting('npa_archive_bg_color_setting', array(
    'default'   => '#2cb2bc',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_archive_bg_color_setting', array(
    'label'         => __('Choose Archieve\'s Title Background Color', 'school-theme'),
    'section'       => 'npa_archive_bg_and_text_color',
    'settings'       => 'npa_archive_bg_color_setting',
)));

// Scroll Text Color
$wp_customize->add_setting('npa_archive_text_color_setting', array(
    'default'   => '#ffffff',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_archive_text_color_setting', array(
    'label'         => __('Choose Archieve\'s Title Text Color', 'school-theme'),
    'section'       => 'npa_archive_bg_and_text_color',
    'settings'       => 'npa_archive_text_color_setting',
)));
