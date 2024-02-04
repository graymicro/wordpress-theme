<?php

$all_posts_args = array(

    'post_type' => array('ecommerce')

);

$all_posts = new WP_Query($all_posts_args);

if ($all_posts->have_posts()) : ?>
    <?php while ($all_posts->have_posts()) : $all_posts->the_post(); ?>


        <figure class="caption-hover-full">
            <a class="fancy-pop" href="<?php the_permalink(); ?>"></a>
            <div class="image-wrapper"><?php echo get_the_post_thumbnail($all_posts->post->ID, 'main-thumbnails'); ?></div>
            <div class="image-details">
                <div class="figcaption">
                    <div class="trigger">
                        <div class="custom-icon-plus"><span class="sr-only">&nbsp;</span></div>
                    </div>
                    <div class="info">
                        <h2 class="content-title"><?php echo get_the_title($all_posts->post->ID); ?></h2>
                    </div>
                </div>
            </div>
        </figure>


    <?php endwhile; ?>

<?php endif; ?>