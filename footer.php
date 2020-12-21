<?php $translate = $GLOBALS['ltco_translate']['footer']; ?>
</main>
<footer class="ltco_footer">
  <div class="container py-5">
    <div class="row justify-content-between mt-n5">
      <div class="col-12 col-sm-6 col-lg-auto mt-5">
        <nav class="ltco_footer__nav">
          <h4 class="ltco_footer__heading"><?= ltco_translate(...$translate['title-nav-1']); ?></h4>
          <?php
            wp_nav_menu(
              array(
                'theme_location'  => 'footer-primary-nav',
                'depth'           => 0,
                'container'       => '',
                'menu_class'      => 'nav flex-column',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker()
              )
            );
          ?>
        </nav>
      </div>
      <div class="col-12 col-sm-6 col-lg-auto mt-5">
        <nav class="ltco_footer__nav">
          <h4 class="ltco_footer__heading"><?= ltco_translate(...$translate['title-nav-2']); ?></h4>
          <?php
            wp_nav_menu(
              array(
                'theme_location'  => 'footer-secondary-nav',
                'depth'           => 0,
                'container'       => '',
                'menu_class'      => 'nav flex-column',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker()
              )
            );
          ?>
        </nav>
      </div>
      <div class="col-12 col-sm-6 col-lg-auto mt-5">
        <div class="ltco_footer__social">
          <h4 class="ltco_footer__heading"><?= ltco_translate(...$translate['title-nav-3']); ?></h4>
          <?= ltco_social_nav(['theme'=>'dark', 'local'=>'footer']); ?>
        </div>
      </div>
      <div class="d-flex col-12 col-sm-6 col-lg-auto align-items-sm-start mt-5">
        <img class="ltco_scroll_top" src="<?= ltco_path('svgs'); ?>/icon-scroll-top.svg" width="80" alt="ltco-icon-scroll-top"/>
      </div>
    </div>
  </div>
  <div class="ltco_footer__copyright">
    <div class="container">
      <div class="d-flex align-items-center justify-content-center justify-content-sm-between">
        <span>© <?php bloginfo('name'); ?></span>
        <a class="ml-3" href="http://www.sinaispublicidade.com.br/" target="_blank" rel="external noopener noreferrer">
          <?= ltco_translate(...$translate['copyright']); ?>
        </a>
      </div>
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
