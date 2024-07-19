<?php
/*
	Template Name: Surfing 
*/
get_header();

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
                    <div class="col-xl-6">

                        <div class="mil-banner-content-frame">
                            <div class="mil-banner-content mil-text-center">
                                <h1 class="mil-mb-40">Choose the room <br>of your dreams</h1>
                                <div class="mil-suptitle mil-breadcrumbs">
                                    <ul>
                                    <li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/surfing"><?php the_title(); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- banner end -->

        <!-- search panel -->
        <!-- <div class="mil-content-pad mil-search-window">
            <div class="container">
                <div class="mil-search-panel mil-panel-2">
                    <form>
                        <div class="mil-form-grid">
                            <div class="mil-col-5 mil-field-frame">
                                <label>Check-in</label>
                                <input type="text" class="datepicker-here" data-position="bottom left" placeholder="Select date" autocomplete="off" readonly="readonly">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                            </div>
                            <div class="mil-col-5 mil-field-frame">
                                <label>Check-out</label>
                                <input type="text" class="datepicker-here" data-position="bottom left" placeholder="Select date" autocomplete="off" readonly="readonly">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                            </div>
                            <div class="mil-col-2 mil-field-frame">
                                <label>Adults</label>
                                <input type="text" placeholder="Enter quantity" value="1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                        </div>
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                            <span>Search</span>
                        </button>
                    </form>
                </div>
            </div>
        </div> -->
        <!-- search panel end -->

        <!-- rooms -->
        <div class="mil-rooms mil-p-100-100">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape mil-fade-up" style="width: 110%; bottom: 15%; left: -30%; opacity: .2" alt="shape">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape mil-fade-up" style="width: 85%; bottom: -20%; right: -25%; transform: rotate(-30deg) scaleX(-1);" alt="shape">
            <div class="container">

                <div class="row allign-items-center mil-mb-100">
                    <div class="col-xl-4">

                        <h2 class="mil-row-title mil-fade-up" style="display:none;">Search result <span class="mil-badge">24</span></h2>

                    </div>
                    <div class="col-xl-8">

                        <div class="mil-desctop-right mil-fade-up">
                            <div class="mil-filter">
                                <a href="<?php bloginfo('url'); ?>/all-tours">All Tours</a>
                                <a href="<?php bloginfo('url'); ?>/wild-life-tours">Wild Life $ Eco Tours</a>
                                <a href="<?php bloginfo('url'); ?>/experiential-tours">Experiential Tours</a>
                                <a href="<?php bloginfo('url'); ?>/activities">Activities</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row mil-mb-40">
                    <?php 
                        $the_query = new WP_Query(array(
                            'post_type' => 'surfing-tour',
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
                    <div class="col-md-6 col-xl-4">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                        </svg>
                                    </div>
                                    <div>Adults: <?php echo get_field('capacity'); ?></div>
                                </li>
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
                                    <div>Kids: <?php echo get_field('size'); ?></div>
                                </li>
                            </ul>
                            <a href="<?php the_permalink(); ?>">
                                <div class="mil-descr">
                                    <h3 class="mil-mb-20"><?php the_title(); ?></h3>
                                    <p class="mil-mb-40"><?php echo get_the_excerpt(); ?></p>
                                    <div class="mil-divider"></div>
                                    <div class="mil-card-bottom">
                                        <div class="mil-price"><span class="mil-symbol">$</span><span class="mil-number"><?php echo get_field('price_per_night'); ?></span>/ <?php echo get_field('duration'); ?></div>
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


                <!-- <div class="row justify-content-between">
                    <div class="col-lg-7">
                        <p class="mil-fade-up">Accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
                    </div>
                    <div class="col-lg-5">
                        <div class="mil-desctop-right mil-fade-up">

                            <div class="mil-pagination">
                                <div class="mil-page-dot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </div>
                                <div class="mil-page-dot mil-active">1</div>
                                <div class="mil-page-dot">2</div>
                                <div class="mil-page-dot">3</div>
                                <div class="mil-page-dot">4</div>
                                <div class="mil-page-dot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- rooms end -->

        <!-- call to action -->
        <div class="mil-content-pad mil-p-100-100 mil-fade-up">
            <div class="container">
                <div class="mil-text-center">
                    <div class="mil-suptitle mil-mb-20 mil-fade-up">Call to action</div>
                    <h2 class="mil-h2-lg mil-mb-40 mil-fade-up">Do you have any questions?<br>We are available 24/7</h2>
                    <span class="mil-buttons-frame mil-center mil-fade-up">
                        <a href="<?php bloginfo('url'); ?>/contact-us" class="mil-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span>Get in touch</span>
                        </a>
                        <a href="<?php bloginfo('url'); ?>/all-tours" class="mil-link mil-open-book-popup">
                            <span>Book now</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <!-- call to action end -->

        <!-- recommendation -->
        <div class="mil-rooms mil-p-100-100">
            <!-- <div class="container">
                <div class="row justify-content-between align-items-end mil-mb-100">
                    <div class="col-lg-7">
                        <div class="mil-suptitle mil-fade-up mil-mb-20">Welcome friend</div>
                        <h2 class="mil-fade-up">We recommend</h2>
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
                        <div class="swiper-slide">

                            <div class="mil-card mil-mb-40-adapt mil-fade-up">
                                <div class="swiper-container mil-card-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/4.1.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/4.2.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/4.3.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/4.4.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
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
                                        <div>Adults: 4</div>
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
                                        <div>Size: 95ft²</div>
                                    </li>
                                </ul>
                                <div class="mil-descr">
                                    <h3 class="mil-mb-20">Coastal Retreat</h3>
                                    <p class="mil-mb-40">Accusantium doloremque laudantium, totam rem aperiam beatae vitae dicta sunt, explicabo</p>
                                    <div class="mil-divider"></div>
                                    <div class="mil-card-bottom">
                                        <div class="mil-price"><span class="mil-symbol">$</span><span class="mil-number">49</span>/per night</div>
                                        <a href="room-2.html" class="mil-button mil-icon-button mil-accent-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
                                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">

                            <div class="mil-card mil-mb-40-adapt mil-fade-up">
                                <div class="swiper-container mil-card-slider">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/4.2.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/4.3.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/4.4.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/4.1.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
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
                                        <div>Adults: 4</div>
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
                                        <div>Size: 95ft²</div>
                                    </li>
                                </ul>
                                <div class="mil-descr">
                                    <h3 class="mil-mb-20">Coastal Retreat</h3>
                                    <p class="mil-mb-40">Accusantium doloremque laudantium, totam rem aperiam beatae vitae dicta sunt, explicabo</p>
                                    <div class="mil-divider"></div>
                                    <div class="mil-card-bottom">
                                        <div class="mil-price"><span class="mil-symbol">$</span><span class="mil-number">49</span>/per night</div>
                                        <a href="room-2.html" class="mil-button mil-icon-button mil-accent-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
                                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">

                            <div class="mil-card mil-mb-40-adapt mil-fade-up">
                                <div class="swiper-container mil-card-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/3.1.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/3.2.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/3.3.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/3.4.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
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
                                        <div>Adults: 4</div>
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
                                        <div>Size: 95ft²</div>
                                    </li>
                                </ul>
                                <div class="mil-descr">
                                    <h3 class="mil-mb-20">Beachfront Bliss</h3>
                                    <p class="mil-mb-40">Accusantium doloremque laudantium, totam rem aperiam beatae vitae dicta sunt, explicabo</p>
                                    <div class="mil-divider"></div>
                                    <div class="mil-card-bottom">
                                        <div class="mil-price"><span class="mil-symbol">$</span><span class="mil-number">49</span>/per night</div>
                                        <a href="room-2.html" class="mil-button mil-icon-button mil-accent-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
                                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide">

                            <div class="mil-card mil-mb-40-adapt mil-fade-up">
                                <div class="swiper-container mil-card-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/5.1.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/5.2.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="mil-card-cover">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/rooms/5.3.jpg" alt="cover" data-swiper-parallax="-100" data-swiper-parallax-scale="1.1">
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
                                        <div>Adults: 4</div>
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
                                        <div>Size: 95ft²</div>
                                    </li>
                                </ul>
                                <div class="mil-descr">
                                    <h3 class="mil-mb-20">Seaside Haven</h3>
                                    <p class="mil-mb-40">Accusantium doloremque laudantium, totam rem aperiam beatae vitae dicta sunt, explicabo</p>
                                    <div class="mil-divider"></div>
                                    <div class="mil-card-bottom">
                                        <div class="mil-price"><span class="mil-symbol">$</span><span class="mil-number">49</span>/per night</div>
                                        <a href="room-2.html" class="mil-button mil-icon-button mil-accent-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
                                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
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

            </div> -->
        </div>
        <!-- recommendation end -->

<?php get_footer(); ?>