<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- bootstrap grid css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/plugins/bootstrap-grid.css">
    <!-- swiper css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/plugins/swiper.min.css">
    <!-- datepicker css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/plugins/datepicker.css">
    <!-- aquarelle css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom-styles.css">
    <!-- page name -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- wrapper -->
    <div class="mil-wrapper">

        <!-- preloader -->
        <!-- <div class="mil-loader mil-active">
            <div class="mil-loader-content">
                <div class="mil-loader-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
                </div>
                <div class="mil-loader-progress">
                    <div class="mil-loader-bar"></div>
                    <div class="mil-loader-percent">0%</div>
                </div>
            </div>
        </div> -->
        <!-- preloader end -->

        <!-- top panel -->
        <div class="mil-top-panel">
            <div class="container">
                <div class="mil-top-panel-content">
                    <a href="<?php bloginfo('url'); ?>/" class="mil-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.png" alt="aquarelle">
                    </a>
                    <div class="mil-menu-btn">
                        <span></span>
                    </div>
                    <div class="mil-mobile-menu">
                        <nav class="mil-menu">
                            <ul>
                                <li class="mil-current">
                                    <a href="<?php bloginfo('url'); ?>/">Home</a>
                                </li>
                                <li>
                                    <a href="#.">About</a>
                                    <ul>
                                        <li><a href="about.html">Wild Life Tours</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="service.html">Single service</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/all-tours">Tours</a>
                                    <ul>
                                        <li><a href="<?php bloginfo('url'); ?>/wild-life-tours">Wild Life Tours</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/experiential-tours">Experiential Tours</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/surfing">Surfing</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/ride-with-us">Ride With Us</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php bloginfo('url'); ?>/contact-us">Contact</a></li>
                                <li>
                                    <a href="<?php bloginfo('url'); ?>/blog">Blog</a>
                                </li>
                            </ul>
                        </nav>
                        <a href="#." class="mil-button mil-open-book-popup mil-top-panel-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                            </svg>
                            <span>Book now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- top panel end -->