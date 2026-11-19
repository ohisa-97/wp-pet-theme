document.addEventListener('DOMContentLoaded', () => {
	const fixedCta = document.querySelector('.p-fixed-cta');

	if (!fixedCta) return;

	const showPosition = 400;

	const toggleFixedCta = () => {
		const isShow = window.scrollY > showPosition;

		fixedCta.classList.toggle('is-show', isShow);
	};

	// 初期状態
	toggleFixedCta();

	// スクロール時
	window.addEventListener('scroll', toggleFixedCta, {
		passive: true,
	});
});
