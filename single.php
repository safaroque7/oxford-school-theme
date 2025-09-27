<?php 
    get_header();
    /**
     * Template Name: Template Single
     */
?>

    <!-- body start -->
    <div class="container bg-light py-3 pb-3">
        <div class="row pb-5">
            <div class="col-lg-8">
                <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                ?>

                    <div class="page-img mb-3">
                        <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                    </div>
                    <div class="page-content border-bottom border-2 border-info mb-3">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="notice-text">
                        <p class="mb-0"><?php the_content(); ?></p>
                    </div>

                <?php   
                    endwhile; endif;
                ?>
            </div>
            <div class="col-lg-4">
                <div class="top-content position-sticky" style="top : 1rem;">
                    <?php get_template_part('parts/notice') ?>
                </div>
            </div>
        </div>

         <?php get_template_part('parts/gallery') ?>
    </div>
    <!-- body end -->

<?php get_footer(); ?>