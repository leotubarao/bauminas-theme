<?php
  if ( has_excerpt() ) $excerpt = get_the_excerpt();
  if ( has_post_thumbnail() ) $ltco_has_thumb = 'ltco_has_thumb';
?>

<header class="header default <?= $ltco_has_thumb ?>" <?= ltco_thumbnail_post(); ?>>
  <div class="container ltco_title_header">
    <h1><?= ltco_title(); ?></h1>
    <p class="mb-0"><?= $excerpt; ?></p>
  </div>
</header>
