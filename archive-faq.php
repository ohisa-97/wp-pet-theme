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
      'title_jp' => 'よくあるご質問',

      // 空欄の場合：ページスラッグから英語タイトルを自動生成します（例：about → About）
      // 指定する場合：「''」の中に入力してください
      'title_en' => '',

      // ヘッダー画像
      // 画像のパスを指定してください
      'image' => [
        'src' => get_template_directory_uri() . '/img/faq_header.jpg',
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
          <!-- category-nav（記事カテゴリー） -->
          <div class="l-page__side-group">
            <h2 class="l-page__side-title">Category</h2>
            <?php get_template_part('template-parts/category-nav'); ?>
          </div>
        </div>

        <!-- main-contents -->
        <div class="l-page__main">
          <section class="p-archive-faq">
            <div class="p-archive-faq__inner">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <?php
                  $question = get_the_title();
                  $answer   = apply_filters('the_content', get_the_content());
                  $faq_categories = get_the_terms(get_the_ID(), 'faq_category');
                  ?>

                  <details class="c-faq-item js-fade-up">
                    <summary class="c-faq-item__question">
                      <div class="c-faq-item__question-inner">
                        <div class="c-faq-item__title c-faq-item__text">
                          <?php echo esc_html($question); ?>
                        </div>
                        <?php if ($faq_categories && !is_wp_error($faq_categories)) : ?>
                          <div class="c-faq-item__categories">
                            <?php foreach ($faq_categories as $category) : ?>
                              <span class="c-category"><?php echo esc_html($category->name); ?></span>
                            <?php endforeach; ?>
                          </div>
                        <?php endif; ?>
                      </div>
                      <span class="c-faq-item__toggle" aria-hidden="true">
                        <i class="c-icon--plus"></i>
                      </span>
                    </summary>

                    <div class="c-faq-item__answer">
                      <div class="c-faq-item__content c-faq-item__text">
                        <?php echo wp_kses_post($answer); ?>
                      </div>
                    </div>
                  </details>
                <?php endwhile; ?>

                <!-- pagination -->
                <?php
                the_posts_pagination(
                  [
                    'mid_size'  => 2,
                    'prev_text' => '<i class="c-icon--arrow-left"></i>',
                    'next_text' => '<i class="c-icon--arrow-right"></i>',
                  ]
                );
                ?>

              <?php else : ?>
                <p class="p-archive-faq__empty">
                  現在、FAQはありません。
                </p>
              <?php endif; ?>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>