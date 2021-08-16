<footer class="mb-4 mb-lg-0">
  <div class="ltco_footer_tags">
    <?php the_tags('Tags: ', ', '); ?>
  </div>
  <hr class="my-4">

  <div class="d-flex justify-content-between align-items-center">
    <p class="h1 mb-0">Gostou desse post? Compartilhe:</p>
    <nav class="ltco_share_wrapper ltco_social">
      <a
        href="http://www.facebook.com/sharer.php?u=<?= esc_url( get_permalink() ); ?>"
        class="facebook"
        target="_blank"
        rel="external noopener noreferrer"
        title="Compartilhar no Facebook"
      >
        <img
          src="<?= ltco_path('svgs').'/icon-social-facebook-dark.svg'; ?>"
          width="24"
          height="24"
          alt='ltco_icon_facebook'
        >
      </a>
      <a
        href="https://www.linkedin.com/cws/share?url=<?= esc_url( get_permalink() ); ?>"
        class="linkedin"
        target="_blank"
        rel="external noopener noreferrer"
        title="Compartilhar no LinkedIn"
      >
        <img
          src="<?= ltco_path('svgs').'/icon-social-linkedin-dark.svg'; ?>"
          width="24"
          height="24"
          alt='ltco_icon_linkedin'
        >
      </a>
    </nav>
  </div>

  <?= do_shortcode( '[contact-form-7 id="724" title="Blog" html_class="ltco_form"]' ); ?>
</footer>
