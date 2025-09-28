<?php
// after setup theme
include_once get_template_directory() . '/includes/after-setup-theme.php';

// customizer
include_once get_template_directory() . '/includes/customizer/npa-customizer.php';

//css and js file
include_once get_template_directory() . '/includes/School-Theme-css-js.php';

//navbar register
include_once get_template_directory() . '/includes/School-Theme-navbar-register.php';

//adding class on menu li a
include_once get_template_directory() . '/includes/add-class-primary-menu-li-a.php';

//nav walker
include_once get_template_directory() . '/includes/class-wp-bootstrap-5.3.7-navwalker.php';

//committee
require_once get_template_directory() . '/includes/committee/committee-post-type.php';

//gallery
require_once get_template_directory() . '/includes/gallery/gallery-post-type.php';

//banner
require_once get_template_directory() . '/includes/banner/banner-post-type.php';

//notice
require_once get_template_directory() . '/includes/notice/notice-post-type.php';

//institute_history
require_once get_template_directory() . '/includes/institute_history/institute-history-post-type.php';

//speech_of_headmaster
require_once get_template_directory() . '/includes/speech_of_headmaster/speech-of-headmaster-post-type.php';

//Founder Story
require_once get_template_directory() . '/includes/founder_story/founder-story-post-type.php';

//Founder Story
require_once get_template_directory() . '/includes/more_link/more-link-post-type.php';

require_once get_template_directory() . '/includes/english-to-bangla-date.php';

//important-link-post-type
require_once get_template_directory() . '/includes/important-link-post-type.php';

//for creating auto pages
require_once get_template_directory() . '/includes/after_switch_theme.php';
