<?php

$wp_customize->add_section('npa_footer_extra', array(
  'title'             => esc_html__('Extra Message', 'npa'),
  'panel'             => 'npa_footer_panel',
));
$wp_customize->add_setting('npa_footer_extra_setting', array(
  'default'           => '',
  'sanitize_callback' => 'wp_filter_nohtml_kses',
  'transport'         => 'refresh'
));
$wp_customize->add_control('npa_footer_extra_setting', array(
  'label'             => esc_html__('Type Your Message here', 'npa'),
  'section'           => 'npa_footer_extra',
  'settings'          => 'npa_footer_extra_setting',
  'type'              => 'text' 
));
