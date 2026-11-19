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
        'src' => get_template_directory_uri() . '/img/contact_header.jpg',
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

          <!-- contact -->
          <section id="contact-from" class="p-contact-from">
            <h2 class="c-section-title js-fade-in">
              <span class="c-section-title__en">Contact Form</span>
              <span class="c-section-title__jp">お問い合わせフォーム</span>
            </h2>
            <?php the_content(); ?>
          </section>


        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>