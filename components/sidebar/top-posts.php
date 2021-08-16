<?php
  $args = array(
    'post_type' => 'post',
    'showposts' => 5,
    'ignore_sticky_posts' => true
  );

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) :
?>
<section class="ltco_sidebar__blog">
  <h5>Top posts</h5>
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
  <article <?php post_class('ltco_sidebar__blog__item'); ?>>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="h6"><?php the_title(); ?></a>

    <footer>
      <span class="info-wrapper">
        <?= ltco_human_time(); ?>
          - Em <?= ltco_first_category(get_the_ID(), true); ?>
      </span>

      <div class="date">
        <?= get_post_time('d/m/Y'); ?>
      </div>
    </footer>

  </article>
  <?php endwhile; ?>
</section>
<?php endif; wp_reset_query(); ?>
