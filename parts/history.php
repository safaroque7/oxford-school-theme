<div class="container bg-light">
        <!-- history start -->
        <section class="second-section">
            <div class="row py-2">
                <div class="col-lg-3 mb-3">
                    <div class="second-topper mb-3">
                        <div class="sec-title bg-info text-center py-1 text-light mb-2">
                            <p class="mb-0">প্রতিষ্ঠাতা</p>
                        </div>
                        <div class="sec-img-content position-relative">
                            <a href="<?php echo get_permalink(); ?>">
                                <img src="<?php echo get_template_directory_uri().'./images/school-1.jpg' ?>" class="d-block w-100" alt="school1">
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
                <div class="col-lg-5">
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
                                    <p class="mb-0 mb-2 fw-bold">বিদ্যালয়ের ইতিহাস</p>
                                    <p class="more-info">
                                        <?php 
                                            $contentText = get_the_content();
                                            $trimingWords = WP_trim_words($contentText, 80,'...');
                                            echo $trimingWords;
                                        ?>
                                        <a href="<?php  echo get_permalink(); ?>" class="text-danger">বিস্তারিত</a>
                                    </p>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="sec-title bg-info text-center py-1 text-light mb-2">
                        <p class="mb-0">নিউজ ও ইভেন্ট</p>
                    </div>
                    <div id="carouselExampleIndicatorsThree" class="carousel slide carousel-3" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicatorsThree" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicatorsThree" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicatorsThree" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="notice-title text-center text-danger py-1 px-3 mb-3">
                                    <a href="<?php echo get_permalink(); ?>" class="text-danger">ফরম ফিলাপ সম্পর্কিত জরুরী বিজ্ঞপ্তি ১</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                               <div class="notice-title text-center text-danger py-1 px-3 mb-3">
                                    <a href="<?php echo get_permalink(); ?>" class="text-danger">ফরম ফিলাপ সম্পর্কিত জরুরী বিজ্ঞপ্তি ২</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="notice-title text-center text-danger py-1 px-3 mb-2 mb-3">
                                    <a href="<?php echo get_permalink(); ?>" class="text-danger">ফরম ফিলাপ সম্পর্কিত জরুরী বিজ্ঞপ্তি ৩</a> 
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev d-flex justify-content-center align-items-end" type="button" data-bs-target="#carouselExampleIndicatorsThree" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true">
                                <i class="fa-solid fa-angle-left"></i>
                            </span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next d-flex justify-content-center align-items-end" type="button" data-bs-target="#carouselExampleIndicatorsThree" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true">
                                <i class="fa-solid fa-angle-right"></i>
                            </span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="all-notice mt-5 mb-3">
                        <div class="sec-title bg-info text-center py-1 text-light mb-2">
                            <p class="mb-0">গুরুত্বপূর্ণ লিংক</p>
                        </div>
                        <ul class="list-group list-group-two">
                            <li><a href="<?php echo get_permalink(); ?>" class="list-group-item">স্কুল একাডেমিক ক্যালেন্ডার</a></li>
                            <li><a href="<?php echo get_permalink(); ?>" class="list-group-item">১ম-৫ম শ্রেণীর ক্লাস রূটিন</a></li>
                            <li><a href="<?php echo get_permalink(); ?>" class="list-group-item">৬ষ্ঠ-১০ম শ্রেণীর ক্লাস রূটিন</a></li>
                            <li><a href="<?php echo get_permalink(); ?>" class="list-group-item">উপস্থিতি বিবরণী</a></li>
                            <li><a href="<?php echo get_permalink(); ?>" class="list-group-item">ডিজিটাল কন্টেন্ট ও প্রকাশনা</a></li>
                            <li><a href="<?php echo get_permalink(); ?>" class="list-group-item">প্রয়োজনীয় ফরম ডাউনলোড</a></li>
                            <li><a href="<?php echo get_permalink(); ?>" class="list-group-item">প্রয়োজনীয় ফরম ডাউনলোড</a></li>
                            <li><a href="<?php echo get_permalink(); ?>" class="list-group-item">প্রয়োজনীয় ফরম ডাউনলোড</a></li>
                            <li><a href="<?php echo get_permalink(); ?>" class="list-group-item">প্রয়োজনীয় ফরম ডাউনলোড</a></li>
                            <li><a href="<?php echo get_permalink(); ?>" class="list-group-item">প্রয়োজনীয় ফরম ডাউনলোড</a></li>
                            <li><a href="<?php echo get_permalink(); ?>" class="list-group-item">প্রয়োজনীয় ফরম ডাউনলোড</a></li>
                            <li><a href="<?php echo get_permalink(); ?>" class="list-group-item">প্রয়োজনীয় ফরম ডাউনলোড</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- history end -->
</div>