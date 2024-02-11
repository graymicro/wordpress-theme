<!-- main content wrapper -->
<div class="content-wrapper">
    <section class="content-block portfolio-block">
        <ul class="filter-nav filter-nav-v2 text-center button-group filter-button-group">
            <li>
                <button class="is-checked" data-filter="*">ALL WORK</button>
            </li>
            <li>
                <button data-filter=".ui">UI/UX DESIGN</button>
            </li>
            <li>
                <button data-filter=".programming">PROGRAMMING</button>
            </li>
            <li>
                <button data-filter=".photography">PHOTOGRAPHY</button>
            </li>
            <li>
                <button data-filter=".ecommerce">ECOMMERCE</button>
            </li>
        </ul>
        <div class="container">
            <?php get_template_part('loops/loop', 'portfolio'); ?>
            <div class="row masonary-block grid">

                <div class="gallery-item col-lg-6 col-xl-4 ecommerce">
                    <?php get_template_part('loops/loop', 'ecommerce'); ?>
                </div>

                <div class="gallery-item col-lg-6 col-xl-4 ui photography">
                    <?php get_template_part('loops/loop', 'photograpy'); ?>
                </div>
                <div class="gallery-item col-lg-6 col-xl-4 photography">

                </div>

                <div class="gallery-item col-lg-6 col-xl-4 programming">
                    <?php get_template_part('loops/loop', 'programming'); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="content-block">
        <div class="container">
            <div class="row multiple-row v-align-row">
                <div class="col-lg-4 col-md-6">
                    <div class="col-wrap">
                        <div class="block-heading">
                            <h3 class="block-top-heading">WHAT WE DO</h3>
                            <h2 class="block-main-heading">EXPERTS</h2>
                            <span class="block-sub-heading">We build digital solutions.</span>
                            <div class="divider"><img src="img/divider.png" alt="images description"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-wrap">
                        <div class="ico-box bg-gray-light has-radius-medium">
                            <div class="icon">
                                <span class="custom-icon-pen-tool"><span class="sr-only">&amp;</span></span>
                            </div>
                            <h4 class="content-title"><a href="#">PIXEL PERFECT</a></h4>
                            <div class="des">
                                <p>Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="link-holder">
                                <a class="link-more" href="#">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-wrap">
                        <div class="ico-box bg-gray-light has-radius-medium">
                            <div class="icon">
                                <span class="custom-icon-vector"><span class="sr-only">&amp;</span></span>
                            </div>
                            <h4 class="content-title"><a href="#">VECTOR SHAPES</a></h4>
                            <div class="des">
                                <p>Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="link-holder">
                                <a class="link-more" href="#">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-wrap">
                        <div class="ico-box bg-gray-light has-radius-medium">
                            <div class="icon">
                                <span class="custom-icon-font-design"><span class="sr-only">&amp;</span></span>
                            </div>
                            <h4 class="content-title"><a href="#">GOOGLE FONTS</a></h4>
                            <div class="des">
                                <p>Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="link-holder">
                                <a class="link-more" href="#">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-wrap">
                        <div class="ico-box bg-gray-light has-radius-medium">
                            <div class="icon">
                                <span class="custom-icon-layers"><span class="sr-only">&amp;</span></span>
                            </div>
                            <h4 class="content-title"><a href="#">EASY LAYERS</a></h4>
                            <div class="des">
                                <p>Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="link-holder">
                                <a class="link-more" href="#">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="col-wrap">
                        <div class="ico-box bg-gray-light has-radius-medium">
                            <div class="icon">
                                <span class="custom-icon-list"><span class="sr-only">&amp;</span></span>
                            </div>
                            <h4 class="content-title"><a href="#">BOOTSTRAP GRID</a></h4>
                            <div class="des">
                                <p>Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet</p>
                            </div>
                            <div class="link-holder">
                                <a class="link-more" href="#">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-block">
        <div class="container">
            <div class="heading bottom-space text-center">
                <h2>Learn. <span>Acheive.</span> Admire</h2>
            </div>
            <div class="description text-center">
                <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. </p>
            </div>
            <div class="row">
                <?php get_template_part('loops/loop', 'team'); ?>
            </div>
        </div>
    </section>

    <section class="content-block portfolio-block">
        <div class="container">
            <div class="masonary-block grid">
                <div class="gallery-sizer"></div>
                <div class="col-lg-6 col-xl-6 gallery-item ui">
                    <figure class="caption-hover-full">
                        <a data-thumbnail="img/portfolio-01.jpg" class="fancybox-thumb fancy-pop" title="" href="img/visual-small-03.jpg"></a>
                        <div class="image-wrapper"><img src="img/portfolio-01.jpg" alt="images description"></div>
                        <div class="image-details">
                            <div class="figcaption">
                                <div class="trigger">
                                    <div class="custom-icon-plus"><span class="sr-only">&nbsp;</span></div>
                                </div>
                                <div class="info">
                                    <h2 class="content-title">Awesome Project</h2>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-xl-3 gallery-item photography">
                    <figure class="caption-hover-full">
                        <a data-thumbnail="img/portfolio-02.jpg" class="fancybox-thumb fancy-pop" title="" href="img/visual-small-03.jpg"></a>
                        <div class="image-wrapper"><img src="img/portfolio-02.jpg" alt="images description"></div>
                        <div class="image-details">
                            <div class="figcaption">
                                <div class="trigger">
                                    <div class="custom-icon-plus"><span class="sr-only">&nbsp;</span></div>
                                </div>
                                <div class="info">
                                    <h2 class="content-title">Awesome Project</h2>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-xl-3 gallery-item ui photography">
                    <figure class="caption-hover-full">
                        <a data-thumbnail="img/portfolio-03.jpg" class="fancybox-thumb fancy-pop" title="" href="img/visual-small-03.jpg"></a>
                        <div class="image-wrapper"><img src="img/portfolio-03.jpg" alt="images description"></div>
                        <div class="image-details">
                            <div class="figcaption">
                                <div class="trigger">
                                    <div class="custom-icon-plus"><span class="sr-only">&nbsp;</span></div>
                                </div>
                                <div class="info">
                                    <h2 class="content-title">Awesome Project</h2>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-xl-6 gallery-item ecommerce programming">
                    <figure class="caption-hover-full">
                        <a data-thumbnail="img/portfolio-04.jpg" class="fancybox-thumb fancy-pop" title="" href="img/visual-small-03.jpg"></a>
                        <div class="image-wrapper"><img src="img/portfolio-04.jpg" alt="images description"></div>
                        <div class="image-details">
                            <div class="figcaption">
                                <div class="trigger">
                                    <div class="custom-icon-plus"><span class="sr-only">&nbsp;</span></div>
                                </div>
                                <div class="info">
                                    <h2 class="content-title">Awesome Project</h2>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="content-block">
        <div class="container">
            <div class="row multiple-row">
                <div class="col-md-6 col-lg-4">
                    <?php get_template_part('loops/loop', 'post'); ?>
                </div>


            </div>
            <div class="btn-container full-width-btn top-space">
                <a data-page="1" href="javascript:void(0)" class="btn btn-black">LOAD MORE<span class="c-ripple js-ripple"><span class="c-ripple__circle"></span></span></a>
            </div>
        </div>
    </section>
    <section class="content-block quotation-block black-overlay-6 parallax" data-stellar-background-ratio="0.55" style="background-position: 50% -111.565px;">
        <div class="container">
            <div class="inner-wrapper">
                <h3 class="block-top-heading text-white">BEST EVER DESIGN</h3>
                <h2 class="text-white">Time to enhance your web presence!</h2>
                <div class="btn-container">
                    <a href="#" class="btn btn-primary has-radius-small">GET QUOTATION</a>
                </div>
            </div>
        </div>
    </section>
    <aside class="content-block">
        <div class="container">
            <div class="logo-container">
                <div class="owl-carousel logo-slide" id="waituk-owl-slide-4">
                    <div class="slide-item">
                        <img src="img/logo-01.png" alt="images description">
                    </div>
                    <div class="slide-item">
                        <img src="img/logo-02.png" alt="images description">
                    </div>
                    <div class="slide-item">
                        <img src="img/logo-03.png" alt="images description">
                    </div>
                    <div class="slide-item">
                        <img src="img/logo-04.png" alt="images description">
                    </div>
                    <div class="slide-item">
                        <img src="img/logo-03.png" alt="images description">
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
<!--/main content wrapper -->