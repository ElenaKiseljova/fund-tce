document.addEventListener('DOMContentLoaded', function (event) {
  //Бургер
  let header = document.querySelector('.header');
  let burger = document.querySelector('.burger');

  if (burger) {
    const rootElement = document.documentElement;

    const headerClickHandler = (evt) => {
      if (
        evt.target !== burger &&
        !evt.target.closest('.dropdown__head--arrow') &&
        !evt.target.closest('.header__lang')
      ) {
        header.classList.remove('open');
        burger.classList.remove('open');
        rootElement.classList.remove('block');

        header.removeEventListener('click', headerClickHandler);
      }
    };

    burger.addEventListener('click', function () {
      if (burger.classList.contains('open')) {
        header.classList.remove('open');
        burger.classList.remove('open');
        rootElement.classList.remove('block');

        header.removeEventListener('click', headerClickHandler);
      } else {
        header.classList.add('open');
        burger.classList.add('open');
        rootElement.classList.add('block');

        header.addEventListener('click', headerClickHandler);
      }
    });
  }

  // Дропдаун
  const dropdown = document.querySelectorAll('.dropdown');

  if (dropdown) {
    dropdown.forEach((item, index) => {
      item.addEventListener('click', () => {
        if (!item.classList.contains('open')) {
          dropdown.forEach((el) => el.classList.remove('open'));
          item.classList.add('open');
        } else {
          item.classList.toggle('open');
        }

        window.addEventListener('click', (e) => {
          if (!e.target.closest('.dropdown')) {
            item.classList.remove('open');
          }
        });
      });
    });
  }

  // Секция "Сфери діяльності фонду"
  const tabScopeItem = document.querySelectorAll('.scope__item');
  const tabScopeContent = document.querySelectorAll(
    '.scope__right .scope__card'
  );

  if (window.innerWidth >= 768 && tabScopeItem) {
    tabScopeItem.forEach((item, index) => {
      item.addEventListener('click', () => {
        tabScopeItem.forEach((el) => el.classList.remove('active'));
        tabScopeItem[index].classList.add('active');

        tabScopeContent.forEach((el) => el.classList.remove('active'));
        tabScopeContent[index].classList.add('active');
      });
    });
  }

  // Аккордеон
  if (window.innerWidth < 768 && tabScopeItem) {
    tabScopeItem.forEach((item, index) => {
      item.classList.remove('active');

      item.addEventListener('click', () => {
        tabScopeItem[index].classList.toggle('active');
      });
    });
  }

  // Слайдер
  if (document.querySelector('.swiper')) {
    const swiperGallery = new Swiper('.swiperGallery', {
      slidesPerView: 1,
      spaceBetween: 15,

      breakpoints: {
        481: {
          slidesPerView: 2,
          spaceBetween: 15,
        },

        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },

      scrollbar: {
        el: '.scrollbar',
        draggable: true,
        dragClass: 'scrollbar__drag',
      },
    });

    const swiperDocs = new Swiper('.swiperDocs', {
      slidesPerView: 1,
      spaceBetween: 15,

      breakpoints: {
        481: {
          slidesPerView: 2,
          spaceBetween: 15,
        },

        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },

        1024: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
      },

      scrollbar: {
        el: '.scrollbar',
        draggable: true,
        dragClass: 'scrollbar__drag',
      },
    });
  }

  // Select
  const selects = document.querySelectorAll('select');

  if (selects.length && typeof customSelect === 'function') {
    selects.forEach((select) => {
      customSelect(select);
    });
  }

  // console.log('DOM fully loaded and parsed');
});
