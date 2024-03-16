<?php

get_template_part('partials/main-header');
get_template_part('partials/slide-panel');
?>


<!-- main content wrapper -->
<div class="content-wrapper">
    <section class="content-block">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-12 less-wide">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="blog-holder">
                                <article class="blog-article">
                                    <div class="blog-title text-center pb-5">
                                        <h1><?php the_title(); ?></h1>
                                        <div class="blog-lists border-0">
                                            <ul class="blog-list-items">
                                                <li><?php echo get_the_author(); ?></li>
                                                <li>
                                                    <?php echo get_the_date('Y-m-d') . ' / '; ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="blog-desc pt-5">
                                        <div class="blog-img">
                                            <div class="image-wrap">
                                                <figure class="">
                                                    <img src="<?php echo get_the_post_thumbnail();?>">
                                                </figure>
                                            </div>
                                        </div>
                                        <?php the_content(); ?>
                                        <div class="blog-share mt-5">
                                            <ul class="social-network with-text">
                                                <li><strong>Share :</strong></li>
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>"><span class="icon-facebook"></span> Facebook</a></li>
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>"><span class="icon-twitter"></span> Twitter</a></li>
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>"><span class="icon-google-plus"></span> Google</a></li>
                                            </ul>
                                            <div class="post-categories">
                                                <h5 style="background-color: lightgrey;color: blue;font-weight: bold;margin-top:40px">The categories:</h5>
                                                <?php the_category(','); ?>
                                            </div>
                                            <div class="post-tags">
                                                <h5 style="background-color: lightgrey;color: blue;font-weight: bold;margin-top:40px">The Post Tags:</h5>
                                                <?php the_tags(','); ?>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="contact-container">
                        <?php comments_template('', true); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
get_template_part('partials/footer');
?>
<!--/main content wrapper -->