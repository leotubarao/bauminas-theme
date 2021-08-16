<ul class="ltco_unidades__cat">
  <?php
    $taxonomyName = 'types-units';
    $terms = get_terms( $taxonomyName );

    foreach ($terms as $term) :
  ?>
  <li class="<?= $term->slug;?>"><?= ltco_title_units($term, 'cat'); ?></li>
  <?php endforeach; ?>
</ul>
