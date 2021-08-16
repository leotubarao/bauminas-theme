<nav class="ltco_navbar_top ltco_bg_dark">
	<div class="container d-flex flex-wrap align-items-center justify-content-between">
		<div class="ltco_navbar_top__search">
      <?php get_search_form(); ?>
		</div>
    <div class="ltco_navbar_top__languages">
      <span><?= ltco_translate( ['Idiomas', ['en' => 'Languages']] ); ?></span>
      <a href="<?= site_url(); ?>" class="ltco_icons__languages_br" <?= ltco_current_lang(); ?>>
        <span class="sr-only"><?= ltco_translate( ['Português', ['en' => 'Portuguese', 'es' => 'Portugués']] ); ?></span>
        <img src="<?= ltco_path('svgs'); ?>/icon-languages-br.svg" alt="ltco_icon_language_br">
      </a>
      <a href="<?= site_url( 'en' ); ?>" class="ltco_icons__languages_us" <?= ltco_current_lang('en'); ?>>
        <span class="sr-only"><?= ltco_translate( ['Inglês', ['en' => 'English', 'es' => 'Inglés']] ); ?></span>
        <img src="<?= ltco_path('svgs'); ?>/icon-languages-en.svg" alt="ltco_icon_language_us">
      </a>
      <a href="<?= site_url( 'es' ); ?>" class="ltco_icons__languages_es" <?= ltco_current_lang('es'); ?>>
        <span class="sr-only"><?= ltco_translate( ['Espanhol', ['en' => 'Spanish', 'es' => 'Español']] ); ?></span>
        <img src="<?= ltco_path('svgs'); ?>/icon-languages-es.svg" alt="ltco_icon_language_es">
      </a>
    </div>
    <div class="ltco_navbar_top__social">
      <?= ltco_social_nav(['theme' => 'light', 'local' => 'header']); ?>
    </div>
  </div>
</nav>
