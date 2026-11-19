<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="p-search-form">
  <label for="search-input" class="screen-reader-text">検索キーワード</label>
  <input type="search" id="search-input" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="キーワードを入力" class="p-search-form__input">
  <button type="submit" class="p-search-form__button"></button>
</form>