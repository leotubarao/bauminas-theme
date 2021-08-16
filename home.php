<?php get_header(); ?>
<section class="container ltco-py-2 ltco-py-md-4 ltco-py-lg-6">

  <div class="row justify-content-between align-items-start">
    <section class="ltco_blog__lists col-12 col-lg-9 col-xxl-8 order-lg-1">

      <?php get_template_part('components/featured-post'); ?>

      <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('components/posts/post'); ?>
      <?php endwhile; ?>

      <?= ltco_post_navigation(); ?>

    </section>

    <?php get_sidebar('category'); ?>
  </div>

</section>
<?php get_template_part( 'components/company' ); ?>
<?php get_footer(); ?>
