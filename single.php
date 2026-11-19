<?php get_header(); ?>

<main class="l-main">
  <!-- page-header（ページヘッダー） -->
  <?php
  get_template_part(
    'template-parts/page-header',
    null,
    [
      'title_jp' => 'ブログ',
      'title_en' => 'Blog',
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
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post();
              $categories = get_the_category();
            ?>

              <article class="p-single-blog js-fade-up">
                <div class="p-single-blog__inner">
                  <div class="p-single-blog__header">
                    <div class="p-single-blog__meta">
                      <time class="p-single-blog__date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                        <?php echo esc_html(get_the_date('Y.m.d')); ?>
                      </time>

                      <?php if (!empty($categories)) : ?>
                        <div class="p-single-blog__categories">
                          <?php foreach ($categories as $category) : ?>
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="c-category">
                              <?php echo esc_html($category->name); ?>
                            </a>
                          <?php endforeach; ?>
                        </div>
                      <?php endif; ?>
                    </div>

                    <h1 class="p-single-blog__title"><?php the_title(); ?></h1>
                  </div>

                  <figure class="p-single-blog__thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_template_directory_uri() . '/img/thumbnail.jpg'); ?>" alt="">
                    <?php endif; ?>
                  </figure>

                  <div class="p-single-blog__content"><?php the_content(); ?></div>

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