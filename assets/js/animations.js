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

  // Тексты
  const texts = document.querySelectorAll('.js-transition-text');

  if (texts.length) {
    texts.forEach((text) => {
      // Разделение на слова
      const wordsHTML = text.innerHTML
        .trim()
        .split(' ')
        .map((word) => `<span>${word}</span>`)
        .join(' ');

      // Заполнение словами
      text.innerHTML = wordsHTML;

      // Разбиение на строки
      const wordEls = text.querySelectorAll(':scope > span');

      const lines = [];
      let wordOffsetTop;
      let i = 0;
      wordEls.forEach((wordEl) => {
        if (typeof wordOffsetTop === 'undefined') {
          wordOffsetTop = wordEl.offsetTop;

          lines[i] = [wordEl.outerHTML];
        } else if (wordOffsetTop === wordEl.offsetTop) {
          lines[i].push(wordEl.outerHTML);
        } else if (wordOffsetTop !== wordEl.offsetTop) {
          wordOffsetTop = wordEl.offsetTop;
          i++;

          lines[i] = [wordEl.outerHTML];
        }
      });

      // Заполнение строками
      text.innerHTML = lines
        .map(
          (line, idx) =>
            `<span class="js-transition-text-line" style="--delay: 0.${
              4 + idx
            }s;">${line.join(' ')}</span>`
        )
        .join('');
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

