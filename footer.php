<footer class="l-footer">
  <div class="l-container l-container--lg">
    <div class="l-footer__inner">
      <div class="l-footer__info">
        <!-- logo -->
        <div class="l-footer__logo">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer__logo-link">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo-color.png" alt="<?php bloginfo('name'); ?>" class="l-footer__logo-img"> -->
            <span class="l-footer__logo-text"><?php bloginfo('name'); ?></span>
          </a>
        </div>
        <!-- address -->
        <div class="l-footer__address">
          <address>
            〒012-3456<br>
            北海道札幌市中央区北1条西2丁目3-4
          </address>
          <a href="#" target="_blank" rel="noopener" class="c-link c-link--map">Google Map</a>
        </div>
        <!-- tel -->
        <div class="l-footer__tel">
          <a href="tel:012-3456-7890" class="l-footer__tel-link"><span>TEL.</span>012-3456-7890</a>
          <span class="l-footer__tel-time">受付時間 9:00～18:00</span>
        </div>
        <!-- cta -->
        <div class="l-footer__cta">
          <ul class="l-footer__cta-list">
            <li class="l-footer__cta-item">
              <a href="#" target="_blank" rel="noopener" class="l-footer__cta-link c-button">WEB予約</a>
            </li>
            <li class="l-footer__cta-item">
              <a href="#" target="_blank" rel="noopener" class="l-footer__cta-link c-button">LINE予約</a>
            </li>
          </ul>
        </div>
        <!-- sns -->
        <div class="l-footer__sns">
          <ul class="l-footer__sns-list">
            <li class="l-footer__sns-item">
              <a href="#" target="_blank" rel="noopener" class="l-footer__sns-link">
                <i class="c-icon--x"></i>
              </a>
            </li>
            <li class="l-footer__sns-item">
              <a href="#" target="_blank" rel="noopener" class="l-footer__sns-link">
                <i class="c-icon--facebook"></i>
              </a>
            </li>
            <li class="l-footer__sns-item">
              <a href="#" target="_blank" rel="noopener" class="l-footer__sns-link">
                <i class="c-icon--instagram"></i>
              </a>
            </li>
          </ul>
        </div>
        <!-- schedule -->
        <?php get_template_part('template-parts/schedule'); ?>
      </div>
      <div class="l-footer__menu">
        <!-- footer-menu -->
        <?php get_template_part('template-parts/footer-nav'); ?>
      </div>
    </div>
  </div>
  <!-- copy- -->
  <div class="l-footer__copyright">
    <div class="l-container l-container--lg">
      <small>&copy; <?php bloginfo('name'); ?> All rights reserved.</small>
    </div>
  </div>
</footer>

<!-- return-top -->
<div class="c-return-top">
  <button type="button" class="c-return-top__button" aria-label="ページトップへ戻る" tabindex="-1">
    <span class="c-return-top__arrow" aria-hidden="true"></span>
  </button>
</div>

<!-- fixed-cta（スマホ固定CTA） -->
<?php get_template_part('template-parts/fixed-cta-button'); ?>


<?php wp_footer(); ?>

</body>

</html>