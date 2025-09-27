<?php

$wp_customize->add_section('npa_advertisement_serial_show', array(
  'panel'   => 'npa_advertisement_panel',
  'title'   => esc_html__('Show Advertisement Serial Number'),
));

$wp_customize->add_setting('npa_ad_id', array( // changable npa_category_bg_id
  'default'   => 0,
  'transport' => 'refresh'
));
$wp_customize->add_control('npa_ad_id', array(
  'label'     => esc_html('Display Advertisement Number'),
  'settings'  => 'npa_ad_id',
  'section'   => 'npa_advertisement_serial_show',
  'type'      => 'checkbox'
));
