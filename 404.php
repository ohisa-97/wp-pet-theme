<?php get_header(); ?>

<main class="l-main">
  <!-- page-header（ページヘッダー） -->
  <?php
  get_template_part(
    'template-parts/page-header',
    null,
    [
      // ページタイトル
      'title_jp' => 'お探しのページが見つかりません',

      // 英語タイトル
      'title_en' => '404 Not Found',

      // ヘッダー画像
      // 画像のパスを指定してください
      'image' => [
        'src' => get_template_directory_uri() . '/img/404_header.jpg',
      ],
    ]
  );
  ?>
  <!-- breadcrumb（パンくずリスト） -->
  <?php get_template_part('template-parts/breadcrumb'); ?>

  <div class="l-page">
    <div class="l-container l-container--sm">
      <div class="l-page__inner">

        <!-- main-contents -->
        <div class="l-page__main">

          <!-- 404 -->
          <section class="p-404 js-fade-in">
            <div class="p-404__desc">
              <p class="p-404__text">
                お探しのページは見つかりませんでした。<br>
                ページは削除されたか、URLが変更された可能性があります。
              </p>
            </div>
            <div class="p-404__button">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="c-button">トップページへ戻る</a>
            </div>
          </section>

        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>