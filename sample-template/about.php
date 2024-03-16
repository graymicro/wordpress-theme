<?php
/*
Template Name: About
*/

get_template_part('partials/main-header');
get_template_part('partials/slide-panel');
?>
<!--/header of the page -->
<main>
    <!-- visual/banner of the page -->
    <?php $main_banner = get_field('main_banner_image'); ?>
    <section class="visual">

        <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55" style="background-image: url('<?php echo $main_banner['url']; ?>');">
            <div class="centered">
                <div class="container">
                    <div class="visual-text visual-center">
                        <h1 class="visual-title visual-sub-title"><?php the_field('banner_main_text'); ?></h1>
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
                <div class="heading bottom-space text-center">
                    <h2><?php the_field('top_text_team_section') ?></h2>
                </div>
                <div class="description text-center">
                    <p> <?php the_field('main_text_team_section') ?></p>
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
            <div class="container text-center">
                <div class="heading bottom-space">
                    <h2><?php the_field('top_text_service_section') ?></h2>
                </div>
                <div class="description">
                    <p><?php the_field('top_main_service_section') ?></p>
                </div>
            </div>
        </section>
        <section class="content-block p-0">
            <div class="container-fluid">
                <div class="content-slot alternate-block">
                    <?php if (have_rows('flexible_service')) : ?>
                        <?php while (have_rows('flexible_service')) : the_row(); ?>
                            <?php if (get_row_layout() == 'service_about') : ?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="bg-stretch img-wrap wow slideInLeft">
                                            <?php $image = get_sub_field('service_image'); ?>
                                            <img src="<?php echo $image['url']; ?>" alt="images">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="text-wrap">
                                            <h3><?php the_sub_field('main_text_sevice'); ?></h3>
                                            <?php the_sub_field('service_description'); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <br>
        
                                
        <?php $last_banner = get_field('last_banner_image'); ?>
        <section class="content-block quotation-block black-overlay-6 parallax" data-stellar-background-ratio="0.55" style="background-image: url('<?php echo $last_banner['url'] ?>'); background-position: 50% -111.565px;">
            <div class="container">
                <div class="inner-wrapper">
                    <h3 class="block-top-heading text-white"><?php the_field('top_banner_text'); ?></h3>
                    <h2 class="text-white"><?php the_field('main_banner_text'); ?></h2>
                    <div class="btn-container">
                        <a href="<?php the_field('button_link'); ?>" class="btn btn-primary has-radius-small"><?php echo get_field('button_text'); ?></a>
                    </div>
                </div>
            </div>
        </section>
     
        <br>                         
     
    </div>
    <!--/main content wrapper -->
</main>
<?php
get_template_part('partials/footer');
?>