<?php
$wp_customize->add_section('npa_address_titile', array(
  'title'   => esc_html__('Cotact details', 'npa'),
  'panel'   => 'npa_footer_panel'
));

// Contact title
$wp_customize->add_setting('npa_contact_title', array(
  'default'           => '#',
  'sanitize_callback' => 'wp_filter_nohtml_kses',
  'transport'         => 'refresh'
));

$wp_customize->add_control('npa_contact', array(
  'label'         => esc_html__('Contact Title', 'npa'),
  'description'   => esc_html__('Such as, যোগাযোগ, ঠিকানা বা সম্পাদকীয় কার্যালয়'),
  'settings'      => 'npa_contact_title',
  'section'       => 'npa_address_titile',
  'type'          => 'text'
));

// Contact title
$wp_customize->add_setting('npa_address', array(
  'default'           => '',
  'transport'         => 'refresh',
  'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control('npa_address', array(
  'label'         => esc_html__('Address', 'npa'),
  'description'   => esc_html__('Type Here Address'),
  'settings'      => 'npa_address',
  'section'       => 'npa_address_titile',
  'type'          => 'textarea'
));

// Phone number
$wp_customize->add_setting('npa_phone_number', array(
  'default'           => '',
  'transport'         => 'refresh',
  'sanitize_callback' => 'wp_filter_nohtml_kses',
));
$wp_customize->add_control('npa_phone_number', array(
  'label'         => esc_html__('Phone Number', 'npa'),
  'settings'      => 'npa_phone_number',
  'section'       => 'npa_address_titile',
  'type'          => 'text'
));

// email address
$wp_customize->add_setting('npa_email_address', array(
  'default'           => '',
  'transport'         => 'refresh',
  'sanitize_callback' => 'sanitize_email',
));

$wp_customize->add_control('npa_email_address', array(
  'label'         => __('Email Address', 'npa'),
  'settings'      => 'npa_email_address',
  'section'       => 'npa_address_titile',
  'type'          => 'email'
));