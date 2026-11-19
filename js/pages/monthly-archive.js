// 月別アーカイブのプルダウンで月を選択 → 該当のアーカイブページへ遷移する処理
// 対象ファイル：template-parts/monthly-archive-nav

document.addEventListener('DOMContentLoaded', function () {
	const select = document.getElementById('monthly-archive');

	if (!select) {
		return;
	}

	select.addEventListener('change', function () {
		if (this.value) {
			window.location.href = this.value;
		}
	});
});
