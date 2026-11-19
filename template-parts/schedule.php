  <?php
  /**
   * 診療時間テーブル（共通パーツ）
   *
   * 【使用箇所】
   * ・ドロワーメニュー
   * ・フッターエリア
   * 
   * 【使用方法】
   * get_template_part('template-parts/schedule');
   */
  ?>
  <div class="c-schedule">
    <table class="c-schedule__table">
      <thead class="c-schedule__head">
        <tr>
          <th class="c-schedule__item u-left">診療時間</th>
          <th class="c-schedule__item">月</th>
          <th class="c-schedule__item">火</th>
          <th class="c-schedule__item">水</th>
          <th class="c-schedule__item">木</th>
          <th class="c-schedule__item">金</th>
          <th class="c-schedule__item">土</th>
          <th class="c-schedule__item">日祝</th>
        </tr>
      </thead>
      <tbody class="c-schedule__body">
        <tr>
          <th class="c-schedule__item u-left u-font-en">9:00〜13:30</th>
          <td class="c-schedule__item u-color-secondary">〇</td>
          <td class="c-schedule__item u-color-secondary">〇</td>
          <td class="c-schedule__item u-color-secondary">〇</td>
          <td class="c-schedule__item u-color-secondary">－</td>
          <td class="c-schedule__item u-color-secondary">〇</td>
          <td class="c-schedule__item u-color-secondary">〇</td>
          <td class="c-schedule__item">－</td>
        </tr>
        <tr>
          <th class="c-schedule__item u-left u-font-en">15:00〜19:00</th>
          <td class="c-schedule__item u-color-secondary">〇</td>
          <td class="c-schedule__item u-color-secondary">〇</td>
          <td class="c-schedule__item u-color-secondary">〇</td>
          <td class="c-schedule__item">－</td>
          <td class="c-schedule__item u-color-secondary">〇</td>
          <td class="c-schedule__item">－</td>
          <td class="c-schedule__item">－</td>
        </tr>
      </tbody>
    </table>
    <p class="c-schedule__note">※休診日：木曜・土曜午後・日曜・祝日</p>
  </div>