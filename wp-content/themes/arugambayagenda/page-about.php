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
    .team-section {
        text-align: center;
    }

    .team-section h2 {
        font-size: 2.5em;
        margin-bottom: 20px;
    }

    .team-section .highlight {
        color: #00a0d2;
    }

    .team-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .team-member {
        background-color: rgb(250, 255, 255);
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin: 10px;
        flex: 1 1 300px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 25px rgba(75, 135, 175, 0.2);
    }

    .team-member img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
        transition: transform 0.3s;
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

    @media (max-width: 768px) {
        .team-member {
            flex: 1 1 100%;
        }
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

    /* General container styles */
.carousel-container {
    overflow: hidden;
    position: relative;
    max-width: 100%;
    margin: 0 auto;
}

/* Team container styles */
.team-container {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: max-content;
}

/* Individual team member styles */
.team-member {
    flex: 0 0 auto;
    text-align: center;
    padding: 10px;
    margin: 0 5px;
}

/* Team member image styles */
.team-member img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 10px;
    transition: transform 0.3s;
    loading: lazy; /* Lazy loading attribute */
}

/* Button styles */
#prev-btn, #next-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 160, 210, 0.8);
    border: none;
    color: white;
    padding: 10px;
    cursor: pointer;
    z-index: 10;
}

#prev-btn {
    left: 10px;
}

#next-btn {
    right: 10px;
}

#prev-btn:hover, #next-btn:hover {
    background-color: rgba(0, 160, 210, 1);
}

/* Responsive styles for touch devices */
@media (max-width: 1200px) {
    .team-container {
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
    }

    .team-member {
        scroll-snap-align: start;
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
            <div class="mil-flexbox-custom">
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
                                <img src="<?php echo $attachment_image; ?>" alt="<?php echo esc_attr($thumbnail_meta); ?>">
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
                                <a href="<?php echo get_field('favebook_link'); ?>" target="_blank">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                    </svg>
                                </a>
                                <a href="<?php echo get_field('twiter_link'); ?>" target="_blank">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                                    </svg>
                                </a>
                                <a href="<?php echo get_field('instagram_link'); ?>" target="_blank">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8c0-2.174-.01-2.446-.048-3.3-.04-.851-.174-1.433-.372-1.943a3.9 3.9 0 0 0-.923-1.416 3.9 3.9 0 0 0-1.416-.923C10.435.223 9.851.088 9 .048 8.446.01 8.173 0 8 0zM8 1.454c2.135 0 2.387.008 3.233.047.78.036 1.204.166 1.486.275.374.145.641.319.923.601.283.283.457.549.602.923.108.282.239.706.274 1.486.04.845.048 1.097.048 3.233 0 2.136-.008 2.388-.048 3.234-.035.779-.166 1.203-.274 1.485a2.48 2.48 0 0 1-.601.924 2.48 2.48 0 0 1-.924.6c-.281.109-.705.24-1.485.275-.846.039-1.098.047-3.234.047-2.136 0-2.388-.008-3.233-.047-.78-.035-1.204-.166-1.486-.275a2.48 2.48 0 0 1-.923-.601 2.48 2.48 0 0 1-.602-.924c-.108-.282-.239-.706-.274-1.485C1.462 10.387 1.454 10.135 1.454 8c0-2.136.008-2.388.048-3.234.035-.779.166-1.203.274-1.485.145-.374.319-.641.602-.923.283-.283.549-.457.923-.602.282-.108.706-.239 1.486-.274C5.613 1.462 5.865 1.454 8 1.454zM8 3.89a4.11 4.11 0 1 0 0 8.22 4.11 4.11 0 0 0 0-8.22zm0 1.454a2.656 2.656 0 1 1 0 5.31 2.656 2.656 0 0 1 0-5.31zm5.13-.731a.958.958 0 1 0-.001 1.915.958.958 0 0 0 0-1.915z"/>
                                    </svg>
                                </a>
                                <a href="<?php echo get_field('linkedin_link'); ?>" target="_blank">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M22.23 0H1.77C.79 0 0 .772 0 1.723v20.554C0 23.228.79 24 1.77 24h20.46C23.21 24 24 23.228 24 22.277V1.723C24 .772 23.21 0 22.23 0zM7.12 20.452H3.56V9.032h3.56v11.42zM5.34 7.537h-.02c-1.19 0-1.96-.826-1.96-1.856 0-1.05.79-1.856 2.01-1.856 1.22 0 1.96.806 1.98 1.856 0 1.03-.77 1.856-2.01 1.856zm14.35 12.915h-3.56v-5.97c0-1.5-.54-2.53-1.88-2.53-.99 0-1.57.662-1.83 1.3-.1.24-.13.57-.13.91v6.29h-3.55s.05-10.21 0-11.42h3.55v1.61c.47-.73 1.31-1.77 3.19-1.77 2.34 0 4.09 1.53 4.09 4.83v6.75z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else : ?>
                    <p><?php esc_html_e('No team members found.'); ?></p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const teamContainer = document.querySelector('.team-container');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    let scrollAmount = 0;

    const scrollTo = (direction) => {
        const containerWidth = teamContainer.offsetWidth;
        if (direction === 'next') {
            scrollAmount += containerWidth;
            if (scrollAmount > teamContainer.scrollWidth - containerWidth) {
                scrollAmount = 0; // Reset to start
            }
        } else {
            scrollAmount -= containerWidth;
            if (scrollAmount < 0) {
                scrollAmount = teamContainer.scrollWidth - containerWidth; // Reset to end
            }
        }
        teamContainer.style.transform = `translateX(-${scrollAmount}px)`;
    };

    nextBtn.addEventListener('click', () => scrollTo('next'));
    prevBtn.addEventListener('click', () => scrollTo('prev'));

    // Touch support for swipe
    let touchStartX = 0;

    teamContainer.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].clientX;
    });

    teamContainer.addEventListener('touchend', (e) => {
        const touchEndX = e.changedTouches[0].clientX;
        if (touchStartX > touchEndX + 50) {
            scrollTo('next');
        } else if (touchStartX < touchEndX - 50) {
            scrollTo('prev');
        }
    });
});

</script>
<!-- End of Team -->

        <!-- about 1 -->
        <div class="mil-about mil-p-100-0">

        </div>
        <!-- about 1 end -->

<?php get_footer(); ?>