        <!-- footer -->
        <footer>
    <img src="<?php echo get_template_directory_uri(); ?>/img/shapes/4.png" class="mil-shape mil-fade-up" style="width: 85%; top: -15%; left: -40%; transform: rotate(-50deg)" alt="shape">
    <div class="mil-footer-content mil-fade-up">
        <div class="container">
            <div class="row justify-content-center mil-p-100-40">
                <div class="col-md-4 col-lg-4 mil-mb-60 text-center">
                    <a href="<?php bloginfo('url'); ?>/" class="mil-logo mil-mb-40">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo/footer-logo.png" alt="aquarelle">
                    </a>
                    <div>
                        <p class="mil-light-soft">Explore Sri Lanka's cultural wonders with Arugambay Agenda's seamless island transfers and curated tours.</p>
                    </div>
                    <div>
                        <a href="https://www.tripadvisor.com/Attraction_Review-g3348959-d25775340-Reviews-Arugambay_Agenda-Arugam_Bay_Eastern_Province.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/Tripadvisor.svg" class="custom-logo-01" alt="aquarelle"></a>
                        <a href="https://www.getyourguide.com/arugambay-agenda-s304885/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/gyg-logo.svg" class="mt-2 custom-logo-02" alt="aquarelle"></a>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 text-center">
                    <div class="row justify-content-center">
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

            <div class="row justify-content-center flex-sm-row-reverse mil-p-100-40">
                <div class="col-md-7 col-lg-6">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-5 mil-mb-40">
                            <h5 class="mil-mb-20">Location</h5>
                            <a href="https://maps.app.goo.gl/iUfoQuGYqZxae2wM8" target="_blank" class="mil-light-soft">
                                <p>
                                    No.54,<br>
                                    Tsunami Hotel Road,<br>
                                    Arugambay, 32500<br>
                                    Pottuvil, Srilanka
                                </p>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-5 mil-mb-40">
                            <h5 class="mil-mb-20">Contact</h5>
                            <a href="mailto:info@arugambayagenda.com" class="mil-light-soft">info@arugambayagenda.com</a><br>
                            <a href="tel:+94766899188" class="mil-light-soft">+94766899188</a><br>
                            <a href="tel:+94726479635" class="mil-light-soft">+94726479635</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-6 mil-mb-60 text-center">
                    <div class="mil-mb-20">
                        <ul class="mil-social-icons justify-content-center">
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
                                            <path d="M8 0c1.406 0 1.57.007 2.119.03.55.024.917.111 1.135.2.25.1.43.23.64.44.21.21.34.39.44.64.088.218.176.585.2 1.135C13.992 2.43 14 2.594 14 4s-.008 1.57-.031 2.119c-.024.55-.111.917-.2 1.135-.1.25-.23.43-.44.64-.21.21-.39.34-.64.44-.218.088-.585.176-1.135.2-.55.023-.713.031-2.119.031s-1.57-.008-2.119-.031c-.55-.024-.917-.112-1.135-.2a2.052 2.052 0 0 1-.64-.44c-.21-.21-.34-.39-.44-.64-.088-.218-.176-.585-.2-1.135C2.008 9.57 2 9.406 2 8s.008-1.57.031-2.119c.024-.55.112-.917.2-1.135.1-.25.23-.43.44-.64.21-.21.39-.34.64-.44.218-.088.585-.176 1.135-.2C6.43 2.007 6.594 2 8 2Zm0-1.997C6.536 0 6.36.008 5.807.03c-.552.024-.93.113-1.26.24a3.57 3.57 0 0 0-1.293.836 3.57 3.57 0 0 0-.836 1.293c-.127.33-.216.708-.24 1.26C2.008 4.36 2 4.536 2 6c0 1.464.008 1.64.03 2.193.024.552.113.93.24 1.26.154.402.368.76.836 1.293.523.468.891.682 1.293.836.33.127.708.216 1.26.24C6.36 12.992 6.536 13 8 13c1.464 0 1.64-.008 2.193-.03.552-.024.93-.113 1.26-.24a3.57 3.57 0 0 0 1.293-.836 3.57 3.57 0 0 0 .836-1.293c.127-.33.216-.708.24-1.26.022-.553.03-.729.03-2.193 0-1.464-.008-1.64-.03-2.193-.024-.552-.113-.93-.24-1.26a3.573 3.573 0 0 0-.836-1.293 3.572 3.572 0 0 0-1.293-.836c-.33-.127-.708-.216-1.26-.24C9.64.008 9.464 0 8 0Zm0 3.998a4.002 4.002 0 1 0 0 8.004 4.002 4.002 0 0 0 0-8.004Zm0 6.669a2.67 2.67 0 1 1 0-5.337 2.67 2.67 0 0 1 0 5.337Zm5.457-6.787a.932.932 0 1 0-1.865 0 .932.932 0 0 0 1.865 0Z"/>
                                        </svg>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UC-V9O1g5iS-ZmQBJPMNiJ2w" target="_blank" class="social-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="15" cy="15" r="14" stroke="#204F5E" stroke-width="2" />
                                        <svg x="7" y="7" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                            <path d="M8.051 1.999h-.102C5.05 2 1.594 2.208.775 4.852h.034C0 6.162 0 8.025 0 8.025s0 1.863.809 3.173c.788 2.644 4.23 2.852 7.17 2.852h.102c2.94 0 6.382-.208 7.17-2.852C16 9.888 16 8.025 16 8.025s0-1.863-.809-3.173c-.788-2.644-4.23-2.852-7.17-2.852ZM6.303 10.305V5.745l4.276 2.28-4.276 2.28Z"/>
                                        </svg>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="mil-light-soft">Follow Us</p>
                    </div>
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