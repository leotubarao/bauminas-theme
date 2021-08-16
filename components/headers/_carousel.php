<?php
  $counter_loop_item = 0;

  function current_carousel($curr) {
    return ($curr===0) ? 'active' : '';
  }
?>

<header class="header ltco_carousel">
  <div id="carouselHeader" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">

      <?php while ( $counter_loop_item < 3 ) : ?>
      <div
        class="carousel-item ltco_carousel__item <?= current_carousel($counter_loop_item); ?>"
        style="background-image: url(<?= ltco_get_image_ref(); ?>)"
      >

        <div class="carousel-caption">
          <p class="h1">Grupo BAUMINAS</p>
          <p class="content">Da riqueza da terra<br>À pureza da água.</p>
          <a href="#" class="ltco_destak stretched-link">Clique e conheça</a>
        </div>

      </div>
      <?php $counter_loop_item++; endwhile; $counter_loop_item = 0; ?>

    </div>

    <ol class="carousel-indicators">
      <?php while ( $counter_loop_item < 3 ) : ?>
        <li
          data-target="#carouselHeader"
          data-slide-to="<?= $counter_loop_item; ?>"
          class="<?= current_carousel($counter_loop_item); ?>"
        ></li>
      <?php $counter_loop_item++; endwhile; ?>
    </ol>

    <a class="carousel-control-prev" href="#carouselHeader" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>

    <a class="carousel-control-next" href="#carouselHeader" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>

  </div>
</header>
