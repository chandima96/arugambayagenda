<?php

get_header();

?>

<?php
    $query_string = $_SERVER['QUERY_STRING'];

    $params = explode('/?', $query_string);
    $type_param = $params[0]; 
    $id_param = isset($params[1]) ? $params[1] : null;

    parse_str($type_param, $type_params);
    $type = isset($type_params['type']) ? $type_params['type'] : null;
    parse_str($id_param, $id_params);
    $post_id = isset($id_params['id']) ? $id_params['id'] : null;

    if ($post_id) {
        $post = get_post($post_id);
        if ($post) {
            $post_title = get_the_title($post_id);
        } else {
            $post_title = "Invalid Post ID.";
        }
    } else {
        $post_title = "No Post ID provided.";
    }

    $page_title = isset($_POST['page_title']) ? htmlspecialchars($_POST['page_title']) : 'Default Title';
    $date = isset($_POST['date']) ? htmlspecialchars($_POST['date']) : '';
    $time = isset($_POST['time']) ? htmlspecialchars($_POST['time']) : '';
    $pax = isset($_POST['pax']) ? htmlspecialchars($_POST['pax']) : '';
    $kids = isset($_POST['kids']) ? htmlspecialchars($_POST['kids']) : '';
    $total_amount = isset($_POST['total_amount']) ? htmlspecialchars($_POST['total_amount']) : '';
?>      
        <!-- banner -->
        <div class="mil-p-100-60">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape" style="width: 70%; top: 0; right: -12%; transform: rotate(180deg)" alt="shape">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape" style="width: 80%; bottom: -12%; right: -22%; transform: rotate(0deg) scaleX(-1);" alt="shape">
            <div class="container">
                <div class="mil-banner-head">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-xl-12">
                            <h1 class="mil-h2-lg mil-mb-40"><?php echo htmlspecialchars($page_title); ?></h1>
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

                    <!-- content -->
                     <!-- <?php
                        echo '<p><strong>Date:</strong> ' . htmlspecialchars($date) . '</p>';
                        echo '<p><strong>Time:</strong> ' . htmlspecialchars($time) . '</p>';
                        echo '<p><strong>Number of Pax:</strong> ' . htmlspecialchars($pax) . '</p>';
                        echo '<p><strong>Number of Kids:</strong> ' . htmlspecialchars($kids) . '</p>';
                        echo '<p><strong>Total Amount:</strong> $' . htmlspecialchars($total_amount)  . '</p>';
                    ?> -->

                    <div class="booking-card">
                        <div class="row">
                            <div class="col-xl-4 booking-heading ">
                                <img src="<?php echo get_field('image_one'); ?>" class="image-booking">
                            </div>
                            <div class="col-xl-8 booking-heading ">
                                <h2><?php echo htmlspecialchars($post_title); ?></h2>
                            </div>
                        </div>
                        
                        <div class="booking-icon-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-clock-history custom-margin-10 icon-color" viewBox="0 0 16 16">
                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
                            </svg>                        
                            <p><?php echo get_field('duration'); ?></p>
                        </div>
                        <p>Select a starting time</p>
                        <div class="booking-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-calendar-check-fill custom-margin-10 icon-color" viewBox="0 0 16 16">
                                <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
                            </svg>
                            <p><?php echo htmlspecialchars($date); ?></p>
                        </div>
                        <div class="booking-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-alarm-fill custom-margin-10 icon-color" viewBox="0 0 16 16">
                                <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5m2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.04 8.04 0 0 0 .86 5.387M11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.04 8.04 0 0 0-3.527-3.527"/>
                            </svg>                     
                            <p><?php echo htmlspecialchars($time); ?></p>
                        </div>
                        <!-- <div class="booking-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-calendar-check custom-margin-10" viewBox="0 0 16 16">
                                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                            </svg>                        
                            <p>Cancel before 5:30 AM on August 6 for a full refund</p>
                        </div> -->
                        <div class="booking-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-calendar-event custom-margin-10 icon-color" viewBox="0 0 16 16">
                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                            </svg>                        
                            <p>You can reserve now & pay later with this activity option.</p>
                        </div>
                        <div class="booking-price-breakdown">
                            <div class="booking-info">
                            <svg width="24" height="24" class="custom-margin-10 icon-color" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="32" cy="18" r="10" fill="#FFD700" />
                                    <rect x="24" y="28" width="16" height="28" fill="#1E90FF" />
                                    <line x1="24" y1="42" x2="12" y2="52" stroke="#000" stroke-width="2" />
                                    <line x1="40" y1="42" x2="52" y2="52" stroke="#000" stroke-width="2" />
                                    <line x1="24" y1="56" x2="12" y2="64" stroke="#000" stroke-width="2" />
                                    <line x1="40" y1="56" x2="52" y2="64" stroke="#000" stroke-width="2" />
                                </svg>                      
                                <p>Adult <?php echo htmlspecialchars($pax); ?> (Age: 12-99)</p>
                            </div>
                        </div>
                        <div class="booking-price-breakdown">
                            <div class="booking-info">
                            <?php if ($kids > 0): ?>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 104.9 122.88" style="enable-background:new 0 0 104.9 122.88" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g>
                                    <path class="st0" d="M52.5,0C64.3,0,73.86,9.46,73.86,21.14c0,11.67-9.56,21.14-21.36,21.14c-11.8,0-21.36-9.46-21.36-21.14 C31.14,9.46,40.7,0,52.5,0L52.5,0z M74.61,64.75l16.72,12.69c8.01,6.08,18.75-4.67,10.75-10.75L74.61,45.85v-0.1l-44.2,0v0.02 l-0.02-0.02L2.82,66.79c-7.99,6.1,2.76,16.85,10.75,10.75l16.84-12.85l0,28.69h2.29v21.91c0,4.18,3.42,7.6,7.6,7.6 c4.18,0,7.6-3.42,7.6-7.6V93.37h9.21v21.91c0,4.18,3.42,7.6,7.6,7.6c4.18,0,7.6-3.42,7.6-7.6V93.37h2.29V64.75L74.61,64.75 L74.61,64.75z"/></g>
                                </svg>                 
                                <p>Kids <?php echo htmlspecialchars($kids); ?> (Age: 11 and Younger)</p>
                            <?php endif; ?>                            </div>
                        </div>
                        <div class="booking-total-price">Total price <span style="color:#0097b2;"><?php echo htmlspecialchars($total_amount); ?></span></div>
                        <!-- <div class="booking-buttons">
                            <a href="#" class="booking-button secondary">Add to cart</a>
                            <a href="#" class="booking-button">Book now</a>
                        </div> -->
                    </div>
                    </div>
                    <!-- sidebar -->
                    <div class="col-xl-4" data-sticky-container>
                        <div class="mil-sticky mil-stycky-right mil-p-0-100" data-margin-top="140">

                            <div class="mil-book-window">
                                    <?php echo do_shortcode('[contact-form-7 id="3251d29" title="Contact form Tours"]'); ?>
                                <!-- <form action="/booking-confirmation/?type=<?php echo get_post_type(); ?>/?id=<?php echo get_the_ID(); ?>" method="post">
                                    <div class="mil-field-frame mil-mb-20">
                                        <label>Full Name</label>
                                        <input type="text" id="fname" name="fname" placeholder="Full Name" required>
                                    </div>

                                    <div class="mil-field-frame mil-mb-20">
                                        <label>E-Mail Address</label>
                                        <input type="email" id="aru-book-email" name="email" placeholder="E-Mail Address" required>
                                    </div>

                                    <div class="mil-field-frame mil-mb-20">
                                        <label>WhatsApp Number</label>
                                        <input type="tel" id="aru-book-tel" name="whatsapp" placeholder="WhatsApp Number" required>
                                    </div>

                                    <div class="mil-field-frame mil-mb-20">
                                        <label>Date</label>
                                        <input id="check-in" type="text" name="date" class="datepicker-here" data-position="bottom left" placeholder="Select date" autocomplete="off" readonly="readonly" required>
                                    </div>

                                    <div class="donation-form-group">
                                        <label>Time</label>
                                        <div class="donation-time-buttons">
                                            <button type="button" onclick="settime('8.00 AM', this)">8.00 AM</button>
                                            <button type="button" onclick="settime('5.00 PM', this)">5.00 PM</button>
                                        </div>
                                        <input type="hidden" id="time" name="time">
                                    </div>

                                    <div class="mil-field-frame mil-mb-20">
                                        <label>Number of Pax</label>
                                        <input type="number" id="aru-book-pax" name="pax" value="1" min="1" required>
                                    </div>

                                    <div class="mil-field-frame mil-mb-20">
                                        <label>Number of Kids</label>
                                        <input type="number" id="aru-book-kids" name="kids" value="1" min="0" required>
                                    </div>

                                    <div class="mil-field-frame mil-mb-20">
                                        <label>Departure location</label>
                                        <input type="text" id="aru-book-location" name="location" placeholder="Departure location" required>
                                    </div>

                                    <div class="mil-field-frame mil-mb-20">
                                        <label for="assistance-textarea">Need further assistance? </label>
                                        <textarea id="assistance-textarea" name="assistance" placeholder="Write to us" rows="4" cols="50"></textarea>
                                    </div>

                                    <input type="hidden" name="page_slug" value="form-page-slug">
                                    <input type="hidden" name="page_title" value="Booking Confirmation">

                                    <button type="submit" class="mil-button mil-accent-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark">
                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                        <span>Confirm</span>
                                    </button>
                                </form> -->
                            </div>     
                        </div>
                    </div>
                    <!-- sidebar end -->
                </div>
            </div>
        </div>
        <!-- room info end -->


        <!-- recommendation -->
        <div class="mil-rooms mil-p-100-100">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape mil-fade-up" style="width: 110%; bottom: 15%; left: -30%; opacity: .2" alt="shape">
            <div class="container">
                <div class="row justify-content-between align-items-end mil-mb-100">
                    <div class="col-lg-7">
                        <div class="mil-suptitle mil-fade-up mil-mb-20">Discover</div>
                        <h2 class="mil-fade-up">You might also like...</h2>
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
                                    'post_type' => 'activity',
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
                                        <p class="mil-mb-40"><?php echo get_field('description'); ?></p>
                                        <div class="mil-divider"></div>
                                        <div class="mil-card-bottom">
                                            <div class="mil-price"><span class="mil-symbol">$</span><span class="mil-number"><?php echo get_field('price_per_night'); ?></span>/ <span>per pax /</span> <?php echo get_field('duration'); ?></div>
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

                <div class="row justify-content-between">
                    <div class="col-lg-7">
                        <p class="mil-fade-up">Accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
                    </div>
                    <div class="col-lg-5">
                        <div class="mil-desctop-right mil-fade-up">
                            <a href="<?php bloginfo('url'); ?>/activities" class="mil-button">
                                <span>View all</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- recommendation end -->

<?php get_footer(); ?>

    <script>
            document.addEventListener('DOMContentLoaded', function() {
            const date = '<?php echo $date; ?>';
            const time = '<?php echo $time; ?>';
            const pax = '<?php echo $pax; ?>';
            const kids = '<?php echo $kids; ?>';
            const totalAmount = '<?php echo $total_amount; ?>';
            const postTitle = '<?php echo $post_title; ?>';

            setTimeout(function() {
                document.querySelector('input[name="date"]').value = date;
                // document.querySelector('input#time').value = time;
                document.querySelector('input[name="time"]').value = time;
                document.querySelector('input[name="pax"]').value = pax;
                document.querySelector('input[name="kids"]').value = kids;
                document.querySelector('input[name="total_amount"]').value = totalAmount;
                document.querySelector('input[name="post_title"]').value = postTitle;
            }, 1000); 
        });
    </script>
   

