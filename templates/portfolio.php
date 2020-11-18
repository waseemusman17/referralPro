<?php 

/**
* Template Name: Portfolio Page
*
*/

    get_header();
?>


    <!-- Site Inner Pages Banner -->
    <section class="sip-section" style="background-image:url('<?php the_field('portfolio_banner_image'); ?>')">
        <div class="container">
            <div class="sip-content">
                <h2><?php the_field('portfolio_banner_text'); ?></h2>

                <div class="scroll-down-center">
                    <a href="javascript:void(0)"><img src="http://localhost/referral/wp-content/themes/referralPro/assets/img/scroll-center.svg" alt=""></a>
                </div>
                <div class="hmb-copyright">
                    <p>© 2020 Refferral PRO.</p>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Portfolio -->
    <section class="pfs-section scrollDiv">
        <div class="container">
            <div class="pfs-content">           

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
                                        <a href="<?php echo get_permalink();?>" class="port-btn"><img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-up.svg" alt=""> Visit Website</a>
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

    <!-- Website Portfolio Section -->
    <section class="wps-section">
        <div class="container">
            <div class="wps-content">
                <h4 class="text-center my-5">WEBSITES</h4>

                <div class="row">

                    <?php $the_query = new WP_Query(array(
                            'post_type' => 'portfolio',
                            'project_category' => 'websites',
                            'order' => 'ASC'
                        ));
                    ?>
                    
                    <?php if ( $the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <div class="col-lg-4 mb-4">
                                <div class="port-img">
                                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                                    <div class="port-img-overlay">
                                        <a href="<?php echo get_permalink();?>" class="view-project"><span>View Project</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                    
                        <?php endwhile; ?>
                    <?php endif; ?>

                      
                </div>

                <a href="<?php echo site_url();?>/website-portfolio" class="view-all">View All</a>
            </div>
        </div>
    </section>

    <!-- Website Portfolio Section -->
    <section class="wps-section">
        <div class="container">
            <div class="wps-content">
                <h4 class="text-center my-5">FLYERS</h4>

                <div class="row">

                    <?php $the_query = new WP_Query(array(
                            'post_type' => 'portfolio',
                            'project_category' => 'flyers',
                            'order' => 'ASC',
                            'posts_per_page' => 2 
                        ));
                    ?>
                    
                    <?php if ( $the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <div class="col-lg-4 mb-4">
                                <div class="port-img">
                                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                                    <div class="port-img-overlay">
                                        <a href="<?php echo get_permalink();?>" class="view-project"><span>View Project</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                    
                </div>
                <a href="<?php echo site_url();?>/design-portfolio" class="view-all">View All</a>
            </div>
        </div>
    </section>



<?php 
    get_footer();
?>