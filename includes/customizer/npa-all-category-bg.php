<?php

//Header area function

$wp_customize->add_section('npa_category_bg', array(

  'title'         =>  esc_html__('All Categirt BG color', 'npa'),

  'description'   => 'If you want to update your header area, you can do it here.'

));



$wp_customize->add_setting('npa_category_bg_id', array(

  'default'           => '#000000',

  'transport'         => 'refresh',

  'sanitize_callback' => 'sanitize_hex_color',

));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'npa_category_bg_id', array(

  'label'     => esc_html__('Logo Upload', 'npa'),

  'settings'  => 'npa_category_bg_id',

  'section'   => 'npa_category_bg',

)));

