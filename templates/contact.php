<?php 

/**
* Template Name: Contact Page
*
*/

    get_header();
?>

    <!-- Site Inner Pages Banner -->
    <section class="sip-section" style="background-image:url('<?php the_field('contact_banner_image'); ?>')">
        <div class="container">
            <div class="sip-content">
                <h2><?php the_field('contact_banner_title'); ?></h2>

                
                <div class="hmb-copyright">
                    <p>© 2020 Refferral PRO.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Links section -->
    <section class="cls-section">
        <div class="container">
            <div class="cls-content">
                <div class="cls-box">
                    <div class="cls-box-img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-mail.svg" alt="">
                    </div>
                    <div class="cls-box-info">
                        <h4>Email</h4>
                        <a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a>
                    </div>
                </div>
                <div class="cls-box">
                    <div class="cls-box-img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-phone.svg" alt="">
                    </div>
                    <div class="cls-box-info">
                        <h4>Phone</h4>
                        <a href="tel:<?php the_field('phone_number'); ?>"><?php the_field('phone_number'); ?></a>
                    </div>
                </div>
                <div class="cls-box">
                    <div class="cls-box-img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-mark.svg" alt="">
                    </div>
                    <div class="cls-box-info">
                        <h4>Address</h4>
                        <a><?php the_field('address'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form  -->
    <section class="cfs-section">
        <div class="container">
            <div class="cfs-content">
                <h5 class="text-center">Need A Quote? Have A General Question? Get In Touch!</h5>

                <?php echo do_shortcode('[contact-form-7 id="267" title="Contact Page Form"]'); ?>

            </div>
        </div>
    </section>

    <!-- Frequently Asked Question -->
    <section class="faq-section">
        <div class="container">
            
            <div class="faq-content">
            <h5 class="mb-4">Frequently Asked Question</h5>
            <div id="accordion">

                <?php if( have_rows('faq_questions') ):
                    while( have_rows('faq_questions') ) : the_row(); ?> 
                        <div class="card">
                            <div class="card-header" id="heading<?php echo get_row_index(); ?>">
                                <button class="btn btn-link faq-btn collapsed" data-toggle="collapse" data-target="#q<?php echo get_row_index(); ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <?php the_sub_field('question'); ?>
                                </button>
                            </div>

                            <div id="q<?php echo get_row_index(); ?>" class="collapse" aria-labelledby="heading<?php echo get_row_index(); ?>" data-parent="#accordion">
                                <div class="card-body">
                                <?php the_sub_field('answer'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                endif; ?>

            </div>

            </div>
        </div>
    </section>



<?php get_footer(); ?>