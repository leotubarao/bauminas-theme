<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section <?php post_class('container ltco-py-2 ltco-py-md-4 ltco-py-lg-6'); ?>>

  <div class="row justify-content-between align-items-start">
    <article class="col-12 col-lg-9 col-xxl-8 order-lg-1">
      <?php the_content(); ?>
      <?php ltco_post_meta_edit('página', 'mt-3'); ?>
    </article>

    <?php get_sidebar(); ?>
  </div>

</section>
<?php endwhile; ?>
<?php get_template_part( 'components/company' ); ?>
<?php get_footer(); ?>
