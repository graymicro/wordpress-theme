<?php

$all_posts_args = array(

    'post_type' => array('services'),


);

$all_posts = new WP_Query($all_posts_args);

if ($all_posts->have_posts()) : ?>
    <?php while ($all_posts->have_posts()) : $all_posts->the_post(); ?>
        <div class="col-lg-4 col-md-6">
            <div class="col-wrap">
                <div class="ico-box bg-gray-light has-radius-medium">
                    <div class="icon">
                        <img src="<?php echo get_field('image_service')['url']; ?>" alt="" style="width: 50px; height: 50px;">
                    </div>
                    <h4 class="content-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title($all_posts->post->ID); ?></a></h4>
                    <div class="des">
                        <p><?php echo get_the_excerpt($all_posts->post->ID); ?></p>
                    </div>
                    <div class="link-holder">
                        <a class="link-more" href="<?php the_permalink(); ?>">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
        <?php wp_reset_query(); ?>

    <?php endwhile; ?>

<?php endif; ?>