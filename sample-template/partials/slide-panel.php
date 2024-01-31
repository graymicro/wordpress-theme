    <!--Side panel-->
    <nav class="nav-wrap bg-white">
        <!-- opener inside of collapsible menu -->
        <div class="nav-trigger nav-trigger-close">
            <a href="#">Close Panel <i class="icon-long-arrow-right"></i> </a>
            <div class="divider-border"><span class="sr-only"></span></div>
        </div>

        <div class="col-sm-6 pb-3">
            <a href="#" class="btn btn-black btn-small-font btn-solid-facebook has-radius-small"><span class="icon-facebook"><span class="sr-only">&nbsp;</span></span> LOGIN WITH FACEBOOK</a>
        </div>
        <div class="col-sm-6">
            <a href="#" class="btn btn-black btn-small-font btn-solid-google has-radius-small"><span class="icon-google-plus"><span class="sr-only">&nbsp;</span></span> LOGIN WITH GOOGLE</a>
        </div>
        <div class="divider-border"><span class="sr-only"></span></div>
        <ul class="side-nav">
            <?php if (has_nav_menu('main-menu')) : ?>
                <?php wp_nav_menu(array('theme_location' => 'main-menu')) ?>
            <?php else : ?>
                <div class="header-menu-no-item-2">Please select a menu for this section</div>
            <?php endif; ?>
        </ul>
        <nav class="header-links">
            <ul>
                <?php if (has_nav_menu('complete-menu')) : ?>
                    <?php wp_nav_menu(array('theme_location' => 'complete-menu')) ?>
                <?php else : ?>
                    <div class="header-menu-no-item-3">Please select a menu for this section</div>
                <?php endif; ?>
            </ul>
        </nav>
        <div class="divider-border"><span class="sr-only"></span></div>
        <div class="p-3">
            <ul class="social-network square-icon shadowed-icon">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-google-plus"></span></a></li>
                <li><a href="#"><span class="icon-pinterest"></span></a></li>
                <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
        </div>
    </nav>