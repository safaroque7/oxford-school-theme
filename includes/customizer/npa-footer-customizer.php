<?php

$wp_customize->add_panel('npa_footer_panel', array(
  'title'     => esc_html__('Footer Area', 'npa'),
  'priority'  => 11,
));

require get_template_directory() . '/includes/customizer/footer/npa-main-logo-and-position.php';
require get_template_directory() . '/includes/customizer/footer/npa-footer-contact-details.php';
require get_template_directory() . '/includes/customizer/footer/npa-footer-editor-and-others-name-designation.php';
require get_template_directory() . '/includes/customizer/footer/npa-footer-extra_message.php';
require get_template_directory() . '/includes/customizer/footer/npa-footer-menu-background.php';
require get_template_directory() . '/includes/customizer/footer/npa-footer-menu-bar-display-on-off.php';
require get_template_directory() . '/includes/customizer/footer/npa-footer-background.php';
require get_template_directory() . '/includes/customizer/footer/npa-footer-dd-bg-text-color.php';