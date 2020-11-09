<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <!-- portfolio Detail banner -->
        <section class="pdb-section">
            <div class="container">
                <div class="pdb-content">

                    <div class="row align-items-center">
                        <div class="col-lg-6 pdb-info">
                            <h4>Medical Device Website Design</h4>
                            <p>Steady and proﬁtable referral traffic requires more than quality health care. Even if the most highly reputed specialists take a passive approach to referral marketing, they often struggle to maintain a viable level of incoming referrals.</p>
                            <a href="" class="port-btn"><img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-up.svg" alt=""> Visit Website</a>
                        </div>
                        <div class="col-lg-6 pdb-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/p1.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Deatils Content  -->
        <section class="dcs-section">
            <div class="container">
                <div class="dcs-content">

                    <div class="row">
                        <div class="col-lg-6">
                            <p>Nulla eleifend pulvinar purus, molestie euismod odio imperdiet ac. Ut sit amet erat nec nibh rhoncus varius in non lorem. Donec interdum, lectus in convallis pulvinar, enim elit porta sapien, vel finibus erat felis sed neque. Etiam aliquet neque sagittis erat tincidunt aliquam. Vestibulum at neque hendrerit, mollis dolor at, blandit justo. Integer ac interdum purus. In placerat lorem non quam pulvinar molestie ac eget lacus. Proin mollis lobortis porttitor. Nam in fringilla felis. Nunc non magna maximus, pulvinar justo ut, pulvinar lacus. </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Nulla eleifend pulvinar purus, molestie euismod odio imperdiet ac. Ut sit amet erat nec nibh rhoncus varius in non lorem. Donec interdum, lectus in convallis pulvinar, enim elit porta sapien, vel finibus erat felis sed neque. Etiam aliquet neque sagittis erat tincidunt aliquam. </p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Portfolio Main Image -->
        <section class="pmi-section">
            <div class="container">
                <div class="pmi-content" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-back.png')">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-1.png" alt="">
                </div>
            </div>
        </section>

        <!-- Portfolio Bottom details -->
        <section class="pbd-section">
            <div class="container">
                <div class="pbd-content">
                    <h5 class="text-center">Nulla eleifend pulvinar purus, molestie euismod odio imperdiet ac. Ut sit amet erat nec nibh rhoncus varius in non lorem. </h5>
                    <div class="row align-items-center">
                        <div class="col-lg-6 pbd-info">
                            <h6>Nulla eleifend pulvinar purus, molestie euismod odio imperdiet ac.</h6>
                            <p>Nulla eleifend pulvinar purus, molestie euismod odio imperdiet ac. Ut sit amet erat nec nibh rhoncus varius in non lorem. Donec interdum, lectus in convallis pulvinar, enim elit porta sapien, vel finibus erat felis sed neque. Etiam aliquet neque sagittis erat tincidunt aliquam. </p>
                        </div>
                        <div class="col-lg-6 pbd-img">
                            <div class="pmi-content" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-back.png')">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php get_footer(); ?>