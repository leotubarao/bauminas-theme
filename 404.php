<?php $translate = $GLOBALS['ltco_translate']['error404']; ?>

<?php get_header('error'); ?>
<section class="wrapper-error m-auto">
  <h1 class="display-1">404</h1>
  <p class="h3"><?= ltco_translate(...$translate['title']); ?></p>
  <p><?= ltco_translate(...$translate['description']); ?></p>
  <a href="<?= home_url(); ?>" class="btn btn-primary text-white"><?= ltco_translate(...$translate['button']); ?></a>
</section>
<?php get_footer('error'); ?>
