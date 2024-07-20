<?php

get_header();

?>

<?php
$price_per_night = get_field('price_per_night');
$capacity = get_field('capacity');
$duration = get_field('duration');
$size = get_field('size');
$image_one = get_field('image_one');
$image_two = get_field('image_two');
$image_three = get_field('image_three');
$image_four = get_field('image_four');
$image_five = get_field('image_five');
$image_six = get_field('image_six');
$image_seven = get_field('image_seven');
$image_eight = get_field('image_eight');
$feature_one_title = get_field('feature_one_title');
$feature_two_title = get_field('feature_two_title');
$feature_three_title = get_field('feature_three_title');
$feature_four_title = get_field('feature_four_title');
$feature_five_title = get_field('feature_five_title');
$feature_six_title = get_field('feature_six_title');
$description = get_field('description');
$faq_section_question_one = get_field('faq_section_question_one');
$faq_section_answer_one = get_field('faq_section_answer_one');
$faq__section_question_two = get_field('faq__section_question_two');
$faq_section_answer_two = get_field('faq_section_answer_two');
$faq_section_question_three = get_field('faq_section_question_three');
$faq_section_answer_three = get_field('faq_section_answer_three');
$faq_section_question_four = get_field('faq_section_question_four');
$faq_section_answer_four = get_field('faq_section_answer_four');
$faq_section_question_five = get_field('faq_section_question_five');
$faq_section_answer_five = get_field('faq_section_answer_five');
$faq_section_question_six = get_field('faq_section_question_six');
$faq_section_answer_six = get_field('faq_section_answer_six');
$amenity_section_sub_heading_one = get_field('amenity_section_sub_heading_one');
$amenity_section_sub_heading_one_description = get_field('amenity_section_sub_heading_one_description');
$amenity_section_sub_heading_two = get_field('amenity_section_sub_heading_two');
$amenity_section_sub_heading_two_description = get_field('amenity_section_sub_heading_two_description');
$amenity_section_sub_heading_three = get_field('amenity_section_sub_heading_three');
$amenity_section_sub_heading_three_description = get_field('amenity_section_sub_heading_three_description');
$amenity_section_sub_heading_four = get_field('amenity_section_sub_heading_four');
$amenity_section_sub_heading_four_description = get_field('amenity_section_sub_heading_four_description');
$sixth_section_title = get_field('sixth_section_title');
$seventh_section_top_line = get_field('seventh_section_top_line');
$seventh_section_title = get_field('seventh_section_title');
?>

        <!-- banner -->
        <div class="mil-p-100-60">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape" style="width: 70%; top: 0; right: -12%; transform: rotate(180deg)" alt="shape">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape" style="width: 80%; bottom: -12%; right: -22%; transform: rotate(0deg) scaleX(-1);" alt="shape">
            <div class="container">
                <div class="mil-banner-head">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-xl-12">
                            <h1 class="mil-h2-lg mil-mb-40"><?php the_title(); ?></h1>
                        </div>
                        <div class="col-lg-12 col-xl-12">
                            <div class="mil-desctop-right mil-right-no-m mil-fade-up">
                                <div class="mil-suptitle mil-breadcrumbs mil-light">
                                    <ul>
                                        <li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/experiential-tours">Experiential Tours</a></li>
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

        <!-- room info -->
        <div class="mil-info">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape mil-fade-up" style="width: 110%; bottom: 15%; left: -30%; opacity: .2" alt="shape">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape mil-fade-up" style="width: 85%; bottom: -20%; right: -30%; transform: rotate(-30deg) scaleX(-1);" alt="shape">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-8">

                        <!-- room slider -->
                        <div class="mil-slider-frame mil-frame-2 mil-mb-100">
                            <div class="swiper-container mil-room-slider" style="overflow: hidden">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $image_one; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $image_two; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $image_three; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $image_four; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $image_five; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $image_six; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $image_seven; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="mil-image-frame">
                                            <img src="<?php echo $image_eight; ?>" alt="room" data-swiper-parallax="0" data-swiper-parallax-scale="1.2">
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
                            <div class="mil-room-pagination" style="bottom: 8px"></div>
                        </div>
                        <!-- room slider end -->

                        <!-- features -->
                        <div class="row mil-mb-60-adapt">
                            <div class="col-12">
                                <h3 class="mil-fade-up mil-mb-40">Key features</h3>
                            </div>

                            <?php if (!empty($feature_one_title)): ?>
                            <div class="col-xl-4">
                                <div class="mil-iconbox mil-iconbox-sm mil-mb-40-adapt mil-fade-up">
                                    <div class="mil-bg-icon"></div>
                                    <div class="mil-icon mil-icon-fix">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="15" cy="15" r="14" stroke="#22BCEC" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <h5><?php echo $feature_one_title; ?></h5>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($feature_two_title)): ?>
                            <div class="col-xl-4">
                                <div class="mil-iconbox mil-iconbox-sm mil-mb-40-adapt mil-fade-up">
                                    <div class="mil-bg-icon"></div>
                                    <div class="mil-icon mil-icon-fix">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="15" cy="15" r="14" stroke="#22BCEC" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <h5><?php echo $feature_two_title; ?></h5>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($feature_three_title)): ?>
                            <div class="col-xl-4">
                                <div class="mil-iconbox mil-iconbox-sm mil-mb-40-adapt mil-fade-up">
                                    <div class="mil-bg-icon"></div>
                                    <div class="mil-icon mil-icon-fix">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="15" cy="15" r="14" stroke="#22BCEC" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <h5><?php echo $feature_three_title; ?></h5>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($feature_four_title)): ?>
                            <div class="col-xl-4">
                                <div class="mil-iconbox mil-iconbox-sm mil-mb-40-adapt mil-fade-up">
                                    <div class="mil-bg-icon"></div>
                                    <div class="mil-icon">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="15" cy="15" r="14" stroke="#22BCEC" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <h5><?php echo $feature_four_title; ?></h5>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($feature_five_title)): ?>
                            <div class="col-xl-4">
                                <div class="mil-iconbox mil-iconbox-sm mil-mb-40-adapt mil-fade-up">
                                    <div class="mil-bg-icon"></div>
                                    <div class="mil-icon">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="15" cy="15" r="14" stroke="#22BCEC" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <h5><?php echo $feature_five_title; ?></h5>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($feature_six_title)): ?>
                            <div class="col-xl-4">
                                <div class="mil-iconbox mil-iconbox-sm mil-mb-40-adapt mil-fade-up">
                                    <div class="mil-bg-icon"></div>
                                    <div class="mil-icon">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="15" cy="15" r="14" stroke="#22BCEC" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <h5><?php echo $feature_six_title; ?></h5>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <!-- features -->

                        <!-- description -->
                        <div class="row">
                            <div class="col-xl-11">
                                <div class="mil-dercription mil-mb-100">
                                    <h3 class="mil-fade-up mil-mb-40">Description</h3>
                                    <?php echo $description; ?>                                
                                </div>
                            </div>
                        </div>
                        <!-- description end -->

                        <h3 class="mil-fade-up mil-mb-40">FAQ</h3>
                        <div class="mil-faq-section mil-mb-100">
                            <?php if (!empty($faq_section_question_one) && !empty($faq_section_answer_one)): ?>
                            <div class="mil-faq-item mil-fade-up">
                                <div class="mil-faq-question">
                                    <span class="mil-icon">+</span>
                                    <h3><?php echo $faq_section_question_one; ?></h3>
                                </div>
                                <div class="mil-faq-answer">
                                    <div class="custom-list"><?php echo $faq_section_answer_one; ?></div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($faq__section_question_two) && !empty($faq_section_answer_two)): ?>
                            <div class="mil-faq-item mil-fade-up">
                                <div class="mil-faq-question">
                                    <span class="mil-icon">+</span>
                                    <h3><?php echo $faq__section_question_two; ?></h3>
                                </div>
                                <div class="mil-faq-answer">
                                    <div class="custom-list"><?php echo $faq_section_answer_two; ?></div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($faq_section_question_three) && !empty($faq_section_answer_three)): ?>
                            <div class="mil-faq-item mil-fade-up">
                                <div class="mil-faq-question">
                                    <span class="mil-icon">+</span>
                                    <h3><?php echo $faq_section_question_three; ?></h3>
                                </div>
                                <div class="mil-faq-answer">
                                    <div class="custom-list"><?php echo $faq_section_answer_three; ?></div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($faq_section_question_four) && !empty($faq_section_answer_four)): ?>
                            <div class="mil-faq-item mil-fade-up">
                                <div class="mil-faq-question">
                                    <span class="mil-icon">+</span>
                                    <h3><?php echo $faq_section_question_four; ?></h3>
                                </div>
                                <div class="mil-faq-answer">
                                    <div class="custom-list"><?php echo $faq_section_answer_four; ?></div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($faq_section_question_five) && !empty($faq_section_answer_five)): ?>
                            <div class="mil-faq-item mil-fade-up">
                                <div class="mil-faq-question">
                                    <span class="mil-icon">+</span>
                                    <h3><?php echo $faq_section_question_five; ?></h3>
                                </div>
                                <div class="mil-faq-answer">
                                    <div class="custom-list-01"><?php echo $faq_section_answer_five; ?></div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if (!empty($faq_section_question_six) && !empty($faq_section_answer_six)): ?>
                            <div class="mil-faq-item mil-fade-up">
                                <div class="mil-faq-question">
                                    <span class="mil-icon">+</span>
                                    <h3><?php echo $faq_section_question_six; ?></h3>
                                </div>
                                <div class="mil-faq-answer">
                                    <div class="custom-list"><?php echo $faq_section_answer_six; ?></div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- amenity -->
                        <div class="row mil-mb-60-adapt">
                            <div class="col-12">
                                <h3 class="mil-fade-up mil-mb-40">Amenity</h3>
                            </div>
                            <div class="col-xl-6">

                                <div class="mil-iconbox mil-mb-40-adapt mil-fade-up">
                                    <div class="mil-bg-icon"></div>
                                    <div class="mil-icon mil-icon-fix">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="15" cy="15" r="14" stroke="#22BCEC" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <h3 class="mil-mb-20"><?php echo $amenity_section_sub_heading_one; ?></h3>
                                    <p><?php echo $amenity_section_sub_heading_one_description; ?></p>
                                </div>

                            </div>
                            <div class="col-xl-6">

                                <div class="mil-iconbox mil-mb-40-adapt mil-fade-up">
                                    <div class="mil-bg-icon"></div>
                                    <div class="mil-icon mil-icon-fix">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="15" cy="15" r="14" stroke="#22BCEC" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <h3 class="mil-mb-20"><?php echo $amenity_section_sub_heading_two; ?></h3>
                                    <p><?php echo $amenity_section_sub_heading_two_description; ?></p>
                                </div>

                            </div>
                            <div class="col-xl-6">

                                <div class="mil-iconbox mil-mb-40-adapt mil-fade-up">
                                    <div class="mil-bg-icon"></div>
                                    <div class="mil-icon mil-icon-fix">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="15" cy="15" r="14" stroke="#22BCEC" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <h3 class="mil-mb-20"><?php echo $amenity_section_sub_heading_three; ?></h3>
                                    <p><?php echo $amenity_section_sub_heading_three_description; ?></p>
                                </div>

                            </div>
                            <div class="col-xl-6">

                                <div class="mil-iconbox mil-mb-40-adapt mil-fade-up">
                                    <div class="mil-bg-icon"></div>
                                    <div class="mil-icon mil-icon-fix">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="15" cy="15" r="14" stroke="#22BCEC" stroke-width="2" />
                                        </svg>
                                    </div>
                                    <h3 class="mil-mb-20"><?php echo $amenity_section_sub_heading_four; ?></h3>
                                    <p><?php echo $amenity_section_sub_heading_four_description; ?></p>
                                </div>

                            </div>
                        </div>

                        <!-- amenity end -->

                        <!-- map -->
                        <div>
                            <h3 class="mil-fade-up mil-mb-40"><?php echo $sixth_section_title; ?></h3>

                            <div class="mil-map-frame mil-fade-up mil-mb-100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126763.75638037869!2d81.7486873!3d6.8464863!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae5bdd4ea90a9dd%3A0x7011ba04a540ae4e!2sArugambay%20Agenda!5e0!3m2!1sen!2slk!4v1721294027474!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <!-- map end -->

                    </div>
                    <!-- sidebar -->
                    <div class="col-xl-4" data-sticky-container>

                        <div class="mil-sticky mil-stycky-right mil-p-0-100" data-margin-top="140">

                            <div class="mil-price-frame mil-mb-20">
                                <div class="mil-price"><span class="mil-symbol">$</span><span class="mil-number"><?php echo $price_per_night; ?></span>/ <?php echo $duration; ?></div>
                            </div>

                            <ul class="mil-parameters mil-mb-20">
                                <li>
                                    <div class="mil-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                        </svg>
                                    </div>
                                    <div>Adults: <?php echo $capacity; ?></div>
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
                                    <div>Kids: <?php echo $size; ?></div>
                                </li>
                            </ul>

                            <div class="mil-book-window">
                                <div>
                                    <div class="mil-field-frame mil-mb-20">
                                        <label>Full Name</label>
                                        <input type="text" id="fname" placeholder="Full Name">
                                    </div>

                                    <div class="mil-field-frame mil-mb-20">
                                        <label>E-Mail Address</label>
                                        <input type="email" id="aru-book-name" placeholder="E-Mail Address">
                                    </div>

                                    <div class="mil-field-frame mil-mb-20">
                                        <label>WhatsApp Number</label>
                                        <input type="tel" id="aru-book-name" placeholder="WhatsApp Number">
                                    </div>
                                    <div class="mil-field-frame mil-mb-20">
                                        <label>Date</label>
                                        <input id="check-in" type="text" class="datepicker-here" data-position="bottom left" placeholder="Select date" autocomplete="off" readonly="readonly">
                                    </div>

                                    <div class="mil-field-frame mil-mb-20">
                                        <label>Time</label>
                                        <input id="check-in-time" type="time" id="appt" name="appt" class="datepicker-here" data-position="bottom left" placeholder="Select Time" autocomplete="off" readonly="readonly">
                                    </div>

                                    <div class="mil-field-frame mil-mb-20">
                                        <label>Number of Pax</label>
                                        <input type="number" id="aru-book-name" placeholder="Enter quantity" value="1">
                                    </div>

                                    <div class="mil-field-frame mil-mb-20">
                                        <label>Departure location</label>
                                        <input type="text" id="aru-book-name" placeholder="Enter quantity">
                                    </div>

                                    <div class="mil-field-frame mil-mb-20">
                                        <label for="assistance-textarea">Need further assistance? </label>
                                        <textarea id="assistance-textarea" id="aru-book-name" placeholder="Write to us" rows="4" cols="50"></textarea>
                                    </div>

                                    <button type="submit" class="mil-button mil-accent-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                        <span>Book now</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- sidebar end -->
                </div>
            </div>
        </div>
        <!-- room info end -->

        <!-- call to action -->
        <div class="mil-content-pad mil-p-100-100 mil-fade-up">
            <div class="container">
                <div class="mil-text-center">
                    <div class="mil-suptitle mil-mb-20 mil-fade-up"><?php echo $seventh_section_top_line; ?></div>
                    <h2 class="mil-h2-lg mil-mb-40 mil-fade-up"><?php echo $seventh_section_title; ?></h2>
                    <span class="mil-buttons-frame mil-center mil-fade-up">
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
        </div>
        <!-- call to action end -->

        <!-- recommendation -->
        <div class="mil-rooms mil-p-100-100">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape mil-fade-up" style="width: 110%; bottom: 15%; left: -30%; opacity: .2" alt="shape"> -->
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