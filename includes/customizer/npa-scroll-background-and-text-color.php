<?php

/** 
 * ===============================
 * Theme Color Start
 * ==============================
 */
$wp_customize->add_section('menubar_background_color', array(
    'title'         => __('Menubar Background Color', 'School-Theme'),
    'priority'      => 30,
    'description'   => 'Menubar Background Color'
));

// Menubar Background Color
$wp_customize->add_setting('menubar_background_color', array(
    'default'   => '#1296B1',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menubar_background_color', array(
    'label'         => __('Choose Scroll Background Color', 'School-Theme'),
    'section'       => 'menubar_background_color',
    'settings'       => 'menubar_background_color',
)));


// Menubar Right Border Color
$wp_customize->add_setting('menubar_right_border_color', array(
    'default'   => '#28b1d3',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menubar_right_border_color', array(
    'label'         => __('Choose Menubar Right Border Color', 'School-Theme'),
    'section'       => 'menubar_background_color',
    'settings'       => 'menubar_right_border_color',
)));

// Menubar Left Border Color
$wp_customize->add_setting('menubar_left_border_color', array(
    'default'   => '#067b92',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menubar_left_border_color', array(
    'label'         => __('Choose Menubar Left Border Color', 'School-Theme'),
    'section'       => 'menubar_background_color',
    'settings'       => 'menubar_left_border_color',
)));
