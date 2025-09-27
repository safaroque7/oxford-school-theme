<?php
add_action('customize_register', 'npa_customize_register');

function npa_customize_register($wp_customize)
{
    // For Header
    require_once get_template_directory() . '/includes/customizer/npa-header-customizer.php'; // priority 10

    // For Footer
    require get_template_directory() . '/includes/customizer/npa-footer-customizer.php'; // priority 20

    // For Scroll Background and Text Color
    require get_template_directory() . '/includes/customizer/npa-scroll-background-and-text-color.php'; // priority 30

    // For Social Media Links
    require get_template_directory() . '/includes/customizer/npa-social-media-links.php'; // priority 40

    // Advertisements
    require get_template_directory() . '/includes/customizer/advertisements/npa-advertisements.php'; // priority 50

    // For Archieve Calendar Background and Text Color
    require get_template_directory() . '/includes/customizer/npa-archieve-calendar-background-and-text-color.php'; // priority 60

    // For All Division News Background and Text Color
    require get_template_directory() . '/includes/customizer/npa-all-division-news-background-and-text-color.php'; // priority 70

    // For Single Page Sub Heading and Title Color
    require get_template_directory() . '/includes/customizer/npa-single-page.php'; // priority 80

    // For Pagination Page Background and Text Color
    require get_template_directory() . '/includes/customizer/npa-pagination-page.php'; // priority 90

    // For Breadcrumbs Page
    require get_template_directory() . '/includes/customizer/npa-breadcrumbs-page.php'; // priority 100


    /** 
     * ===============================
     * Main Logo Position Customization end
     * ==============================
     */

    //Output Customize CSS
    function npa_customize_css_for_background_color()
    { ?>
        <style>
            .npa_theme_bg_cl {
                background: <?php echo get_theme_mod('npa_theme_bg_color');
                            ?>
            }

            .npa-bg-ticker {
                background: <?php echo get_theme_mod('npa_scroll_bg') ?>;
            }

            .tickerH.text-color-ticker,
            #webticker .text-color-ticker a {
                color: <?php echo get_theme_mod('npa_scroll_text_color') ?>;
            }

            ul#faroqueId li a:hover,
            .current-menu-item>a {
                background: <?php echo get_theme_mod('npa_active_menu_bg');
                            ?>
            }
        </style>
<?php }
    add_action('wp_head', 'npa_customize_css_for_background_color');
}
