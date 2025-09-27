<?php

/**
 * ============================================================
 * 1 no category
 * ============================================================
 * */


$catId = 1; // Just it is changeable

//Register the setting
$wp_customize->add_setting('rjs_category_dropdown_' . $catId, array(
  'type'        => 'theme_mod',
  'capability'  => 'edit_theme_options',
  'default'     => 1,
));

//Register the control
$wp_customize->add_control('rjs_category_dropdown_' . $catId, array(
  'type'        => 'select',
  'section'     => 'npa_acd',
  'label'       => __($catId . ' No. category'),
  'choices'     => $rjs_choices_list, //Add the list with options
));
