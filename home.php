<?php 
 /**
* Template Name: Home Page
*
*/

    get_header();
?>


    <!-- Home Main banner -->
    <section class="hmb-section" style="background-image: url('<?php the_field('home_page_banner_image'); ?>">
        <div class="container">
            <div class="hmb-main">
                <div class="hmb-content">
                    <h3><?php the_field('home_page_banner_title'); ?></h3>
                    <div class="hmb-btn">
                        <a href="<?php the_field('home_page_banner_first_button'); ?>" class="hmb-start-btn">Get Started <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                        <a href="<?php the_field('home_page_banner_second_button'); ?>" class="hmb-learn-btn">Learn More <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                    </div>
                </div>

                <div class="social-link">
                    <?php if( have_rows('social_media_links','option') ):
                        while( have_rows('social_media_links','option') ) : the_row(); ?>   
                            <a href="<?php the_sub_field('social_link' ,'option'); ?>"><?php the_sub_field('social_icon' ,'option'); ?></a>
                        <?php endwhile;
                    endif; ?>    
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
                    
                    <?php if( have_rows('company_logos') ):
                        while( have_rows('company_logos') ) : the_row(); ?>    

                            <div class="item">
                                <img src="<?php the_sub_field('company_logo_image'); ?>" alt="">
                            </div>

                        <?php endwhile;
                    endif; ?>

                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="aus-section">
        <div class="container">
            <div class="aus-content">
                <div class="aus-img">
                    <img src="<?php the_field('about_us_image'); ?>" alt="">
                    <div class="aus-social-link">
                        <?php if( have_rows('about_social_links') ):
                            while( have_rows('about_social_links') ) : the_row(); ?>   
                                <a href="<?php the_sub_field('about_social_link'); ?>"><?php the_sub_field('about_social_icon'); ?></a>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
                <div class="aus-info">
                    <div class="aus-detail">
                        <h1><?php the_field('about_us_title'); ?></h1>
                        <p class="aus-info-title"><?php the_field('about_us_subtitle'); ?></p>

                        <p><?php the_field('about_us_message'); ?></p>
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
                    <h1><?php the_field('home_service_title'); ?></h1>
                    <p class="svs-subheading"><?php the_field('home_service_subtitle'); ?></p>
                    <p><?php the_field('home_service_description'); ?></p>
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

                                        <a href="<?php echo site_url(); ?>/contact" class="svs-btn">Get A Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                        <?php
                            wp_reset_query();
                        endwhile;
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
                        <h1><?php the_field('home_portfolio_title'); ?></h1>
                        <a href="<?php echo site_url(); ?>/portfolio-page" class="pfs-btn">All Project <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                    </div>
                    <p><?php the_field('home_portfolio_description'); ?></p>
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
                                        <a href="<?php echo get_permalink();?>" class="pfs-item-btn">VIEW PROJECT <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
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

    <!-- Testimonials -->
    <section class="testimonial-section"> 
        <div class="container">
            <div class="testimonial-content">
                <h3 class="text-center">Client Testimonials </h3>

                <div class="owl-carousel owl-theme">

                    <?php if( have_rows('client_reviews', 21) ):
                        while( have_rows('client_reviews', 21) ) : the_row(); ?>

                            <div class="item">
                                <p><?php the_sub_field('client_message' , 21); ?></p>
                                <img src="<?php the_sub_field('client_image' , 21); ?>" alt="">
                                <p class="aut-name"><?php the_sub_field('client_name' , 21); ?></p>
                                <p class="aut-info"><?php the_sub_field('client_information' , 21); ?></p>
                            </div>

                        <?php endwhile;
                    endif; ?>

                </div>

            </div>
        </div>
    </section>


<?php get_footer(); ?>
