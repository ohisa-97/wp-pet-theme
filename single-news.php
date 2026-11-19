<?php get_header(); ?>

<main class="l-main">
  <!-- page-header（ページヘッダー） -->
  <?php
  get_template_part(
    'template-parts/page-header',
    null,
    [
      'title_jp' => 'お知らせ',
      'title_en' => 'News',
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
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();
              $news_categories = get_the_terms(get_the_ID(), 'news_category');
            ?>

              <article class="p-single-news js-fade-up">
                <div class="p-single-news__inner">
                  <div class="p-single-news__header">
                    <div class="p-single-news__meta">
                      <time class="p-single-news__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                        <?php echo esc_html(get_the_date('Y.m.d')); ?>
                      </time>

                      <?php if ($news_categories && !is_wp_error($news_categories)) : ?>
                        <div class="p-single-news__categories">
                          <?php foreach ($news_categories as $category) : ?>
                            <a href="<?php echo esc_url(get_term_link($category)); ?>" class="c-category c-category--news">
                              <?php echo esc_html($category->name); ?>
                            </a>
                          <?php endforeach; ?>
                        </div>
                      <?php endif; ?>
                    </div>

                    <h1 class="p-single-news__title"><?php the_title(); ?></h1>
                  </div>

                  <div class="p-single-news__content"><?php the_content(); ?></div>

                </div>
              </article>

            <?php endwhile; ?>
          <?php endif; ?>

          <!-- pagination -->
          <?php get_template_part('template-parts/single-post-nav'); ?>

        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>