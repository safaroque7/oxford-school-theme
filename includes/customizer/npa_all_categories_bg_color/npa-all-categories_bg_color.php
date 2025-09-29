<?php

add_action('customize_register', 'rjs_customize_register');

function rjs_customize_register($wp_customize)
{

  require get_template_directory() . '/includes/customizer/npa-all-categories_bg_color/1_no_category.php';



  /**
   * 2 no category
   * 
   * */

  //Get an array with the category list
  $rjs_categories_full_list_2 = get_categories(array('orderby' => 'name',));

  //Create an empty array
  $rjs_choices_list2 = [];

  //Loop through the array and add the correct values every time
  foreach ($rjs_categories_full_list_2 as $rjs_single_cat_2) {
    $rjs_choices_list2[$rjs_single_cat_2->term_id] = esc_html__($rjs_single_cat_2->name, 'school-theme');
  }

  //Register the setting
  $wp_customize->add_setting('rjs_category_dropdown_2', array(
    'type'        => 'theme_mod',
    'capability'  => 'edit_theme_options',
    'default'     => 'uncategorized',
  ));

  //Register the control
  $wp_customize->add_control('rjs_category_dropdown_2', array(
    'type'        => 'select',
    'section'     => 'npa_acd',
    'label'       => __('2 No. category'),
    'choices'     => $rjs_choices_list2, //Add the list with options
  ));


  /**
   * 
   * ======================================================================
   * 3 no category
   * ======================================================================
   * 
   * */

  $catId = 3;

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
    'default'     => 'uncategorized',
  ));

  //Register the control
  $wp_customize->add_control('rjs_category_dropdown_' . $catId, array(
    'type'        => 'select',
    'section'     => 'npa_acd',
    'label'       => __($catId . ' No. Category'),
    'choices'     => $rjs_choices_list, //Add the list with options
  ));

  // for background color
  $wp_customize->add_setting('npa_category_bg_id_' . $catId, array(
    'title'   => esc_html__('Category { $catId} Background Color'),
    'default' => '#006400'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_category_bg_id_' . $catId, array(
    'section' =>  'npa_acd',
    'settings'  => 'npa_category_bg_id_' . $catId,
    'label' => esc_html__('Choose Background color'),
  )));

  // for background color
  $wp_customize->add_setting('npa_category_text_id_' . $catId, array(
    'title'   => esc_html__('Category { $catId} Background Color'),
    'default' => '#FFFFFF'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_category_text_id_' . $catId, array(
    'section' =>  'npa_acd',
    'settings'  => 'npa_category_text_id_' . $catId,
    'label' => esc_html__('Choose Background color'),
  )));
}
