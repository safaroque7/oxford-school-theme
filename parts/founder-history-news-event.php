<div class="container bg-light">
    <!-- history start -->
    <section class="second-section">
        <div class="row py-2">

            <!-- প্রতিষ্ঠাতা -->
            <div class="col-md-3 col-12 mb-3">
                <div class="second-topper mb-3">
                    <div class="sec-title bg-info text-center py-1 text-light mb-2">
                        <p class="mb-0">প্রতিষ্ঠাতা</p>
                    </div>
                    <div class="sec-img-content position-relative">
                        <a href="<?php echo get_permalink(); ?>">
                            <img src="<?php echo get_template_directory_uri() . './images/school-1.jpg' ?>" class="d-block w-100" alt="school1">
                        </a>
                        <a href="<?php echo get_permalink(); ?>" class="sec-text-content position-absolute bottom-0 z-1 w-100 p-2">
                            <p class="mb-0 text-light">প্রতিষ্ঠাতামন্ডলীর জিবনী</p>
                        </a>
                    </div>
                </div>
                <div class="second-bottom">
                    <ul class="list-group">
                        <li><a href="<?php echo get_permalink(); ?>" class="list-group-item bg-info text-light">স্কুল একাডেমিক ক্যালেন্ডার</a></li>
                        <li><a href="<?php echo get_permalink(); ?>" class="list-group-item bg-info text-light">১ম-৫ম শ্রেণীর ক্লাস রূটিন</a></li>
                        <li><a href="<?php echo get_permalink(); ?>" class="list-group-item bg-info text-light">৬ষ্ঠ-১০ম শ্রেণীর ক্লাস রূটিন</a></li>
                        <li><a href="<?php echo get_permalink(); ?>" class="list-group-item bg-info text-light">উপস্থিতি বিবরণী</a></li>
                        <li><a href="<?php echo get_permalink(); ?>" class="list-group-item bg-info text-light">ডিজিটাল কন্টেন্ট ও প্রকাশনা</a></li>
                        <li><a href="<?php echo get_permalink(); ?>" class="list-group-item bg-info text-light">প্রয়োজনীয় ফরম ডাউনলোড</a></li>
                    </ul>
                </div>
            </div>

            <!-- প্রতিষ্ঠানের ইতিহাস -->
            <div class="col-md-5 col-12">
                <div class="school-content">
                    <div class="sec-title bg-info text-center py-1 text-light mb-2">
                        <p class="mb-0">প্রতিষ্ঠানের ইতিহাস</p>
                    </div>
                    <div class="school-deatils">
                        <?php
                        $history = new WP_Query(array(
                            'post_type'         =>  'institute_history',
                            'posts_per_page'    => 1,
                            'order'             => 'DESC'
                        ));
                        while ($history->have_posts()): $history->the_post();
                        ?>
                            <div class="school-img mb-3">
                                <?php the_post_thumbnail('large', array('class' => 'img-fluid w-100')); ?>
                            </div>
                            <p class="more-info">
                                <?php
                                $contentText = get_the_content();
                                $trimingWords = WP_trim_words($contentText, 50, '...');
                                echo $trimingWords;
                                ?>
                                <a href="<?php echo get_permalink(); ?>" class="text-danger">বিস্তারিত</a>
                            </p>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>

            <!-- নিউজ ও ইভেন্ট -->
            <div class="col-md-4 col-lg-4">
                <div class="sec-title bg-info text-center py-1 text-light mb-2">
                    <p class="mb-0">নিউজ ও ইভেন্ট</p>
                </div>

                <div id="newsAndEventIndicator" class="carousel slide carousel-3" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php
                        $i = 0;
                        $news_and_event = new WP_Query(array(
                            'cat'               =>  14,
                            'posts_per_page'    =>  10,
                            'order'             =>  'DESC'
                        ));
                        while ($news_and_event->have_posts()): $news_and_event->the_post();
                        ?>
                            <button type="button" data-bs-target="#newsAndEventIndicator" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i == 0 ? 'active' : ''; ?>">
                            </button>
                        <?php
                            $i++;
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>

                    <div class="carousel-inner mb-md-3 mb-2">
                        <?php
                        $j = 0;

                        while ($news_and_event->have_posts()): $news_and_event->the_post(); ?>

                            <div class="carousel-item <?php echo $j == 0 ? 'active' : ''; ?>">
                                <div class="notice-title text-center text-danger">

                                    <a href="<?php the_permalink(); ?>">

                                        <?php
                                        $thumb_id = get_post_thumbnail_id(get_the_ID());
                                        $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('news-and-event-image-420x250', array(
                                                'class' => 'img-fluid mb-md-2 mb-1',
                                                'alt'   => $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title())
                                            ));
                                        } else { ?>
                                            <img src="<?php echo get_template_directory_uri() . '/images/news-and-event-image-420x250.jpg' ?>" alt="<?php echo $alt_text ? esc_attr($alt_text) : esc_attr(get_the_title()); ?>" class="mb-md-2 mb-1">
                                        <?php } ?>

                                        <h5 class="text-dark"> <?php the_title(); ?> </h5>

                                    </a>
                                </div>
                            </div>
                    </div>
                <?php $j++;
                        endwhile;
                        wp_reset_postdata(); ?>
                </div>
                <button class="carousel-control-prev d-flex justify-content-center align-items-end" type="button" data-bs-target="#newsAndEventIndicator" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                        <i class="fa-solid fa-angle-left"></i>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-flex justify-content-center align-items-end" type="button" data-bs-target="#newsAndEventIndicator" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
</div>
</section>
<!-- history end -->
</div>