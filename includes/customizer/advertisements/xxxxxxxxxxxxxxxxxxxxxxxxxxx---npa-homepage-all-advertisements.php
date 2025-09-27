<?php

$wp_customize->add_panel('npa_advertisement_panel', array(
  'title'     => esc_html__('All advertisements'),
  'priority'  => 20,
));

require get_template_directory(). '/includes/customizer/advertisements/npa-advertisement-no-show.php';
require get_template_directory(). '/includes/customizer/advertisements/1_no_advertisement.php';
require get_template_directory(). '/includes/customizer/advertisements/2_no_advertisement.php';