<?php

$all_posts_args = array(
    'post_type' => array('photography')
);

$all_posts = new WP_Query($all_posts_args);

if ($all_posts->have_posts()) : ?>
    <?php while ($all_posts->have_posts()) : $all_posts->the_post(); ?>
        <div class="gallery-item col-lg-6 col-xl-4 photography">
            <figure class="caption-hover-full">
                <a class="fancy-pop" href="<?php the_permalink(); ?>"></a>
                <div class="image-wrapper"><?php echo get_the_post_thumbnail(get_the_ID(), 'main-thumbnails'); ?></div>
                <div class="image-details">
                    <div class="figcaption">
                        <div class="trigger">
                            <div class="custom-icon-plus"><span class="sr-only">&nbsp;</span></div>
                        </div>
                        <div class="info">
                            <h2 class="content-title"><?php echo get_the_title(); ?></h2>
                        </div>
                    </div>
                </div>
            </figure>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>

<?php endif; ?>
