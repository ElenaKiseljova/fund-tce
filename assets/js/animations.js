'use strict';

let scroll;

// Удаление хеша при переходе на страницу с якорем
const hash = window.location.hash;

history.pushState(
  '',
  document.title,
  window.location.pathname + window.location.search
);

// Плавный скролл к элементам при клике на якорные ссылки
const scrollSmooth = (container = document, callback) => {
  const hrefAttributes = container.querySelectorAll("a[href*='#']");

  hrefAttributes.forEach((item) => {
    const href = item.href.split('#');

    const CURRENT_URL = window.location.origin + window.location.pathname;

    if (href[0] === CURRENT_URL) {
      item?.addEventListener('click', (e) => {
        e.preventDefault();

        history.pushState(
          '',
          document.title,
          window.location.pathname + `#${href[1]}` + window.location.search
        );

        try {
          const scrollTarget = document.querySelector(`#${href[1]}`);
          if (scrollTarget && scroll?.scrollTo) {
            scroll.scrollTo(scrollTarget, {});
          }
        } catch (error) {}
      });
    }
  });
};

scrollSmooth(document);

window.addEventListener('popstate', (evt) => {
  if (scroll) {
    try {
      const hash = evt.target.window.location.hash;
      const hashEl = document.querySelector(hash);

      if (hashEl) {
        scroll.scrollTo(hashEl, {});
      }
    } catch (error) {}
  }
});

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
            `<span class="js-transition-text-line" style="--delay: ${
              0.4 + idx / 10
            }s;">${line.join(' ')}</span>`
        )
        .join('');
    });
  }
});

window.addEventListener('load', () => {
  // Locomotive Scroll
  scroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true,
    reloadOnContextChange: true,
  });

  if (scroll) {
    // Переход к элементу при загрузке страницы
    if (hash) {
      history.pushState(
        '',
        document.title,
        window.location.pathname + hash + window.location.search
      );

      try {
        const hashEl = document.querySelector(hash);

        if (hashEl) {
          scroll.scrollTo(hashEl, {});
        }
      } catch (error) {}
    }
  }
});

