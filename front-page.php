<?php $translate = $GLOBALS['ltco_translate']['home']; ?>
<?php get_header(); ?>
<?php get_template_part( 'components/company' ); ?>
<section class="ltco_home">
  <div class="ltco_home__wrapper_list">
    <div>
      <?php $units = get_page_by_path('unidades'); ?>
      <div class="ltco_home__wrapper_list__image" <?= ltco_thumbnail_post('unidades'); ?>></div>

      <div class="ltco_home__wrapper_list__content">
        <h3 class="h2"><?= get_the_title($units->ID); ?></h3>
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
        data-video-id="<?= ltco_translate_acf(['ltco_video_id', 'options']);?>"
        <?= ltco_thumbnail_post(['acf', 'ltco_video_image', 'options']); ?>
      ></div>

      <div class="ltco_home__wrapper_list__content">
        <h3 class="h2"><?= ltco_translate($translate['video']['title']); ?></h3>
        <p><?= ltco_translate($translate['video']['description']); ?></p>
        <a href="javascript:void(0)" data-modal-video data-video-id="<?= ltco_translate_acf(['ltco_video_id', 'options']);?>" class="ltco_destak video">
          <?= ltco_translate($translate['video']['button']); ?>
        </a>
      </div>
    </div>
  </div>

  <div class="ltco_home__triade">
    <div class="ltco_home__triade__wrapper container">
      <div class="ltco_home__triade__wrapper__item">
        <h3 class="h2"><?= ltco_translate($translate['grupo']['title']); ?></h3>
        <p><?= ltco_translate($translate['grupo']['description']); ?></p>
        <a href="<?= get_permalink(45); ?>" class="ltco_destak">
          <?= ltco_translate($translate['grupo']['button']); ?>
        </a>
      </div>
      <div class="divisor"></div>
      <div class="ltco_home__triade__wrapper__item">
        <h3 class="h2"><?= ltco_translate($translate['cv']['title']); ?></h3>
        <p><?= ltco_translate($translate['cv']['description']); ?></p>
        <a href="<?= home_url('cv'); ?>" class="ltco_destak">
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
