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
        'src' => get_template_directory_uri() . '/img/news_header.jpg',
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
          <section class="p-archive-news">
            <div class="p-archive-news__inner">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post();
                  $news_categories = get_the_terms(get_the_ID(), 'news_category');
                ?>

                  <article class="c-news-item js-fade-up">
                    <div class="c-news-item__body">
                      <div class="c-news-item__meta">
                        <time class="c-news-item__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                          <?php echo esc_html(get_the_date('Y.m.d')); ?>
                        </time>

                        <?php if ($news_categories && !is_wp_error($news_categories)) : ?>
                          <div class="c-news-item__categories">
                            <?php foreach ($news_categories as $category) : ?>
                              <a href="<?php echo esc_url(get_term_link($category)); ?>" class="c-category c-category--news">
                                <?php echo esc_html($category->name); ?>
                              </a>
                            <?php endforeach; ?>
                          </div>
                        <?php endif; ?>
                      </div>

                      <p class="c-news-item__title">
                        <a href="<?php the_permalink(); ?>" class="c-news-item__link">
                          <?php the_title(); ?>
                        </a>
                      </p>

                      <span class="c-news-item__arrow"></span>
                    </div>
                  </article>
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
                <p class="p-archive-news__empty">
                  現在、お知らせはありません。
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