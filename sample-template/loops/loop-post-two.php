<?php

$all_posts_args = array(

    'post_type' => array('post'),
    'posts_per_page' => 3,

);

$all_posts = new WP_Query($all_posts_args);

if ($all_posts->have_posts()) : ?>
    <?php while ($all_posts->have_posts()) : $all_posts->the_post(); ?>
        <div class="post-holder">
            <a href="<?php the_permalink(); ?>" class="post-link"></a>
            <div class="post-avatar">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail($all_posts->post->ID, 'post-thumbnails-footer'); ?>" ></a>
            </div>
            <div class="post-desc">
                <h6><a href="<?php the_permalink(); ?>"><?php echo get_the_title($all_posts->post->ID); ?></a></h6>
                <p><?php echo get_the_date();?></p>
            </div>
        </div>
        <?php wp_reset_query(); ?>

    <?php endwhile; ?>

<?php endif; ?>