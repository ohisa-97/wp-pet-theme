<?php get_header(); ?>

<main class="l-main">
  <!-- page-header（ページヘッダー） -->
  <?php
  get_template_part(
    'template-parts/page-header',
    null,
    [
      // 空欄の場合：ページタイトルが自動で入ります
      // 指定する場合：「''」の中に入力してください
      'title_jp' => '',

      // 空欄の場合：ページスラッグから英語タイトルを自動生成します（例：about → About）
      // 指定する場合：「''」の中に入力してください
      'title_en' => '',

      // ヘッダー画像
      // 画像のパスを指定してください
      'image' => [
        'src' => get_template_directory_uri() . '/img/about_header.jpg',
      ],
    ]
  );
  ?>
  <!-- breadcrumb（パンくずリスト） -->
  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="l-page">
    <div class="l-container l-container--lg">
      <div class="l-page__inner">
        <!-- side-contents -->
        <div class="l-page__side js-fade-in">
          <!-- page-menu -->
          <nav class="p-page-nav" aria-label="ページ内ナビゲーション">
            <ul class="p-page-nav__list">
              <li class="p-page-nav__item"><a href="#greeting" class="p-page-nav__link">院長挨拶</a></li>
              <li class="p-page-nav__item"><a href="#staff" class="p-page-nav__link">スタッフ紹介</a></li>
              <li class="p-page-nav__item"><a href="#overview" class="p-page-nav__link">医院概要</a></li>
            </ul>
          </nav>
        </div>

        <!-- main-contents -->
        <div class="l-page__main">

          <!-- greeting -->
          <section id="greeting" class="p-about-greeting u-mb-section">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">Greeting</span>
              <span class="c-section-title__jp">院長挨拶</span>
            </h2>
            <div class="p-about-greeting__content u-mb-6">
              <div class="p-about-greeting__image js-blur-in">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about-greeting_doctor.jpg" alt="">
              </div>
              <div class="p-about-greeting__desc js-fade-in">
                <div class="p-about-greeting__name">
                  <span class="p-about-greeting__role">さっぽろ動物病院 院長</span>
                  <div class="p-about-greeting__person">
                    <span class="p-about-greeting__person-jp">山田 太郎</span>
                    <span class="p-about-greeting__person-en">Taro Yamada</span>
                  </div>
                </div>
                <p class="p-about-greeting__copy">
                  「ここに相談してよかった」と思える、<br class="u-pc-only">
                  一番身近な存在でありたい。
                </p>
                <p class="p-about-greeting__text">
                  私たちが日々の診療で何よりも大切にしているのは、動物たちと飼い主さまが紡ぐ穏やかな毎日に寄り添うことです。<br>
                  病気やけがの治療はもちろんのこと、健康管理や予防、そして「これってどうなのかな」と少し気になったことまで、いつでも気軽にお話しいただける場所でありたいと考えています。医療の技術や知識を磨くことはもちろん、それと同じくらい、ご家族の不安を受け止め、その子にとって最善の選択を一緒に考えていく姿勢を大切にしています。<br>
                  大切なご家族がいつまでもその子らしく健やかに過ごせるよう、スタッフ一丸となって温かく丁寧な医療をお届けしてまいります。どんな小さなことでも、どうぞ安心してご相談ください。
                </p>
              </div>
            </div>
            <div class="p-about-greeting__career js-fade-up">
              <div class="p-about-greeting__career-item">
                <h3 class="c-content-title">院長略歴</h3>
                <dl class="p-about-greeting__career-list">
                  <dt>2010年</dt>
                  <dd>札幌大学獣医学部 卒業</dd>
                  <dt>2010年〜</dt>
                  <dd>札幌市内の動物病院にて勤務</dd>
                  <dt>2021年</dt>
                  <dd>さっぽろ動物病院 開院</dd>
                </dl>
              </div>
              <div class="p-about-greeting__career-item">
                <h3 class="c-content-title">資格・所属</h3>
                <dl class="p-about-greeting__career-list">
                  <dt>資格</dt>
                  <dd>獣医師免許</dd>
                  <dt>所属学会</dt>
                  <dd>日本獣医師会 / 獣医がん学会 / 日本小動物獣医学会</dd>
                </dl>
              </div>
            </div>
          </section>

          <!-- staff -->
          <section id="staff" class="p-about-staff u-mb-section">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">Staff</span>
              <span class="c-section-title__jp">スタッフ紹介</span>
            </h2>
            <div class="p-about-staff__content">
              <ul class="p-about-staff__list js-stagger">
                <li class="p-about-staff__list-item">
                  <div class="p-about-staff__list-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                  </div>
                  <div class="p-about-staff__list-name">
                    <span class="p-about-staff__list-name-jp">山田 太郎</span>
                    <span class="p-about-staff__list-name-en">Taro Yamada</span>
                  </div>
                  <div class="p-about-staff__list-body">
                    <span class="p-about-staff__list-label">獣医師</span>
                  </div>
                </li>
                <li class="p-about-staff__list-item">
                  <div class="p-about-staff__list-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                  </div>
                  <div class="p-about-staff__list-name">
                    <span class="p-about-staff__list-name-jp">山田 太郎</span>
                    <span class="p-about-staff__list-name-en">Taro Yamada</span>
                  </div>
                  <div class="p-about-staff__list-body">
                    <span class="p-about-staff__list-label">獣医師</span>
                  </div>
                </li>
                <li class="p-about-staff__list-item">
                  <div class="p-about-staff__list-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                  </div>
                  <div class="p-about-staff__list-name">
                    <span class="p-about-staff__list-name-jp">山田 太郎</span>
                    <span class="p-about-staff__list-name-en">Taro Yamada</span>
                  </div>
                  <div class="p-about-staff__list-body">
                    <span class="p-about-staff__list-label">獣医師</span>
                  </div>
                </li>
                <li class="p-about-staff__list-item">
                  <div class="p-about-staff__list-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                  </div>
                  <div class="p-about-staff__list-name">
                    <span class="p-about-staff__list-name-jp">山田 太郎</span>
                    <span class="p-about-staff__list-name-en">Taro Yamada</span>
                  </div>
                  <div class="p-about-staff__list-body">
                    <span class="p-about-staff__list-label">獣医師</span>
                  </div>
                </li>
                <li class="p-about-staff__list-item">
                  <div class="p-about-staff__list-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                  </div>
                  <div class="p-about-staff__list-name">
                    <span class="p-about-staff__list-name-jp">山田 太郎</span>
                    <span class="p-about-staff__list-name-en">Taro Yamada</span>
                  </div>
                  <div class="p-about-staff__list-body">
                    <span class="p-about-staff__list-label">獣医師</span>
                  </div>
                </li>
                <li class="p-about-staff__list-item">
                  <div class="p-about-staff__list-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                  </div>
                  <div class="p-about-staff__list-name">
                    <span class="p-about-staff__list-name-jp">山田 太郎</span>
                    <span class="p-about-staff__list-name-en">Taro Yamada</span>
                  </div>
                  <div class="p-about-staff__list-body">
                    <span class="p-about-staff__list-label">獣医師</span>
                  </div>
                </li>
              </ul>
            </div>
          </section>

          <!-- overview -->
          <section id="overview" class="p-about-overview">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">Overview</span>
              <span class="c-section-title__jp">医院概要</span>
            </h2>
            <div class="p-about-overview__content js-fade-up">
              <table class="c-table p-about-overview__table">
                <tbody>
                  <tr>
                    <th>医院名</th>
                    <td>さっぽろ動物病院</td>
                  </tr>
                  <tr>
                    <th>院長名</th>
                    <td>山田 太郎</td>
                  </tr>
                  <tr>
                    <th>所在地</th>
                    <td>〒012-3456<br>北海道札幌市中央区北1条西2丁目3-4<br>
                      <a href="#" target="_blank" rel="noopener" class="c-link c-link--map">Google Map</a>
                    </td>
                  </tr>
                  <tr>
                    <th>電話番号</th>
                    <td><a href="tel:012-3456-7890" class="c-link c-link--tel">012-3456-7890</a></td>
                  </tr>
                  <tr>
                    <th>お支払い方法</th>
                    <td>
                      <ul class="c-list">
                        <li class="c-list__item">現金</li>
                        <li class="c-list__item">クレジットカード（VISA / MasterCard / JCB / AMERICAN EXPRESS / Diners / Discover）</li>
                        <li class="c-list__item">電子マネー（PayPay / iD / Edy / WAON / nanaco / QuicPay / 交通系IC）</li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>