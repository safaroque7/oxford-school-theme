<?php
$npa_ad_number = 'single_10'; //just change it

$wp_customize->add_section('npa_advertisement_section' . $npa_ad_number, array(
  'panel'   => 'npa_advertisement_panel',
  'title'   => esc_html__($npa_ad_number . ' No. Advertisement'),
));

// 1 No. Advertisement Google AdSense Code
$wp_customize->add_setting('npa_advertisement_no_' . $npa_ad_number . '_google_adSense', array(
  'default'             => '',
  'sanitize_callback'   => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('npa_advertisement_no_' . $npa_ad_number . '_google_adSense', array(
  'section'   =>  'npa_advertisement_section' . $npa_ad_number,
  'settings'  =>  'npa_advertisement_no_' . $npa_ad_number . '_google_adSense',
  'type'      =>  'textarea',
  'label'     =>  esc_html__($npa_ad_number . ' No. Advertisement\'s Google AdSense Code Paste Here')
));


// Upload Advertisement
$wp_customize->add_setting('npa_advertisement_no_' . $npa_ad_number . '_upload', array(
  'default'           => get_bloginfo('template_directory') . '/images/350x350px.jpg',
  'sanitize_callback' => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control(new Wp_customize_image_Control($wp_customize, 'npa_advertisement_no_' . $npa_ad_number . '_upload', array(
  'section'     =>  'npa_advertisement_section' . $npa_ad_number,
  'settings'    =>  'npa_advertisement_no_' . $npa_ad_number . '_upload',
  'type'        =>  'upload',
  'label'       =>  esc_html__('Upload Advertisement'),
  'description' =>  esc_html__('Image size width: 350px and height: 120px')
)));


// Advertisement link
$wp_customize->add_setting('npa_advertisement_no_' . $npa_ad_number . '_link', array(
  'default'             => '',
  'sanitize_callback'   => 'wp_filter_nohtml_kses'
));

$wp_customize->add_control('npa_advertisement_no_' . $npa_ad_number . '_link', array(
  'section'     =>  'npa_advertisement_section' . $npa_ad_number,
  'settings'    =>  'npa_advertisement_no_' . $npa_ad_number . '_link',
  'type'        =>  'text',
  'label'       =>  esc_html__('Website or fb page link (if it has)'),
  'description' =>  esc_html__('example: example.com')
));
