document.addEventListener('DOMContentLoaded', () => {
	// 対象のセクションを取得（存在しないページでは処理しない）
	const section = document.querySelector('.p-index-features');
	if (!section || typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
		return;
	}

	gsap.registerPlugin(ScrollTrigger);

	// =====================================================
	// アニメーション設定
	//
	// 基本的な調整は、settings から変更してください。
	// =====================================================

	const settings = {
		scale: 0.94, // Itemの縮小率
		imageScale: 1.12, // 初期の画像の拡大率
		y: '-2vh', // 上方向への移動量

		start: 'top top',
		end: '+=100%',
		scrub: true,

		markers: false, // 開発用マーカー
	};

	// PCのみアニメーションを有効化（1025px以上）
	const mm = gsap.matchMedia();

	mm.add('(min-width: 1025px)', () => {
		// 対象となるItemを取得
		const items = gsap.utils.toArray('.p-index-features__item', section);
		if (items.length < 2) return;

		// 初期設定
		gsap.set(items, {
			zIndex: (index) => index + 1,
		});

		gsap.set(section.querySelectorAll('.p-index-features__image img'), {
			scale: settings.imageScale,
		});

		// スクロールアニメーション設定
		items.forEach((item, index) => {
			if (index === items.length - 1) return;

			const inner = item.querySelector('.p-index-features__item-inner');
			const image = item.querySelector('.p-index-features__image img');

			if (!inner) return;

			const timeline = gsap.timeline({
				scrollTrigger: {
					trigger: item,
					start: settings.start,
					end: settings.end,
					scrub: settings.scrub,
					markers: settings.markers,
					invalidateOnRefresh: true,
				},
			});

			// Item全体
			timeline.to(
				inner,
				{
					scale: settings.scale,
					y: settings.y,
					ease: 'none',
				},
				0,
			);

			// 画像
			if (image) {
				timeline.to(
					image,
					{
						scale: 1,
						ease: 'none',
					},
					0,
				);
			}
		});

		// ページ読み込み後に位置を再計算
		window.addEventListener('load', () => {
			ScrollTrigger.refresh();
		});
	});
});
