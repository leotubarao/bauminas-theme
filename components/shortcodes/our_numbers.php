<div class="ltco_nossos_numeros__list">
  <?php
    $translate = $GLOBALS['ltco_translate']['our-numbers'];
    foreach ($translate as $item) :
  ?>
  <div class="item d-flex align-items-center">
    <span class="item__circle"><?= ltco_translate( $item['title'] ); ?></span>
    <p class="item__description"><?= ltco_translate( $item['description'] ); ?></p>
  </div>
  <?php endforeach; ?>
</div>
