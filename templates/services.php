<?php 

/**
* Template Name: Services Page
*
*/

    get_header();
?>

    <!-- Site Inner Pages Banner -->
    <section class="sip-section" style="background-image:url('<?php the_field('service_banner_image'); ?>')">
        <div class="container">
            <div class="sip-content">
                <h2><?php the_field('service_banner_text'); ?></h2>

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
                <p class="spt-title"><?php the_field('all_service_heading'); ?></p>
            
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
                                        <a href="<?php echo site_url(); ?>/contact" class="quote-btn">Get A Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                                        <a href="<?php echo get_permalink();?>" class="read-btn">Read More <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                                    </div>
                                </div>
                                <div class="spt-box-img">
                                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                                </div>
                            </div>

                        <?php 
                            wp_reset_query();
                        endwhile; ?>
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
                    <h2><?php the_field('crg_heading'); ?></h2>
                    <a href="<?php the_field('crg_button_link'); ?>" class="crg-btn">View Portfolio <img src="http://localhost/referral/wp-content/themes/referralPro/assets/img/btn-arrow.svg" alt=""></a>
                </div>
                <div class="crg-img">
                    <img src="<?php the_field('crg_image'); ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Other Packages -->
    <section class="ops-section">
        <div class="container">
            <h2 class="text-center"><?php the_field('other_package_title'); ?></h2>
            <div class="ops-content">

                <?php if( have_rows('other_package_box') ):
                    while( have_rows('other_package_box') ) : the_row(); ?> 
                        <div class="ops-box">
                            <h6><?php the_sub_field('other_package_heading'); ?></h6>
                            <p><?php the_sub_field('other_package_description'); ?></p>
                            <div class="ops-box-btn">
                                <a href="<?php the_sub_field('other_package_quote_link'); ?>" class="quote-btn">Get A Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                                <a href="<?php the_sub_field('other_package_price_link'); ?>" class="pricing-varies">Pricing Varies</a>
                            </div>
                        </div>
                    <?php endwhile;
                endif; ?>

            </div>
        </div>
    </section>

<?php get_footer(); ?>