<?php
$all_posts_args = array(
    'post_type' => array('portfolio')
);

$all_posts = new WP_Query($all_posts_args);

if ($all_posts->have_posts()) : ?>
    <div class="row">
        <?php while ($all_posts->have_posts()) : $all_posts->the_post(); ?>
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <?php echo get_the_post_thumbnail($all_posts->post->ID, 'port-thumbnails'); ?>
                    <div class="portfolio-info">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                        <div class="portfolio-links">
                            <a href="<?php the_permalink(); ?>" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
