<!-- main wrapper -->
<?php get_header(); ?>
<!-- header of the page -->
<header class="fixed-top main-header header-white transparent with-side-panel-ico" id="waituk-main-header">
    <div id="nav-section">
        <div class="bottom-header container-fluid mega-menus" id="mega-menus">
            <nav class="navbar navbar-toggleable-md no-border-radius no-margin mega-menu-multiple" id="navbar-inner-container">
                <form action method="get" id="top-search" class="no-margin top-search">
                    <div class="form-group no-margin">
                        <input class="form-control no-border" id="search_term" name="s" placeholder="Type & Press Enter" type="text">
                    </div>
                </form>
                <button type="button" class="navbar-toggler navbar-toggler-left" data-toggle="collapse" data-target="#mega-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php if (get_field('main_logo')) : ?>
                    <a class="navbar-brand mr-auto m-sm-auto">
                        <img src="<?php echo get_field('main_logo')['url']; ?>" alt="roxine">
                        <img src="<?php echo get_field('main_logo')['url']; ?>" alt="roxine">
                    </a>
                <?php endif; ?>
                <div class="collapse navbar-collapse flex-row-reverse" id="mega-menu">
                    <ul class="nav navbar-nav">

                        <?php if (has_nav_menu('main-menu')) : ?>

                            <ul class="meneu-barr"><?php wp_nav_menu(array('theme_location' => 'main-menu')) ?></ul>

                        <?php else : ?>
                            <div class="header-menu-no-item-1">Please select a menu for this section</div>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="navbar-pos-search with-side-panel">
                    <a href="#" class="x-search x-search-trigger navbar-link"><i class="custom-icon-search"></i></a>
                    <a href="#" class="x-search icon-close-round navbar-link"><i class="icon-line-cross"></i></a>
                </div>
                <div class="nav-trigger navbar-pos-search overlay-trigger">
                    <a href="#" class="navbar-link"><i class="icon-sort-1"></i></a>
                </div>
            </nav>
        </div>
    </div>
</header>


<!--/header of the page -->