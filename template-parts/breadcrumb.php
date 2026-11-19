<?php
/**
 * パンくずリスト
 *
 * 【対応ページ】
 * ・固定ページ（親ページ・子ページ階層に対応）
 * ・通常投稿・カスタム投稿タイプ詳細
 * ・投稿一覧
 * ・カテゴリー・タグアーカイブ
 * ・カスタムタクソノミーアーカイブ
 * ・カスタム投稿タイプアーカイブ
 * ・日付アーカイブ
 * ・検索結果
 * ・404ページ
 * 
 * 【使用方法】
 * get_template_part('template-parts/breadcrumb');
 */
?>

<?php
// フロントページでは非表示
if (is_front_page()) {
  return;
}

// ------------------------------------------------------------
// パンくずデータ
// ------------------------------------------------------------

$items = [];

// HOME
$front_page_id = (int) get_option('page_on_front');

$items[] = [
  'url'   => home_url('/'),
  'label' => $front_page_id ? get_the_title($front_page_id) : 'HOME',
];

// 投稿ページ
$page_for_posts_id = (int) get_option('page_for_posts');

// ------------------------------------------------------------
// 投稿一覧
// ------------------------------------------------------------

if (is_home()) {
  if ($page_for_posts_id) {
    $items[] = [
      'url'   => '',
      'label' => get_the_title($page_for_posts_id),
    ];
  }

  // ------------------------------------------------------------
  // 固定ページ
  // ------------------------------------------------------------

} elseif (is_page()) {

  $page_id = get_queried_object_id();

  // 親ページ
  $ancestors = get_post_ancestors($page_id);

  if ($ancestors) {
    $ancestors = array_reverse($ancestors);

    foreach ($ancestors as $ancestor_id) {
      $items[] = [
        'url'   => get_permalink($ancestor_id),
        'label' => get_the_title($ancestor_id),
      ];
    }
  }

  // 現在ページ
  $items[] = [
    'url'   => '',
    'label' => get_the_title($page_id),
  ];


  // ------------------------------------------------------------
  // 通常投稿・カスタム投稿の詳細
  // ------------------------------------------------------------

} elseif (is_singular()) {

  $post_type = get_post_type();

  // 通常投稿
  if ('post' === $post_type) {

    if ($page_for_posts_id) {
      $items[] = [
        'url'   => get_permalink($page_for_posts_id),
        'label' => get_the_title($page_for_posts_id),
      ];
    }

    // カスタム投稿
  } else {

    $post_type_obj = get_post_type_object($post_type);
    $archive_url   = get_post_type_archive_link($post_type);

    if ($post_type_obj && $archive_url) {
      $items[] = [
        'url'   => $archive_url,
        'label' => $post_type_obj->labels->name,
      ];
    }
  }

  // 現在の投稿
  $items[] = [
    'url'   => '',
    'label' => get_the_title(),
  ];


  // ------------------------------------------------------------
  // カテゴリー
  // ------------------------------------------------------------

} elseif (is_category()) {

  if ($page_for_posts_id) {
    $items[] = [
      'url'   => get_permalink($page_for_posts_id),
      'label' => get_the_title($page_for_posts_id),
    ];
  }

  $term = get_queried_object();

  if ($term instanceof WP_Term) {
    $items[] = [
      'url'   => '',
      'label' => $term->name,
    ];
  }


  // ------------------------------------------------------------
  // タグ
  // ------------------------------------------------------------

} elseif (is_tag()) {

  if ($page_for_posts_id) {
    $items[] = [
      'url'   => get_permalink($page_for_posts_id),
      'label' => get_the_title($page_for_posts_id),
    ];
  }

  $term = get_queried_object();

  if ($term instanceof WP_Term) {
    $items[] = [
      'url'   => '',
      'label' => $term->name,
    ];
  }


  // ------------------------------------------------------------
  // カスタムタクソノミー
  // ------------------------------------------------------------

} elseif (is_tax()) {

  $term = get_queried_object();

  if ($term instanceof WP_Term) {

    $taxonomy = get_taxonomy($term->taxonomy);

    if ($taxonomy && !empty($taxonomy->object_type)) {

      $post_type = $taxonomy->object_type[0];

      $post_type_obj = get_post_type_object($post_type);
      $archive_url   = get_post_type_archive_link($post_type);

      if ($post_type_obj && $archive_url) {
        $items[] = [
          'url'   => $archive_url,
          'label' => $post_type_obj->labels->name,
        ];
      }
    }

    $items[] = [
      'url'   => '',
      'label' => $term->name,
    ];
  }


  // ------------------------------------------------------------
  // カスタム投稿タイプのアーカイブ
  // ------------------------------------------------------------

} elseif (is_post_type_archive()) {

  $post_type = get_query_var('post_type');

  if (is_array($post_type)) {
    $post_type = reset($post_type);
  }

  $post_type_obj = get_post_type_object($post_type);

  if ($post_type_obj) {
    $items[] = [
      'url'   => '',
      'label' => $post_type_obj->labels->name,
    ];
  }


  // ------------------------------------------------------------
  // 日付アーカイブ
  // ------------------------------------------------------------

} elseif (is_date()) {

  if (is_year()) {
    $label = get_the_date('Y年');
  } elseif (is_month()) {
    $label = get_the_date('Y年n月');
  } elseif (is_day()) {
    $label = get_the_date('Y年n月j日');
  } else {
    $label = 'アーカイブ';
  }

  $items[] = [
    'url'   => '',
    'label' => $label,
  ];


  // ------------------------------------------------------------
  // 検索結果
  // ------------------------------------------------------------

} elseif (is_search()) {

  $items[] = [
    'url'   => '',
    'label' => '「' . get_search_query() . '」の検索結果',
  ];


  // ------------------------------------------------------------
  // 404
  // ------------------------------------------------------------

} elseif (is_404()) {

  $items[] = [
    'url'   => '',
    'label' => 'ページが見つかりません',
  ];
}

?>

<nav class="c-breadcrumb" aria-label="パンくずリスト">
  <ol class="c-breadcrumb__list">
    <?php foreach ($items as $item) : ?>
      <li class="c-breadcrumb__item<?php echo empty($item['url']) ? ' c-breadcrumb__item--current' : ''; ?>">
        <?php if (!empty($item['url'])) : ?>
          <a href="<?php echo esc_url($item['url']); ?>" class="c-breadcrumb__link">
            <?php echo esc_html($item['label']); ?>
          </a>
        <?php else : ?>
          <span aria-current="page">
            <?php echo esc_html($item['label']); ?>
          </span>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ol>
</nav>