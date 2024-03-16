<?php
// Add AJAX action for loading more posts
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

// AJAX handler function to load more posts
function load_more_posts()
{
    $page = $_POST['page'];
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'paged'          => $page,
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
?>
            <div class="col-md-6 col-lg-4">
                <div class="col-wrap">
                    <div class="post-grid reverse-grid" href="<?php the_permalink(); ?>">
                        <div class="img-block post-img">
                            <?php the_post_thumbnail('post-thumbnails'); ?>
                            <time class="post-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('d M'); ?></time>
                        </div>
                        <div class="post-text-block bg-gray-light">
                            <strong class="content-title mb-0"><?php the_title(); ?></strong>
                            <span class="content-sub-title">Technology and Trends</span>
                            <p><?php echo get_the_excerpt(); ?></p>
                            <div class="post-meta clearfix">
                                <div class="post-link-holder">
                                    <a href="<?php the_permalink(); ?>">Read Story <span class="fa fa-arrow-right"></span></a>
                                </div>
                                <div class="post-social text-right">
                                    <ul class="social-network social-small">
                                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
        endwhile;
        wp_reset_postdata();
    else :
        // If no more posts, return empty string
        echo '';
    endif;
    wp_die();
}
