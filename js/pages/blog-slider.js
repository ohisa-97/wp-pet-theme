document.addEventListener('DOMContentLoaded', () => {
	const blogSlider = document.querySelector('.p-index-blog__swiper');

	if (!blogSlider) {
		return;
	}

	const slideCount = blogSlider.querySelectorAll('.swiper-slide').length;

	// -------------------------------------------
	// ブレイクポイントごとの表示枚数の設定
	// -------------------------------------------
	const sliderBreakpoints = {
		0: {
			slidesPerView: 1.5,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 2.5,
			spaceBetween: 20,
		},
		1024: {
			slidesPerView: 3.5,
			spaceBetween: 30,
		},
		1440: {
			slidesPerView: 4.5,
			spaceBetween: 30,
		},
	};

	const getCurrentSettings = () => {
		const width = window.innerWidth;

		const breakpoint = Object.keys(sliderBreakpoints)
			.map(Number)
			.filter((value) => value <= width)
			.sort((a, b) => b - a)[0];

		return sliderBreakpoints[breakpoint];
	};

	const settings = getCurrentSettings();

	const swiperBreakpoints = Object.fromEntries(
		Object.entries(sliderBreakpoints)
			.filter(([breakpoint]) => Number(breakpoint) > 0)
			.map(([breakpoint, config]) => [
				breakpoint,
				{
					slidesPerView: config.slidesPerView,
					spaceBetween: config.spaceBetween,
				},
			]),
	);

	const navigation = blogSlider.closest('.p-index-blog')?.querySelector('.p-index-blog__navigation');

	// -------------------------------------------
	// スライダー設定
	// -------------------------------------------
	const blogSwiper = new Swiper(blogSlider, {
		slidesPerView: settings.slidesPerView,
		spaceBetween: settings.spaceBetween,

		speed: 1000,
		autoplay: false,
		slidesOffsetAfter: 100,

		navigation: {
			prevEl: '.p-index-blog__prev',
			nextEl: '.p-index-blog__next',
		},

		keyboard: {
			enabled: true,
		},

		breakpoints: swiperBreakpoints,
	});

	// 記事数に応じてスライダー・ナビゲーションを制御
	const updateSliderState = () => {
		const currentSettings = getCurrentSettings();
		const slidable = slideCount > currentSettings.slidesPerView;

		blogSwiper.allowTouchMove = slidable;

		if (slidable) {
			blogSwiper.navigation.enable();
			blogSwiper.keyboard.enable();
			navigation?.classList.remove('is-hidden');
		} else {
			blogSwiper.navigation.disable();
			blogSwiper.keyboard.disable();
			navigation?.classList.add('is-hidden');
		}
	};

	updateSliderState();

	window.addEventListener('resize', updateSliderState);
});
