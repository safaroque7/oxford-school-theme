<?php

/**
 * 
 * ======================================================================
 * 19 no category
 * ======================================================================
 * 
 * */

$catId = 19;

//Get an array with the category list
$rjs_categories_full_list = get_categories(array('orderby' => 'name',));

//Create an empty array
$rjs_choices_list = [];

//Loop through the array and add the correct values every time
foreach ($rjs_categories_full_list as $rjs_single_cat) {
  $rjs_choices_list[$rjs_single_cat->term_id] = esc_html__($rjs_single_cat->name, 'school-theme');
}

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
  'label'       => __($catId . ' No. Category for ময়মনসিংহ'),
  'choices'     => $rjs_choices_list, //Add the list with options
));

// for background color
$wp_customize->add_setting('npa_category_bg_id_' . $catId, array(
  'title'   => esc_html__('Category { $catId} Background Color'),
  'default' => '#2cb2bc'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_category_bg_id_' . $catId, array(
  'section' =>  'npa_acd',
  'settings'  => 'npa_category_bg_id_' . $catId,
  'label' => esc_html__('Choose Background color'),
)));

// for text color
$wp_customize->add_setting('npa_category_text_id_' . $catId, array(
  'title'   => esc_html__('Category { $catId} Background Color'),
  'default' => '#ffffff',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_category_text_id_' . $catId, array(
  'section' =>  'npa_acd',
  'settings'  => 'npa_category_text_id_' . $catId,
  'label' => esc_html__('Choose Text Color'),
)));
