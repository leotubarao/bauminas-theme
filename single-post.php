<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section <?php post_class('container ltco-py-2 ltco-py-md-4 ltco-py-lg-6'); ?>>

  <div class="row justify-content-between align-items-start">
    <article class="col-12 col-lg-9 col-xxl-8 order-lg-1">
      <div class="info d-flex flex-column flex-md-row justify-content-between mb-n3">
        <p><?= ltco_translate('Postado em', ['en'=>'Posted', 'es'=>'Postado'])?>: <strong class="text-secondary"><?= ltco_the_date(); ?></strong></p>
        <p>
          <span>Por: <?php the_author_posts_link(); ?></span>
          <span class="ml-3">Em: <?= ltco_first_category(get_the_ID(), true); ?></span>
        </p>
      </div>
      <hr class="my-4">
      <?php the_content(); ?>

      <?php get_template_part( 'components/footer-post' ); ?>

      <?php ltco_post_meta_edit('post', 'mt-3'); ?>
    </article>

    <?php get_sidebar('category'); ?>
  </div>

</section>
<?php endwhile; ?>
<?php get_template_part( 'components/company' ); ?>
<?php get_footer(); ?>
