<aside class="ltco_sidebar col-12 col-lg-3 order-lg-0">
	<nav class="navbar px-0">
    <div class="ltco_sidebar__nav collapse navbar-collapse show">
    <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'header-visible-nav',
          'depth'           => 2,
          'container'       => '',
          'menu_class'      => 'navbar-nav ltco_sidebar__nav__menu',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker()
        )
      );
    ?>
    </div>
  </nav>
</aside>
