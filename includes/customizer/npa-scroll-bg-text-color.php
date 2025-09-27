<?php
//Output Customize CSS
function npa_customize_css_for_background_color()
{ ?>
    <style>
        .npa_theme_bg_cl {
            background: <?php echo get_theme_mod('npa_theme_bg_color'); ?>
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
            background: <?php echo get_theme_mod('npa_active_menu_bg'); ?>
        }
    </style>
<?php }
add_action('wp_head', 'npa_customize_css_for_background_color');