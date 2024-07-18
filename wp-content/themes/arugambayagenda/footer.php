        <!-- footer -->
        <footer>
            <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape mil-fade-up" style="width: 85%; top: -15%; left: -40%; transform: rotate(-50deg)" alt="shape">
            <div class="mil-footer-content mil-fade-up">
                <div class="container">
                    <div class="row justify-content-between mil-p-100-40">
                        <div class="col-md-4 col-lg-4 mil-mb-60">

                            <div>
                                <a href="<?php bloginfo('url'); ?>/" class="mil-logo mil-mb-40">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/footer-logo.png" alt="aquarelle">
                                </a>
                                <!-- <h3 class="mb-3">About</h3> -->
                                <p class="mil-light-soft">Explore Sri Lanka's cultural wonders with Arugambay Agenda's seamless island transfers and curated tours.</p>
                                <!-- <div class="mil-mb-20 fw-500"></div> -->
                            </div>

                            <div>
                                <a href="https://www.tripadvisor.com/Attraction_Review-g3348959-d25775340-Reviews-Arugambay_Agenda-Arugam_Bay_Eastern_Province.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/Tripadvisor.svg" class="custom-logo-01" alt="aquarelle"></a>
                                <a href="https://www.getyourguide.com/arugambay-agenda-s304885/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/gyg-logo.svg" class="mt-2 custom-logo-02" alt="aquarelle"></a>
                            </div>

                        </div>
                        <div class="col-md-7 col-lg-6">
                            <div class="row justify-content-end">
                                <div class="col-md-6 col-lg-7 mil-mb-60">
                                    <?php
                                    $active_post_ids = array(12, 14, 26, 302, 301, 299, 24, 298, 297, 296, 293, 292, 282, 125);
                                    ?>
                                    <nav class="mil-footer-menu">
                                        <ul class="footer-link">
                                            <li class="<?php if (get_the_ID() == '6') { echo 'mil-active active'; } ?>">
                                                <a href="<?php bloginfo('url'); ?>/">Home</a>
                                            </li>
                                            <li class="<?php if (in_array(get_the_ID(), $active_post_ids)) { echo 'mil-active active'; } ?>">
                                                <a href="<?php bloginfo('url'); ?>/all-tours">Tours</a>
                                            </li>
                                            <li class="<?php if (get_the_ID() == '328') { echo 'mil-active active'; } ?>">
                                                <a href="<?php bloginfo('url'); ?>/activities">Activities</a>
                                            </li>
                                            <li class="<?php if (get_the_ID() == '13') { echo 'mil-active active'; } ?>">
                                                <a href="<?php bloginfo('url'); ?>/taxi-service">Taxi Service</a>
                                            </li>
                                            <li class="<?php if (get_the_ID() == '325') { echo 'mil-active active'; } ?>">
                                                <a href="<?php bloginfo('url'); ?>/about">About</a>
                                            </li>
                                            <li class="<?php if (get_the_ID() == '31') { echo 'mil-active active'; } ?>">
                                                <a href="<?php bloginfo('url'); ?>/blog">Blog</a>
                                            </li>
                                            <li class="<?php if (get_the_ID() == '11') { echo 'mil-active active'; } ?>">
                                                <a href="<?php bloginfo('url'); ?>/contact-us">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>




                                </div>
                                <div class="col-md-6 col-lg-5 mil-mb-60">

                                    <ul class="mil-menu-list">
                                        <li><a href="#." class="mil-light-soft">Privacy Policy</a></li>
                                        <li><a href="#." class="mil-light-soft">Terms and conditions</a></li>
                                        <li><a href="#." class="mil-light-soft">Cookie Policy</a></li>
                                        <li><a href="#." class="mil-light-soft">Site Map</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mil-divider"></div>

                    <div class="row justify-content-between flex-sm-row-reverse mil-p-100-40">
                        <div class="col-md-7 col-lg-6">

                            <div class="row justify-content-between">

                                <div class="col-md-6 col-lg-5 mil-mb-40">

                                    <h5 class="mil-mb-20">Location</h5>
                                    <a href="https://maps.app.goo.gl/iUfoQuGYqZxae2wM8" target="_blank" class="mil-light-soft"><p> No.54,<br>
                                        Tsunami Hotel Road,<br>
                                        Arugambay, 32500<br>
                                        Pottuvil, Srilanka
                                    </p></a>

                                </div>
                                <div class="col-md-6 col-lg-5 mil-mb-40">

                                    <h5 class="mil-mb-20">Contact</h5>
                                    <a href="mailto:info@arugambayagenda.com" class="mil-light-soft">info@arugambayagenda.com</a>
                                    <a href="tel:+94766899188" class="mil-light-soft">+94766899188</a> <br>
                                    <a href="tel:+94726479635" class="mil-light-soft">+94726479635</a>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 col-lg-6 mil-mb-60">

                            <div class="mil-mb-20">
                                <ul class="mil-social-icons">
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100092304975049&mibextid=LQQJ4d" target="_blank" class="social-icon">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="15" cy="15" r="14" stroke="#204F5E" stroke-width="2" />
                                                <svg x="7" y="7" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                                </svg>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/arugambayagenda/?igshid=MzMyNGUyNmU2YQ%3D%3D&utm_source=qr" target="_blank" class="social-icon">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="15" cy="15" r="14" stroke="#204F5E" stroke-width="2" />
                                                <svg x="7" y="7" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                                </svg>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.threads.net/@arugambayagenda" target="_blank" class="social-icon">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="15" cy="15" r="14" stroke="#204F5E" stroke-width="2" />
                                                <svg x="7" y="7" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                    <path d="M6.321 6.016c-.27-.18-1.166-.802-1.166-.802.756-1.081 1.753-1.502 3.132-1.502.975 0 1.803.327 2.394.948s.928 1.509 1.005 2.644q.492.207.905.484c1.109.745 1.719 1.86 1.719 3.137 0 2.716-2.226 5.075-6.256 5.075C4.594 16 1 13.987 1 7.994 1 2.034 4.482 0 8.044 0 9.69 0 13.55.243 15 5.036l-1.36.353C12.516 1.974 10.163 1.43 8.006 1.43c-3.565 0-5.582 2.171-5.582 6.79 0 4.143 2.254 6.343 5.63 6.343 2.777 0 4.847-1.443 4.847-3.556 0-1.438-1.208-2.127-1.27-2.127-.236 1.234-.868 3.31-3.644 3.31-1.618 0-3.013-1.118-3.013-2.582 0-2.09 1.984-2.847 3.55-2.847.586 0 1.294.04 1.663.114 0-.637-.54-1.728-1.9-1.728-1.25 0-1.566.405-1.967.868ZM8.716 8.19c-2.04 0-2.304.87-2.304 1.416 0 .878 1.043 1.168 1.6 1.168 1.02 0 2.067-.282 2.232-2.423a6.2 6.2 0 0 0-1.528-.161"/>
                                                </svg>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.arugambayagenda.com/info.arugambayagenda.com" target="_blank" class="social-icon">
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="15" cy="15" r="14" stroke="#204F5E" stroke-width="2" />
                                                <svg x="7" y="7" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                                </svg>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <p class="mil-light-soft">© 2024 Copyrights by Arugambay Agenda. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <!-- book popup -->
        <div class="mil-book-popup-frame">
            <div class="mil-book-popup">
                <div class="mil-popup-head mil-mb-40">
                    <h3 class="mil-h3-lg">Book Now</h3>
                    <div class="mil-close-button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                </div>
                <form>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="mil-field-frame footer mil-mb-20">
                                <label>Name</label>
                                <input type="text" placeholder="Enter Full Name" >
                            </div>
                        </div> 
                        <div class="col-xl-6">      
                            <div class="mil-field-frame mil-mb-20">
                                <label>WhatsApp Number</label>
                                <input type="text" placeholder="Enter WhatsApp Number" >
                            </div>
                        </div>  
                        <div class="col-xl-6">       
                        <div class="mil-field-frame mil-mb-20">
                                <label>Email</label>
                                <input type="text" placeholder="Enter Email Address" >
                            </div>
                        </div>
                        <div class="col-xl-6">      
                            <div class="mil-field-frame mil-mb-20">
                                <label>Website</label>
                                <input type="text" placeholder="Enter Website" >
                            </div>
                        </div>
                        <div class="col-xl-12">
                        <div class="mil-field-frame mil-mb-20">
                                <label for="assistance-textarea">Need further assistance? </label>
                                <textarea id="assistance-textarea" class="custom-height" placeholder="Write to us" rows="4" cols="50"></textarea>
                            </div>
                        </div>        
                        <div class="row align-items-center justify-content-end">
                            <div class="col-lg-6">
                                <div class="mil-desctop-right mil-fade-up">
                                    <button type="submit" class="mil-button">
                                        <span>Send</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- book popup end -->

        <div class="mil-progressbar"></div>

    </div>
    <!-- wrapper end -->

    <!-- jQuery js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins/jquery.min.js"></script>
    <!-- smooth scroll js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins/smooth-scroll.js"></script>
    <!-- swiper js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins/swiper.min.js"></script>
    <!-- datepicker js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/plugins/datepicker.js"></script>
    <!-- aquarelle js -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>

</html>