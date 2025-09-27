<?php

$wp_customize->add_section('npa_alter_images_of_advertisements_on_off', array(
  'title'             => esc_html__('Alter Images of Advertisements On/Off', 'npa'),
  'panel'             => 'npa_advertisement_panel',
));

// npa_alter_images_of_advertisements_on_off_setting
$wp_customize->add_setting('npa_alter_images_of_advertisements_on_off_setting', array(
  'default'           => 'yes',
  'sanitize_callback' => 'alter_images_of_ads_themeslug_customizer_sanitize_radio',
  'transport'         => 'refresh',
));
$wp_customize->add_control('npa_alter_images_of_advertisements_on_off_setting', array(
  'label'             => esc_html__("If you would like to show, select 'Yes'", 'npa'),
  'section'           => 'npa_alter_images_of_advertisements_on_off',
  'settings'          => 'npa_alter_images_of_advertisements_on_off_setting',
  'type'              => 'radio',
  'choices' => array(
    'yes' => __( 'Yes' ),
    'no' => __( 'No' )
  ),
));


function alter_images_of_ads_themeslug_customizer_sanitize_radio( $input, $setting ) {

  // Ensure input is a slug.
  $input = sanitize_key( $input );

  // Get list of choices from the control associated with the setting.
  $choices = $setting->manager->get_control( $setting->id )->choices;

  // If the input is a valid key, return it; otherwise, return the default.
  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}