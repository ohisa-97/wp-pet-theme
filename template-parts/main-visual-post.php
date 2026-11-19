<?php

// 投稿日が新しい記事を1件表示
// 記事が1件もない場合はパネル全体を非表示

$mv_post_query = new WP_Query([
  'post_type'           => 'post',
  'posts_per_page'      => 1,
  'orderby'             => 'date',
  'order'               => 'DESC',
  'ignore_sticky_posts' => true,
]);
?>


<?php if ($mv_post_query->have_posts()) : ?>
  <?php while ($mv_post_query->have_posts()) : $mv_post_query->the_post();
    $categories = get_the_category();
  ?>

    <div class="p-index-mv__post">
      <div class="c-news-item">
        <div class="c-news-item__body">
          <div class="c-news-item__meta">
            <time class="c-news-item__date"
              datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
              <?php echo esc_html(get_the_date('Y.m.d')); ?>
            </time>

            <?php if ($categories) : ?>
              <div class="c-news-item__categories">
                <?php foreach ($categories as $category) : ?>
                  <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="c-category">
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
        </div>
      </div>
    </div>

  <?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_postdata(); ?>