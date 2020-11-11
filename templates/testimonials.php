<?php 

/**
* Template Name: Testimonials Page
*
*/

    get_header();
?>

    <!-- Site Inner Pages Banner -->
    <section class="sip-section" style="background-image:url('<?php the_field('testimonial_main_banner_image'); ?>')">
        <div class="container">
            <div class="sip-content">
                <h2><?php the_field('testimonial_banner_text'); ?></h2>
            </div>
            
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="tss-section scrollDiv">
        <div class="container">
            <div class="tss-content">
                <h6 class="text-center"><?php the_field('client_review_title'); ?></h6>

                <div class="row">
                
                    <?php if( have_rows('client_reviews') ):
                        while( have_rows('client_reviews') ) : the_row(); ?>
                    
                            <div class="col-12 review-box">
                                <div class="client-img">
                                    <img src="<?php the_sub_field('client_image'); ?>" alt="">
                                </div>
                                <div class="client-review-section">
                                    <p class="client-review"><?php the_sub_field('client_message'); ?></p>
                                    <p class="client-name"><?php the_sub_field('client_name'); ?></p>
                                    <p class="client-info"><?php the_sub_field('client_information'); ?></p>
                                </div>
                            </div>

                        <?php endwhile;
                    endif; ?>

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>