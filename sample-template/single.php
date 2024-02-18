<?php get_header(); ?>
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
                                                    <img src="img/img-37.jpg" alt="images description">
                                                </figure>
                                            </div>
                                        </div>
                                        <?php the_content(); ?>
                                        <div class="blog-share mt-5">
                                            <ul class="social-network with-text">
                                                <li><strong>Share :</strong></li>
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink();?>"><span class="icon-facebook"></span> Facebook</a></li>
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink();?>"><span class="icon-twitter"></span> Twitter</a></li>
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink();?>"><span class="icon-google-plus"></span> Google</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="content-block pt-5 pb-5">
                        <div class="comment-block">
                            <h6 class="content-title contact-title mb-3">3 Comments</h6>
                            <div class="comment-slot">
                                <div class="thumb circular-img">
                                    <a href="#"><img src="img/people-01.jpg" alt="images description"></a>
                                </div>
                                <div class="comment-desc">
                                    <h5><a href="#">Cleona Torez - Spain</a></h5>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                                    <div class="meta">Commented on
                                        <time datetime="2016-07-19">14/1/2016</time> - <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-slot">
                                <div class="thumb circular-img">
                                    <a href="#"><img src="img/people-02.jpg" alt="images description"></a>
                                </div>
                                <div class="comment-desc">
                                    <h5><a href="#">Steve Jurgen - Norway</a></h5>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                                    <div class="meta">Commented on
                                        <time datetime="2016-07-19">14/1/2016</time> - <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-container">
                        <form action="#" class="comment-form waituk_contact-form">
                            <fieldset>
                                <h6 class="content-title contact-title">LEAVE YOUR COMMENT</h6>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <input placeholder="Full Name" type="text" class="form-control">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <input placeholder="Email Address" type="email" class="form-control">
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <input placeholder="Website" type="text" class="form-control">
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <textarea placeholder="Your Comment" class="form-control"></textarea>
                                    </div>
                                    <div class="col-sm-12 btn-holder">
                                        <button type="submit" class="btn btn-black btn-full">POST COMMENT</button>
                                    </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--/main content wrapper -->



<?php get_footer(); ?>