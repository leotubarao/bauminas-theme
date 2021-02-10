<?php
  $taxonomyName = 'types-units';
  $terms = get_terms( $taxonomyName );

  foreach ($terms as $term) :

  $args = array(
    'post_type' => 'units',
    'order' => 'ASC',
    'orderby' => 'menu_order',
    'post_status' => 'publish',
    'showposts' => -1,
    'tax_query' => array(
      array(
        'taxonomy' => $taxonomyName,
        'terms' => $term->slug,
        'field' => 'slug',
      ),
    ),
  );

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) :
?>
<h2 class="mt-5"><?= ltco_title_units($term); ?></h2>
<section class="ltco_unidades__lists">
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="ltco_unidades__lists__item">
    <figure <?= ( ltco_thumbnail_post() ) ?: ltco_thumbnail_post('ref'); ?>></figure>

    <h3 class="h4"><?php the_title(); ?></h3>

    <article class="mb-n3">
      <?php the_content(); ?>
    </article>

  </div>
  <?php endwhile; ?>
</section>
<?php endif; wp_reset_query(); ?>
<?php endforeach; ?>
