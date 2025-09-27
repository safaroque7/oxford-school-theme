<?php get_header()
    /**
     * Template Name: Template School History
    */
?>
    <!-- body start -->
    <div class="container bg-light py-3">
        <div class="committee-banner">
            <div class="text-center py-5 text-light banner-text">
                <h1>বিদ্যালয়ের ইতিহাস</h1>
            </div>
        </div>
        <section class="banner-section">
            <div class="row py-3">
                <div class="col-lg-8 mb-3">
                    <div class="row">
                        <?php
                            $history = new WP_Query(array(
                                'post_type'         =>  'institute_history',
                                'order'             => 'DESC'
                            ));
                            while ($history->have_posts()): $history->the_post();
                        ?>
                            <div class="col-12">
                                <div class="page-img mb-3">
                                    <?php the_post_thumbnail('large', array('class' => 'img-fluid w-100')); ?>
                                </div>
                                <div class="page-content border-bottom border-2 border-info mb-3">
                                    <h1>বিদ্যালয়ের ইতিহাস</h1>
                                </div>
                                <div class="notice-text">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div class="col-lg-4">
                   <div  class="top-content position-sticky" style="top: 1rem;">
                        <?php 
                            //gallery part
                            get_template_part('parts/notice');
                        ?>
                   </div>
                </div>
            </div>
        </section>

        <?php 
            //gallery part
            get_template_part('parts/gallery');
        ?>
    </div>
    <!-- body end -->

<?php get_footer()?>