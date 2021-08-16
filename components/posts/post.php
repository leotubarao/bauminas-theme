<?php $class = $args['class'] ?>
<article <?php post_class("ltco_blog__lists__item $class"); ?>>
  <figure <?= ( ltco_thumbnail_post() ) ?: ltco_thumbnail_post('ref'); ?>></figure>

  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="h4"><?php the_title(); ?></a>

  <footer>
    <div class="info">
      <span class="info-wrapper">
        <?= ltco_human_time(); ?>
          - Em <?= ltco_first_category(get_the_ID(), true); ?>
      </span>
      <div class="date">
        <?= ltco_the_date(); ?>
      </div>
    </div>

    <a href="<?php the_permalink(); ?>" class="ltco_destak">Saiba mais</a>
  </footer>

</article>
