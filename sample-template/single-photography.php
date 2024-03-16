<?php

get_template_part('partials/main-header');
get_template_part('partials/slide-panel');
?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <main class="no-banner">
            <!-- visual/banner of the page -->
            <section class="visual visual-sub visual-no-bg">
                <div class="visual-inner no-overlay bg-gray-light">
                    <div class="centered">
                        <div class="container">
                            <div class="visual-text visual-center">
                                <h1 class="visual-title visual-sub-title"><?php the_title(); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/visual/banner of the page -->
            <!-- main content wrapper -->
            <div class="content-wrapper">
                <section class="content-block">
                    <div class="container">
                        <div class="row portfolio-gallery">
                            <div class="bottom-space-medium-only col-lg-6">
                                <div class="img-block shine-effect image-zoom">
                                    <img src="<?php echo get_the_post_thumbnail(); ?>">
                                </div>
                            </div>
                            <div class="v-align-col col-lg-5 offset-lg-1">
                                <div class="inner">
                                    <?php
                                    // دریافت مقدار کد شورتکد از ACF
                                    $shortcode = get_field('project_details_shortcode');

                                    // نمایش محتوای شورتکد با استفاده از do_shortcode
                                    echo do_shortcode($shortcode);
                                    ?>

                                    <div class="text-block">
                                        <h2 class="text-block-title">Project Detail:</h2>
                                        <?php echo get_the_excerpt() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-des top-space">
                            <div class="row">
                                <div class="col-lg-6 bottom-space-medium-only">
                                    <div class="text-block">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-small col-md-6">
                                            <div class="img-block shine-effect image-zoom">
                                                <?php $image1 = get_field('image1'); ?>
                                                <img src="<?php echo $image1['url']; ?>" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-small col-md-6">
                                            <div class="img-block shine-effect image-zoom">
                                                <?php $image2 = get_field('image2'); ?>
                                                <img src="<?php echo $image2['url']; ?>" alt="images">
                                            </div>
                                        </div>
                                        <div class="col-small m-b-0 col-md-12">
                                            <div class="img-block shine-effect image-zoom">
                                                <?php $image3 = get_field('image1'); ?>
                                                <img src="<?php echo $image3['url']; ?>" alt="images">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-container">
                            <?php comments_template('', true); ?>
                        </div>
                    </div>
                </section>
            </div>
            <!--/main content wrapper -->
        </main>
    <?php endwhile; ?>
<?php endif; ?>
<?php
get_template_part('partials/footer');
?>