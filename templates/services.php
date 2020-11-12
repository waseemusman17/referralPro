<?php 

/**
* Template Name: Services Page
*
*/

    get_header();
?>

    <!-- Site Inner Pages Banner -->
    <section class="sip-section" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/img/service-banner.png')">
        <div class="container">
            <div class="sip-content">
                <h2>Services</h2>

                <div class="scroll-down-center">
                    <a href="javascript:void(0)"><img src="http://localhost/referral/wp-content/themes/referralPro/assets/img/scroll-center.svg" alt=""></a>
                </div>
                <div class="hmb-copyright">
                    <p>© 2020 Refferral PRO.</p>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Service Post Section -->
    <section class="spt-section scrollDiv">
        <div class="container">
            <div class="spt-content">
                <p class="spt-title">Referralpro Has Helped Businesses Across The U.S. Generate Steady And Proﬁtable Referrals With Result-Driven Marketing Strategies, Captivating Website Designs, Social Media, And More.</p>
            
                <div class="spt-post">
                    
                    <?php $the_query = new WP_Query(array(
                        'post_type' => 'Services',
                        'order' => 'asc',
                    ));
                    ?>

                    <?php if ( $the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            
                            <div class="spt-post-box">
                                <div class="spt-box-info">
                                    <h4><?php the_title(); ?></h4>
                                    <p class="py-4"><?php the_excerpt(); ?></p>
                                    <div class="spt-box-btn">
                                        <a href="" class="quote-btn">Get A Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                                        <a href="<?php echo get_permalink();?>" class="read-btn">Read More <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                                    </div>
                                </div>
                                <div class="spt-box-img">
                                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            
            </div>
        </div>
    </section>

    <!-- Connect.Retain.Grow. -->
    <section class="crg-section">
        <div class="container">
            <div class="crg-content">
                <div class="crg-title">
                    <h2>Connect.Retain.<span class="green">Grow.</span></h2>
                    <a href="" class="crg-btn">View Portfolio <img src="http://localhost/referral/wp-content/themes/referralPro/assets/img/btn-arrow.svg" alt=""></a>
                </div>
                <div class="crg-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/crg-banner.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Other Packages -->
    <section class="ops-section">
        <div class="container">
            <h2 class="text-center">Other Packages</h2>
            <div class="ops-content">
                <div class="ops-box">
                    <h6>Marketing Collateral Design Packages</h6>
                    <p>We can create ready-to-use brand-consistent marketing material templates that will streamline your content creation process. We can create templates for:  social media posts, eNewsletters, brochures, announcements and more.</p>
                    <div class="ops-box-btn">
                        <a href="" class="quote-btn">Get A Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                        <a href="" class="pricing-varies">Pricing Varies</a>
                    </div>
                </div>
                <div class="ops-box">
                    <h6>Marketing Collateral Design Packages</h6>
                    <p>We can create ready-to-use brand-consistent marketing material templates that will streamline your content creation process. We can create templates for:  social media posts, eNewsletters, brochures, announcements and more.</p>
                    <div class="ops-box-btn">
                        <a href="" class="quote-btn">Get A Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                        <a href="" class="pricing-varies">Pricing Varies</a>
                    </div>
                </div>
                <div class="ops-box">
                    <h6>Marketing Collateral Design Packages</h6>
                    <p>We can create ready-to-use brand-consistent marketing material templates that will streamline your content creation process. We can create templates for:  social media posts, eNewsletters, brochures, announcements and more.</p>
                    <div class="ops-box-btn">
                        <a href="" class="quote-btn">Get A Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                        <a href="" class="pricing-varies">Pricing Varies</a>
                    </div>
                </div>
                <div class="ops-box">
                    <h6>Marketing Collateral Design Packages</h6>
                    <p>We can create ready-to-use brand-consistent marketing material templates that will streamline your content creation process. We can create templates for:  social media posts, eNewsletters, brochures, announcements and more.</p>
                    <div class="ops-box-btn">
                        <a href="" class="quote-btn">Get A Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                        <a href="" class="pricing-varies">Pricing Varies</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>