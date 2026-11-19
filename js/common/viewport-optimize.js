// 360px以下のビューポートを固定
(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  if (!viewport) return;

  let lastWidth = null;

  function switchViewport() {
    const currentWidth = window.outerWidth;

    // 横幅が変化していない場合は処理をスキップ
    if (currentWidth === lastWidth) return;

    const value =
      currentWidth > 360
        ? 'width=device-width,initial-scale=1'
        : 'width=360';

    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }

    lastWidth = currentWidth;
  }

  window.addEventListener('resize', switchViewport, false);
  switchViewport();
})();
