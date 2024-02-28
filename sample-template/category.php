<!-- main content wrapper -->
<div class="content-wrapper">
    <section class="content-block portfolio-block">
        
        <div class="container">
            <div>
                <h2><?php single_cat_title()?></h2>
            </div>
            <?php get_template_part('loops/loop','post');?>
        </div>
    </section>
</div>
<!--/main content wrapper -->