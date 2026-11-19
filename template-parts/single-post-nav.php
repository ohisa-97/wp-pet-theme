<?php
/**
 * 記事ナビゲーション
 *
 * 【使用方法】
 * get_template_part('template-parts/single-post-nav');
 */
$prev_post = get_previous_post();
$next_post = get_next_post();
?>

<nav class="c-single-navigation" aria-label="投稿ナビゲーション">
  <div class="c-single-navigation__prev">
    <?php if ($prev_post) : ?>
      <a href="<?php echo esc_url(get_permalink($prev_post)); ?>" class="c-single-navigation__link">
        <i class="c-icon--arrow-left"></i>
      </a>
    <?php endif; ?>
  </div>

  <div class="c-single-navigation__list">
    <a href="<?php echo esc_url(get_post_type_archive_link(get_post_type())); ?>" class="c-single-navigation__link">
      一覧へ戻る
    </a>
  </div>

  <div class="c-single-navigation__next">
    <?php if ($next_post) : ?>
      <a href="<?php echo esc_url(get_permalink($next_post)); ?>" class="c-single-navigation__link">
        <i class="c-icon--arrow-right"></i>
      </a>
    <?php endif; ?>
  </div>
</nav>