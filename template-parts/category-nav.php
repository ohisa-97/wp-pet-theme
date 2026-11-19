  <?php
  /**
   * 記事カテゴリーリスト
   *
   * ※通常投稿（post）/ カスタム投稿タイプ どちらでも使用可
   * 
   * 【使用方法】
   * get_template_part('template-parts/category-nav');
   */
  ?>

  <?php
  // 現在の投稿タイプを取得
  $post_type = get_post_type();
  // 投稿タイプに応じてリンク先を取得
  if ($post_type === 'post') {
    $archive_url = get_permalink(get_option('page_for_posts'));
    // 投稿ページが設定されていない場合はトップページ
    if (!$archive_url) {
      $archive_url = home_url('/');
    }
  } else {
    $archive_url = get_post_type_archive_link($post_type);
  }
  $is_all_active = is_home() || is_post_type_archive($post_type) || is_singular($post_type);
  ?>
  <nav class="p-category-nav" aria-label="記事カテゴリー一覧">
    <ul class="p-category-nav__list">
      <li class="p-category-nav__item">
        <a href="<?php echo esc_url($archive_url); ?>"
          class="p-category-nav__link <?php echo $is_all_active ? 'is-active' : ''; ?>"
          <?php echo $is_all_active ? 'aria-current="page"' : ''; ?>>
          全て
        </a>
      </li>


      <?php
      // 投稿タイプに紐づくタクソノミーを取得
      $taxonomies = get_object_taxonomies($post_type, 'objects');

      foreach ($taxonomies as $taxonomy) :
        if ($taxonomy->public && $taxonomy->hierarchical) :

          $terms = get_terms(array(
            'taxonomy'   => $taxonomy->name,
            'hide_empty' => true,
          ));

          if (!is_wp_error($terms) && !empty($terms)) :
            foreach ($terms as $term) :

              // 現在のカテゴリー・タームか判定
              $is_active = is_tax($taxonomy->name, $term->slug);

              // 通常投稿の標準カテゴリーにも対応
              if ($post_type === 'post' && $taxonomy->name === 'category') {
                $is_active = is_category($term->term_id);
              }
      ?>
              <li class="p-category-nav__item">
                <a
                  href="<?php echo esc_url(get_term_link($term)); ?>"
                  class="p-category-nav__link <?php echo $is_active ? 'is-active' : ''; ?>"
                  <?php echo $is_active ? 'aria-current="page"' : ''; ?>>
                  <?php echo esc_html($term->name); ?>
                </a>
              </li>
      <?php
            endforeach;
          endif;

        endif;
      endforeach;
      ?>

    </ul>
  </nav>