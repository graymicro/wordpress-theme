<?php

$all_posts_args = array(

    'post_type' => array('portfolio')

);

$all_posts = new WP_Query($all_posts_args);

if ($all_posts->have_posts()) : ?>
    <?php while ($all_posts->have_posts()) : $all_posts->the_post(); ?>
        <!-- <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app" > -->
        <div class="portfolio-wrap" href="<?php the_permalink(); ?>">
            <?php echo get_the_post_thumbnail($all_posts->post->ID, 'port-thumbnails'); ?>
            <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                    <?php echo get_the_post_thumbnail($all_posts->post->ID, 'port-thumbnails'); ?>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
        </div>
        <!-- </div>End portfolio item -->


    <?php endwhile; ?>

<?php endif; ?>