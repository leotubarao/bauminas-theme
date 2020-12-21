<?php get_header(); ?>
<section class="container ltco-py-2 ltco-py-md-4 ltco-py-lg-6 ltco_search">

  <div class="row justify-content-between align-items-start">
    <?php get_template_part( 'components/nav-sidebar' ); ?>

    <section class="col-12 col-lg-9 col-xxl-8 mt-n2 p-0">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="ltco_search__item mt-2 p-3 d-flex justify-content-between align-items-center position-relative">
        <p class="h3 mb-0 flex-1"><?php the_title(); ?></p>
        <a href="<?php the_permalink(); ?>" class="ltco_destak darkblue bm-0 more stretched-link"></a>
      </div>
    <?php endwhile; ?>
    <?= ltco_post_navigation(); ?>
    </section>
  </div>

</section>
<?php get_template_part( 'components/cta-units' ); ?>
<?php get_footer(); ?>
