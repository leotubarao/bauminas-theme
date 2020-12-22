<?php $translate = $GLOBALS['ltco_translate']['home']; ?>
<?php get_header(); ?>
<section class="ltco_home">
  <div class="ltco_home__wrapper_list">
    <div>
      <?php $units = get_page_by_path('unidades'); ?>
      <div class="ltco_home__wrapper_list__image" <?= ltco_thumbnail_post($units->ID); ?>></div>

      <div class="ltco_home__wrapper_list__content">
        <h3 class="h2"><?= ltco_translate($translate['unidades']['title']); ?></h3>
        <p><?= ltco_translate($translate['unidades']['description']); ?></p>
        <a href="<?= get_permalink($units->ID); ?>" class="ltco_destak">
          <?= ltco_translate($translate['unidades']['button']); ?>
        </a>
      </div>
    </div>
    <div>
      <div
        class="ltco_home__wrapper_list__image video"
        data-modal-video
        data-video-id="<?= get_field('ltco_video_id', 'options');?>"
        <?= ltco_thumbnail_post(['acf', 'ltco_video_image', 'options']); ?>
      ></div>

      <div class="ltco_home__wrapper_list__content">
        <h3 class="h2"><?= ltco_translate($translate['video']['title']); ?></h3>
        <p><?= ltco_translate($translate['video']['description']); ?></p>
        <a href="javascript:void(0)" data-modal-video data-video-id="<?= get_field('ltco_video_id', 'options');?>" class="ltco_destak video">
          <?= ltco_translate($translate['video']['button']); ?>
        </a>
      </div>
    </div>
  </div>

  <div class="ltco_home__triade py-5">
    <div class="ltco_home__triade__wrapper">
      <div class="ltco_home__triade__wrapper__item">
        <h3 class="h2"><?= ltco_translate($translate['grupo']['title']); ?></h3>
        <p><?= ltco_translate($translate['grupo']['description']); ?></p>
        <a href="<?= get_permalink(43); ?>" class="ltco_destak">
          <?= ltco_translate($translate['grupo']['button']); ?>
        </a>
      </div>
      <div class="divisor"></div>
      <div class="ltco_home__triade__wrapper__item">
        <h3 class="h2"><?= ltco_translate($translate['cv']['title']); ?></h3>
        <p><?= ltco_translate($translate['cv']['description']); ?></p>
        <a href="<?= home_url('contato'); ?>" class="ltco_destak">
          <?= ltco_translate($translate['cv']['button']); ?>
        </a>
      </div>
      <div class="divisor"></div>
      <div class="ltco_home__triade__wrapper__item">
        <h3 class="h2"><?= ltco_translate($translate['linkedin']['title']); ?></h3>
        <p><?= ltco_translate($translate['linkedin']['description']); ?></p>
        <a href="<?= esc_url( get_field( 'ltco_social_linkedin', 'options' ), 'https', '#' ); ?>" class="ltco_destak">
          <?= ltco_translate($translate['linkedin']['button']); ?>
        </a>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>