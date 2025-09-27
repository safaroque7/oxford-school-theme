<?php

$wp_customize->add_section('npa_footer_section', array(
  'title'     => esc_html__('Footer main logo and position'),
  'panel'     => 'npa_footer_panel'
));

$wp_customize->add_setting('npa_footer_setting_logo_position', array(
  'default' => get_bloginfo('template_directory') . '/images/main-logo.png',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'npa_footer_setting_logo_position', array(
  'label'     => esc_html('Select Logo'),
  'section'   => 'npa_footer_section',
  'settings'  =>  'npa_footer_setting_logo_position'
)));