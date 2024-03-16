<section class="content-block use-ajax-only">
    <div class="container">
        <div class="row multiple-row">
            <?php
            $page = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post', // Change this to your custom post type if needed
                'posts_per_page' => 3, // Number of posts per page
                'paged' => $page, // Current page
            );
            $query = new WP_Query($args);

            // Check if there are posts
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div id="post-content" class="col-md-6 col-lg-4">
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
                                            <a href="<?php the_permalink() ?>">Read Story <span class="fa fa-arrow-right"><span class="sr-only">&nbsp;</span></span></a>
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
                    </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset the post data
            endif;
            ?>
        </div>
        <div class="btn-container full-width-btn top-space">
            <a href="#" class="btn btn-black" id="load-more-btn">LOAD MORE<span class="c-ripple js-ripple"><span class="c-ripple__circle"></span></span></a>
        </div>
    </div>
</section>

<script>
    jQuery(function($) {
        var page = 2;
        var loading = false;
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';

        // Load more posts when the button is clicked
        $('.use-ajax-only .btn-container').on('click', '.btn', function(e) {
            e.preventDefault();
            var btn = $(this);
            if (!loading) {
                loading = true;
                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action: 'load_more_posts',
                        page: page,
                    },
                    success: function(response) {
                        $('.use-ajax-only .multiple-row').append(response);
                        page++;
                        loading = false;
                        if (response.trim() === '') {
                            btn.hide();
                        }
                    }
                });
            }
        });
    });
</script>