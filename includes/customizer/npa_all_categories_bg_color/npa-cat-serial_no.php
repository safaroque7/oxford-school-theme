<?php
// Switcher ID
$catSwID = 'npa_category_switcher_id';
$wp_customize->add_setting($catSwID, array( // changable npa_category_bg_id
  'default'   => 0,
  'transport' => 'refresh'
));
$wp_customize->add_control($catSwID, array(
  'label'     => esc_html('Display Category Number'),
  'settings'  => $catSwID,
  'section'   => 'npa_acd',
  'type'      => 'checkbox'
));
