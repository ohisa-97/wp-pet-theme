document.addEventListener('DOMContentLoaded', () => {
	if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
		return;
	}

	gsap.registerPlugin(ScrollTrigger);

	// =====================================================
	// スクロールアニメーションの共通設定
	//
	// 基本的な調整は、下記の settings から変更してください。
	// =====================================================
	const settings = {
		duration: 1.2,
		start: 'top 75%',
		distanceY: 40,
		distanceX: 40,
		blur: 12,
		imageScale: 1.08,
		stagger: 0.3,
		ease: 'power2.out',
		once: true,
	};

	// ScrollTrigger設定
	const scrollTrigger = {
		start: settings.start,
		once: settings.once,
		markers: settings.markers,
	};

	// Fade In
	gsap.utils.toArray('.js-fade-in').forEach((element) => {
		gsap.from(element, {
			opacity: 0,
			duration: settings.duration,
			ease: settings.ease,
			scrollTrigger: {
				...scrollTrigger,
				trigger: element,
			},
		});
	});

	// Fade Up
	gsap.utils.toArray('.js-fade-up').forEach((element) => {
		gsap.from(element, {
			opacity: 0,
			y: settings.distanceY,
			duration: settings.duration,
			ease: settings.ease,
			scrollTrigger: {
				...scrollTrigger,
				trigger: element,
			},
		});
	});

	// Fade Left
	gsap.utils.toArray('.js-fade-left').forEach((element) => {
		gsap.from(element, {
			opacity: 0,
			x: settings.distanceX,
			duration: settings.duration,
			ease: settings.ease,

			scrollTrigger: {
				...scrollTrigger,
				trigger: element,
			},
		});
	});

	// Fade Right
	gsap.utils.toArray('.js-fade-right').forEach((element) => {
		gsap.from(element, {
			opacity: 0,
			x: -settings.distanceX,
			duration: settings.duration,
			ease: settings.ease,

			scrollTrigger: {
				...scrollTrigger,
				trigger: element,
			},
		});
	});

	// Blur In
	gsap.utils.toArray('.js-blur-in').forEach((element) => {
		gsap.from(element, {
			opacity: 0,
			filter: `blur(${settings.blur}px)`,
			duration: settings.duration,
			ease: settings.ease,

			scrollTrigger: {
				...scrollTrigger,
				trigger: element,
			},
		});
	});

	// Scale In
	gsap.utils.toArray('.js-scale-in').forEach((element) => {
		gsap.from(element, {
			opacity: 0,
			scale: 0.94,
			duration: settings.duration,
			ease: settings.ease,

			scrollTrigger: {
				...scrollTrigger,
				trigger: element,
			},
		});
	});

	// Image Reveal
	gsap.utils.toArray('.js-image-reveal').forEach((element) => {
		const image = element.querySelector('img');

		if (!image) return;

		gsap.from(element, {
			opacity: 0,
			duration: settings.duration,
			ease: settings.ease,

			scrollTrigger: {
				...scrollTrigger,
				trigger: element,
			},
		});

		gsap.from(image, {
			scale: settings.imageScale,
			duration: settings.duration + 0.2,
			ease: settings.ease,

			scrollTrigger: {
				...scrollTrigger,
				trigger: element,
			},
		});
	});

	// Stagger
	gsap.utils.toArray('.js-stagger').forEach((container) => {
		const items = container.children;

		if (!items.length) return;

		gsap.from(items, {
			opacity: 0,
			y: settings.distanceY,
			duration: settings.duration,
			stagger: settings.stagger,
			ease: settings.ease,

			scrollTrigger: {
				...scrollTrigger,
				trigger: container,
			},
		});
	});

	// Title Reveal
	gsap.utils.toArray('.js-title-reveal').forEach((element) => {
		gsap.from(element, {
			opacity: 0,
			y: 20,
			duration: 1.2,
			ease: 'power3.out',

			scrollTrigger: {
				...scrollTrigger,
				trigger: element,
			},
		});
	});

	// Parallax Image
	gsap.utils.toArray('.js-parallax').forEach((element) => {
		const image = element.querySelector('img');

		if (!image) return;

		gsap.fromTo(
			image,
			{
				yPercent: -8,
			},
			{
				yPercent: 8,
				ease: 'none',

				scrollTrigger: {
					trigger: element,
					start: 'top bottom',
					end: 'bottom top',
					scrub: true,
				},
			},
		);
	});

	// ページ読み込み後に位置を再計算
	window.addEventListener('load', () => {
		ScrollTrigger.refresh();
	});
});
