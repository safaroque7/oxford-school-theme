<?php

$wp_customize->add_section('npa_footer_background', array(
  'title'             => esc_html__('Footer Background and Text Color', 'npa'),
  'panel'             => 'npa_footer_panel',
));

// npa_footer_background_setting
$wp_customize->add_setting('npa_footer_background_setting', array(
  'default'           => '#999999',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport'         => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_footer_background_setting', array(
  'label'             => esc_html__('Choose Background color', 'npa'),
  'section'           => 'npa_footer_background',
  'settings'          => 'npa_footer_background_setting',
)));

// npa_footer_text_color_setting
$wp_customize->add_setting('npa_footer_text_color_setting', array(
  'default'           => '#000000',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport'         => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_footer_text_color_setting', array(
  'label'             => esc_html__('Choose Text color', 'npa'),
  'section'           => 'npa_footer_background',
  'settings'          => 'npa_footer_text_color_setting',
  'type'              => 'color' 
)));
