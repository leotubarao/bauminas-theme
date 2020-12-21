<?php
  $args = array(
    'post_type' => 'units',
    'order' => 'ASC',
    'orderby' => 'menu_order',
    'post_status' => 'publish',
    'showposts' => -1
  );

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) :
?>
<section class="ltco_unidades__lists">
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="ltco_unidades__lists__item">
    <figure <?= ltco_thumbnail_image(); ?>></figure>

    <h3 class="h4"><?php the_title(); ?></h3>

    <article>
      <?php the_content(); ?>
    </article>

    <?php
      $the_terms = get_the_terms( get_the_ID(), 'types-units' );
      if ( !empty( $the_terms ) && !is_wp_error( $the_terms ) ) :
    ?>
    <footer>
      <ul class="ltco_unidades__cat">

        <?php foreach ($the_terms as $term) : ?>
        <li class="<?= $term->slug; ?>"></li>
        <?php endforeach; ?>

      </ul>
    </footer>
    <?php endif; ?>

  </div>
  <?php endwhile; ?>
</section>
<?php endif; wp_reset_query(); ?>

