<?php

$wp_customize->add_section('npa_footer_menu_bar_on_off', array(
  'title'             => esc_html__('Footer Menu Bar On/Off', 'npa'),
  'panel'             => 'npa_footer_panel',
));

// npa_footer_menu_bar_on_off_setting
$wp_customize->add_setting('npa_footer_menu_bar_on_off_setting', array(
  'default'           => 'yes',
  'sanitize_callback' => 'themeslug_customizer_sanitize_radio',
  'transport'         => 'refresh',
));
$wp_customize->add_control('npa_footer_menu_bar_on_off_setting', array(
  'label'             => esc_html__("If you would like to show, select 'Yes'", 'npa'),
  'section'           => 'npa_footer_menu_bar_on_off',
  'settings'          => 'npa_footer_menu_bar_on_off_setting',
  'type'              => 'radio',
  'choices' => array(
    'yes' => __( 'Yes' ),
    'no' => __( 'No' )
  ),
));


function themeslug_customizer_sanitize_radio( $input, $setting ) {

  // Ensure input is a slug.
  $input = sanitize_key( $input );

  // Get list of choices from the control associated with the setting.
  $choices = $setting->manager->get_control( $setting->id )->choices;

  // If the input is a valid key, return it; otherwise, return the default.
  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}