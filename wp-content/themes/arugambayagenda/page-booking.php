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
                        <div class="col-lg-12 col-xl-12">
                            <div class="mil-desctop-right mil-right-no-m mil-fade-up">
                                <div class="mil-suptitle mil-breadcrumbs mil-light">
                                    <ul>
                                        <li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/"><?php echo htmlspecialchars($post_title); ?></a></li>
                                        <li><a href="#"><?php echo htmlspecialchars($page_title); ?></a></li>
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

                    <!-- content -->
                     <?php
                                            //  echo '<title>' . htmlspecialchars($page_title) . '</title>';
                                            //  echo '<h1>' . htmlspecialchars($page_title) . '</h1>';
                                            //  // echo '<h2>Post ID: ' . htmlspecialchars($post_id) . '</h2>';
                                            //  echo '<h2>Post Title: ' . htmlspecialchars($post_title) . '</h2>';
                                            //  echo '<h2>Form Page Slug: ' . htmlspecialchars($page_slug) . '</h2>';
                                            //  echo '<h2>Form Details</h2>';
                                            //  echo '<p><strong>Full Name:</strong> ' . htmlspecialchars($fname) . '</p>';
                                            //  echo '<p><strong>E-Mail Address:</strong> ' . htmlspecialchars($email) . '</p>';
                                            //  echo '<p><strong>WhatsApp Number:</strong> ' . htmlspecialchars($whatsapp) . '</p>';
                                             echo '<p><strong>Date:</strong> ' . htmlspecialchars($date) . '</p>';
                                             echo '<p><strong>Time:</strong> ' . htmlspecialchars($time) . '</p>';
                                             echo '<p><strong>Number of Pax:</strong> ' . htmlspecialchars($pax) . '</p>';
                                             echo '<p><strong>Number of Kids:</strong> ' . htmlspecialchars($kids) . '</p>';
                                             echo '<p><strong>Total Amount:</strong> $' . htmlspecialchars($total_amount)  . '</p>';
                                            //  echo '<p><strong>Departure Location:</strong> ' . htmlspecialchars($location) . '</p>';
                                            //  echo '<p><strong>Need Further Assistance:</strong> ' . htmlspecialchars($assistance) . '</p>';
                    ?>
                    </div>
                    <!-- sidebar -->
                    <div class="col-xl-4" data-sticky-container>

                        <div class="mil-sticky mil-stycky-right mil-p-0-100" data-margin-top="140">

                            <div class="mil-price-frame mil-mb-20">
                                <div class="mil-price"><span class="mil-symbol">$</span><span class="mil-number"><?php echo $price_per_night; ?></span>/ <span>per pax /</span> <?php echo $duration; ?></div>
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
        function settime(time, button) {
            document.getElementById('time').value = time;
            clearSelected('donation-time-buttons');
            button.classList.add('selected');
        }

        function setDonationAmount(amount, button) {
            document.getElementById('other-amount').value = amount;
            clearSelected('donation-donation-slots');
            button.classList.add('selected');
        }

        function clearSelected(groupClass) {
            var buttons = document.getElementsByClassName(groupClass)[0].getElementsByTagName('button');
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove('selected');
            }
        }
    </script>




