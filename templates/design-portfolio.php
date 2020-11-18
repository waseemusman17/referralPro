<?php 

/**
* Template Name: Design Portfolio
*
*/

    get_header();
?>

     <!-- Website Portfolio Section -->
     <section class="wps-section">
        <div class="container">
            <div class="wps-content">
                <h4 class="text-center my-5">FLYERS</h4>

                <div class="row">

                    <?php $the_query = new WP_Query(array(
                            'post_type' => 'portfolio',
                            'project_category' => 'flyers',
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
            </div>
        </div>
    </section>

<?php 
    get_footer();
?>