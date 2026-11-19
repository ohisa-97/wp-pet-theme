  <?php
  /**
   * 月別アーカイブ：通常投稿（post）専用
   *
   * ※カスタム投稿タイプでは使用不可
   * 
   * 【使用方法】
   * get_template_part('template-parts/monthly-archive-nav');
   */
  ?>
  <nav class="p-archive-nav" aria-label="月別アーカイブ">
    <div class="p-archive-nav__select-wrap">
      <select class="p-archive-nav__select" id="monthly-archive" name="monthly-archive">
        <option value="">月を選択してください</option>

        <?php
        wp_get_archives(array(
          'type'            => 'monthly',
          'post_type'       => 'post',
          'format'          => 'option',
          'show_post_count' => false, // 各月の記事件数：false（表示しない）
          // 'limit'           => 1,    //  直近12ヶ月のみ表示する場合
        ));
        ?>
      </select>
    </div>
  </nav>
