<?php
/*
	Template Name: Home
*/
get_header();

$home_banner_top_line = get_field('home_banner_top_line');
$home_banner_title = get_field('home_banner_title');
$home_banner_description = get_field('home_banner_description');
$services_top_line = get_field('services_top_line');
$services_title = get_field('services_title');
$service_section_wild_life_tours_image = get_field('service_section_wild_life_tours_image');
$service_section_experiential_tours_image = get_field('service_section_experiential_tours_image');
$service_section_surfing_image = get_field('service_section_surfing_image');
$service_section_ride_with_us_image = get_field('service_section_ride_with_us_image');
$services_description = get_field('services_description');
$chose_us_top_line = get_field('chose_us_top_line');
$chose_us_title = get_field('chose_us_title');
$chose_us_card_one_title = get_field('chose_us_card_one_title');
$chose_us_card_one_description = get_field('chose_us_card_one_description');
$chose_us_card_two_title = get_field('chose_us_card_two_title');
$chose_us_card_two_description = get_field('chose_us_card_two_description');
$chose_us_card_three_title = get_field('chose_us_card_three_title');
$chose_us_card_three_description = get_field('chose_us_card_three_description');
$chose_us_card_four_title = get_field('chose_us_card_four_title');
$chose_us_card_four_description = get_field('chose_us_card_four_description');
$chose_us_card_five_title = get_field('chose_us_card_five_title');
$chose_us_card_five_description = get_field('chose_us_card_five_description');
$chose_us_card_six_title = get_field('chose_us_card_six_title');
$chose_us_card_six_description = get_field('chose_us_card_six_description');
$features_top_line = get_field('features_top_line');
$features_title = get_field('features_title');
$features_description = get_field('features_description');
$call_to_action_top_line = get_field('call_to_action_top_line');
$call_to_action_title = get_field('call_to_action_title');
$about_us_top_line = get_field('about_us_top_line');
$contact_page_title = get_field('about_us_title');
$our_blog_top_line = get_field('our_blog_top_line');
$our_blog_title = get_field('our_blog_title');
$our_blog_description = get_field('our_blog_description');
$review_location = get_field('review_location');
$review_description = get_field('review_description');
$counter_one = get_field('counter_one');
$counter_two = get_field('counter_two');
$counter_three = get_field('counter_three');
$counter_four = get_field('counter_four');
$counter_five = get_field('counter_five');

?>
        <!-- banner -->
        <div class="mil-banner" style="overflow: hidden;">
                <!-- Background Video -->
                <video autoplay loop muted playsinline class="bg-video">
                    <source src="https://www.arugambayagenda.com/wp-content/uploads/2024/11/home-bg.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            <div class="container">
                <!-- <div class="mil-banner-img-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/images/Edited-Banner.webp" alt="banner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/1.png" alt="object" class="mil-figure mil-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/2.png" alt="object" class="mil-figure mil-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/3.png" alt="object" class="mil-figure mil-3">
                </div> -->
                <div class="row align-items-center">
                    <div class="col-xl-10">

                        <div class="mil-banner-content-frame mobile-content-center ">
                            <div class="mil-banner-content" style="padding-top: 0px !important;">
                                <div class="mil-suptitle mil-mb-40"><?php echo $home_banner_top_line; ?></div>
                                <h1 class="mil-mb-40 home-title" style="color: #0097b2 !important; text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white, 1px 1px 0 white;"><?php echo $home_banner_title; ?></h1>
                                <p style="text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white, 1px 1px 0 white;"><?php echo $home_banner_description; ?></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- banner end -->

        <!-- services -->
        <div class="mil-content-pad mil-p-100-100">
            <div class="container">
                <div class="mil-text-center">
                    <div class="mil-suptitle mil-mb-20 mil-fade-up"><?php echo $services_top_line; ?></div>
                    <h2 class="mil-mb-100 mil-fade-up"><?php echo $services_title; ?></h2>
                </div>
                <div class="row mil-mb-40">
                    <div class="col-md-6 col-xl-3">
                        <a href="<?php bloginfo('url'); ?>/wild-life-tours" class="mil-service-card mil-mb-40-adapt mil-fade-up">
                            <div class="mil-img-frame">
                                <img src="<?php echo $service_section_wild_life_tours_image; ?>" alt="img">
                            </div>
                            <div class="mil-description">Wildlife & Eco Tours</div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a href="<?php bloginfo('url'); ?>/experiential-tours" class="mil-service-card mil-offset mil-mb-40-adapt mil-fade-up">
                            <div class="mil-img-frame">
                                <img src="<?php echo $service_section_experiential_tours_image; ?>" alt="img">
                            </div>
                            <div class="mil-description">Experiential Tours</div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a href="<?php bloginfo('url'); ?>/surfing" class="mil-service-card mil-mb-40-adapt mil-fade-up">
                            <div class="mil-img-frame">
                                <img src="<?php echo $service_section_surfing_image; ?>" alt="img">
                            </div>
                            <div class="mil-description">Surfing</div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a href="<?php bloginfo('url'); ?>/activities/" class="mil-service-card mil-offset mil-mb-40-adapt mil-fade-up">
                            <div class="mil-img-frame">
                                <img src="<?php echo $service_section_ride_with_us_image; ?>" alt="img">
                            </div>
                            <div class="mil-description">Activities</div>
                        </a>
                    </div>
                </div>
                <!-- <div class="mil-text-center">
                    <div class="mil-fade-up btn-center">
                        <a href="<?php bloginfo('url'); ?>/all-tours" class="mil-button">
                            <span>Contact Us</span>
                        </a>
                    </div>
                </div> -->
                <div class="row justify-content-between">
                    <div class="col-lg-9">
                        <p class="mil-fade-up tab-text-center"><?php echo $services_description; ?></p>
                    </div>
                    <div class="col-lg-3">
                        <div class="mil-desctop-right mil-fade-up btn-center">
                            <a href="<?php bloginfo('url'); ?>/contact-us/" class="mil-button">
                                <span>PLAN MY HOLIDAY</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services end -->

        <!-- call to action -->
        <div class="mil-content-pad mil-p-100-100 mil-fade-up margin-top-60">
            <div class="container">
                <div class="mil-text-center">
                    <div class="mil-suptitle mil-mb-20 mil-fade-up">Taxi service</div>
                    <h2 class="mil-h2-lg mil-mb-40 mil-fade-up">Ride with us</h2>
                    <p class="mil-mb-20 mil-fade-up">Island-Wide Transfers & Taxi Services - Arugambay Agenda: “Ride with Us” <br>Wherever you are, wherever you want to go, <br>count on Arugambay Agenda for safe and reliable taxi services. <br>We've got you covered island-wide. <br>Your journey, your way. Book your ride today!</p>
                    <span class="mil-buttons-frame mil-center mil-fade-up">
                        <a href="<?php bloginfo('url'); ?>/taxi-service" class="mil-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span>Book Your Taxi</span>
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <!-- call to action end -->

        <!-- features -->
        <div class="mil-features mil-p-100-60">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape mil-fade-up" style="width: 85%; top: -20%; left: -30%; transform: rotate(35deg)" alt="shape">
            <div class="container">
                <div class="mil-text-center">
                    <div class="mil-suptitle mil-mb-20 mil-fade-up"><?php echo $chose_us_top_line; ?></div>
                    <h2 class="mil-mb-100 mil-fade-up"><?php echo $chose_us_title; ?></h2>
                </div>
                <div class="mil-flexbox mil-flexbox-custom ">
                    <div class="mil-iconbox mil-iconbox-custom mil-fade-up">
                        <div class="mil-bg-icon"></div>
                        <div class="mil-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                            </svg>
                        </div>
                        <h3 class="mil-mb-20"><?php echo $chose_us_card_one_title; ?></h3>
                        <p><?php echo $chose_us_card_one_description; ?></p>
                    </div>
                    <div class="mil-iconbox mil-iconbox-custom mil-fade-up">
                        <div class="mil-bg-icon"></div>
                        <div class="mil-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                            </svg>
                        </div>
                        <h3 class="mil-mb-20"><?php echo $chose_us_card_two_title; ?></h3>
                        <p><?php echo $chose_us_card_two_description; ?></p>
                    </div>
                    <div class="mil-iconbox mil-iconbox-custom mil-fade-up">
                        <div class="mil-bg-icon"></div>
                        <div class="mil-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                            </svg>
                        </div>
                        <h3 class="mil-mb-20"><?php echo $chose_us_card_three_title; ?></h3>
                        <p><?php echo $chose_us_card_three_description; ?></p>
                    </div>
                    <div class="mil-iconbox mil-iconbox-custom mil-fade-up">
                        <div class="mil-bg-icon"></div>
                        <div class="mil-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                            </svg>
                        </div>
                        <h3 class="mil-mb-20"><?php echo $chose_us_card_four_title; ?></h3>
                        <p><?php echo $chose_us_card_four_description; ?></p>
                    </div>
                    <div class="mil-iconbox mil-iconbox-custom mil-fade-up">
                        <div class="mil-bg-icon"></div>
                        <div class="mil-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                            </svg>
                        </div>
                        <h3 class="mil-mb-20"><?php echo $chose_us_card_five_title; ?></h3>
                        <p><?php echo $chose_us_card_five_description; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- features end -->

        <div class="mil-rooms mil-p-100-100">
            <div class="container">
                <div class="row justify-content-between align-items-end mil-mb-100">
                    <div class="col-lg-7">
                        <div class="mil-suptitle mil-fade-up mil-mb-20"><?php echo $features_top_line; ?></div>
                        <h2 class="mil-fade-up"><?php echo $features_title; ?></h2>
                    </div>
                    <div class="col-lg-5">
                        <div class="mil-desctop-right mil-fade-up">

                            <div class="mil-slider-nav mil-recommendation-nav mil-fade-up">
                                <div class="mil-slider-arrow mil-prev mil-reco-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </div>
                                <div class="mil-slider-arrow mil-reco-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="swiper-container mil-reco-slider mil-mb-40">
                    <div class="swiper-wrapper">
                                    <?php 
                                        $the_query = new WP_Query(array(
                                            'post_type' => array('wildlifetours', 'experientialtours'),
                                            'posts_per_page' => 100,
                                            'post__not_in' => array($id),
                                        ));
                                        ?>
                                        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                            <?php
                                            $thumbnail_id = get_post_thumbnail_id();
                                            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full', true);
                                            $thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                    ?> 
                        <div class="swiper-slide">
                            <div class="mil-card mil-mb-40-adapt mil-fade-up">
                                <div class="swiper-container mil-card-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_field('image_one'); ?>" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_field('image_two'); ?>" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_field('image_three'); ?>" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mil-card-nav">
                                        <div class="mil-slider-btn mil-card-prev">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                <polyline points="12 5 19 12 12 19"></polyline>
                                            </svg>
                                        </div>
                                        <div class="mil-slider-btn mil-card-next">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                <polyline points="12 5 19 12 12 19"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mil-card-pagination"></div>
                                </div>
                                <ul class="mil-parameters">
                                    <li>
                                        <div class="mil-icon">
                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M12.7432 5.75582C12.6516 7.02721 11.7084 8.00663 10.6799 8.00663C9.65144 8.00663 8.70673 7.02752 8.6167 5.75582C8.52291 4.43315 9.44106 3.505 10.6799 3.505C11.9188 3.505 12.837 4.45722 12.7432 5.75582Z" stroke="black" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M10.6793 10.0067C8.64232 10.0067 6.68345 11.0185 6.19272 12.9889C6.12771 13.2496 6.29118 13.5075 6.55905 13.5075H14.7999C15.0678 13.5075 15.2303 13.2496 15.1662 12.9889C14.6755 10.9869 12.7166 10.0067 10.6793 10.0067Z" stroke="black" stroke-width="1.00189" stroke-miterlimit="10" />
                                                    <path d="M6.42937 6.31713C6.3562 7.33276 5.59385 8.13264 4.77209 8.13264C3.95033 8.13264 3.18672 7.33308 3.1148 6.31713C3.04007 5.26053 3.7821 4.50537 4.77209 4.50537C5.76208 4.50537 6.50411 5.27992 6.42937 6.31713Z" stroke="black" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6.61604 10.0688C6.05177 9.81023 5.4303 9.71082 4.77162 9.71082C3.14604 9.71082 1.57985 10.5189 1.18752 12.0929C1.13594 12.3011 1.26661 12.5071 1.48043 12.5071H4.99045" stroke="black" stroke-width="1.00189" stroke-miterlimit="10" stroke-linecap="round" />
                                                </g>
                                                <defs>
                                                    <clipPath>
                                                        <rect width="16.0035" height="16.0035" fill="white" transform="translate(0.176514 0.504028)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div>Adults: <?php echo get_field('capacity'); ?></div>
                                    </li>
                                    <li>
                                        <div class="mil-icon">
                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.9578 14.6084H12.7089C13.1733 14.6084 13.6187 14.4239 13.9471 14.0955C14.2755 13.7671 14.46 13.3217 14.46 12.8573V11.1062" stroke="black" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14.46 6.10644V4.35534C14.46 3.89092 14.2755 3.44553 13.9471 3.11713C13.6187 2.78874 13.1733 2.60425 12.7089 2.60425H10.9578" stroke="black" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.95898 14.6084H4.20788C3.74346 14.6084 3.29806 14.4239 2.96967 14.0955C2.64128 13.7671 2.45679 13.3217 2.45679 12.8573V11.1062" stroke="black" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.45679 6.10644V4.35534C2.45679 3.89092 2.64128 3.44553 2.96967 3.11713C3.29806 2.78874 3.74346 2.60425 4.20788 2.60425H5.95898" stroke="black" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div>Kids: <?php echo get_field('size'); ?></div>
                                    </li>
                                </ul>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="mil-descr">
                                        <h3 class="mil-mb-20"><?php the_title(); ?></h3>
                                        <p class="mil-mb-40"><?php echo get_field('description'); ?></p>
                                        <div class="mil-divider"></div>
                                            <div class="mil-card-bottom">
                                                <div class="mil-price"><span class="mil-symbol">$</span><span class="mil-number"><?php echo get_field('price_case_two'); ?></span>/ <span>per pax /</span> <?php echo get_field('duration'); ?></div>
                                                <a href="<?php the_permalink(); ?>" class="mil-button mil-icon-button mil-accent-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
                                                        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                                <?php endwhile; endif; ?>
                                <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                        <!-- <div class="row justify-content-between">
                            <div class="col-lg-7">
                                <p class="mil-fade-up">Accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
                            </div>
                            <div class="col-lg-5">
                                <div class="mil-desctop-right mil-fade-up">
                                    <a href="search.html" class="mil-button">
                                        <span>View all</span>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
        </div>    

        <!-- call to action -->
        <!-- <div class="mil-content-pad mil-p-100-100 mil-fade-up">
            <div class="container">
                <div class="mil-text-center">
                    <div class="mil-suptitle mil-mb-20 mil-fade-up"><?php echo $call_to_action_top_line; ?></div>
                    <div class="mil-h2-lg mil-mb-40 mil-fade-up font-Montserrat"><h2><?php echo $call_to_action_title; ?></h2></div>
                    <span class="mil-buttons-frame mil-center mil-fade-up">
                        <a href="<?php bloginfo('url'); ?>/contact-us" class="mil-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span>Get in touch</span>
                        </a>
                        <a href="<?php bloginfo('url'); ?>/contact-us" class="mil-link mil-open-book-popup">
                            <span>Book now</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div> -->
        <!-- call to action end -->

        <!-- about 1 -->
        <!-- <div class="mil-about mil-p-100-0">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape" style="width: 180%; bottom: -100%; left: -20%; opacity: .2" alt="shape">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-5 mil-mb-100">

                        <div class="mil-text-frame">
                            <div class="mil-suptitle mil-mb-20 mil-fade-up"><?php echo $about_us_top_line; ?></div>
                            <h2 class="mil-mb-60 mil-fade-up"><?php echo $about_us_title; ?></h2>
                            <ul class="mil-about-list">
                                <li class="mil-fade-up">
                                    <div class="mil-item-head">
                                        <span>01.</span>
                                        <h4>Ocean Oasis</h4>
                                    </div>
                                    <p>Accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae.</p>
                                </li>
                                <li class="mil-fade-up">
                                    <div class="mil-item-head">
                                        <span>02.</span>
                                        <h4>Beach Haven</h4>
                                    </div>
                                    <p>Doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae.</p>
                                </li>
                                <li class="mil-fade-up">
                                    <div class="mil-item-head">
                                        <span>03.</span>
                                        <h4>Sunset Bliss</h4>
                                    </div>
                                    <p>Laudantium, totam accusantium doloremque rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto.</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-xl-5 mil-mb-100">

                        <div class="mil-illustration-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape mil-fade-up" alt="shape">
                            <div class="mil-circle mil-1 mil-fade-up">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/services/1.jpg" alt="img">
                            </div>
                            <div class="mil-circle mil-2 mil-fade-up">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/services/2.jpg" alt="img">
                            </div>
                            <div class="mil-circle mil-3 mil-fade-up">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/services/3.jpg" alt="img">
                            </div>
                            <div class="mil-circle mil-4 mil-fade-up">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/services/4.jpg" alt="img">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/1.png" alt="object" class="mil-figure mil-1 mil-fade-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/2.png" alt="object" class="mil-figure mil-2 mil-fade-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/3.png" alt="object" class="mil-figure mil-3 mil-fade-up">
                        </div>

                    </div>
                </div>
            </div>
        </div> -->
        <!-- about 1 end -->

        <!-- about 2 -->
        <!-- <div class="mil-about">
            <div class="container">
                <div class="row justify-content-between align-items-center flex-sm-row-reverse">
                    <div class="col-xl-5 mil-mb-100">

                        <div class="mil-text-frame">
                            <div class="mil-suptitle mil-mb-20 mil-fade-up">About us</div>
                            <h2 class="mil-mb-40 mil-fade-up">Our goal and philosophy</h2>
                            <p class="mil-mb-20 mil-fade-up">Accusantium doloremque laudantium, totam rem aperiam beatae vitae dicta sunt, explicabo ullamco laboris nisi ut aliquip ex.</p>

                            <p class="mil-mb-40 mil-fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>

                            <span class="mil-buttons-frame mil-fade-up">
                                <a href="contact.html" class="mil-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <span>Get in touch</span>
                                </a>
                                <a href="#." class="mil-link mil-open-book-popup">
                                    <span>Book now</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </a>
                            </span>
                        </div>

                    </div>
                    <div class="col-xl-6 mil-mb-100">

                        <div class="mil-illustration-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape mil-fade-up" alt="shape">
                            <div class="mil-main-img mil-fade-up">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/images/5.png" alt="img">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/1.png" alt="object" class="mil-figure mil-1 mil-fade-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/2.png" alt="object" class="mil-figure mil-2 mil-fade-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/3.png" alt="object" class="mil-figure mil-3 mil-fade-up">
                        </div>

                    </div>
                </div>
            </div>
        </div> -->
        <!-- about 2 end -->

        <!-- about 2 -->
        <div class="mil-about mil-p-100-0" style="overflow: hidden;">
            <div class="container">
                <div class="row justify-content-between align-items-center flex-sm-row-reverse">
                    <div class="col-xl-5 mil-mb-100">

                        <div class="mil-text-frame">
                            <div class="mil-suptitle mil-mb-20 mil-fade-up">Meet Hanas</div>
                            <h2 class="mil-mb-40 mil-fade-up">Your Host and <br>Arugambay Aficionado</h2>
                            <p class="mil-mb-20 mil-fade-up">Hey there, I’m Hanas, the heart and soul behind Arugambay Agenda. As the founder of this venture, I’m on a mission to share the enchantment of my beloved hometown, Arugambay, with the world. I’m a true Arugambay native, born and raised on the East Coast of Sri Lanka.</p>

                            <p class="mil-mb-40 mil-fade-up">Picture me as the youngest member of a lively family, nestled among the sounds of the ocean and the warmth of a tight-knit clan.</p>

                            <span class="mil-buttons-frame mil-fade-up">
                                <a href="https://wa.me/+94726479635" class="mil-button">
                                    <span>Chat with Hanas</span>
                                </a>
                            </span>
                        </div>

                    </div>
                    <div class="col-xl-6 mil-mb-100">

                        <div class="mil-illustration-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape mil-fade-up" alt="shape">
                            <div class="mil-main-img mil-fade-up">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/images/IMG_2790.webp" alt="img" style="border-radius: 20px;">
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/1.png" alt="object" class="mil-figure mil-1 mil-fade-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/2.png" alt="object" class="mil-figure mil-2 mil-fade-up">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/3.png" alt="object" class="mil-figure mil-3 mil-fade-up">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- about 2 end -->

        <!-- Team -->
        <div class="mil-rooms mil-p-100-100">
            <div class="container">
                <div class="row justify-content-between align-items-end mil-mb-100">
                    <div class="col-lg-7">
                        <div class="mil-suptitle mil-fade-up mil-mb-20">Team</div>
                        <h2 class="mil-fade-up">Our Experts</h2>
                    </div>
                    <div class="col-lg-5">
                        <div class="mil-desctop-right mil-fade-up">
                            <div class="mil-slider-nav mil-recommendation-nav mil-fade-up">
                                <div class="mil-slider-arrow mil-prev mil-reco-prev team-prev-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </div>
                                <div class="mil-slider-arrow mil-reco-next team-next-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="team-carousel-container mil-fade-up">
                        <div class="team-carousel-wrapper">
                            <div class="team-carousel">
                                    <?php 
                                        $the_query = new WP_Query(array(
                                            'post_type' => 'team',
                                            'posts_per_page' => 100,
                                            'post__not_in' => array($id),
                                        ));
                                        ?>
                                        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                            <?php
                                            $thumbnail_id = get_post_thumbnail_id();
                                            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full', true);
                                            $thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                    ?>
                                <div class="team-member">
                                    <?php
                                            if ( has_post_thumbnail() ) {
                                            $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
                                            ?>
                                        <img src="<?php echo $attachment_image; ?>" alt="<?php the_title(); ?> profile image">
                                    <?php } ?> 
                                    <h3 alt="<?php the_title(); ?>"><?php the_title(); ?></h3>
                                    <p class="margin-bottom-5"><?php echo get_field('designation'); ?></p>
                                    <p>
                                        <?php
                                            $contact_number = get_field('contact_number'); 
                                            
                                            if ($contact_number) {
                                                $formatted_number = format_contact_number($contact_number);

                                                echo '<a href="tel:' . $contact_number . '" class="contact-number">' . $formatted_number . '</a>';
                                            } else {
                                                echo 'Contact number not available';
                                            }
                                        ?>
                                    </p>
                                    <p></p>                                    
                                    <div class="social-links">
                                        <a href="<?php echo get_field('favebook_link'); ?> " target="_blank" ><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/></svg></a>
                                        <a href="<?php echo get_field('twiter_link'); ?>" target="_blank" ><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">   <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/></svg></a>
                                        <a href="<?php echo get_field('instagram_link'); ?>" target="_blank" ><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/></svg></a>
                                        <a href="<?php echo get_field('linkedin_link'); ?>" target="_blank" ><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">   <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/></svg></a>        
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>   
        <!-- Team End -->

        <!-- test -->
                                        
        <!-- test -->

        <!-- reviews -->
        <div class="mil-content-pad mil-p-100-100" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/shapes/5.png); background-size: 100%; overflow-x: hidden;">
            <div class="container">

                <div class="mil-text-center">
                    <div class="mil-suptitle mil-mb-20 mil-fade-up">Reviews</div>
                    <h2 class="mil-mb-100 mil-fade-up">Customer Voices: <br>Hear What They Say!</h2>
                </div>

                <div class="mil-revi-pagination mil-mb-40 mil-fade-up" style="display: none;"></div>

                <div class="row mil-relative justify-content-center">
                    <div class="col-lg-8">

                        <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg" class="mil-quote-icon mil-fade-up">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.98153 16.5432L1.96873 16.5275C0.970391 15.3023 0.511963 13.7557 0.511963 11.9758C0.511963 9.67596 1.19329 7.53976 2.53323 5.58922C3.85431 3.62895 5.51386 2.14449 7.5121 1.16577L8.40283 0.729492L9.55276 3.02935L8.89401 3.53126C8.21398 4.04938 7.60022 4.72403 7.05823 5.57088C6.67538 6.16909 6.36018 6.89486 6.1236 7.76055L6.33141 7.81003C7.78521 8.1431 8.99251 8.7862 9.86883 9.79182C10.7881 10.7656 11.248 11.9611 11.248 13.3198C11.248 14.7682 10.7384 16.0131 9.69719 16.964C8.71506 17.8953 7.49463 18.3518 6.10396 18.3518C4.4575 18.3518 3.05714 17.7591 1.99497 16.5584L1.98153 16.5432ZM9.01596 16.2318C9.8373 15.4852 10.248 14.5145 10.248 13.3198C10.248 12.1998 9.87463 11.2478 9.12796 10.4638C8.41863 9.6425 7.41063 9.0825 6.10396 8.78383L4.92796 8.50383C5.1893 7.12249 5.61863 5.96516 6.21596 5.03183C6.58142 4.4608 6.98181 3.95267 7.41714 3.50741C7.69184 3.22645 7.98045 2.97052 8.28297 2.73964C8.28463 2.73837 8.2863 2.7371 8.28796 2.73583L7.95196 2.06383C7.90926 2.08474 7.86672 2.10591 7.82435 2.12734C7.81171 2.13373 7.79908 2.14014 7.78647 2.14658C7.54355 2.27054 7.30601 2.40289 7.07384 2.54364C6.97633 2.60276 6.87977 2.66335 6.78416 2.72542C5.4614 3.58418 4.32 4.72632 3.35996 6.15183C2.12796 7.94383 1.51196 9.88516 1.51196 11.9758C1.51196 13.5812 1.92263 14.8878 2.74396 15.8958C3.60263 16.8665 4.72263 17.3518 6.10396 17.3518C7.2613 17.3518 8.23196 16.9785 9.01596 16.2318ZM13.7975 16.5432L13.7847 16.5275C12.7864 15.3023 12.328 13.7557 12.328 11.9758C12.328 9.67597 13.0093 7.53977 14.3492 5.58924C15.6703 3.62895 17.3299 2.1445 19.3281 1.16577L20.2188 0.729492L21.3688 3.02935L20.71 3.53126C20.03 4.04938 19.4162 4.72403 18.8742 5.57088C18.4914 6.16909 18.1762 6.89486 17.9396 7.76055L18.1474 7.81004C19.6012 8.14311 20.8085 8.78622 21.6848 9.79183C22.6041 10.7656 23.064 11.9611 23.064 13.3198C23.064 14.7681 22.5545 16.0131 21.5132 16.9639C20.5311 17.8953 19.3107 18.3518 17.92 18.3518C16.2735 18.3518 14.8731 17.7591 13.811 16.5584L13.7975 16.5432ZM20.832 16.2318C21.6533 15.4852 22.064 14.5145 22.064 13.3198C22.064 12.1998 21.6906 11.2478 20.944 10.4638C20.2346 9.6425 19.2266 9.0825 17.92 8.78383L16.744 8.50383C17.0053 7.12249 17.4346 5.96516 18.032 5.03183C18.3974 4.4608 18.7978 3.95266 19.2331 3.50741C19.5078 3.22645 19.7965 2.97052 20.099 2.73964C20.1006 2.73837 20.1023 2.7371 20.104 2.73583L19.768 2.06383C19.7253 2.08474 19.6827 2.10591 19.6404 2.12734C19.6277 2.13375 19.615 2.14018 19.6024 2.14664C19.3595 2.27058 19.122 2.40292 18.8898 2.54364C18.7923 2.60276 18.6958 2.66335 18.6002 2.72542C17.2774 3.58418 16.136 4.72632 15.176 6.15183C13.944 7.94383 13.328 9.88516 13.328 11.9758C13.328 13.5812 13.7386 14.8878 14.56 15.8958C15.4186 16.8665 16.5386 17.3518 17.92 17.3518C19.0773 17.3518 20.048 16.9785 20.832 16.2318Z" fill="black" />
                        </svg>

                        <div class="swiper-container mil-reviews-slider">
                            <div class="swiper-wrapper">
                                    <?php 
                                        $the_query = new WP_Query(array(
                                            'post_type' => 'reviews',
                                            'posts_per_page' => 100,
                                            'post__not_in' => array($id),
                                        ));
                                        ?>
                                        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                            <?php
                                            $thumbnail_id = get_post_thumbnail_id();
                                            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full', true);
                                            $thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                                    ?>
                                <div class="swiper-slide">
                                    <div class="review-client">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
                                        ?>
                                            <img src="<?php echo $attachment_image; ?>" alt="Client Image">
                                        <?php } ?>
                                    </div>
                                    <div class="mil-review-frame mil-text-center" data-swiper-parallax="-250" data-swiper-parallax-opacity="0">
                                        <div class="mil-fade-up">
                                            <h3 class="mil-mb-10"><?php the_title(); ?></h3>
                                            <p class="mil-link"><?php the_content(); ?></p>
                                        </div>
                                        <p class="mil-fade-up mil-mt-40"><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                                    <?php endwhile; endif; ?>
                                    <?php wp_reset_postdata(); ?>
                            </div>
                        </div>

                        
                        <div class="mil-slider-nav mil-reviews-nav mil-fade-up">
                            <div class="mil-slider-arrow mil-prev mil-revi-prev mil-arrow-place">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                            <div class="mil-slider-arrow mil-revi-next mil-arrow-place">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mil-text-center margin-top-30">
                    <div class="mil-fade-up btn-center">
                        <a href="https://www.google.com/maps/place/Arugambay+Agenda/@6.8464933,81.8285143,17z/data=!4m8!3m7!1s0x3ae5bdd4ea90a9dd:0x7011ba04a540ae4e!8m2!3d6.8464933!4d81.8310892!9m1!1b1!16s%2Fg%2F11v01t6bc_?entry=ttu" target="_blank" class="mil-button">
                            <span>More Reviews</span>
                        </a>
                    </div>
                </div>
                    <!-- <div class="row justify-content-between padding-top-60">
                        <div class="col-lg-7">
                            <p class="mil-fade-up">Accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
                        </div>
                        <div class="col-lg-5">
                            <div class="mil-desctop-right mil-fade-up">
                                <a href="services.html" class="mil-button">
                                    <span>More Reviews</span>
                                </a>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
        <!-- reviews end -->
                                        
            <div class="mil-text-center">
                <h2 class="mil-fade-up padding-top-60">Served so far</h2>
            </div>
            <div class="container" style="z-index: 100 !important;">
                <div class="mil-flexbox-custom mil-p-100-60">
                    <div class="mil-iconbox-counter" id="counter-section-1">
                        <div class="counter mil-fade-up">
                            <div class="mil-icon">
                                <svg fill="#204f5e"  style="width: 50px; height:auto;" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M495.304,372.87h-16.696v-50.087c0-42.412-31.802-77.513-72.807-82.773l-29.129-58.259 c-4.124-8.248-14.154-11.591-22.4-7.466c-8.248,4.123-11.59,14.152-7.466,22.399l21.31,42.621h-56.464v-76.563l90.394-90.394 h26.476c9.22,0,16.696-7.475,16.696-16.696c0-9.22-7.475-16.696-16.696-16.696c-5.566,0-375.216,0-380.912,0 C21.357,38.957,0,60.314,0,86.566c0,10.547,0,287.906,0,302.999c0,9.22,7.475,16.696,16.696,16.696h16.696 c0,36.824,29.959,66.783,66.783,66.783c36.824,0,66.783-29.959,66.783-66.783h144.696c0,36.824,29.959,66.783,66.783,66.783 s66.783-29.959,66.783-66.783c15.693,0,34.462,0,50.087,0c9.22,0,16.696-7.475,16.696-16.696 C512,380.345,504.525,372.87,495.304,372.87z M311.652,72.348h43.172l-43.172,43.172V72.348z M33.391,86.566 c0-7.84,6.378-14.218,14.218-14.218c12.779,0,218.425,0,230.652,0v166.957h-44.522v-16.696c0-27.618-22.469-50.087-50.087-50.087 h-33.391c-9.22,0-16.696,7.475-16.696,16.696v50.087h-33.391v-16.696c0-27.618-22.469-50.087-50.087-50.087H33.391V86.566z M200.348,222.609v16.696h-33.391v-33.391h16.696C192.858,205.913,200.348,213.403,200.348,222.609z M33.391,205.913h16.696 c9.206,0,16.696,7.49,16.696,16.696v16.696H33.391V205.913z M100.174,439.652c-18.412,0-33.391-14.979-33.391-33.391 c0-18.412,14.979-33.391,33.391-33.391c18.412,0,33.391,14.979,33.391,33.391C133.565,424.673,118.586,439.652,100.174,439.652z M378.435,439.652c-18.412,0-33.391-14.979-33.391-33.391c0-18.412,14.979-33.391,33.391-33.391 c18.412,0,33.391,14.979,33.391,33.391C411.826,424.673,396.847,439.652,378.435,439.652z M445.217,372.87h-8.984 c-11.566-19.941-33.134-33.391-57.798-33.391c-24.664,0-46.232,13.45-57.798,33.391H157.972 c-11.566-19.941-33.134-33.391-57.798-33.391c-24.664,0-46.232,13.45-57.798,33.391h-8.984V272.696c14.445,0,347.271,0,361.658,0 c0.031,0,0.063,0.003,0.095,0.003c0.012,0,0.023-0.002,0.036-0.002c27.596,0.027,50.038,22.483,50.038,50.086V372.87z"></path> </g> </g> <g> <g> <path d="M250.435,306.087h-33.391c-9.22,0-16.696,7.475-16.696,16.696s7.475,16.696,16.696,16.696h33.391 c9.22,0,16.696-7.475,16.696-16.696S259.655,306.087,250.435,306.087z"></path> </g> </g> </g></svg>
                            </div>
                            <h3><span id="counter-1" data-count="<?php echo $counter_one; ?>"></span> <span class="plus-sign">+</span> </h3>
                            <!-- <h3>100+</h3> -->
                            <p>Half day wild safaris</p>
                        </div>
                    </div>
                    <div class="mil-iconbox-counter" id="counter-section-2">
                        <div class="counter mil-fade-up">
                            <div class="mil-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px; height:auto;" width="30" height="30" fill="currentColor" class="bi bi-browser-safari" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.25-14.75v1.5a.25.25 0 0 1-.5 0v-1.5a.25.25 0 0 1 .5 0m0 12v1.5a.25.25 0 1 1-.5 0v-1.5a.25.25 0 1 1 .5 0M4.5 1.938a.25.25 0 0 1 .342.091l.75 1.3a.25.25 0 0 1-.434.25l-.75-1.3a.25.25 0 0 1 .092-.341m6 10.392a.25.25 0 0 1 .341.092l.75 1.299a.25.25 0 1 1-.432.25l-.75-1.3a.25.25 0 0 1 .091-.34ZM2.28 4.408l1.298.75a.25.25 0 0 1-.25.434l-1.299-.75a.25.25 0 0 1 .25-.434Zm10.392 6 1.299.75a.25.25 0 1 1-.25.434l-1.3-.75a.25.25 0 0 1 .25-.434ZM1 8a.25.25 0 0 1 .25-.25h1.5a.25.25 0 0 1 0 .5h-1.5A.25.25 0 0 1 1 8m12 0a.25.25 0 0 1 .25-.25h1.5a.25.25 0 1 1 0 .5h-1.5A.25.25 0 0 1 13 8M2.03 11.159l1.298-.75a.25.25 0 0 1 .25.432l-1.299.75a.25.25 0 0 1-.25-.432Zm10.392-6 1.299-.75a.25.25 0 1 1 .25.433l-1.3.75a.25.25 0 0 1-.25-.434ZM4.5 14.061a.25.25 0 0 1-.092-.341l.75-1.3a.25.25 0 0 1 .434.25l-.75 1.3a.25.25 0 0 1-.342.091m6-10.392a.25.25 0 0 1-.091-.342l.75-1.299a.25.25 0 1 1 .432.25l-.75 1.3a.25.25 0 0 1-.341.09ZM6.494 1.415l.13.483a.25.25 0 1 1-.483.13l-.13-.483a.25.25 0 0 1 .483-.13M9.86 13.972l.13.483a.25.25 0 1 1-.483.13l-.13-.483a.25.25 0 0 1 .483-.13M3.05 3.05a.25.25 0 0 1 .354 0l.353.354a.25.25 0 0 1-.353.353l-.354-.353a.25.25 0 0 1 0-.354m9.193 9.193a.25.25 0 0 1 .353 0l.354.353a.25.25 0 1 1-.354.354l-.353-.354a.25.25 0 0 1 0-.353M1.545 6.01l.483.13a.25.25 0 1 1-.13.483l-.483-.13a.25.25 0 1 1 .13-.482Zm12.557 3.365.483.13a.25.25 0 1 1-.13.483l-.483-.13a.25.25 0 1 1 .13-.483m-12.863.436a.25.25 0 0 1 .176-.306l.483-.13a.25.25 0 1 1 .13.483l-.483.13a.25.25 0 0 1-.306-.177m12.557-3.365a.25.25 0 0 1 .176-.306l.483-.13a.25.25 0 1 1 .13.483l-.483.13a.25.25 0 0 1-.306-.177M3.045 12.944a.3.3 0 0 1-.029-.376l3.898-5.592a.3.3 0 0 1 .062-.062l5.602-3.884a.278.278 0 0 1 .392.392L9.086 9.024a.3.3 0 0 1-.062.062l-5.592 3.898a.3.3 0 0 1-.382-.034zm3.143 1.817a.25.25 0 0 1-.176-.306l.129-.483a.25.25 0 0 1 .483.13l-.13.483a.25.25 0 0 1-.306.176M9.553 2.204a.25.25 0 0 1-.177-.306l.13-.483a.25.25 0 1 1 .483.13l-.13.483a.25.25 0 0 1-.306.176"/>
                                  </svg>
                            </div>
                            <h3><span id="counter-2" data-count="<?php echo $counter_two; ?>"></span> <span class="plus-sign">+</span> </h3>                            
                            <!-- <h3>100+</h3> -->
                            <p>Full day wild safaris</p>
                        </div>
                    </div>
                    <div class="mil-iconbox-counter" id="counter-section-3">
                        <div class="counter mil-fade-up">
                            <div class="mil-icon">
                                <svg fill="#204f5e"  style="width: 50px; height:auto;" viewBox="0 -37.5 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 47.87" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style> <g> <path class="st0" d="M4.98,27.65H29.7c2.16,0,4.01,1.39,4.7,3.33h20.28l-0.76-4.02c-0.17-0.9,0.42-1.76,1.32-1.93 c0.1-0.02,0.2-0.03,0.3-0.03v0h65.68c0.91,0,1.66,0.74,1.66,1.66c0,0.19-0.03,0.37-0.09,0.54l-2.69,10.18 c-0.77,2.93-2.07,5.69-4.02,7.63c-1.76,1.76-4.02,2.86-6.84,2.86h-42.5c-2.88,0-5.26-1.13-7.09-2.96 c-1.95-1.95-3.24-4.69-3.79-7.65l-0.56-2.96H34.4c-0.69,1.93-2.54,3.33-4.7,3.33H4.98C2.25,37.62,0,35.38,0,32.64 C0,29.9,2.24,27.65,4.98,27.65L4.98,27.65z M104.49,0.48c0.65-0.65,1.7-0.65,2.34,0s0.65,1.7,0,2.34c-1.58,1.58-0.86,2.93-0.02,4.5 c1.41,2.64,3.04,5.67,0.28,10.44c-0.46,0.79-1.47,1.06-2.26,0.6c-0.79-0.46-1.06-1.47-0.6-2.26c1.83-3.18,0.68-5.34-0.33-7.23 C102.44,6.15,101.18,3.8,104.49,0.48L104.49,0.48z M92.17,0.48c0.65-0.65,1.7-0.65,2.34,0s0.65,1.7,0,2.34 c-1.58,1.58-0.86,2.93-0.02,4.5c1.41,2.64,3.04,5.67,0.28,10.44c-0.46,0.79-1.47,1.06-2.26,0.6c-0.79-0.46-1.06-1.47-0.6-2.26 c1.83-3.18,0.68-5.34-0.33-7.23C90.12,6.15,88.86,3.8,92.17,0.48L92.17,0.48z M79.86,0.48c0.65-0.65,1.7-0.65,2.34,0 c0.65,0.65,0.65,1.7,0,2.34c-1.58,1.58-0.86,2.93-0.02,4.5c1.41,2.64,3.04,5.67,0.28,10.44c-0.46,0.79-1.47,1.06-2.26,0.6 c-0.79-0.46-1.06-1.47-0.6-2.26c1.83-3.18,0.68-5.34-0.33-7.23C77.8,6.15,76.54,3.8,79.86,0.48L79.86,0.48z M67.54,0.48 c0.65-0.65,1.7-0.65,2.34,0c0.65,0.65,0.65,1.7,0,2.34c-1.58,1.58-0.86,2.93-0.02,4.5c1.41,2.64,3.04,5.67,0.28,10.44 c-0.46,0.79-1.47,1.06-2.26,0.6s-1.06-1.47-0.6-2.26c1.83-3.18,0.68-5.34-0.33-7.23C65.49,6.15,64.23,3.8,67.54,0.48L67.54,0.48z M116.91,36.53l2.17-8.22H57.54l1.57,8.34c0.44,2.32,1.42,4.45,2.89,5.92c1.23,1.23,2.83,1.99,4.75,1.99h42.5 c1.85,0,3.33-0.73,4.5-1.89C115.25,41.16,116.28,38.94,116.91,36.53L116.91,36.53z"></path> </g> </g></svg>
                            </div>
                            <h3><span id="counter-3" data-count="<?php echo $counter_three; ?>"></span> <span class="plus-sign">+</span> </h3>                            
                            <!-- <h3>100+</h3> -->
                            <p>Cooking class</p>
                        </div>
                    </div>
                    <div class="mil-iconbox-counter" id="counter-section-4">
                        <div class="counter mil-fade-up">
                            <div class="mil-icon">
                                <svg fill="#204f5e" style="width: 50px; height:auto;" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 535.88 535.88" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M171.033,114.14c19.852-3.873,32.742-23.151,28.869-43.002c-3.873-19.852-23.046-32.751-42.897-28.879 c-19.842,3.873-32.866,23.055-28.984,42.907C131.894,105.018,151.201,118.013,171.033,114.14z"></path> <path d="M505.214,346.433c-5.805-10.892-15.176-10.863-20.923,0.058l-7.114,13.521c-5.757,10.92-20.416,19.775-32.752,19.775 h-16.763c-12.346,0-29.644,6.847-38.643,15.28l-32.445,30.438c-3.806,3.567-9.027,6.178-14.621,7.765 c0.765-1.635,1.1-3.471,0.698-5.297L291.09,92.959l-0.22-0.631c-1.491-4.284-6.263-6.684-10.662-5.145 c-3.959,1.377-5.929,5.527-5.422,9.696l15.902,103.16l-51.962-2.773l-26.641-57.241c-4.485-9.639-16.715-17.012-27.33-16.486 l-33.689,3.05c-3.021,0.153-5.862,1.052-8.443,2.419c-7.306-0.937-15.721,2.142-22.396,5.527 c-0.144-0.296-0.306-0.564-0.459-0.851c4.246-5.9,6.206-13.426,4.705-21.114c-2.878-14.745-17.212-24.403-31.958-21.516 C77.77,93.935,68.122,108.269,71,123.014c1.147,5.891,4.179,10.901,8.271,14.697c-2.085,3.223-3.146,6.78-2.353,10.29 c3.395,15.013,7.143,35.257,5.326,45.575c-3.079,17.652-15.692,61.21,7.449,61.821c13.206,0.354,27.387-2.858,37.141-5.689 l-7.774,182.903c0.029,1.807,0.249,3.509,0.583,5.192c0.411,2.123,1.147,4.093,2.018,5.967l-11.771,9.668 c-9.543,7.822-26.67,10.729-38.25,6.483L40.83,448.617c-11.58-4.245-25.608,1.167-31.336,12.097l-7.201,13.799 c-5.728,10.939-0.354,19.795,11.982,19.795h486.004c12.336,0,24.309-9.812,26.728-21.908l7.994-39.98 c2.419-12.097-0.325-30.734-6.139-41.626L505.214,346.433z M101.418,136.688c-6.235,1.214-12.335-0.784-16.687-4.781 c-0.22-0.22-0.488-0.402-0.708-0.622c-0.115-0.115-0.201-0.249-0.296-0.354c-0.842-0.946-1.616-1.941-2.276-3.041 c-2.391-3.978-2.993-8.683-1.721-13.254c1.271-4.513,4.236-8.367,8.367-10.844c3.385-2.037,7.354-2.706,11.14-1.865 c3.834,0.851,7.038,3.127,9.008,6.426c1.645,2.744,2.065,5.996,1.195,9.151c-0.87,3.117-2.907,5.766-5.737,7.458 c-4.935,2.945-11.255,1.511-14.085-3.213c-2.41-4.016-0.976-9.324,3.203-11.829c3.567-2.161,8.157-1.081,10.213,2.362 c1.788,2.974,0.727,6.904-2.353,8.75c-0.144,0.086-0.287,0.163-0.43,0.239c-0.239,0.115-0.096,0.105,0.296-0.067 c0.229-0.105,0.459-0.22,0.688-0.354c1.769-1.062,3.041-2.706,3.577-4.619c0.526-1.875,0.277-3.787-0.679-5.403 c-1.291-2.142-3.395-3.644-5.929-4.198c-2.582-0.573-5.288-0.114-7.631,1.291c-3.06,1.836-5.259,4.686-6.196,8.023 c-0.918,3.28-0.488,6.646,1.214,9.486c2.209,3.681,5.804,6.234,10.136,7.191c4.379,0.995,8.96,0.201,12.928-2.18 c3.223-1.922,5.718-4.542,7.564-7.468C114.289,129.727,108.791,135.245,101.418,136.688z M123.173,143.535 c-0.077-0.468-0.268-0.86-0.363-1.32c3.461-1.807,7.334-3.519,11.016-4.523c-1.52,2.764-2.496,5.824-2.61,9.084l-1.625,38.154 L123.173,143.535z M191.487,433.576l-19.221-6.694c-0.43-0.152-0.918-0.22-1.367-0.354l5.9-139.832l68.955,132.87 c1.616,3.529,4.036,6.513,6.923,8.903l-18.743,5.823C222.135,437.955,203.144,437.631,191.487,433.576z M302.422,427.131 c-3.748-1.358-8.291-2.267-13.082-2.831c4.342-5.651,6.389-13.005,4.916-20.588c-0.373-1.912-0.957-3.652-1.646-5.44 l-86.225-169.458l0.688-21.869l6.971,15.749c5.46,10.05,15.462,9.228,15.462,9.228l61.41,3.414 c1.233-0.01,2.391-0.115,3.558-0.345c0.535-0.104,1.023-0.315,1.539-0.459l30.428,197.39c0.067,0.21,0.039,0.459,0.077,0.563 c0.315,0.909,0.842,1.664,1.405,2.382c-3.041-0.191-5.995-0.698-8.654-1.664L302.422,427.131z"></path> </g> </g> </g></svg>
                            </div>
                            <h3><span id="counter-4" data-count="<?php echo $counter_four; ?>"></span> <span class="plus-sign">+</span> </h3>                            
                            <!-- <h3>100+</h3> -->
                            <p>Day trips</p>
                        </div>
                    </div>
                    <div class="mil-iconbox-counter" id="counter-section-5">
                        <div class="counter mil-fade-up">
                            <div class="mil-icon">
                                <svg fill="#204f5e" style="width: 50px; height:auto;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 286.154 286.154" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M272.308,221.539v-0.002v-27.692h-4.615v-32.308h-4.615v-13.846h13.846v-36.923h-9.231v4.615h-4.615V96.922h-4.615 h-4.615V78.461h-4.615h-4.615V59.999h-9.231v18.462h-4.615h-4.615v18.462h-4.615h-4.615v18.462h-4.615v-4.615h-9.231v36.923 h13.846v13.846v9.231H193.85v-32.308h-9.231v4.615h-9.231v-13.846h13.846v-41.54H180v4.615h-4.615V64.614h-9.231v4.615h-4.615 V41.537h-9.231v4.615h-4.615V18.461h-9.231v27.692h-4.615v-4.615h-9.231V69.23H120v-4.615h-9.231v27.692h-4.615v-4.615h-9.231 v41.538h13.846v13.846h-9.231v-4.615h-9.231v32.308H69.231v-9.231v-13.846h13.846v-36.923h-9.231v4.615h-4.615V96.922h-4.615H60 V78.461h-4.615H50.77V59.999h-9.231v18.462h-4.615h-4.615v18.462h-4.615h-4.615v18.462h-4.615v-4.615H9.231v36.923h13.846v13.846 h-4.615v32.308h-4.615v27.692H0v46.154h143.077h143.077v-46.154H272.308z M235.385,87.691h9.231v9.231h-9.231V87.691z M226.154,106.153h27.692v9.231h-27.692V106.153z M212.308,138.46v-13.846h55.385v13.846H212.308z M240,184.614v9.231h-13.846 v-23.077h32.308v23.077h-9.231v-9.231H240z M226.154,161.537v-13.846h27.692v13.846H226.154z M193.846,179.999h23.077v13.846 h-23.077V179.999z M263.077,203.075v18.462h-96.923v-18.462H263.077z M133.846,55.384h18.462V69.23h-18.462V55.384z M120,78.461 h46.154v13.846h-18.462v-9.231h-9.231v9.231H120V78.461z M106.153,119.999v-18.462h0.001H180v18.462h-32.308v-9.231h-9.231v9.231 H106.153z M166.154,129.23v13.846h-23.077H120V129.23H166.154z M92.308,179.999v13.846H69.231v-13.846H92.308z M41.538,87.691 h9.231v9.231h-9.231V87.691z M32.308,106.153H60v9.231H32.308V106.153z M18.462,138.46v-13.846h55.385v13.846H18.462z M36.923,184.614v9.231h-9.231v-23.077H60v23.077H46.154v-9.231H36.923z M32.308,161.537v-13.846H60v13.846H32.308z M120,258.46 H9.231v-27.692H120V258.46z M120,221.538H23.077v-18.462H120V221.538z M156.923,258.461h-13.846h-13.846v-55.385 c0-7.634,6.212-13.846,13.846-13.846c7.634,0,13.846,6.212,13.846,13.846V258.461z M143.077,179.999 c-9.438,0-17.548,5.709-21.12,13.846h-6.572v-18.462h-9.231v18.462h-4.615v-41.538h41.538h41.538v41.538H180v-18.462h-9.231 v18.462h-6.572C160.625,185.708,152.515,179.999,143.077,179.999z M276.923,258.461H166.154v-27.692h110.769V258.461z"></path> <rect x="138.462" y="235.384" width="9.231" height="9.231"></rect> <rect x="138.462" y="216.922" width="9.231" height="9.231"></rect> </g> </g> </g> </g></svg>
                            </div>
                            <h3><span id="counter-5" data-count="<?php echo $counter_five; ?>"></span> <span class="plus-sign">+</span> </h3>                            
                            <!-- <h3>100+</h3> -->
                            <p>Cultural & Anciant visits</p>
                        </div>
                    </div>
                </div>
            </div>


        <!-- blog -->
        <div class="mil-rooms mil-p-100-100">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape" style="width: 85%; top: -20%; right: -30%; transform: rotate(-30deg) scaleX(-1);" alt="shape">
            <div class="container">
                <div class="mil-text-center">
                    <div class="mil-suptitle mil-mb-20 mil-fade-up"><?php echo $our_blog_top_line; ?></div>
                    <h2 class="mil-mb-100 mil-fade-up"><?php echo $our_blog_description; ?></h2>
                </div>
                <div class="row mil-mb-40">
                    <div class="col-xl-4">

                        <a href="publication.html" class="mil-card mil-mb-40-adapt mil-fade-up">
                            <div class="swiper-container mil-card-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="mil-card-cover">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/1.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                        </div>
                                    </div>
                                </div>
                                <div class="mil-card-nav">
                                    <div class="mil-slider-btn mil-card-prev">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </div>
                                    <div class="mil-slider-btn mil-card-next">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="mil-card-pagination"></div>
                            </div>
                            <ul class="mil-parameters">
                                <li>
                                    <div class="mil-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/faces/6.jpg" alt="author">
                                    </div>
                                    <div>Paul T.</div>
                                </li>
                                <li>
                                    <div class="mil-icon">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.1881 2.62402H3.18597C2.35736 2.62402 1.68564 3.29574 1.68564 4.12435V13.1263C1.68564 13.9549 2.35736 14.6266 3.18597 14.6266H13.1881C14.0168 14.6266 14.6885 13.9549 14.6885 13.1263V4.12435C14.6885 3.29574 14.0168 2.62402 13.1881 2.62402Z" stroke="#272746" stroke-width="1.00189" stroke-linejoin="round" />
                                            <path d="M4.18536 1.62305V2.63226" stroke="#272746" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12.188 1.62305V2.63226" stroke="#272746" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.6885 5.12402H1.68564" stroke="#272746" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div>29.08.2024</div>
                                </li>
                            </ul>
                            <div class="mil-descr">
                                <h3 class="mil-mb-20">Ultimate Guide to Traveling When You Have No Money</h3>
                                <p class="mil-mb-20">Accusantium doloremque laudantium, totam rem aperiam beatae vitae dicta sunt, explicabo</p>
                                <div class="mil-divider"></div>
                                <div class="mil-card-bottom">
                                    <div class="mil-link">
                                        <span>Read more</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-xl-4">

                        <a href="publication.html" class="mil-card mil-mb-40-adapt mil-fade-up">
                            <div class="swiper-container mil-card-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="mil-card-cover">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/2.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                        </div>
                                    </div>
                                </div>
                                <div class="mil-card-nav">
                                    <div class="mil-slider-btn mil-card-prev">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </div>
                                    <div class="mil-slider-btn mil-card-next">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="mil-card-pagination"></div>
                            </div>
                            <ul class="mil-parameters">
                                <li>
                                    <div class="mil-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/faces/6.jpg" alt="author">
                                    </div>
                                    <div>Paul T.</div>
                                </li>
                                <li>
                                    <div class="mil-icon">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.1881 2.62402H3.18597C2.35736 2.62402 1.68564 3.29574 1.68564 4.12435V13.1263C1.68564 13.9549 2.35736 14.6266 3.18597 14.6266H13.1881C14.0168 14.6266 14.6885 13.9549 14.6885 13.1263V4.12435C14.6885 3.29574 14.0168 2.62402 13.1881 2.62402Z" stroke="#272746" stroke-width="1.00189" stroke-linejoin="round" />
                                            <path d="M4.18536 1.62305V2.63226" stroke="#272746" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12.188 1.62305V2.63226" stroke="#272746" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.6885 5.12402H1.68564" stroke="#272746" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div>29.08.2024</div>
                                </li>
                            </ul>
                            <div class="mil-descr">
                                <h3 class="mil-mb-20">The best travel insurance company for your holiday trip</h3>
                                <p class="mil-mb-20">Accusantium doloremque laudantium, totam rem aperiam beatae vitae dicta sunt, explicabo</p>
                                <div class="mil-divider"></div>
                                <div class="mil-card-bottom">
                                    <div class="mil-link">
                                        <span>Read more</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-xl-4">

                        <a href="publication.html" class="mil-card mil-mb-40-adapt mil-fade-up">
                            <div class="swiper-container mil-card-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="mil-card-cover">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/blog/3.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                        </div>
                                    </div>
                                </div>
                                <div class="mil-card-nav">
                                    <div class="mil-slider-btn mil-card-prev">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </div>
                                    <div class="mil-slider-btn mil-card-next">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="mil-card-pagination"></div>
                            </div>
                            <ul class="mil-parameters">
                                <li>
                                    <div class="mil-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/faces/6.jpg" alt="author">
                                    </div>
                                    <div>Paul T.</div>
                                </li>
                                <li>
                                    <div class="mil-icon">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.1881 2.62402H3.18597C2.35736 2.62402 1.68564 3.29574 1.68564 4.12435V13.1263C1.68564 13.9549 2.35736 14.6266 3.18597 14.6266H13.1881C14.0168 14.6266 14.6885 13.9549 14.6885 13.1263V4.12435C14.6885 3.29574 14.0168 2.62402 13.1881 2.62402Z" stroke="#272746" stroke-width="1.00189" stroke-linejoin="round" />
                                            <path d="M4.18536 1.62305V2.63226" stroke="#272746" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12.188 1.62305V2.63226" stroke="#272746" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.6885 5.12402H1.68564" stroke="#272746" stroke-width="1.00189" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div>29.08.2024</div>
                                </li>
                            </ul>
                            <div class="mil-descr">
                                <h3 class="mil-mb-20">10 easy steps and tips for planning your next vacation</h3>
                                <p class="mil-mb-20">Accusantium doloremque laudantium, totam rem aperiam beatae vitae dicta sunt, explicabo</p>
                                <div class="mil-divider"></div>
                                <div class="mil-card-bottom">
                                    <div class="mil-link">
                                        <span>Read more</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-7">
                        <p class="mil-fade-up">Accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
                    </div>
                    <div class="col-lg-5">
                        <div class="mil-desctop-right mil-fade-up">
                            <a href="<?php bloginfo('url'); ?>/blog" class="mil-button">
                                <span>View all</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- blog end -->

        <script>
            // window.onload = function() {
            //     var elements = [
            //         { id: "count-one", stopValue: 60 },
            //         { id: "count-two", stopValue: 50 },
            //         { id: "count-three", stopValue: 40 },
            //         { id: "count-four", stopValue: 20 }
            //     ];

            //     elements.forEach(function(element) {
            //         var currentCount = 0;
            //         var interval = setInterval(function() {
            //             currentCount++;
            //             document.getElementById(element.id).innerText = currentCount;
            //             if (currentCount >= element.stopValue) {
            //                 clearInterval(interval);
            //             }
            //         }, 50);
            //     });
            // };
        </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Select all counter sections and elements
            const counters = [
                { sectionId: 'counter-section-1', counterId: 'counter-1' },
                { sectionId: 'counter-section-2', counterId: 'counter-2' },
                { sectionId: 'counter-section-3', counterId: 'counter-3' },
                { sectionId: 'counter-section-4', counterId: 'counter-4' },
                { sectionId: 'counter-section-5', counterId: 'counter-5' }
            ];

            counters.forEach(({ sectionId, counterId }) => {
                const counterSection = document.getElementById(sectionId);
                const counterElement = document.getElementById(counterId);

                let counterStarted = false;

                function startCounter() {
                    const countTo = parseInt(counterElement.getAttribute('data-count'), 10);
                    let count = 0;

                    const updateCounter = () => {
                        count += Math.ceil(countTo / 100);
                        if (count >= countTo) {
                            count = countTo;
                            clearInterval(interval);
                            counterElement.innerHTML = `${count}`; // Append "+" after the count
                        } else {
                            counterElement.textContent = count;
                        }
                    };

                    const interval = setInterval(updateCounter, 20);
                }

                function checkScroll() {
                    const rect = counterSection.getBoundingClientRect();
                    const viewportHeight = window.innerHeight || document.documentElement.clientHeight;

                    if (rect.top < viewportHeight && !counterStarted) {
                        counterStarted = true;
                        startCounter();
                    }
                }

                window.addEventListener('scroll', checkScroll);
                checkScroll(); // Run initially in case already scrolled
            });
        });
    </script>




        <?php get_footer(); ?>