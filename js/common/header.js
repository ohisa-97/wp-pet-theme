// =====================================================
// ヘッダー
// =====================================================
document.addEventListener('DOMContentLoaded', () => {
	const header = document.getElementById('js-header');
	const hamburger = document.getElementById('js-hamburger');
	const drawer = document.getElementById('headerDrawer');
	const overlay = document.getElementById('js-overlay');

	if (!header || !hamburger || !drawer || !overlay) return;

	const visual = document.querySelector('.p-index-mv, .p-page-header'); 

	let lastScrollY = window.scrollY;
	let isDrawerOpen = false;

	// -------------------------------------------
	// ヘッダー スクロール制御
	// -------------------------------------------
	const updateHeader = () => {
		// ドロワー表示中はヘッダーを固定
		if (isDrawerOpen) return;

		const currentScrollY = window.scrollY;

		// スクロール位置による表示カラー変更
		if (visual) {
			const visualBottom = visual.getBoundingClientRect().bottom;
			header.classList.toggle('is-colored', visualBottom <= 0);
		}

		// ページ最上部は表示
		if (currentScrollY <= 0) {
			header.classList.remove('is-hidden');
			lastScrollY = currentScrollY;
			return;
		}

		// 下スクロール時は非表示
		if (currentScrollY > lastScrollY) {
			header.classList.add('is-hidden');
		}

		// 上スクロール時は表示
		else if (currentScrollY < lastScrollY) {
			header.classList.remove('is-hidden');
		}

		lastScrollY = currentScrollY;
	};

	window.addEventListener('scroll', updateHeader, { passive: true });
	updateHeader();

	// -------------------------------------------
	// Lenis制御
	// -------------------------------------------
	const stopLenis = () => {
		if (window.lenis) {
			window.lenis.stop();
		}
	};

	const startLenis = () => {
		if (window.lenis) {
			window.lenis.start();
		}
	};

	// -------------------------------------------
	// ドロワー OPEN
	// -------------------------------------------
	const openDrawer = () => {
		if (isDrawerOpen) return;
		isDrawerOpen = true;

		// ヘッダー
		header.classList.add('is-drawer-open');

		// ドロワー表示中はhiddenを解除
		header.classList.remove('is-hidden');

		// ハンバーガーボタン
		hamburger.classList.add('is-active');
		hamburger.setAttribute('aria-expanded', 'true');
		hamburger.setAttribute('aria-label', 'メニューを閉じる');

		// ドロワー
		drawer.inert = false;
		drawer.setAttribute('aria-hidden', 'false');

		// 背面スクロール停止
		stopLenis();
		document.documentElement.classList.add('is-drawer-open');
		document.body.classList.add('is-drawer-open');
	};

	// -------------------------------------------
	// ドロワー CLOSE
	// -------------------------------------------
	const closeDrawer = () => {
		if (!isDrawerOpen) return;
		isDrawerOpen = false;

		// ヘッダー
		header.classList.remove('is-drawer-open');

		// ハンバーガーボタン
		hamburger.classList.remove('is-active');
		hamburger.setAttribute('aria-expanded', 'false');
		hamburger.setAttribute('aria-label', 'メニューを開く');

		// ドロワー
		drawer.inert = true;
		drawer.setAttribute('aria-hidden', 'true');

		// 子メニューを閉じる
		drawer.querySelectorAll('.l-header__drawer-nav-toggle').forEach((toggle) => {
			const parent = toggle.closest('.l-header__drawer-nav-parent');
			const panel = parent?.nextElementSibling;

			toggle.setAttribute('aria-expanded', 'false');

			if (panel?.classList.contains('l-header__drawer-nav-panel')) {
				panel.classList.remove('is-open');
			}
		});

		// 背面スクロール再開
		document.documentElement.classList.remove('is-drawer-open');
		document.body.classList.remove('is-drawer-open');
		startLenis();
		lastScrollY = window.scrollY;
	};

	// -------------------------------------------
	// 開閉ボタン
	// -------------------------------------------
	const toggleDrawer = () => {
		if (isDrawerOpen) {
			closeDrawer();
		} else {
			openDrawer();
		}
	};

	// ハンバーガーボタン
	hamburger.addEventListener('click', toggleDrawer);

	// オーバーレイをクリックで閉じる
	overlay.addEventListener('click', closeDrawer);

	// ドロワー内のリンクをクリックで閉じる
	drawer.querySelectorAll('a').forEach((link) => {
		link.addEventListener('click', closeDrawer);
	});

	// ESCキーで閉じる
	document.addEventListener('keydown', (event) => {
		if (event.key === 'Escape' && isDrawerOpen) {
			closeDrawer();
		}
	});

	// 初期状態
	drawer.setAttribute('aria-hidden', 'true');
});

// =====================================================
// ドロワー子メニュー
// =====================================================
document.addEventListener('DOMContentLoaded', () => {
	const toggles = document.querySelectorAll('.l-header__drawer-nav-toggle');

	toggles.forEach((toggle) => {
		const parent = toggle.closest('.l-header__drawer-nav-parent');
		const panel = parent?.nextElementSibling;

		if (!panel || !panel.classList.contains('l-header__drawer-nav-panel')) return;

		toggle.addEventListener('click', () => {
			const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
			const nextState = !isExpanded;

			// 他の子メニューを閉じる
			toggles.forEach((otherToggle) => {
				if (otherToggle === toggle) return;

				const otherParent = otherToggle.closest('.l-header__drawer-nav-parent');
				const otherPanel = otherParent?.nextElementSibling;

				otherToggle.setAttribute('aria-expanded', 'false');
				otherPanel?.classList.remove('is-open');
			});

			// 開閉状態
			toggle.setAttribute('aria-expanded', String(nextState));
			panel.classList.toggle('is-open', nextState);

			// パネルの表示・非表示
			panel.inert = !nextState;
		});
	});
});
