<?php 

/**
* Template Name: Contact Page
*
*/

    get_header();
?>

    <!-- Site Inner Pages Banner -->
    <section class="sip-section" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/img/contact-banner.png')">
        <div class="container">
            <div class="sip-content">
                <h2><?php the_title(); ?></h2>

                
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
                        <a href="mailto:info@goreferralpro.com">info@goreferralpro.com</a>
                    </div>
                </div>
                <div class="cls-box">
                    <div class="cls-box-img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-phone.svg" alt="">
                    </div>
                    <div class="cls-box-info">
                        <h4>Phone</h4>
                        <a href="tel:(515) 505-2161">(515) 505-2161</a>
                    </div>
                </div>
                <div class="cls-box">
                    <div class="cls-box-img">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-mark.svg" alt="">
                    </div>
                    <div class="cls-box-info">
                        <h4>Address</h4>
                        <a>BASED IN DES MOINES, IOWA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>





<?php get_footer(); ?>