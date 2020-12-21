<?php
  function choiceOption($params) {
    list($term, $query, $callback) = $params;

    return ( in_array( $term, explode( ',', $_GET[ $query ] ) ) ) ? $callback : '';
  }

  $selects = [
    [
      'tax-name' => 'line-products',
      'label' => ['Linhas', ['en'=>'Lines','es'=>'Líneas']]
    ],
    [
      'tax-name' => 'type-products',
      'label' => ['Tipos', ['en'=>'Types']]
    ]
  ];
?>
<form
  class="ltco_filter ltco-pb-1 ltco-mb-1 ltco-pb-sm-2 ltco-mb-sm-2 ltco-pb-lg-3 ltco-mb-lg-3"
  autocomplete='off'
>
  <input type="hidden" name="page" value="<?= get_post_field( 'post_name', $post->post_parent ); ?>">
  <div class="row">

    <?php
      foreach ($selects as $select) :

      $current_term = get_term_by( 'slug', ltco_parent_page(), $select['tax-name'] );
      $termchildren = get_term_children( $current_term->term_id, $select['tax-name'] );
      $args = array( 'include' => $termchildren );
      $terms = get_terms( $select['tax-name'], $args );

      if ( !empty( $terms ) && !is_wp_error( $terms ) ) :
    ?>
    <select data-filter="<?= $select['tax-name']; ?>" name="<?= $select['tax-name']; ?>" class="custom-select">
      <option value="all" selected><?= ltco_translate(...$select['label']); ?></option>
      <?php
        foreach ( $terms as $term ) :
          $termSlug = $term->slug;
          $termName = $term->name;
          $hasOnURLSelected = choiceOption( [$termSlug, $select['tax-name'], 'selected'] );

          echo "<option value='$termSlug' $hasOnURLSelected>$termName</option>";
        endforeach;
      ?>
    </select>

    <?php
      endif;
      endforeach;
    ?>

    <?php if (is_page( 136 )) : ?>

    <div class="custom-control custom-checkbox">
      <input
        class="custom-control-input"
        type="checkbox"
        name="sanitation"
        id="sanitation"
        <?= choiceOption( ['on', 'sanitation', 'checked'] ); ?>
      >
      <label class="custom-control-label" for="sanitation">Saneamento</label>
    </div>
    <div class="custom-control custom-checkbox orange">
      <input
        class="custom-control-input"
        type="checkbox"
        name="industrial"
        id="industrial"
        <?= choiceOption( ['on', 'industrial', 'checked'] ); ?>
      >
      <label class="custom-control-label" for="industrial">Industrial</label>
    </div>

    <?php endif; ?>

    <button type="submit" class="btn btn-primary"><?= ltco_translate('Filtrar', ['en'=>'Filter']); ?></button>
  </div>
</form>
