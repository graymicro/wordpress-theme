<?php
/*
Template Name: Home Page
*/
get_template_part('partials/main-header');
get_template_part('partials/slide-panel');
?>
<!-- main content wrapper -->
<?php get_template_part('partials/banner-page'); ?>
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
        <div class="row masonary-block grid">
            <?php get_template_part('loops/loop', 'ecommerce'); ?>
            <?php get_template_part('loops/loop', 'photography'); ?>
            <?php get_template_part('loops/loop', 'programming'); ?>
        </div>
    </div>

</section>

<section class="content-block">
    <div class="container">
        <div class="row multiple-row v-align-row">
            <div class="col-lg-4 col-md-6">
                <div class="col-wrap">
                    <div class="block-heading">
                        <h3 class="block-top-heading"><?php echo get_field('first_text'); ?></h3>
                        <h2 class="block-main-heading"><?php echo get_field('second_text'); ?></h2>
                        <span class="block-sub-heading"><?php echo get_field('des_text'); ?></span>
                        <div class="divider"><img src="<?php echo get_template_directory_uri() . '/img/divider.png' ?>" alt="images description"></div>
                    </div>
                </div>
            </div>


            <?php get_template_part('loops/loop', 'services'); ?>


        </div>
    </div>
</section>


<section class="content-block">
    <div class="container">
        <div class="heading bottom-space text-center">
            <h2><?php the_field('top_text_1') ?></h2>
        </div>
        <div class="description text-center">
            <p> <?php the_field('main_text_2') ?></p>
        </div>
        <div class="row">

            <?php $team_query = new WP_User_Query(array('role' => 'Editor')); ?>
            <?php foreach ($team_query->results as $user) : ?>
                <div class="col-md-4">
                    <figure class="team-box caption-fade-up top-l-space">
                        <div class="img-block">
                            <?php echo get_avatar(($user->ID)); ?>
                        </div>
                        <figcaption class="team-des-v2">
                            <span class="sub"></span>
                            <strong class="content-title name"><?php echo $user->display_name; ?></strong>
                            <p><?php echo $user->description; ?></p>
                        </figcaption>
                    </figure>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>

<section class="content-block">
    <div class="container">
        <div class="row multiple-row">
            <?php get_template_part('loops/loop', 'post'); ?>
        </div>
        <div class="btn-container full-width-btn top-space">
            <!-- <button data-page="1" id="load-more-posts" class="btn btn-black">Load More Posts<span class="c-ripple js-ripple"><span class="c-ripple__circle"></span></span></button> -->
            <a data-page="1" class="btn btn-black">LOAD MORE<span class="c-ripple js-ripple"><span class="c-ripple__circle"></span></span></a>
        </div>
    </div>
</section>

<?php
$banner_image = get_field('banner_image');
$top_text = get_field('top_text');
$main_text = get_field('main_text');
$button_link = get_field('button_link');
$button_text = get_field('button_text');
?>

<section class="content-block quotation-block black-overlay-6 parallax" data-stellar-background-ratio="0.55" style="background-image: url('<?php echo $banner_image['url'] ?>'); background-position: 50% -111.565px;">
    <div class="container">
        <div class="inner-wrapper">
            <h3 class="block-top-heading text-white"><?php echo $top_text; ?></h3>
            <h2 class="text-white"><?php echo $main_text; ?></h2>
            <div class="btn-container">
                <a href="<?php echo $button_link; ?>" class="btn btn-primary has-radius-small"><?php echo $button_text; ?></a>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('stats-section'); ?>
<?php get_template_part('partials/footer');?>