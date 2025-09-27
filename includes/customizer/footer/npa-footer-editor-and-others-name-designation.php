<?php

//Footer area function
$wp_customize->add_section('npa_footer_editor_ans_other_names', array(
    'title'     =>  esc_html__('Editor and Others Name', 'npa'),
    'panel'     => 'npa_footer_panel',
));

// position 1
$npa_position = 'npa_position_1';
$wp_customize->add_setting($npa_position, array(
    'default'           => '',
    'transport'         => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
));
$wp_customize->add_control($npa_position, array(
    'label'         => esc_html__('Position name 1', 'npa'),
    'description'   => esc_html__('Such as, Executive editor or what you want'),
    'settings'      => $npa_position,
    'section'       => 'npa_footer_editor_ans_other_names',
    'type'          => 'text'
));
// position 1 holder's name
$wp_customize->add_setting($npa_position . '_name', array(
    'default'           => '',
    'transport'         => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
));
$wp_customize->add_control($npa_position . '_name', array( //changable npa_position_3_name
    'label'         => esc_html__('Position holder\'s name 1', 'npa'),
    'description'   => esc_html__('Type name here'),
    'settings'      => $npa_position . '_name',
    'section'       => 'npa_footer_editor_ans_other_names',
    'type'          => 'text'
));


// position 2
$npa_position = 'npa_position_2';
$wp_customize->add_setting($npa_position, array(
    'default'           => '',
    'transport'         => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control($npa_position, array(
    'label'         => esc_html__('Position name 2', 'npa'),
    'description'   => esc_html__('Such as, Executive editor or what you want'),
    'settings'      => $npa_position,
    'section'       => 'npa_footer_editor_ans_other_names',
    'type'          => 'text'
));
// position 2 holder's name
$wp_customize->add_setting($npa_position . '_name', array(
    'default'           => '',
    'transport'         => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
));
$wp_customize->add_control($npa_position . '_name', array( //changable npa_position_3_name
    'label'         => esc_html__('Position holder\'s name 2', 'npa'),
    'description'   => esc_html__('Type name here'),
    'settings'      => $npa_position . '_name',
    'section'       => 'npa_footer_editor_ans_other_names',
    'type'          => 'text'
));


// position 3
$npa_position = 'npa_position_3';
$wp_customize->add_setting($npa_position, array(
    'default'           => '',
    'transport'         => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
));
$wp_customize->add_control($npa_position, array(
    'label'         => esc_html__('Position name 3', 'npa'),
    'description'   => esc_html__('Such as, Executive editor or what you want'),
    'settings'      => $npa_position,
    'section'       => 'npa_footer_editor_ans_other_names',
    'type'          => 'text'
));
// position 3 holder's name
$wp_customize->add_setting($npa_position . '_name', array(
    'default'           => '',
    'transport'         => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
));
$wp_customize->add_control($npa_position . '_name', array( //changable npa_position_3_name
    'label'         => esc_html__('Position holder\'s name 3', 'npa'),
    'description'   => esc_html__('Type name here'),
    'settings'      => $npa_position . '_name',
    'section'       => 'npa_footer_editor_ans_other_names',
    'type'          => 'text'
));

// position 4
$npa_position = 'npa_position_4';
$wp_customize->add_setting($npa_position, array(
    'default'           => '',
    'transport'         => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
));
$wp_customize->add_control($npa_position, array(
    'label'         => esc_html__('Position name 4', 'npa'),
    'description'   => esc_html__('Such as, Executive editor or what you want'),
    'settings'      => $npa_position,
    'section'       => 'npa_footer_editor_ans_other_names',
    'type'          => 'text'
));
// position 4 holder's name
$wp_customize->add_setting($npa_position . '_name', array(
    'default'           => '',
    'transport'         => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
));
$wp_customize->add_control($npa_position . '_name', array( //changable npa_position_3_name
    'label'         => esc_html__('Position holder\'s name 4', 'npa'),
    'description'   => esc_html__('Type name here'),
    'settings'      => $npa_position . '_name',
    'section'       => 'npa_footer_editor_ans_other_names',
    'type'          => 'text'
));

// position 5
$npa_position = 'npa_position_5';
$wp_customize->add_setting($npa_position, array(
    'default'           => '',
    'transport'         => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',

));
$wp_customize->add_control($npa_position, array(
    'label'         => esc_html__('Position name 5', 'npa'),
    'description'   => esc_html__('Such as, Executive editor or what you want'),
    'settings'      => $npa_position,
    'section'       => 'npa_footer_editor_ans_other_names',
    'type'          => 'text'
));
// position 5 holder's name
$wp_customize->add_setting($npa_position . '_name', array(
    'default'           => '',
    'transport'         => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
));
$wp_customize->add_control($npa_position . '_name', array( //changable npa_position_3_name
    'label'         => esc_html__('Position holder\'s name 5', 'npa'),
    'description'   => esc_html__('Type name here'),
    'settings'      => $npa_position . '_name',
    'section'       => 'npa_footer_editor_ans_other_names',
    'type'          => 'text',
));