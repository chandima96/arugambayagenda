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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo.svg" alt="aquarelle">
                    </a>
                    <div class="mil-menu-btn">
                        <span></span>
                    </div>
                    <div class="mil-mobile-menu">
                        <nav class="mil-menu">
                            <ul>
                                <li class="<?php if (get_the_ID() == '6') { echo 'mil-current active'; } ?>">
                                    <a href="<?php bloginfo('url'); ?>/">Home</a>
                                </li>

                                <li class="<?php if (get_the_ID() == '13') { echo 'mil-current active'; } ?>">
                                    <a href="<?php bloginfo('url'); ?>/taxi-service">Taxi service</a>
                                </li>

                                    <?php
                                    $active_post_ids = array(12, 26, 302, 301, 299, 298, 297, 296, 293, 292, 282, 125);
                                    ?>
                                <li class="<?php if (in_array(get_the_ID(), $active_post_ids)) { echo 'mil-current active'; } ?>"> 
                                    <a href="<?php bloginfo('url'); ?>/all-tours">Tours</a>
                                    <ul>
                                        <li><a href="<?php bloginfo('url'); ?>/wild-life-tours">Wild Life $ Eco Tours</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/experiential-tours">Experiential Tours</a></li>
                                    </ul>
                                </li>

                                <?php
                                    $active_post_ids = array(328, 14, 331, 330, 24 );
                                    ?>
                                <li class="<?php if (in_array(get_the_ID(), $active_post_ids)) { echo 'mil-current active'; } ?>"> 
                                    <a href="<?php bloginfo('url'); ?>/activities">Activities</a>
                                    <ul>
                                        <li><a href="<?php bloginfo('url'); ?>/surfing">Surfing</a></li>
                                    </ul>
                                </li>

                                <li class="<?php if (get_the_ID() == '31') { echo 'mil-current active'; } ?>">
                                    <a href="<?php bloginfo('url'); ?>/blog">Blog</a>
                                </li>
                                <li class="<?php if (get_the_ID() == '11') { echo 'mil-current active'; } ?>">
                                    <a href="<?php bloginfo('url'); ?>/contact-us">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <a href="https://wa.me/94766899188" target="_blank" class="mil-button mil-open-book-popup mil-top-panel-btn whatsapp-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg>
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- top panel end -->