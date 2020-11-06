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

    <!-- Contact Form  -->
    <section class="cfs-section">
        <div class="container">
            <div class="cfs-content">
                <h5 class="text-center">Need A Quote? Have A General Question? Get In Touch!</h5>
                <form action="" class="cfs-form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Name *">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" placeholder="Email *" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="number" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Website">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="Enter Your Message"></textarea>
                    </div>

                    <div class="submit-btn">
                        <button class="cfs-form-btn" type="submit">Submit Now <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn-arrow.svg" alt=""></button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Question -->
    <section class="faq-section">
        <div class="container">
            
            <div class="faq-content">
            <h5 class="mb-4">Frequently Asked Question</h5>
            <div id="accordion">

                <div class="card">
                    <div class="card-header" id="heading1">
                        <button class="btn btn-link faq-btn" data-toggle="collapse" data-target="#q1" aria-expanded="true" aria-controls="collapseOne">
                            Vivamus suscipit tortor eget felis?
                        </button>
                    </div>

                    <div id="q1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                        <div class="card-body">
                            Your content goes here. Edit or remove this text inline or in the module Content settings. You can also style every aspect of this content in the module Design settings and even apply custom CSS to this text in the module Advanced settings.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading2">
                        <button class="btn btn-link faq-btn collapsed" data-toggle="collapse" data-target="#q2" aria-expanded="true" aria-controls="collapseOne">
                            Donec rutrum congue leo eget malesuada?
                        </button>
                    </div>

                    <div id="q2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Your content goes here. Edit or remove this text inline or in the module Content settings. You can also style every aspect of this content in the module Design settings and even apply custom CSS to this text in the module Advanced settings.
                        </div>
                    </div>
                </div>

            </div>

            </div>
        </div>
    </section>



<?php get_footer(); ?>