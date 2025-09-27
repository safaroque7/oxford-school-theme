<div id="carouselExampleIndicators" class="carousel slide carousel-1" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <?php 
                                        $i = 0;
                                        $banner = new WP_Query(array(
                                            'post_type' => 'banner',
                                            'order'     => 'ASC'
                                        ));
                                        while($banner->have_posts()): $banner->the_post();
                                    ?>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i == 0 ? 'active' : ''; ?>">
                                        </button>
                                    <?php 
                                        $i++; 
                                        endwhile; 
                                        wp_reset_postdata();
                                    ?>
                                </div>
                            <div class="carousel-inner">
                                <?php 
                                    $j = 0;
                                    $banner = new WP_Query(array(
                                        'post_type' => 'banner',
                                        'order'     => 'ASC'
                                    ));
                                    while($banner->have_posts()): $banner->the_post();
                                ?>
                                <div class="carousel-item <?php echo $j == 0 ? 'active' : ''; ?>">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                                    </a>
                                    <a href="<?php echo get_permalink(); ?>" class="carousel-content position-absolute d-block bottom-0 z-1 w-100 p-2">
                                        <p class="mb-0 text-light"><?php echo get_field('image_caption'); ?></p>
                                    </a>
                                </div>  
                                <?php   
                                    $j++;
                                    endwhile; wp_reset_postdata();
                                ?>                      
                            </div>
                            <?php if ($banner->post_count > 1): ?>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true">
                                        <i class="fa-solid fa-angle-left"></i>
                                    </span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            <?php endif; ?>
                        </div>