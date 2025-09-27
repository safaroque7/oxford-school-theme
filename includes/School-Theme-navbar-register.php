<?php 

    function School_Theme_navbar_register():void{
        register_nav_menus(array(
            'primary-menu' => __('Primary Menu', 'chool-Theme'),
        ));
    }
    add_action('init', 'School_Theme_navbar_register');