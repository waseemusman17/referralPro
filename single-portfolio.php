<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <!-- portfolio Detail banner -->
        <section class="pdb-section">
            <div class="container">
                <div class="pdb-content">

                    <div class="row align-items-center">
                        <div class="col-lg-6 pdb-info">
                            <h4><?php the_field('portfolio_title'); ?></h4>
                            <p><?php the_field('portfolio_description'); ?></p>
                            <a href="<?php the_field('portfolio_project_link'); ?>" class="port-btn"><img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-up.svg" alt=""> Visit Website</a>
                        </div>
                        <div class="col-lg-6 pdb-img">
                            <img src="<?php the_field('portfolio_image'); ?>" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Deatils Content  -->
        <section class="dcs-section">
            <div class="container">
                <div class="dcs-content">

                    <div class="row">
                        <div class="col-lg-6">
                            <p><?php the_field('portfolio_more_detail_left'); ?></p>
                        </div>
                        <div class="col-lg-6">
                            <p><?php the_field('portfolio_more_detail_right'); ?></p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Portfolio Main Image -->
        <section class="pmi-section">
            <div class="container">
                <div class="pmi-content" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-back.png')">
                    <img src="<?php the_field('portfolio_main_image'); ?>" alt="">
                </div>
            </div>
        </section>

        <!-- Portfolio Bottom details -->
        <section class="pbd-section">
            <div class="container">
                <div class="pbd-content">
                    <h5 class="text-center"><?php the_field('portfolio_bottom_title'); ?></h5>
                    <div class="row align-items-center">
                        <div class="col-lg-6 pbd-info">
                            <h6><?php the_field('portfolio_bottom_inner_title'); ?></h6>
                            <p><?php the_field('portfolio_bottom_description'); ?></p>
                        </div>
                        <div class="col-lg-6 pbd-img">
                            <div class="pmi-content" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/portfolio-back.png')">
                                <img src="<?php the_field('portfolio_bottom_image'); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php get_footer(); ?>