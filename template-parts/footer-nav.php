<nav class="l-footer__nav" aria-label="フッターメニュー">
  <div class="l-footer__nav-columns">
    <div class="l-footer__nav-column">
      <ul class="l-footer__nav-parent">
        <li class="l-footer__nav-item">
          <a href="<?php echo home_url(); ?>" class="l-footer__nav-link">ホーム</a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo home_url('/first-visit/'); ?>" class="l-footer__nav-link">初診の方へ</a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo home_url('/faq/'); ?>" class="l-footer__nav-link">よくあるご質問</a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo home_url('/news/'); ?>" class="l-footer__nav-link">お知らせ</a>
        </li>
        <li class="l-footer__nav-item">
          <a href="<?php echo home_url('/blog/'); ?>" class="l-footer__nav-link">ブログ</a>
        </li>
      </ul>
    </div>
    <div class="l-footer__nav-column">
      <ul class="l-footer__nav-parent">
        <li class="l-footer__nav-item">
          <a href="<?php echo home_url('/treatments/'); ?>" class="l-footer__nav-link">診療案内</a>

          <!-- 子メニュー -->
          <ul class="l-footer__nav-child">
            <li class="l-footer__nav-item">
              <a href="<?php echo home_url('/treatments/#target'); ?>" class="l-footer__nav-link">診療対象動物</a>
            </li>
            <li class="l-footer__nav-item">
              <a href="<?php echo home_url('/treatments/#general'); ?>" class="l-footer__nav-link">一般診療</a>
            </li>
            <li class="l-footer__nav-item">
              <a href="<?php echo home_url('/treatments/#prevention'); ?>" class="l-footer__nav-link">予防医療</a>
            </li>
            <li class="l-footer__nav-item">
              <a href="<?php echo home_url('/treatments/#checkup'); ?>" class="l-footer__nav-link">健康診断</a>
            </li>
            <li class="l-footer__nav-item">
              <a href="<?php echo home_url('/treatments/#advanced'); ?>" class="l-footer__nav-link">高度医療</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="l-footer__nav-column">
      <ul class="l-footer__nav-parent">
        <li class="l-footer__nav-item">
          <a href="<?php echo home_url('/about/'); ?>" class="l-footer__nav-link">当院について</a>
          
          <!-- 子メニュー -->
          <ul class="l-footer__nav-child">
            <li class="l-footer__nav-item">
              <a href="<?php echo home_url('/about/#greeting'); ?>" class="l-footer__nav-link">院長挨拶</a>
            </li>
            <li class="l-footer__nav-item">
              <a href="<?php echo home_url('/about/#staff'); ?>" class="l-footer__nav-link">スタッフ紹介</a>
            </li>
            <li class="l-footer__nav-item">
              <a href="<?php echo home_url('/about/#overview'); ?>" class="l-footer__nav-link">医院概要</a>
            </li>
            <li class="l-footer__nav-item">
              <a href="<?php echo home_url('/facilities/'); ?>" class="l-footer__nav-link">院内紹介</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>