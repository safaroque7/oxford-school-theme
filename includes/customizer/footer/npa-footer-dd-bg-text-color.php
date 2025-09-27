<?php

$wp_customize->add_section('npa_footer_dd_bg_text', array(
  'title'             => esc_html__('Design and Development Background and Text Color', 'npa'),
  'panel'             => 'npa_footer_panel',
));

// npa_footer_dd_background_setting
$wp_customize->add_setting('npa_footer_dd_background_setting', array(
  'default'           => '#000000',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport'         => 'refresh'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_footer_dd_background_setting', array(
  'label'             => esc_html__('Choose Background color', 'npa'),
  'section'           => 'npa_footer_dd_bg_text',
  'settings'          => 'npa_footer_dd_background_setting',
)));

// npa_footer_dd_text_setting
$wp_customize->add_setting('npa_footer_dd_text_setting', array(
  'default'           => '#ffffff',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport'         => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_footer_dd_text_setting', array(
  'label'             => esc_html__('Choose Text color', 'npa'),
  'section'           => 'npa_footer_dd_bg_text',
  'settings'          => 'npa_footer_dd_text_setting',
  'type'              => 'color'
)));
