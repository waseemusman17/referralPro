    <footer class="site-footer">
        <div class="footer-left">
            <div class="footer-logo">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="">
            </div>
            <p class="my-4">Kelsey started her own company nearly three years ago. Before ReferralPRO, she spent 5+ years in the medical field. Her experience as a patient care.</p>

            <div class="footer-contact">
                <h6><span class="green">Take Advantage</span> Of Expert Knowledge</h6>
                <p class="my-1">Feel free to get in touch with us via email or phone</p>
                
                <div class="contact-links d-flex my-5">
                    <span>
                        Call Now!
                        <a class="d-block" href="tel:(852)112-8455">(852)112-8455</a>
                    </span>
                    <span>
                        Email Us Now!
                        <a class="d-block" href="mailto:alex.reid@mail.com">alex.reid@mail.com</a>
                    </span>
                </div>

                <!-- <ul class="footer-menu">
                    <li><a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/green-arrow.svg" alt=""> Service</a></li>
                    <li><a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/green-arrow.svg" alt=""> Portfolio</a></li>
                    <li><a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/green-arrow.svg" alt=""> Testimonials</a></li>
                    <li><a href=""><img src="<?php echo get_template_directory_uri();?>/assets/img/green-arrow.svg" alt=""> Careers</a></li>
                </ul> -->
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'header-menu', 
                        'container_class' => 'footer-menu' ) ); 
                ?>


                <div class="footer-social d-flex mt-5">
                    <p>Follow Us </p>
                    <img class="mx-4" src="<?php echo get_template_directory_uri();?>/assets/img/footer-line.svg" alt="">
                    <div class="footer-icons d-flex">
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            
        </div>
        <div class="footer-right">
            <h5>Ready to Start a Project?</h5>
            <p>We’d love to hear from you!</p>

            <form action="" class="mt-5">
                <div class="form-row">
                    <div class="form-group col-md-6 pr-3">
                        <input type="text" class="form-control" placeholder="Name *" required>
                    </div>
                    <div class="form-group col-md-6 pl-3">
                        <input type="email" class="form-control" placeholder="Email Address *" required>
                    </div>
                </div>
                <div class="form-row my-3">
                    <div class="form-group col-md-6 pr-3">
                        <input type="text" class="form-control" placeholder="Phone No. *" required>
                    </div>
                    <div class="form-group col-md-6 pl-3">
                        <input type="email" class="form-control" placeholder="Website URL *" required>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control"  placeholder="Message *" rows="7" required></textarea>
                </div>

                <div class="footer-form-btn">
                    <button type="submit" class="f-form-btn">Submit Now <img src="./assets/img/btn-arrow.svg" alt=""></button>
                </div>

            </form>
        </div>
    </footer>

    <div class="copyright">
        <div class="container">
            <div class="copyright-content d-flex justify-content-between py-3 align-items-center">
                <p>Referral Pro 2020. All rights reserved.</p>
                <ul class="d-flex">
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms of Use</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="<?php echo get_template_directory_uri();?>/assets/js/custom.js"></script>

</body>
</html>