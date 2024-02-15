<?php

$all_posts_args = array(

    'post_type' => array('post'),
    'posts_per_page' => 1,

);

$all_posts = new WP_Query($all_posts_args);

if ($all_posts->have_posts()) : ?>
    <?php while ($all_posts->have_posts()) : $all_posts->the_post(); ?>

        <div class="col-wrap">
            <div class="post-grid reverse-grid" href="<?php the_permalink(); ?>">
                <div class="img-block post-img">
                    <?php echo get_the_post_thumbnail($all_posts->post->ID, 'post-thumbnails'); ?>
                    <time class="post-date" datetime="2016-10-10">17 Jun</time>
                </div>
                <div class="post-text-block bg-gray-light">
                    <strong class="content-title mb-0"><?php echo get_the_title($all_posts->post->ID); ?></strong>
                    <span class="content-sub-title">Thechnology and Trends</span>
                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                    <div class="post-meta clearfix">
                        <div class="post-link-holder">
                            <a href="#">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
                        </div>
                        <div class="post-social text-right">
                            <ul class="social-network social-small">
                                <li><a href="#"><span class="icon-facebook"><span class="sr-only">&nbsp;</span></span></a></li>
                                <li><a href="#"><span class="icon-twitter"><span class="sr-only">&nbsp;</span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>

<?php endif; ?>