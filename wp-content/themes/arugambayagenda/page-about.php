<?php
/*
	Template Name: About 
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
                                <h1 class="mil-mb-40">Welcome to <br>Arugambay Agenda</h1>
                                <div class="mil-suptitle mil-breadcrumbs">
                                    <ul>
                                        <li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
                                        <li><a href="<?php bloginfo('url'); ?>/about-us">About us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- about -->
        <div class="mil-content-pad mil-p-100-60">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-12">
                        <div class="mil-suptitle mil-mb-20 mil-fade-up">About us</div>
                        <h2 class="mil-mb-60-adapt mil-fade-up">Story about us</h2>
                    </div>
                    <div class="col-xl-6">
                        <p class="mil-fade-up mil-mb-20">
                            Welcome to Arugambay Agenda, your ultimate guide to adventure in the beautiful
                            Sri Lanka and its captivating Arugambay region. With a decade of expertise in hospitality
                            and tourism, our dedicated team is committed to crafting an unforgettable experience for you.
                            Delight in carefully curated tours around Sri Lanka's wonders, embark on thrilling wildlife safaris,
                            and ride the waves with epic surf lessons.
                        </p>
                    </div>
                    <div class="col-xl-5">
                        <p class="mil-fade-up mil-mb-20">
                            Discover our array of accommodations, from cozy retreats to
                            luxurious havens, ensuring your stay is nothing short of extraordinary.
                            Our dedication to sustainable tourism and responsible practices ensures that every adventure you undertake
                            with us contributes to preserving the pristine beauty of this island paradise.
                            Your extraordinary voyage awaits; come and experience a world of wonder with us.
                        </p>

                        <!-- <div class="mil-signature-frame mil-fade-up mil-mb-40-adapt">
                            <div class="mil-author-frame">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/faces/4.jpg" alt="Author">
                                <div class="mil-author-text">
                                    <h4 class="mil-mb-10">Emma Miller</h4>
                                    <p>Hotel administrator</p>
                                </div>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/signature.png" alt="Signature" class="mil-signature">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- about end -->

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

<style>

        /* Team Section Styles */
        .team-section {
            text-align: center;
            position: relative; /* For positioning the buttons */
        }

        .team-section h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .team-container {
            display: flex;
            flex-wrap: nowrap; /* Prevent wrapping */
            overflow: hidden; /* Hide overflow */
            justify-content: flex-start;
            gap: 20px;
            transition: transform 0.5s ease-in-out;
        }

        .team-member {
            background-color: rgb(250, 255, 255);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 10px;
            min-width: 300px; /* Ensure each member takes full width in the carousel */
            flex: 1 0 auto; /* Allow the item to grow and shrink as needed */
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .team-member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            transition: transform 0.3s;
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(75, 135, 175, 0.2);
        }

        .team-member:hover img {
            transform: scale(1.1);
        }

        .team-member h3 {
            font-size: 1.5em;
            margin-bottom: 5px;
        }

        .team-member p {
            font-size: 1em;
            color: #777;
            margin-bottom: 15px;
        }

        .social-links a {
            margin: 0 5px;
            display: inline-block;
            transition: transform 0.3s;
        }

        .social-links a:hover {
            transform: scale(1.2);
        }

        .icon {
            width: 24px;
            height: 24px;
            fill: #777;
            transition: fill 0.3s ease;
        }

        .icon:hover {
            fill: rgb(0, 151, 178);
        }

        .contact-number {
            color: #1f2937;
            font-weight: bold;
            text-decoration: none; 
            transition: transform 0.2s; 
        }

        .contact-number:hover {
            color: rgb(0, 151, 178); 
            transform: scale(1.2); 
        }

        /* Media Query for Carousel */
        @media (max-width: 1201px) {
            .team-container {
                justify-content: flex-start;
                scroll-behavior: smooth;
                scroll-snap-type: x mandatory;
                -webkit-overflow-scrolling: touch;
            }

            .team-member {
                scroll-snap-align: center;
                flex: 1 0 100%; /* Each member takes full width of the container */
            }

            .prev-btn, .next-btn {
                display: block;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background-color: #00a0d2;
                color: #fff;
                border: none;
                padding: 10px;
                cursor: pointer;
                z-index: 10;
            }

            .prev-btn {
                left: 10px;
            }

            .next-btn {
                right: 10px;
            }
        }
</style>
            <!-- Team -->
            <div class="mil-content-pad mil-p-100-100">
        <div class="container">
            <div class="mil-text-center">
                <div class="mil-suptitle mil-mb-20 mil-fade-up">Team</div>
                <h2 class="mil-mb-100 mil-fade-up">Our Experts</h2>
            </div>
            <div class="team-section">
                <button id="prev-btn" class="prev-btn">←</button>
                <div class="team-container">
                    <!-- Team Members Loop -->
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
                    <div class="mil-iconbox-custom-team">
                        <div class="team-member">
                            <?php if (has_post_thumbnail()) {
                                $attachment_image = wp_get_attachment_url(get_post_thumbnail_id());
                            ?>
                                <img src="<?php echo $attachment_image; ?>">
                            <?php } ?>  

                            <h3><?php the_title(); ?></h3>
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
                            <div class="social-links">
                                <a href="<?php echo get_field('facebook_link'); ?>" target="_blank"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/></svg></a>
                                <a href="<?php echo get_field('twitter_link'); ?>" target="_blank"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/></svg></a>
                                <a href="<?php echo get_field('instagram_link'); ?>" target="_blank"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.852.086 3.358.202 2.935.407a3.515 3.515 0 0 0-1.265.867 3.515 3.515 0 0 0-.867 1.265c-.205.423-.321.917-.359 1.768C.01 5.556 0 5.829 0 8s.01 2.444.048 3.297c.038.851.154 1.345.359 1.768a3.515 3.515 0 0 0 .867 1.265 3.515 3.515 0 0 0 1.265.867c.423.205.917.321 1.768.359C5.556 15.99 5.829 16 8 16s2.444-.01 3.297-.048c.851-.038 1.345-.154 1.768-.359a3.515 3.515 0 0 0 1.265-.867 3.515 3.515 0 0 0 .867-1.265c.205-.423.321-.917.359-1.768.038-.853.048-1.126.048-3.297s-.01-2.444-.048-3.297c-.038-.851-.154-1.345-.359-1.768a3.515 3.515 0 0 0-.867-1.265 3.515 3.515 0 0 0-1.265-.867c-.423-.205-.917-.321-1.768-.359C10.444.01 10.171 0 8 0zm0 1.466c2.126 0 2.384.008 3.226.046.817.037 1.26.166 1.554.276.391.15.668.33.963.625.295.295.475.572.625.963.11.294.239.737.276 1.554.038.842.046 1.1.046 3.226 0 2.126-.008 2.384-.046 3.226-.037.817-.166 1.26-.276 1.554a2.05 2.05 0 0 1-.625.963c-.295.295-.572.475-.963.625-.294.11-.737.239-1.554.276-.842.038-1.1.046-3.226.046-2.126 0-2.384-.008-3.226-.046-.817-.037-1.26-.166-1.554-.276a2.05 2.05 0 0 1-.963-.625 2.05 2.05 0 0 1-.625-.963c-.11-.294-.239-.737-.276-1.554C1.474 10.384 1.466 10.126 1.466 8c0-2.126.008-2.384.046-3.226.037-.817.166-1.26.276-1.554a2.05 2.05 0 0 1 .625-.963 2.05 2.05 0 0 1 .963-.625c.294-.11.737-.239 1.554-.276.842-.038 1.1-.046 3.226-.046zM8 3.899a4.101 4.101 0 1 0 0 8.202 4.101 4.101 0 0 0 0-8.202zm0 1.465a2.636 2.636 0 1 1 0 5.273 2.636 2.636 0 0 1 0-5.273zM12.67 2.941a.957.957 0 1 0 0 1.914.957.957 0 0 0 0-1.914z"/></svg></a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <button id="next-btn" class="next-btn">→</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const teamContainer = document.querySelector('.team-container');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');

            let scrollPosition = 0;
            const teamMemberWidth = teamContainer.querySelector('.team-member').offsetWidth + 20; // Including gap

            prevBtn.addEventListener('click', function () {
                scrollPosition -= teamMemberWidth;
                if (scrollPosition < 0) scrollPosition = 0;
                teamContainer.style.transform = `translateX(-${scrollPosition}px)`;
            });

            nextBtn.addEventListener('click', function () {
                const maxScroll = teamContainer.scrollWidth - teamContainer.clientWidth;
                scrollPosition += teamMemberWidth;
                if (scrollPosition > maxScroll) scrollPosition = maxScroll;
                teamContainer.style.transform = `translateX(-${scrollPosition}px)`;
            });
        });
    </script>
            <!-- Team End -->

        <!-- about 1 -->
        <div class="mil-about mil-p-100-0">

        </div>
        <!-- about 1 end -->

<?php get_footer(); ?>