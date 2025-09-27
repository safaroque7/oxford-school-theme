
    <div class="top-title bg-info text-center text-light py-1 mb-2">
        <p class="mb-0">নোটিশ</p>
    </div>
    <ul class="list-group list-group-two list-group-three">
        <?php 
            $notice = new WP_Query
            (
            array(
                'post_type' =>  'notice',
                'order'     => 'ASC'
            )
        );
            while($notice->have_posts()):$notice->the_post();
        ?>
        <li><a href="<?php the_permalink(); ?>" class="list-group-item"><?php the_title(); ?></a></li>
        <?php   
            endwhile; wp_reset_postdata();
        ?>
    </ul>
