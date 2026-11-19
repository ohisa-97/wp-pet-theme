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
        'src' => get_template_directory_uri() . '/img/facilities_header.jpg',
      ],
    ]
  );
  ?>
  <!-- breadcrumb（パンくずリスト） -->
  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="l-page">
    <div class="l-container l-container--md">
      <div class="l-page__inner">

        <!-- main-contents -->
        <div class="l-page__main">

          <!-- environment -->
          <section id="environment" class="p-facilities-environment u-mb-section">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">Clinic Environment</span>
              <span class="c-section-title__jp">院内環境</span>
            </h2>
            <div class="p-facilities__content">
              <div class="c-gallery">
                <div class="c-gallery__item js-fade-up c-gallery__item--col3">
                  <figure class="c-gallery__image c-gallery__image--wide">
                    <a href="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" data-lightbox="facilities-environment" data-title="">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                    </a>
                  </figure>
                  <h3 class="c-gallery__title">タイトルが入ります。</h3>
                  <p class="c-gallery__text">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
                </div>
                <div class="c-gallery__item js-fade-up">
                  <figure class="c-gallery__image c-gallery__image--square">
                    <a href="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" data-lightbox="facilities-environment" data-title="">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                    </a>
                  </figure>
                  <h3 class="c-gallery__title">タイトルが入ります。</h3>
                  <p class="c-gallery__text">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
                </div>
                <div class="c-gallery__item js-fade-up c-gallery__item--col2">
                  <figure class="c-gallery__image">
                    <a href="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" data-lightbox="facilities-environment" data-title="">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                    </a>
                  </figure>
                  <h3 class="c-gallery__title">タイトルが入ります。</h3>
                  <p class="c-gallery__text">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
                </div>
                <div class="c-gallery__item js-fade-up c-gallery__item--col2">
                  <figure class="c-gallery__image">
                    <a href="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" data-lightbox="facilities-environment" data-title="">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                    </a>
                  </figure>
                  <h3 class="c-gallery__title">タイトルが入ります。</h3>
                  <p class="c-gallery__text">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
                </div>
              </div>
            </div>
          </section>

          <!-- equipment -->
          <section id="equipment" class="p-facilities-equipment">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">Medical Equipment</span>
              <span class="c-section-title__jp">医療設備</span>
            </h2>
            <div class="p-facilities__content">
              <div class="c-gallery">
                <div class="c-gallery__item js-fade-up">
                  <figure class="c-gallery__image c-gallery__image--square">
                    <a href="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" data-lightbox="facilities-environment" data-title="">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                    </a>
                  </figure>
                  <h3 class="c-gallery__title">タイトルが入ります。</h3>
                  <p class="c-gallery__text">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
                </div>
                <div class="c-gallery__item js-fade-up c-gallery__item--col3">
                  <figure class="c-gallery__image c-gallery__image--wide">
                    <a href="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" data-lightbox="facilities-environment" data-title="">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                    </a>
                  </figure>
                  <h3 class="c-gallery__title">タイトルが入ります。</h3>
                  <p class="c-gallery__text">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
                </div>
                <div class="c-gallery__item js-fade-up c-gallery__item--col2">
                  <figure class="c-gallery__image c-gallery__image--square">
                    <a href="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" data-lightbox="facilities-environment" data-title="">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                    </a>
                  </figure>
                  <h3 class="c-gallery__title">タイトルが入ります。</h3>
                  <p class="c-gallery__text">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
                </div>
                <div class="c-gallery__item js-fade-up">
                  <figure class="c-gallery__image c-gallery__image--portrait">
                    <a href="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" data-lightbox="facilities-environment" data-title="">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                    </a>
                  </figure>
                  <h3 class="c-gallery__title">タイトルが入ります。</h3>
                  <p class="c-gallery__text">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
                </div>
                <div class="c-gallery__item js-fade-up">
                  <figure class="c-gallery__image c-gallery__image--portrait">
                    <a href="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" data-lightbox="facilities-environment" data-title="">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="">
                    </a>
                  </figure>
                  <h3 class="c-gallery__title">タイトルが入ります。</h3>
                  <p class="c-gallery__text">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>