<?php
/*
	Template Name: Ride With Us
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
                                <h1 class="mil-mb-40">Get in Touch!</h1>
                                <div class="mil-suptitle mil-breadcrumbs">
                                    <ul>
                                        <li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/ride-with-us"><?php the_title(); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- banner end -->

        <!-- contact form -->
        <div class="mil-content-pad mil-p-100-100">
            <div class="container">
                <form>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="mil-field-frame mil-mb-20">
                                <label>Name</label>
                                <input type="text" placeholder="Enter Full Name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mil-field-frame mil-mb-20">
                                <label>Email</label>
                                <input type="email" placeholder="Enter Email Address">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mil-field-frame mil-mb-20">
                                <label>WhatsApp Number</label>
                                <input type="text" placeholder="Enter WhatsApp Number">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mil-field-frame mil-mb-20">
                                <label>Number of Adults</label>
                                <input type="email" placeholder="Enter Number of Adults">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mil-field-frame mil-mb-20">
                                <label>Number of Kids</label>
                                <input type="email" placeholder="Enter Number of Kids">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mil-field-frame mil-mb-20">
                                <label>Select Date</label>
                                <input id="check-in" type="text" class="datepicker-here" data-position="bottom left" placeholder="Select date" autocomplete="off" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mil-field-frame mil-mb-20">
                                <label>Departure Location</label>
                                <input type="email" placeholder="Enter Departure Location">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mil-field-frame mil-mb-20">
                                <label>Destination</label>
                                <input type="email" placeholder="Enter Destination">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="mil-field-frame mil-mb-20">
                                <label>Message</label>
                                <textarea placeholder="Write a message here"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <p class="mil-fade-up"><span class="mil-accent-2">*</span>We promise not to disclose your personal information to third parties.</p>
                        </div>
                        <div class="col-lg-5">
                            <div class="mil-desctop-right mil-fade-up">
                                <button type="submit" class="mil-button">
                                    <span>Send</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- contact form end -->

        <!-- contact info -->
        <div class="mil-contact mil-p-100-60">
            <img src="img/shapes/4.png" class="mil-shape mil-fade-up" style="width: 85%; top: -20%; right: -30%; transform: rotate(-30deg) scaleX(-1);" alt="shape">
            <img src="img/shapes/4.png" class="mil-shape mil-fade-up" style="width: 110%; bottom: 15%; left: -30%; opacity: .2" alt="shape">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="mil-iconbox mil-mb-40-adapt mil-fade-up">
                            <div class="mil-bg-icon"></div>
                            <div class="mil-icon mil-icon-fix">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                                    <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <h3 class="mil-mb-20">+27 (843) 38X 83 04</h3>
                            <p>Call us anytime. We are available 24/7</p>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="mil-iconbox mil-mb-40-adapt mil-fade-up">
                            <div class="mil-bg-icon"></div>
                            <div class="mil-icon mil-icon-fix">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <h3 class="mil-mb-20">aquarel.hotel@mail. com</h3>
                            <p>Write to us. We respond quickly</p>
                        </div>
                    </div>

                    <!-- <div class="col-xl-4">
                        <div class="mil-iconbox mil-mb-40-adapt mil-fade-up">
                            <div class="mil-bg-icon"></div>
                            <div class="mil-icon mil-icon-fix">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <h3 class="mil-mb-20">aquarel.hotel@mail.com</h3>
                            <p>Write to us. We respond quickly</p>
                        </div>
                    </div> -->
                    <div class="col-xl-4">
                        <div class="mil-iconbox mil-mb-40-adapt mil-fade-up">
                            <div class="mil-bg-icon"></div>
                            <div class="mil-icon mil-icon-fix">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <h3 class="mil-mb-20">Wharf st. 7584, some City</h3>
                            <p>We invite you to visit us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact info end -->

        <!-- map -->
        <div class="mil-p-0-100">
            <div class="container">
                <div class="mil-map-frame mil-fade-up">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9856.28335847757!2d-3.7356696923005295!3d36.72430199961263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7187e1f7c4b7e7%3A0x9ab7e6940ad5f587!2sPlaya%20Marina%20del%20Este!5e0!3m2!1suk!2sua!4v1701773054642!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- map end -->

<?php get_footer(); ?>