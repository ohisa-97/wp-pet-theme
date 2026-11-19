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
        'src' => get_template_directory_uri() . '/img/first_header.jpg',
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
              <li class="p-page-nav__item"><a href="#checklist" class="p-page-nav__link">お持ちものについて</a></li>
              <li class="p-page-nav__item"><a href="#safety-notes" class="p-page-nav__link">ご来院時のお願い</a></li>
              <li class="p-page-nav__item"><a href="#flow" class="p-page-nav__link">診療の流れ</a></li>
            </ul>
          </nav>
        </div>

        <!-- main-contents -->
        <div class="l-page__main">

          <!-- message -->
          <section id="message" class="p-first-message u-mb-section">
            <div class="p-first-message__content">
              <div class="p-first-message__desc js-fade-in">
                <h2 class="p-first-message__copy">
                  初めてのご来院も、<br>
                  安心してお越しください。
                </h2>
                <p class="p-first-message__text">
                  当院では、動物たちとご家族の気持ちに寄り添った診療を心がけております。<br>
                  初めて当院を受診される方にも安心してお越しいただけるよう、ご来院前にご確認いただきたい持ちものや来院時のお願い、診療の流れについてご案内いたします。
                </p>
              </div>
              <div class="p-first-message__image js-blur-in">
                <img src="<?php echo get_template_directory_uri(); ?>/img/first-message.jpg" alt="">
              </div>
            </div>
          </section>

          <!-- checklist -->
          <section id="checklist" class="p-first-checklist u-mb-section">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">Checklist</span>
              <span class="c-section-title__jp">お持ちものについて</span>
            </h2>
            <p class="p-first-checklist__text js-fade-in u-mb-6">
              初めてのご来院の際は、以下の内容をご用意いただけると、スムーズで的確な診察につながります。
            </p>
            <div class="p-first-checklist__content js-fade-up">
              <dl class="c-desc-list--columns">
                <dt>各種証明書</dt>
                <dd>狂犬病予防注射済証、混合ワクチンの接種証明書、ペット保険証</dd>
                <dt>過去の治療データ</dt>
                <dd>他院での検査結果、投薬中のお薬、お薬手帳</dd>
                <dt>気になる症状の写真・メモ</dt>
                <dd>「いつから、どのような症状が出ているか」が分かる写真や動画、メモ</dd>
              </dl>
            </div>
          </section>

          <!-- safety-notes -->
          <section id="safety-notes" class="p-first-notes u-mb-section">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">Safety Notes</span>
              <span class="c-section-title__jp">ご来院時のお願い</span>
            </h2>
            <p class="p-first-notes__text js-fade-in u-mb-6">
              初めての場所や慣れない環境は、動物たちにとって緊張や不安を感じやすいものです。<br class="u-pc-only">
              万が一の脱走やケガなどのトラブルを防ぎ、すべての動物たちが安心して過ごせるよう、ご協力をお願いいたします。
            </p>
            <div class="p-first-notes__content js-fade-up">
              <ul class="c-desc-list--box">
                <li>
                  <h4>ワンちゃん</h4>
                  <p>リード（首輪やハーネス）を着用し短く持つか、キャリーバッグ・ケージに入れてお越しください。</p>
                </li>
                <li>
                  <h4>ネコちゃん</h4>
                  <p>キャリーバッグやファスナー付きの洗濯ネットに入れてお越しください。</p>
                </li>
                <li>
                  <h4>エキゾチックアニマル</h4>
                  <p>普段お使いのケージやキャリーケースに入れてお越しください。</p>
                </li>
              </ul>
            </div>
          </section>

          <!-- flow -->
          <section id="flow" class="p-first-flow">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">Flow</span>
              <span class="c-section-title__jp">診療の流れ</span>
            </h2>
            <div class="p-first-flow__content">
              <ol class="c-flow-list">
                <li class="c-flow-list__item js-fade-up">
                  <div class="c-flow-list__line">
                    <div class="c-flow-list__num"></div>
                  </div>
                  <div class="c-flow-list__desc">
                    <h3 class="c-flow-list__title">ご予約</h3>
                    <p class="c-flow-list__text">当院はスムーズにご案内できるよう、事前のご予約をおすすめしています。お電話またはWEB予約より、ご希望の日時をお知らせください。症状や気になることがございましたら、予約時にお気軽にご相談ください。</p>
                  </div>
                </li>
                <li class="c-flow-list__item js-fade-up">
                  <div class="c-flow-list__line">
                    <div class="c-flow-list__num"></div>
                  </div>
                  <div class="c-flow-list__desc">
                    <h3 class="c-flow-list__title">ご来院・受付</h3>
                    <p class="c-flow-list__text">ご予約の日時にご来院いただき、受付にてお名前をお伝えください。初診の方には問診票のご記入をお願いしています。事前に問診票をダウンロードしてご記入のうえお持ちいただくと、当日のご案内がスムーズです。</p>
                  </div>
                </li>
                <li class="c-flow-list__item js-fade-up">
                  <div class="c-flow-list__line">
                    <div class="c-flow-list__num"></div>
                  </div>
                  <div class="c-flow-list__desc">
                    <h3 class="c-flow-list__title">診察</h3>
                    <p class="c-flow-list__text">飼い主さまから症状や普段の様子について詳しくお話を伺います。「いつから、どのような症状があるか」がわかるメモや、スマホで撮影した写真・動画がございましたら、ぜひお見せください。その後、身体検査（視診・触診・聴診など）を行います。</p>
                  </div>
                </li>
                <li class="c-flow-list__item js-fade-up">
                  <div class="c-flow-list__line">
                    <div class="c-flow-list__num"></div>
                  </div>
                  <div class="c-flow-list__desc">
                    <h3 class="c-flow-list__title">検査</h3>
                    <p class="c-flow-list__text">身体検査だけでは原因の特定が難しい場合や、さらに詳しい評価が必要な場合は検査を行います。動物の種類や体調に合わせて、血液検査、レントゲン検査、超音波検査、糞便・尿検査などの検査をご提案し、飼い主さまにご納得いただいてから行います。</p>
                  </div>
                </li>
                <li class="c-flow-list__item js-fade-up">
                  <div class="c-flow-list__line">
                    <div class="c-flow-list__num"></div>
                  </div>
                  <div class="c-flow-list__desc">
                    <h3 class="c-flow-list__title">治療</h3>
                    <p class="c-flow-list__text">診察・検査結果をもとに、現在の病状や考えられる原因について分かりやすくご説明いたします。その上で、動物の体への負担やご家族のライフスタイルも考慮しながら、最適な治療方針（お薬の処方、処置、手術、食事療法など）を一緒に決定し、治療を進めます。</p>
                  </div>
                </li>
                <li class="c-flow-list__item js-fade-up">
                  <div class="c-flow-list__line">
                    <div class="c-flow-list__num"></div>
                  </div>
                  <div class="c-flow-list__desc">
                    <h3 class="c-flow-list__title">お会計・処方</h3>
                    <p class="c-flow-list__text">すべての診察・治療が終了しましたら、受付にてお会計をお願いいたします。お薬の処方がある場合は、ご自宅での飲ませ方やケア、日常生活での注意点についても丁寧にご説明いたします。定期的な通院が必要な場合は、今後のスケジュールもご案内いたします。</p>
                  </div>
                </li>
              </ol>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>