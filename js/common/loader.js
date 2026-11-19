document.addEventListener('DOMContentLoaded', () => {
	const loader = document.getElementById('loading');

	// 最大表示時間（ミリ秒）
	const MAX_LOADING_TIME = 5000;

	let isCompleted = false;
	let maxTimer;

	const finishLoading = () => {
		if (isCompleted) return;

		isCompleted = true;
		clearTimeout(maxTimer);

		// ローディングを終了
		loader?.classList.add('is-hidden');

		// メインビジュアル内のアニメーションを開始
		requestAnimationFrame(() => {
			document.body.classList.add('is-loaded');
		});
	};

	// 最大5秒でローディングを終了
	maxTimer = setTimeout(finishLoading, MAX_LOADING_TIME);

	// ページの読み込み完了
	if (document.readyState === 'complete') {
		finishLoading();
	} else {
		window.addEventListener('load', finishLoading, {
			once: true,
		});
	}
});
