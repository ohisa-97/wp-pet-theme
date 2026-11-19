document.addEventListener('DOMContentLoaded', () => {
  const faqItems = document.querySelectorAll('.c-faq-item');
  const duration = 600;

  faqItems.forEach((item) => {
    const summary = item.querySelector('.c-faq-item__question');
    const answer = item.querySelector('.c-faq-item__answer');

    summary.addEventListener('click', (event) => {
      event.preventDefault();

      // すでに開いている場合 → 閉じる
      if (item.open) {
        closeFaq(item, answer);
        return;
      }

      // 他のFAQを閉じる
      faqItems.forEach((otherItem) => {
        if (otherItem !== item && otherItem.open) {
          const otherAnswer = otherItem.querySelector('.c-faq-item__answer');
          closeFaq(otherItem, otherAnswer);
        }
      });

      // 開く
      openFaq(item, answer);
    });
  });

  function openFaq(item, answer) {
    item.open = true;
    item.classList.add('is-open');

    answer.style.height = '0px';
    answer.style.overflow = 'hidden';

    requestAnimationFrame(() => {
      answer.style.transition = `height ${duration}ms ease`;
      answer.style.height = `${answer.scrollHeight}px`;
    });

    answer.addEventListener(
      'transitionend',
      () => {
        answer.style.height = 'auto';
        answer.style.overflow = '';
        answer.style.transition = '';
      },
      { once: true }
    );
  }

  function closeFaq(item, answer) {
    item.classList.remove('is-open');
    answer.style.height = `${answer.scrollHeight}px`;
    answer.style.overflow = 'hidden';

    requestAnimationFrame(() => {
      answer.style.transition = `height ${duration}ms ease`;
      answer.style.height = '0px';
    });

    answer.addEventListener(
      'transitionend',
      () => {
        item.open = false;
        answer.style.height = '';
        answer.style.overflow = '';
        answer.style.transition = '';
      },
      { once: true }
    );
  }
});
