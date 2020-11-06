<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <!-- Site Inner Pages Banner -->
        <section class="sip-section" style="background-image:url('<?php the_post_thumbnail_url();?>')">
            <div class="container">
                <div class="sip-content">
                    <h2><?php the_title(); ?></h2>

                    <div class="scroll-down-center">
                        <a href="javascript:void(0)"><img src="http://localhost/referral/wp-content/themes/referralPro/assets/img/scroll-center.svg" alt=""></a>
                    </div>
                    <div class="hmb-copyright">
                        <p>© 2020 Refferral PRO.</p>
                    </div>
                </div>
                
            </div>
        </section>

        <!-- Post Details Content -->
        <section class="pdc-section">
            <div class="container">
                <div class="pdc-content">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <?php the_field('service_content_left');?>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <?php the_field('service_content_left');?>
                        </div>
                    </div>

                    <div class="cci-info">
                        <div class="row">
                            <div class="col-md-10 col-sm-12">
                                <h6 class="my-4"><?php the_field('service_content_list_heading');?></h6>
                                <ul>
                                    <li>How to get referrals from out-of-network providers</li>
                                    <li>Getting past the gatekeepers</li>
                                    <li>Engaging your team in outreach efforts</li>
                                    <li>Identifying and implementing effective marketing strategies</li>
                                    <li>Gain valuable insight and feedback from external referral sources</li>
                                    <li>Tracking referral marketing progress (ROI)</li>
                                </ul>

                                <a href="" class="quote-btn">Get A Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>  
        </section>

        
    <?php endwhile; ?>

<?php get_footer(); ?>