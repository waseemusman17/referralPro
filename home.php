<?php 
 /**
* Template Name: Home Page
*
*/

    get_header();
?>


    <!-- Home Main banner -->
    <section class="hmb-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/main-banner.png');">
        <div class="container">
            <div class="hmb-main">
                <div class="hmb-content">
                    <h3>Building Connections Through Creative Marketing</h3>
                    <div class="hmb-btn">
                        <a href="" class="hmb-start-btn">Get Started <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                        <a href="" class="hmb-learn-btn">Learn More <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                    </div>
                </div>

                <div class="social-link">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>

                <div class="scroll-down">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/scroll.svg" alt=""></a>
                </div>

                <div class="scroll-down-center">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/scroll-center.svg" alt=""></a>
                </div>

                <div class="hmb-copyright">
                    <p>© 2020 Refferral PRO.</p>
                </div>
            </div>
        </div>

    </section>

    <!-- Company's Images Slider -->
    <section class="cis-section scrollDiv">
        <div class="container">
            <div class="cis-content">
                <p class="trusted">Trusted By</p>
                <div class="cis-slider owl-carousel owl-theme">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c4.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/c4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="aus-section">
        <div class="container">
            <div class="aus-content">
                <div class="aus-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.png" alt="">
                    <div class="aus-social-link">
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="aus-info">
                    <div class="aus-detail">
                        <h1>Kelsey Bastian</h1>
                        <p class="aus-info-title">Founder / President of ReferralPRO</p>

                        <p>
                            Kelsey started her own company nearly three years ago. Before ReferralPRO, she spent 5+ years in the medical field. Her experience as a patient care coordinator to a clinical assistant for physicians (and just about everything in-between) has given her valuable insight into clinical operations & internal processes.
                            <br><br>
                            Kelsey’s passion is marketing. She had the opportunity to work with a marketing agency for a year. This helped her to build a diverse skillset in various industries. In 2018, Kelsey launched ReferralPRO. Her knowledge of the medical field and passion for marketing differentiates her from her competitors. She believes in using a research and data-driven approach when making key marketing and business decisions, while still maintaining her creative roots.
                            <br><br>
                            Kelsey is a go-getter. She values the relationships she’s established over the years and feels fortunate to have met and worked with industry leaders in Des Moines, Iowa and across the United States. Kelsey’s goal is to help businesses fuel growth and achieve success.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="svs-section">
        <div class="container">
            <div class="svs-content">
                <div class="svs-title">
                    <h1>Services</h1>
                    <p class="svs-subheading">There Is No “One Size Fits All” Approach To Marketing. </p>
                    <p>We will work with you to develop a customized plan for your long-term or short-term marketing needs. Whether you have a clear vision or need some guidance, ReferralPRO is here to help!</p>
                </div>

                <div class="svs-services">

                    <?php $the_query = new WP_Query(array(
                            'post_type' => 'Services',
                            'order' => 'ASC'
                        ));
                    ?>
                    
                    <?php if ( $the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    
                            <div class="svs-box">
                                <div class="svs-box-content">
                                    <div class="svs-img">
                                        <img src="<?php the_field('service_home_icone'); ?>" alt="">
                                    </div>
                                    <div class="svs-box-info">
                                        <h6><?php the_field('service_home_title'); ?></h6>
                                        <p><?php the_field('service_home_description'); ?></p>

                                        <a href="" class="svs-btn">Get A Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile;
                    endif; ?>

                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section class="pfs-section">
        <div class="container">
            <div class="pfs-content">
                
                <div class="pfs-title">
                    <div class="pfs-title-content">
                        <h1>Portfolio</h1>
                        <a href="" class="pfs-btn">All Project <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                    </div>
                    <p>We will work with you to develop a customized plan for your long-term or short-term marketing needs. Whether you have a clear vision or need some guidance, we’re here to help!</p>
                </div>

                

                <div class="pfs-slider">
                    <div class="owl-carousel owl-theme">

                    <?php $the_query = new WP_Query(array(
                            'post_type' => 'portfolio',
                            'order' => 'ASC'
                        ));
                    ?>
                    
                    <?php if ( $the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <div class="item">
                                <div class="pfs-item">
                                    <div class="pfs-item-img">
                                        <img src="<?php the_field('portfolio_image'); ?>" alt="">
                                    </div>
                                    <div class="pfs-item-info">
                                        <h6><?php the_field('portfolio_title'); ?></h6>
                                        <p><?php the_field('portfolio_description'); ?></p>
                                        <a href="<?php the_field('portfolio_project_link'); ?>" class="pfs-item-btn">VIEW PROJECT <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile;
                    endif; ?>

                    </div>
                </div>

            </div>
        </div>
    </section>



<?php get_footer(); ?>
