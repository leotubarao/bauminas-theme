<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section <?php post_class('container ltco-py-2 ltco-py-md-4 ltco-py-lg-6'); ?>>

  <div class="row justify-content-between align-items-start">
    <?php get_template_part( 'components/nav-sidebar' ); ?>

    <article class="col-12 col-lg-9 col-xxl-8">
      <?php the_content(); ?>
      <?php ltco_post_meta_edit('página', 'mt-3'); ?>
    </article>
  </div>

</section>
<?php endwhile; ?>
<?php if ( !is_page('unidades') ) get_template_part( 'components/cta-units' ); ?>
<?php get_footer(); ?>
