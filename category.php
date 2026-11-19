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
        <!-- side-contents -->
        <div class="l-page__side js-fade-in">
          <!-- category-nav（記事カテゴリー） -->
          <div class="l-page__side-group">
            <h2 class="l-page__side-title">Category</h2>
            <?php get_template_part('template-parts/category-nav'); ?>
          </div>
          <!-- monthly-archive（月別アーカイブ） -->
          <div class="l-page__side-group">
            <h2 class="l-page__side-title">Archive</h2>
            <?php get_template_part('template-parts/monthly-archive-nav'); ?>
          </div>
          <!-- search-form（検索フォーム） -->
          <div class="l-page__side-group">
            <?php get_template_part('template-parts/search-form'); ?>
          </div>
        </div>

        <!-- main-contents -->
        <div class="l-page__main">
          <section class="p-archive-blog">
            <div class="p-archive-blog__inner">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post();
                  $categories = get_the_category();
                ?>

                  <article class="p-archive-blog__card js-fade-up">
                    <figure class="p-archive-blog__thumbnail">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/thumbnail.jpg'); ?>" alt="">
                      <?php endif; ?>
                    </figure>

                    <time class="p-archive-blog__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                      <?php echo esc_html(get_the_date('Y.m.d')); ?>
                    </time>

                    <div class="p-archive-blog__content">
                      <p class="p-archive-blog__title">
                        <a href="<?php the_permalink(); ?>" class="p-archive-blog__link">
                          <?php the_title(); ?>
                        </a>
                      </p>

                      <?php if (!empty($categories)) : ?>
                        <div class="p-archive-blog__categories">
                          <?php foreach ($categories as $category) : ?>
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="c-category">
                              <?php echo esc_html($category->name); ?>
                            </a>
                          <?php endforeach; ?>
                        </div>
                      <?php endif; ?>

                    </div>

                    <span class="p-archive-blog__arrow"></span>
                  </article>

                <?php endwhile; ?>

                <!-- pagination -->
                <?php
                the_posts_pagination(
                  array(
                    'mid_size'  => 2,
                    'prev_text' => '<i class="c-icon--arrow-left"></i>',
                    'next_text' => '<i class="c-icon--arrow-right"></i>',
                  )
                );
                ?>

              <?php else : ?>
                <p class="p-archive-blog__empty">
                  現在、ブログ記事はありません。
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