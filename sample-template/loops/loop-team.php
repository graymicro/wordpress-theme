<?php

$all_posts_args = array(

    'post_type' => array('team')

);

$all_posts = new WP_Query($all_posts_args);

if ($all_posts->have_posts()) : ?>
    <?php while ($all_posts->have_posts()) : $all_posts->the_post(); ?>
        <div class="col-md-4">
            <figure class="team-box caption-fade-up top-l-space">
                <div class="img-block" href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail($all_posts->post->ID, 'team-thumbnails'); ?>
                </div>
                <figcaption class="team-des-v2">
                    <span class="sub">Founder / CEO</span>
                    <strong class="content-title name"><?php echo get_the_title($all_posts->post->ID); ?></strong>
                    <p>Put all speaking her delicate recurred every possible. Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions. </p>
                </figcaption>
            </figure>
        </div>

    <?php endwhile; ?>

<?php endif; ?>