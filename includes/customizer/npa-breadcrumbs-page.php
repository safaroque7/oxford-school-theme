<?php

/** 
 * ============================================
 * Website Background Color 
 * ============================================
 */
$wp_customize->add_section('website_background_color', array(
    'title'         => __('Website Color', 'school-theme'),
    'priority'      => 90,
    'description'   => 'If you are intersted to change breadcrumbs\'s color, you can do it from here'
));

// Breadcrumbs Home Icon Background Color
$wp_customize->add_setting('website_background_color', array(
    'default'   => '#2cb2bc',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'website_background_color', array(
    'label'         => __('Choose Background Color', 'school-theme'),
    'section'       => 'website_background_color',
    'settings'       => 'website_background_color',
)));
