<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html">Hidayah</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">

      <?php if (has_nav_menu('main-menu')) : ?>
        <?php wp_nav_menu(array('theme_location' => 'main-menu')) ?>
      <?php else : ?>
        <div class="header-menu-no-item-1">Please select a menu for this section</div>
      <?php endif; ?>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->