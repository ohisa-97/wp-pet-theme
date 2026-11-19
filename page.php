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
        'src' => get_template_directory_uri() . '/img/blog_header.jpg',
      ],
    ]
  );
  ?>
  <!-- breadcrumb（パンくずリスト） -->
  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="l-page">
    <div class="l-container l-container--lg">
      <div class="l-page__inner">

        <!-- main-contents -->
        <div class="l-page__main">

          <div class="p-page-content">
            <?php the_content(); ?>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>