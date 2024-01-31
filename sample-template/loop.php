<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="row masonary-block grid" >
            <div class="gallery-item col-lg-6 col-xl-4 ecommerce" >
                <figure class="caption-hover-full">
                    <a class="fancy-pop" href="<?php the_permalink();?>" ></a>
                    <div class="image-wrapper"><img src="img/portfolio-29.jpg" alt="images description"></div>
                    <div class="image-details">
                        <div class="figcaption">
                            <div class="trigger">
                                <div class="custom-icon-plus"><span class="sr-only">&nbsp;</span></div>
                            </div>
                            <div class="info">
                                <h2 class="content-title"><?php the_title();?></h2>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>