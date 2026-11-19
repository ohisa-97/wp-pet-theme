document.addEventListener('DOMContentLoaded', () => {
	const mvSlider = document.querySelector('.p-index-mv__slider');

	if (!mvSlider) return;

	const swiper = new Swiper(mvSlider, {
		loop: true,
		effect: 'fade',
		fadeEffect: {
			crossFade: true,
		},
		speed: 2000, 
		autoplay: {
			delay: 3000, 
			disableOnInteraction: false, 
		},

		// アクセシビリティ
		a11y: {
			enabled: true,
			prevSlideMessage: '前のスライド',
			nextSlideMessage: '次のスライド',
			firstSlideMessage: '最初のスライド',
			lastSlideMessage: '最後のスライド',
		},

		// キーボード操作
		keyboard: {
			enabled: true,
			onlyInViewport: true,
		},
	});
});
