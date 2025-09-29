<?php
// after setup theme
include_once get_template_directory() . '/includes/helpers/after-setup-theme.php';

// customizer
include_once get_template_directory() . '/includes/customizer/npa-customizer.php';

//css and js file
include_once get_template_directory() . '/includes/helpers/school-theme-css-js.php';

//navbar register
include_once get_template_directory() . '/includes/helpers/school-theme-navbar-register.php';

//adding class on menu li a
include_once get_template_directory() . '/includes/helpers/add-class-primary-menu-li-a.php';

//nav walker
include_once get_template_directory() . '/includes/helpers/class-wp-bootstrap-5.3.7-navwalker.php';

//committee
require_once get_template_directory() . '/includes/helpers/committee-post-type.php';

//gallery
require_once get_template_directory() . '/includes/helpers/gallery-post-type.php';

//banner
require_once get_template_directory() . '/includes/helpers/banner-post-type.php';

//notice
require_once get_template_directory() . '/includes/helpers/notice-post-type.php';

//institute_history
require_once get_template_directory() . '/includes/helpers/institute-history-post-type.php';

//speech_of_headmaster
require_once get_template_directory() . '/includes/helpers/speech-of-headmaster-post-type.php';

//Founder Story
require_once get_template_directory() . '/includes/helpers/founder-story-post-type.php';

require_once get_template_directory() . '/includes/helpers/english-to-bangla-date.php';

//important-link-post-type
require_once get_template_directory() . '/includes/helpers/important-link-post-type.php';

//for creating auto pages
require_once get_template_directory() . '/includes/helpers/after-switch-theme.php';


//for class-tgm-plugin-activation
if (file_exists(get_template_directory() . '/includes/class-tgm-plugin-activation.php')) {
    include_once('includes/class-tgm-plugin-activation.php');
}

//for tgm
if (file_exists(get_template_directory() . '/includes/tgm.php')) {
    include_once('includes/tgm.php');
}

//for tgm
if (file_exists(get_template_directory() . '/includes/post-type/teachers-information-post-type.php')) {
    include_once('includes/post-type/teachers-information-post-type.php');
}

//for tgm
if (file_exists(get_template_directory() . '/includes/helpers/enter-title-name.php')) {
    include_once('includes/helpers/enter-title-name.php');
}
