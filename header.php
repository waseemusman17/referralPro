<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo(); ?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/all.css">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >

<header class="site-header">
        <div class="container">
            <div class="header-row">
                <div class="site-log">
                    <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt=""></a>
                </div>
                <div class="site-menu">
                    <nav>
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'header-menu' ) ); 
                    ?>
                    </nav>
                    <div class="contact-us-link">
                        <a href="">Contact Us <img src="<?php echo get_template_directory_uri();?>/assets/img/btn-arrow.svg" alt=""></a>
                    </div>
                    <div class="nav-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

            </div>
        </div>
    </header>