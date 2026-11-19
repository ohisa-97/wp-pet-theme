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
        'src' => get_template_directory_uri() . '/img/treatments_header.jpg',
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
              <li class="p-page-nav__item"><a href="#target" class="p-page-nav__link">診療対象動物</a></li>
              <li class="p-page-nav__item"><a href="#general" class="p-page-nav__link">一般診療</a></li>
              <li class="p-page-nav__item"><a href="#prevention" class="p-page-nav__link">予防医療</a></li>
              <li class="p-page-nav__item"><a href="#checkup" class="p-page-nav__link">健康診断</a></li>
              <li class="p-page-nav__item"><a href="#advanced" class="p-page-nav__link">高度医療</a></li>
            </ul>
          </nav>
        </div>

        <!-- main-contents -->
        <div class="l-page__main">

          <!-- message -->
          <section id="message" class="p-treatments-message u-mb-section">
            <div class="p-treatments-message__content js-fade-in">
              <div class="p-treatments-message__desc">
                <h2 class="p-treatments-message__copy">
                  その子に合った診療を、<br>
                  ご家族と一緒に。
                </h2>
                <p class="p-treatments-message__text">
                  動物たちの年齢や体質、生活環境、そしてご家族の想いはそれぞれ異なります。<br>当院では、目の前の症状だけでなく、その子の全身の状態や日々の暮らしにも目を向けながら診療を行っています。
                </p>
              </div>
              <div class="p-treatments-message__bg"></div>
            </div>
          </section>

          <!-- target -->
          <section id="target" class="p-treatments-target u-mb-10">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">Target Animals</span>
              <span class="c-section-title__jp">診療対象動物</span>
            </h2>
            <p class="p-treatments-target__text js-fade-in u-mb-6">
              当院では、犬・猫をはじめ、うさぎや鳥、ハムスターなどの小動物から、爬虫類や猛禽類まで、さまざまな動物の診療に対応しています。<br>
              動物の種類によって、体の仕組みや生活環境、必要なケアは異なります。それぞれの動物の特性を大切にしながら、一頭一羽に合わせた丁寧な診療を心がけています。いつもと違う様子や気になることがあれば、些細なことでもお気軽にご相談ください。
            </p>
            <div class="p-treatments-target__content">
              <div class="p-treatments-target__main-group js-stagger">
                <div class="p-treatments-target__item">
                  <div class="p-treatments-target__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/dog.png" alt="">
                  </div>
                  <div class="p-treatments-target__title">
                    <span class="p-treatments-target__title-jp">犬</span>
                    <span class="p-treatments-target__title-en">Dog</span>
                  </div>
                </div>
                <div class="p-treatments-target__item">
                  <div class="p-treatments-target__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cat.png" alt="">
                  </div>
                  <div class="p-treatments-target__title">
                    <span class="p-treatments-target__title-jp">猫</span>
                    <span class="p-treatments-target__title-en">Cat</span>
                  </div>
                </div>
              </div>
              <div class="p-treatments-target__sub-group js-stagger">
                <div class="p-treatments-target__item">
                  <div class="p-treatments-target__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/rabbit.png" alt="">
                  </div>
                  <div class="p-treatments-target__title">
                    <span class="p-treatments-target__title-jp">うさぎ</span>
                    <span class="p-treatments-target__title-en">Rabbit</span>
                  </div>
                </div>
                <div class="p-treatments-target__item">
                  <div class="p-treatments-target__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bird.png" alt="">
                  </div>
                  <div class="p-treatments-target__title">
                    <span class="p-treatments-target__title-jp">小鳥</span>
                    <span class="p-treatments-target__title-en">Bird</span>
                  </div>
                </div>
                <div class="p-treatments-target__item">
                  <div class="p-treatments-target__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hamster.png" alt="">
                  </div>
                  <div class="p-treatments-target__title">
                    <span class="p-treatments-target__title-jp">ハムスター</span>
                    <span class="p-treatments-target__title-en">Hamster</span>
                  </div>
                </div>
                <div class="p-treatments-target__item">
                  <div class="p-treatments-target__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/reptile.png" alt="">
                  </div>
                  <div class="p-treatments-target__title">
                    <span class="p-treatments-target__title-jp">爬虫類</span>
                    <span class="p-treatments-target__title-en">Reptile</span>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- general -->
          <section id="general" class="p-treatments-general u-mb-10">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">General</span>
              <span class="c-section-title__jp">一般診療</span>
            </h2>
            <div class="p-treatments__content u-mb-6">
              <div class="p-treatments__image js-blur-in">
                <img src="<?php echo get_template_directory_uri(); ?>/img/treatments-general.jpg" alt="">
              </div>
              <div class="p-treatments__desc js-fade-in js-fade-in">
                <p class="p-treatments__copy">
                  いつもと違う、<br>
                  その小さな変化を見逃さないために。
                </p>
                <p class="p-treatments__text">
                  食欲がない、元気がない、皮膚をかゆがる、吐いたり下痢をしたりするなど、日常のちょっとした体調の変化から、さまざまな病気やケガまで幅広く診察しています。<br>
                  動物たちは言葉で症状を伝えることができません。だからこそ、普段の様子やご家族からのお話を大切にしながら、身体検査や必要な検査を行い、原因や状態を丁寧に確認します。
                </p>
              </div>
            </div>
            <div class="p-treatments__sub-content js-fade-up js-fade-up">
              <h3 class="c-content-title">診療内容</h3>
              <dl class="c-desc-list--columns">
                <dt>一般内科</dt>
                <dd>下痢・嘔吐・食欲不振・咳・発熱など</dd>
                <dt>一般外科・整形外科</dt>
                <dd>軟部外科手術、骨折・脱臼の処置、創傷処置など</dd>
                <dt>皮膚科</dt>
                <dd>アトピー・アレルギー性皮膚炎、耳道疾患（外耳炎など）</dd>
                <dt>眼科</dt>
                <dd>結膜炎、角膜潰瘍、白内障など</dd>
                <dt>歯科口腔外科</dt>
                <dd>歯石除去（スケール）、歯周病予防、抜歯など</dd>
              </dl>
            </div>
          </section>

          <!-- prevention -->
          <section id="prevention" class="p-treatments-prevention u-mb-10">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">Prevention</span>
              <span class="c-section-title__jp">予防医療</span>
            </h2>
            <div class="p-treatments__content u-mb-6">
              <div class="p-treatments__image js-blur-in">
                <img src="<?php echo get_template_directory_uri(); ?>/img/treatments-prevention.jpg" alt="">
              </div>
              <div class="p-treatments__desc js-fade-in">
                <p class="p-treatments__copy">
                  病気にならないために、<br>
                  日頃からできることを。
                </p>
                <p class="p-treatments__text">
                  大切な家族と少しでも長く、元気に過ごすためには、病気の予防がとても大切です。<br>
                  当院では、混合ワクチンや狂犬病予防接種、フィラリア・ノミ・マダニ対策など、動物たちの健康を守るための予防診療を行っています。年齢や生活環境、動物の種類によって必要な予防は異なります。それぞれの子に合った予防方法や時期をご案内します。
                </p>
              </div>
            </div>
            <div class="p-treatments__sub-content js-fade-up">
              <h3 class="c-content-title">対応内容</h3>
              <ul class="c-desc-list--normal">
                <li>
                  <h4>狂犬病ワクチン接種</h4>
                  <p>狂犬病予防法により、生後91日以上の犬には年1回の接種と市区町村への登録が法律で義務付けられています。狂犬病は人にも感染し、発症するとほぼ100%死亡する恐ろしい病気です。</p>
                </li>
                <li>
                  <h4>混合ワクチン接種</h4>
                  <p>犬・猫のウイルス性感染症などを予防するためのワクチンです。感染すると重症化しやすい恐ろしい病気から愛犬・愛猫を守ります。</p>
                </li>
                <li>
                  <h4>フィラリア予防</h4>
                  <p>蚊が媒介して心臓や肺の血管に寄生虫が住み着き、命に関わる重大な症状を引き起こす「フィラリア症」を予防します。</p>
                </li>
                <li>
                  <h4>ノミ・マダニ予防</h4>
                  <p>草むらなどに潜むノミやマダニは、ペットの皮膚炎や貧血を引き起こすだけでなく、人にも感染する危険な病原体を媒介します。</p>
                </li>
                <li>
                  <h4>避妊・去勢手術</h4>
                  <p>望まない妊娠を防ぐだけでなく、将来的な生殖器系の病気リスクを大幅に低減します。</p>
                </li>
              </ul>
            </div>
          </section>

          <!-- checkup -->
          <section id="checkup" class="p-treatments-checkup u-mb-10">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">Checkup</span>
              <span class="c-section-title__jp">健康診断</span>
            </h2>
            <div class="p-treatments__content u-mb-6">
              <div class="p-treatments__image js-blur-in">
                <img src="<?php echo get_template_directory_uri(); ?>/img/treatments-checkup.jpg" alt="">
              </div>
              <div class="p-treatments__desc js-fade-in">
                <p class="p-treatments__copy">
                  元気な今だからこそ、<br>
                  健康チェックを。
                </p>
                <p class="p-treatments__text">
                  動物たちは、体調の変化を表に出さないことも少なくありません。見た目には元気そうでも、気づかないうちに病気が進行していることがあります。<br>
                  健康診断では、身体検査や血液検査などを通して、現在の健康状態を確認します。定期的に検査を受けることで、小さな異変や病気の早期発見につながります。
                </p>
              </div>
            </div>
            <div class="p-treatments__sub-content js-fade-up">
              <h3 class="c-content-title">コース内容</h3>
              <ul class="c-desc-list--box">
                <li>
                  <h4>ヤングコース（1〜6歳向け）</h4>
                  <p>身体検査・血液検査・尿検査・便検査を中心とした基本セット</p>
                </li>
                <li>
                  <h4>シニアコース（7歳〜向け）</h4>
                  <p>レントゲン・超音波（エコー）検査・心電図を加えた精密検査プラン</p>
                </li>
              </ul>
            </div>
          </section>

          <!-- advanced -->
          <section id="advanced" class="p-treatments-advanced">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">Advanced Care</span>
              <span class="c-section-title__jp">高度医療</span>
            </h2>
            <div class="p-treatments__content u-mb-6">
              <div class="p-treatments__image js-blur-in">
                <img src="<?php echo get_template_directory_uri(); ?>/img/treatments-advanced.jpg" alt="">
              </div>
              <div class="p-treatments__desc js-fade-in">
                <p class="p-treatments__copy">
                  より専門的な医療で、<br>
                  大切な命を支える。
                </p>
                <p class="p-treatments__text">
                  動物たちの病気や症状によっては、より詳しい検査や専門的な治療が必要になることがあります。<br>
                  当院では、一頭一頭の状態を丁寧に見極め、それぞれに適した医療をご提案しています。大切なご家族が安心して治療に向き合えるよう、飼い主様の想いにも寄り添いながら、より良い選択を一緒に考えていきます。
                </p>
              </div>
            </div>
            <div class="p-treatments__sub-content js-fade-up">
              <h3 class="c-content-title">当院の高度医療</h3>
              <ul class="c-desc-list--normal">
                <li>
                  <h4>最新の検査・手術設備</h4>
                  <p>CTスキャン、内視鏡、高周波手術器などを導入し、身体への負担が少ない精密な検査・手術を実施。</p>
                </li>
                <li>
                  <h4>専門チーム・大学病院との連携</h4>
                  <p>特定の専門分野（腫瘍科・循環器科・整形外科など）に強みを持つ獣医師が対応。必要に応じて二次診療施設や大学病院とシームレスに連携。</p>
                </li>
                <li>
                  <h4>インフォームド・コンセントの徹底</h4>
                  <p>リスクや費用、選択肢（積極的治療から緩和ケアまで）を丁寧に説明し、飼い主様とご家族に寄り添った治療計画をご提案。</p>
                </li>
              </ul>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>