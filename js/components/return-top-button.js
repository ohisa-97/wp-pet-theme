document.addEventListener('DOMContentLoaded', () => {
	const returnTop = document.querySelector('.c-return-top');
	const returnTopButton = document.querySelector('.c-return-top__button');

	if (!returnTop || !returnTopButton) return;

	const showPosition = 400;

	const toggleReturnTop = () => {
		const isShow = window.scrollY > showPosition;

		returnTop.classList.toggle('is-show', isShow);
		returnTop.setAttribute('aria-hidden', String(!isShow));
		returnTopButton.tabIndex = isShow ? 0 : -1;
	};

	// 初期状態
	toggleReturnTop();

	// スクロール時
	window.addEventListener('scroll', toggleReturnTop, {
		passive: true,
	});

	// ページトップへ戻る
	returnTopButton.addEventListener('click', () => {
		const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

		window.scrollTo({
			top: 0,
			behavior: prefersReducedMotion ? 'instant' : 'smooth',
		});
	});
});
