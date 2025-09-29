<?php get_header()
/**
 * Template Name: শিক্ষকবৃন্দের তথ্য
 */
?>

<div class="container bg-white">


    <?php get_template_part('includes/parts/breadcumbs'); ?>


    <div class="row">


        <?php
        $teacher_information = new WP_Query(array(
            'post_type'         =>  'teachers_information',
            'posts_per_page'    =>  20,
            'order'             =>  'ASC'
        ));
        while ($teacher_information->have_posts()): $teacher_information->the_post();
        ?>

            <!-- teachers item -->
            <div class="col-md-3 col-6 mb-md-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('large', array('class' => 'img-fluid'));
                        } else { ?>
                            <img src="https://picsum.photos/290/350" alt="Teacher" class="img-fluid">
                        <?php }
                        ?>

                    </div>
                    <div class="card-body">
                        <h6> নাম : এস এ ফারুক </h6>
                        <h6> পদবি : সহকারী শিক্ষক </h6>
                    </div>
                </div>
            </div>

        <?php endwhile;
        wp_reset_postdata(); ?>



    </div>
</div>



<?php get_footer() ?>