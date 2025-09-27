<?php

$wp_customize->add_section('npa_footer_menu_background', array(
  'title'             => esc_html__('Footer Menu Background and Text Color', 'npa'),
  'panel'             => 'npa_footer_panel',
));

// npa_footer_menu_background_setting
$wp_customize->add_setting('npa_footer_menu_background_setting', array(
  'default'           => '#3e3e3e',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport'         => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_footer_menu_background_setting', array(
  'label'             => esc_html__('Choose Background color', 'npa'),
  'section'           => 'npa_footer_menu_background',
  'settings'          => 'npa_footer_menu_background_setting',
)));

// npa_footer_menu_text_color_setting
$wp_customize->add_setting('npa_footer_menu_text_color_setting', array(
  'default'           => '#ffffff',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport'         => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_footer_menu_text_color_setting', array(
  'label'             => esc_html__('Choose Text color', 'npa'),
  'section'           => 'npa_footer_menu_background',
  'settings'          => 'npa_footer_menu_text_color_setting',
  'type'              => 'color' 
)));
