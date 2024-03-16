<?php get_header(); ?>
<footer class="footer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <div class="footer-main pb-0">
        <div class="container">
            <div class="content-block">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <img src="<?php echo get_field('main_logo')['url']; ?>">
                        </div>
                        <div class="my-4">
                            <p><?php the_field('footer_des_text'); ?></p>
                        </div>
                        <div class="waituk_newsletter-form newsletter-v1 mt-5">
                            <form action="http://feedburner.google.com/fb/a/mailverify" method="post" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=GenzymeRareCommunityBlog', 'popupwindow', 'scrollbars=yes,width=550,height=520')">
                                <fieldset class="clearfix">
                                    <div class="form-group input-holder">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                        <button type="submit" class="btn"><i class="fa fa-send"></i></button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="mt-5">
                            <ul class="social-network">
                                <?php if (have_rows('footer_icon')) : ?>
                                    <?php while (have_rows('footer_icon')) : the_row(); ?>
                                        <?php if (get_row_layout() == 'fo_icon') : ?>
                                            <img src="<?php echo esc_url(get_sub_field('icon_image')['url']); ?>" alt="" style="width: 50px; height: 50px;">
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-block">
                            <div class="post-block mb-4 mb-lg-0">
                                <h4><?php the_field('title_section2'); ?></h4>
                                <?php get_template_part('loops/loop', 'post-two'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-block">
                            <h4><?php the_field('section3'); ?></h4>
                            <div class="footer-nav">
                                <ul>
                                    <?php if (have_rows('discover')) : ?>
                                        <?php while (have_rows('discover')) : the_row(); ?>
                                            <?php if (get_row_layout() == 'discover__content') : ?>
                                                <li><a href="<?php the_sub_field('discover_link'); ?>"><?php the_sub_field('discover_text'); ?></a></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget-block">
                            <div class="instagram-widget">
                                <h4><?php the_field('title_section4'); ?></h4>
                                <ul>

                                    <?php if (have_rows('instagram_image')) : ?>
                                        <?php while (have_rows('instagram_image')) : the_row(); ?>
                                            <?php if (get_row_layout() == 'insta_pic') : ?>
                                                <li>
                                                    <div class="img-block shine-effect image-zoom">
                                                        <?php $image = get_sub_field('image'); ?>
                                                        <a href="#"><img src="<?php echo $image['url']; ?>"></a>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php get_footer(); ?>