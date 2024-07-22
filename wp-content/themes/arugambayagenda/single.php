<?php

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
                                        <li><a href="<?php bloginfo('url'); ?>/blog">Blog</a></li>
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
            <div class="mil-slider-frame mil-mb-100">
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
                                    <div class="swiper-slide">
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
                                    </div>
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

            <div class="container mil-p-100-100">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <p class="mil-mb-20 mil-fade-up"><?php echo $blog_description; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- publication end -->

        <!-- recommendation -->
        <div class="mil-rooms mil-p-100-100">
            <div class="container">
                <div class="row justify-content-between align-items-end mil-mb-100">
                    <div class="col-lg-7">
                        <div class="mil-suptitle mil-fade-up mil-mb-20">Publications</div>
                        <h2 class="mil-fade-up">Recommended for reading</h2>
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
                                        'post_type' => 'post',
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
                            <a href="<?php the_permalink(); ?>" class="mil-card mil-mb-40-adapt mil-fade-up">
                                <div class="swiper-container mil-card-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_field('blog_image_one'); ?>" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>                                           
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_field('blog_image_two'); ?>" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>                                           
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_field('blog_image_three'); ?>" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>                                           
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_field('blog_image_four'); ?>" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
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
                                        <div><?php echo $author; ?></div>
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
                                        <div><?php echo $published_date; ?></div>
                                    </li>
                                </ul>
                                <div class="mil-descr">
                                    <h3 class="mil-mb-20"><?php the_title(); ?></h3>
                                    <p class="mil-mb-20"><?php the_excerpt() ?></p>
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
                            <?php endwhile; endif; ?>
                            <?php wp_reset_postdata(); ?>   
                    </div>
                </div>

                <div class="row justify-content-between">
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
                </div>

            </div>
        </div>
        <!-- recommendation end -->

<?php get_footer(); ?>