<?php
/**
 * 下層ページ共通ヘッダー
 *
 * 【主な機能】
 * ・ページタイトル（日本語・英語）を自動取得
 * ・英語タイトルはページスラッグから自動生成
 * ・背景画像の表示
 * ※タイトルを指定した場合は、自動取得よりも指定値を優先
 * 
 * 【使用方法】
 * get_template_part('template-parts/page-header', null, [
 *   'title_jp' => '',
 *   'title_en' => '',
 *   'image' => [
 *     'src' => get_template_directory_uri() . '/img/about_header.jpg',
 *   ],
 * ]);
 */
?>

<?php
$defaults = [
  'title_jp' => '',
  'title_en' => '',
  'image' => [
    'src' => '',
  ],
];

$args = wp_parse_args($args ?? [], $defaults);

// ページスラッグから英語タイトルを自動生成（単語の先頭を大文字で表示）
// 例：about → About
$slug_to_en = static function ($slug) {
  return ucwords(str_replace('-', ' ', $slug));
};

// 英語タイトルをすべて大文字で表示する場合は下記に変更
// 例：about → ABOUT
// $slug_to_en = static function ($slug) {
//   return strtoupper(str_replace('-', ' ', $slug));
// };

// ぺージタイトルを自動出力（title_jp / title_en が未指定の場合）
if (empty($args['title_jp']) || empty($args['title_en'])) {

  // 固定ページ
  if (is_page()) {

    $post_id = get_queried_object_id();

    if (empty($args['title_jp'])) {
      $args['title_jp'] = get_the_title($post_id);
    }

    if (empty($args['title_en'])) {
      $slug = get_post_field('post_name', $post_id);
      $args['title_en'] = $slug
        ? $slug_to_en($slug)
        : '';
    }

    // 投稿・カスタム投稿タイプ詳細
  } elseif (is_single()) {

    $post_type = get_post_type();
    $post_type_obj = get_post_type_object($post_type);

    if (empty($args['title_jp'])) {
      $args['title_jp'] =
        $post_type_obj->labels->singular_name
        ?? get_the_title();
    }

    if (empty($args['title_en'])) {
      $slug = get_post_field('post_name');

      $args['title_en'] = $slug
        ? $slug_to_en($slug)
        : '';
    }

    // 投稿一覧
  } elseif (is_home()) {

    $page_for_posts = get_option('page_for_posts');

    if (empty($args['title_jp'])) {
      $args['title_jp'] = get_the_title($page_for_posts);
    }

    if (empty($args['title_en'])) {
      $slug = get_post_field('post_name', $page_for_posts);

      $args['title_en'] = $slug
        ? $slug_to_en($slug)
        : 'Blog';
    }

    // タームアーカイブ
  } elseif (is_category() || is_tag() || is_tax()) {

    $term = get_queried_object();

    if (empty($args['title_jp'])) {
      $args['title_jp'] = $term->name ?? '';
    }

    if (empty($args['title_en'])) {
      $slug = $term->slug ?? '';

      $args['title_en'] = $slug
        ? $slug_to_en($slug)
        : '';
    }

    // カスタム投稿タイプアーカイブ
  } elseif (is_post_type_archive()) {

    $post_type_obj = get_queried_object();

    if (empty($args['title_jp'])) {
      $args['title_jp'] = $post_type_obj->label ?? '';
    }

    if (empty($args['title_en'])) {
      $slug = $post_type_obj->name ?? '';

      $args['title_en'] = $slug
        ? $slug_to_en($slug)
        : '';
    }

    // 404
  } elseif (is_404()) {

    if (empty($args['title_jp'])) {
      $args['title_jp'] = 'ページが見つかりません';
    }

    if (empty($args['title_en'])) {
      $args['title_en'] = '404 Not Found';
    }
  }
}

?>

<div class="p-page-header">
  <div class="p-page-header__inner">
    <!-- ページタイトル -->
    <h1 class="p-page-header__title">
      <span class="p-page-header__title-jp"><?php echo esc_html($args['title_jp']); ?></span>
      <span class="p-page-header__title-en"><?php echo esc_html($args['title_en']); ?></span>
    </h1>
    <!-- 背景画像 -->
    <?php if (!empty($args['image']['src'])) : ?>
      <div class="p-page-header__bg">
        <img src="<?php echo esc_url($args['image']['src']); ?>" alt="" loading="eager">
      </div>
    <?php endif; ?>
  </div>
</div>