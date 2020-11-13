    <footer class="site-footer">
        <div class="footer-left">
            <div class="footer-logo">
                <img src="<?php the_field('footer_logo', 'option'); ?>" alt="">
            </div>
            <p class="my-4"><?php the_field('footer_description', 'option'); ?></p>

            <div class="footer-contact">
                <h6><?php the_field('footer_contact_title', 'option'); ?></h6>
                <p class="my-1"><?php the_field('footer_contact_description', 'option'); ?></p>
                
                <div class="contact-links d-flex my-5">
                    <span>
                        Call Now!
                        <a class="d-block" href="tel:<?php the_field('footer_contact_number', 'option'); ?>"><?php the_field('footer_contact_number', 'option'); ?></a>
                    </span>
                    <span>
                        Email Us Now!
                        <a class="d-block" href="mailto:<?php the_field('footer_contact_email', 'option'); ?>"><?php the_field('footer_contact_email', 'option'); ?></a>
                    </span>
                </div>

                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'header-menu', 
                        'container_class' => 'footer-menu' ) ); 
                ?>


                <div class="footer-social d-flex mt-5">
                    <p>Follow Us </p>
                    <img class="mx-4" src="<?php echo get_template_directory_uri();?>/assets/img/footer-line.svg" alt="">
                    <div class="footer-icons d-flex">
                        <?php if( have_rows('social_media_links','option') ):
                            while( have_rows('social_media_links','option') ) : the_row(); ?>   
                                <a href="<?php the_sub_field('social_link' ,'option'); ?>"><?php the_sub_field('social_icon' ,'option'); ?></a>
                            <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>

            
        </div>
        <div class="footer-right">
            <h5>Ready to Start a Project?</h5>
            <p>We’d love to hear from you!</p>

            <!-- <form action="" class="mt-5">
                <div class="form-row">
                    <div class="form-group col-md-6 pr-3">
                        <input type="text" class="form-control" placeholder="Name *" required>
                        [text* Name class:form-control placeholder "Name *"]
                    </div>
                    <div class="form-group col-md-6 pl-3">
                        <input type="email" class="form-control" placeholder="Email Address *" required>
                        [email* email-756 class:form-control placeholder "Email Address *"]
                    </div>
                </div>
                <div class="form-row my-3">
                    <div class="form-group col-md-6 pr-3">
                        <input type="text" class="form-control" placeholder="Phone No. *" required>
                        [tel* tel-64 class:form-control placeholder "Phone No. *"]
                        
                    </div>
                    <div class="form-group col-md-6 pl-3">
                        <input type="text" class="form-control" placeholder="Website URL *" required>
                        [url* url-347 class:form-control placeholder "Website URL *"]
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control"  placeholder="Message *" rows="7" required></textarea>
                    [textarea* textarea-729 class:form-control placeholder "Message *"]
                </div>

                <div class="footer-form-btn">
                    <button type="submit" class="f-form-btn">Submit Now <img src="./assets/img/btn-arrow.svg" alt=""></button>
                    [submit class:f-form-btn "Submit Now"]
                </div>

            </form> -->

            <?php echo do_shortcode('[contact-form-7 id="204" title="Footer Contact Form"]'); ?>
            
        </div>
    </footer>

    <div class="copyright">
        <div class="copyright-content d-flex justify-content-between py-2 align-items-center">
            <p><?php the_field('copyright_text', 'option'); ?></p>
            <?php
                wp_nav_menu( array( 
                    'theme_location' => 'extra-menu' ) 
                ); 
            ?>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://gijsroge.github.io/owl-carousel2-thumbs/assets/OwlCarousel2Thumbs.min.js"></script>

    <script src="<?php echo get_template_directory_uri();?>/assets/js/custom.js"></script>

</body>
<?php wp_footer(); ?>
</html>