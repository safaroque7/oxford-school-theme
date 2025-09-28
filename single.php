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
            if (have_posts()) : while (have_posts()) : the_post();
            ?>

                    <div class="page-img mb-3">
                        <?php
                        $thumb_id = get_post_thumbnail_id(get_the_ID());
                        $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('large', array(
                                'class' => 'img-fluid',
                                'alt'   => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                            ));
                        } else { ?>
                            <img src="<?php echo get_template_directory_uri() . '/images/banner-demo-image-856x460.jpg' ?>" alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>">
                        <?php }
                        ?>
                        <span class="py-md-3 py-2 d-block text-secondary">
                            <?php
                            $image_caption = get_field('image_caption');
                            echo $image_caption;
                            ?>
                        </span>

                    </div>
                    <div class="page-content border-bottom border-2 border-info mb-3">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="notice-text">
                        <p class="mb-0"><?php the_content(); ?></p>
                    </div>

            <?php
                endwhile;
            endif;
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