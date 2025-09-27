<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .menubar-bg-color {
            background-color: <?php echo get_theme_mod('menubar_background_color', '#1296B1;'); ?>
        }

        .custom-border {
            border-right: 1px solid <?php echo get_theme_mod('menubar_right_border_color', '#1296B1;'); ?> !important;
            border-left: 1px solid <?php echo get_theme_mod('menubar_left_border_color', '#067b92ff;'); ?> !important;
        }
    </style>

    <?php wp_head(); ?>
</head>

<body>
    <!-- header start -->
    <header class="header">
        <nav class="container header-top bg-light">
            <div class="row pt-md-2 pb-md-4 align-items-center">
                <div class="col-lg-9 col-12">
                    <div class="row align-items-start align-items-lg-center">
                        <div class="col-3 col-md-2">

                            <?php $default_main_logo = get_template_directory_uri() . '/images/main-logo.png'; ?>

                            <a href="<?php echo esc_url(home_url()); ?>">
                                <img src="<?php echo get_theme_mod('npa-main-logo', $default_main_logo); ?>"
                                    alt="<?php echo esc_attr(bloginfo('name')) ?>" height="auto" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-10 col-9 px-0">
                            <a href="./index.php">
                                <h1 class="text-info mb-0">
                                    <?php
                                    $school_name =  get_theme_mod('name-of-school', 'জিয়া ভাই উচ্চ বিদ্যালয়');
                                    echo $school_name;
                                    ?>
                                </h1>
                            </a>
                            <p class="mb-0">
                                <?php
                                $establish_and_eiin = get_theme_mod('establish_and_eiin', 'স্থাপিত ও EIIN নাম্বার');
                                echo $establish_and_eiin;
                                ?>
                            </p>
                            <p class="mb-0">
                                <?php
                                $address = get_theme_mod('address', 'ঢাকা');
                                $phone =  get_theme_mod('phone', '০১৯১৫৩৪৪৪১৮');
                                $email =  get_theme_mod('email', 'faroque.computer@gmail.com');

                                echo $address . ' | ফোন: ' . $phone . ' | ই-মেইল: ' . $email;

                                ?>


                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="row justify-content-between">
                        <div class="search-form col-8 col-lg-12 mb-lg-2">
                            <form action="#" class="d-flex gap-3">
                                <input type="text" name="text" class="form-control" placeholder="এখানে সার্চ করুন" required>
                                <button type="submit" class="btn btn-info"><i class="fa-solid fa-magnifying-glass text-light"></i></button>
                            </form>
                        </div>
                        <div class="top-social col-4 col-lg-12 d-flex gap-2 justify-content-end justify-content-lg-start">

                            <?php
                            $social_media_facebook = get_theme_mod('npa_social_media_1', '#');
                            $social_media_twitter = get_theme_mod('npa_social_media_2', '#');
                            $social_media_youtube = get_theme_mod('npa_social_media_3', '#');
                            ?>
                            <a href="<?php echo $social_media_facebook; ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="<?php echo $social_media_twitter; ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="<?php echo $social_media_youtube; ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <nav class="navbar navbar-expand-lg sticky-top menubar-bg-color py-0">
                    <button class="navbar-toggler d-flex d-lg-none justify-content-between align-items-center w-100" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <p class="mb-0 text-light">মেনু</p>
                        <span class="navbar-toggler-icon">
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">

                        <?php
                        function primary_menu_fallback()
                        { ?>
                            <ul class="navbar-nav">
                                <li class="nav-item active py-1 bg-danger px-2"><a class="nav-link text-light custom-link" href="./index.php">হোম</a></li>
                                <li class="nav-item py-1 bg-info custom-border">
                                    <div class="dropdown nav-link px-2">
                                        <div class="dropdown-toggle text-light" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                            আমাদের সম্পর্কে
                                        </div>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 1</a></li>
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 2</a></li>
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item py-1 bg-info custom-border">
                                    <div class="dropdown nav-link px-2">
                                        <div class="dropdown-toggle text-light" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                            শিক্ষার্থী
                                        </div>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 1</a></li>
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 2</a></li>
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item py-1 bg-info custom-border">
                                    <div class="dropdown nav-link px-2">
                                        <div class="dropdown-toggle text-light" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                            ভর্তি
                                        </div>
                                        <ul class="dropdown-menu " aria-labelledby="dropdownMenu2">
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 1</a></li>
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 2</a></li>
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item py-1 bg-info custom-border">
                                    <div class="dropdown nav-link px-2">
                                        <div class="dropdown-toggle text-light" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                            পরীক্ষার ফল
                                        </div>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 1</a></li>
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 2</a></li>
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item py-1 bg-info custom-border"><a class="nav-link text-light px-2" href="./pages/">পিটিএ </a></li>
                                <li class="nav-item py-1 bg-info custom-border">
                                    <div class="dropdown nav-link px-2">
                                        <div class="dropdown-toggle text-light" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                            গ্যালারি
                                        </div>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <li><a href="./photo-gallery.html" class="dropdown-item nav-link text-light px-3">ফটো গ্যালারি</a></li>
                                            <li><a href="./video-gallery.html" class="dropdown-item nav-link text-light px-3">ভিডিও গ্যালারি</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item py-1 bg-info custom-border">
                                    <div class="dropdown nav-link px-2">
                                        <div class="dropdown-toggle text-light" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                            বানী
                                        </div>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 1</a></li>
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 2</a></li>
                                            <li><a href="<?php echo esc_url(admin_url('nav-menus.php')) ?>" class="dropdown-item nav-link text-light px-3">Page Link 3</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item active py-1 bg-info custom-border"><a class="nav-link text-light px-2" href="<?php echo esc_url(admin_url('nav-menus.php')) ?>">আর্কাইভ</a></li>
                                <li class="nav-item active py-1 bg-info last-list"><a class="nav-link text-light px-2" href="./contact.html">যোগাযোগ</a></li>
                            </ul>
                        <?php }
                        wp_nav_menu(array(
                            'theme_location'    => 'primary-menu',
                            'menu_class'        => 'navbar-nav',
                            'container'         => false,
                            'depth'             => 0,
                            'fallback_cb'       => 'primary_menu_fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>
                    </div>
                </nav>
            </div>
        </nav>
    </header>
    <!-- header end -->