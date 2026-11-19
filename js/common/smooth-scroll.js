// Lenis によるページ全体のスムーススクロール
document.addEventListener('DOMContentLoaded', () => {
	const lenis = new Lenis({
		smoothWheel: true,
		lerp: 0.08,
	});

	window.lenis = lenis;

	function raf(time) {
		lenis.raf(time);
		requestAnimationFrame(raf);
	}

	requestAnimationFrame(raf);

	// ページ内リンクのスムーススクロール
	document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
		anchor.addEventListener('click', (e) => {
			const target = document.querySelector(anchor.getAttribute('href'));

			if (!target) return;

			e.preventDefault();

			lenis.scrollTo(target);
		});
	});
});
