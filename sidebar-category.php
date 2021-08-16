<aside class="ltco_sidebar col-12 col-lg-3 order-lg-0">

  <?php
    $categories = get_categories();

    if ($categories) :
  ?>
  <nav class="navbar px-0">
    <h5 class="ltco_sidebar__header">
      <?= ltco_translate(['Categorias', ['en'=>'Categories']]); ?>
    </h5>
    <div class="ltco_sidebar__nav collapse navbar-collapse show">
      <ul class="navbar-nav ltco_sidebar__nav__menu">

        <?php foreach ($categories as $category) : ?>
        <li class="nav-item">
          <a href="<?= get_category_link( $category->term_id ); ?>" class="nav-link">
            <span itemprop="name"><?= $category->name; ?></span>
          </a>
        </li>
        <?php endforeach; ?>

      </ul>
    </div>
  </nav>
  <?php endif; ?>

  <?php get_template_part('components/sidebar/top-posts'); ?>

</aside>
