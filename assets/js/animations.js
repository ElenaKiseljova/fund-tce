'use strict';

document.addEventListener('DOMContentLoaded', () => {
  // Заголовки
  const titles = document.querySelectorAll('.js-transition-title');

  if (titles.length) {
    titles.forEach((title) => {
      const inner = title.innerHTML.trim();

      let separator = '<br>';

      if (inner.includes('<br />')) {
        separator = '<br />';
      } else if (inner.includes('<br/>')) {
        separator = '<br/>';
      }

      const innerSeparated = inner
        .split(separator)
        .map(
          (line) =>
            `<span class="js-transition-title-line" data-text="${line}">${line}</span>`
        )
        .join('');

      title.innerHTML = innerSeparated;
    });
  }
});

window.addEventListener('load', () => {
  // Locomotive Scroll
  const scroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true,
  });
});

