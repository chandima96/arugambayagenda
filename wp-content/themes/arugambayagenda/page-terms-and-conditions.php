<?php
/*
	Template Name: Terms and conditions
*/
get_header();

$blog_image_one = get_field('blog_image_one');
$blog_image_two = get_field('blog_image_two');
$blog_image_three = get_field('blog_image_three');
$blog_image_four = get_field('blog_image_four');
$blog_image_five = get_field('blog_image_five');
$blog_image_six = get_field('blog_image_six');
$blog_image_seven = get_field('blog_image_seven');
$blog_image_eight = get_field('blog_image_eight');
$blog_description = get_field('blog_description');
$author = get_field('author');
$published_date = get_field('published_date');

?>

        <!-- banner -->
        <div class="mil-banner-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape" style="width: 70%; top: 0; right: -35%; transform: rotate(190deg)" alt="shape">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape" style="width: 70%; bottom: -12%; left: -30%; transform: rotate(40deg)" alt="shape">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape" style="width: 110%; top: -5%; left: -30%; opacity: .3" alt="shape">
            <div class="container">
                <div class="mil-banner-img-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/1.png" alt="object" class="mil-figure mil-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/2.png" alt="object" class="mil-figure mil-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/3.png" alt="object" class="mil-figure mil-3">
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8">

                        <div class="mil-banner-content-frame">
                            <div class="mil-banner-content mil-text-center">
                                <h1 class="mil-mb-40"><?php the_title(); ?></h1>
                                <div class="mil-suptitle mil-breadcrumbs">
                                    <ul>
                                        <li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
                                        <li><a href="#"><?php the_title(); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- banner end -->

        <!-- publication -->
        <div class="mil-pub-frame">
            <div hidden class="mil-slider-frame mil-mb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="swiper-container mil-room-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $blog_image_one; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <!-- <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $blog_image_two; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $blog_image_three; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $blog_image_four; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $blog_image_five; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $blog_image_six; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $blog_image_seven; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $blog_image_eight; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="mil-room-nav">
                                <div class="mil-slider-btn mil-room-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </div>
                                <div class="mil-slider-btn mil-room-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="mil-room-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mil-p-100-100 padding-top-0">
                <div class="row justify-content-center">
                    <div class="col-xl-7 mil-p-100-100">
                        <div class="blog-description">
                            <p class="mil-fade-up"><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- publication end -->

<?php get_footer(); ?>