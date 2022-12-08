document.addEventListener('DOMContentLoaded', function (event) {
  //Бургер
  let header = document.querySelector('.header');
  let burger = document.querySelector('.burger');

  if (burger) {
    const rootElement = document.documentElement;

    const headerClickHandler = (evt) => {
      if (
        evt.target !== burger &&
        !evt.target.closest('.dropdown__head--arrow')
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

  // Табы
  // Стартовая секция
  const tabFundItem = document.querySelectorAll('.fund__tab');

  if (tabFundItem) {
    tabFundItem.forEach((item) => {
      item.addEventListener('click', () => {
        tabFundItem.forEach((el) => el.classList.remove('active'));
        item.classList.add('active');
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

  console.log('DOM fully loaded and parsed');
});

// document.addEventListener("DOMContentLoaded", (function (e) {
//     let s = document.querySelector(".header"), c = document.querySelector(".burger");
//     if (c) {
//         const e = document.documentElement;
//         c.addEventListener("click", (function () {
//             s.classList.toggle("open"), c.classList.toggle("open"), e.classList.toggle("block");
//             let t = document.querySelector(".header.open");
//             t && t.querySelectorAll(".header.open .nav__item").forEach((t => {
//                 t.addEventListener("click", (function () {
//                     s.classList.remove("open"), c.classList.remove("open"), e.classList.remove("block")
//                 }))
//             }))
//         }))
//     }
//     const t = document.querySelectorAll(".dropdown");
//     t && t.forEach(((e, s) => {
//         e.addEventListener("click", (() => {
//             e.classList.contains("open") ? e.classList.toggle("open") : (t.forEach((e => e.classList.remove("open"))), e.classList.add("open")), window.addEventListener("click", (s => {
//                 s.target.closest(".dropdown") || e.classList.remove("open")
//             }))
//         }))
//     }));

//     const o = document.querySelectorAll(".fund__tab");
//     o && o.forEach((e => {
//         e.addEventListener("click", (() => {
//             o.forEach((e => e.classList.remove("active"))), e.classList.add("active")
//         }))
//     }));
//     const r = document.querySelectorAll(".scope__item"), l = document.querySelectorAll(".scope__right .scope__card");
//     window.innerWidth >= 768 && r && r.forEach(((e, s) => {
//         e.addEventListener("click", (() => {
//             r.forEach((e => e.classList.remove("active"))), r[s].classList.add("active"), l.forEach((e => e.classList.remove("active"))), l[s].classList.add("active")
//         }))
//     })), window.innerWidth < 768 && r && r.forEach(((e, s) => {
//         e.classList.remove("active"), e.addEventListener("click", (() => {
//             r[s].classList.toggle("active")
//         }))
//     })), document.querySelector(".swiper") && (new Swiper(".swiperGallery", {
//         slidesPerView: 1,
//         spaceBetween: 15,
//         breakpoints: {481: {slidesPerView: 2, spaceBetween: 15}, 1024: {slidesPerView: 3, spaceBetween: 30}},
//         scrollbar: {el: ".scrollbar", draggable: !0, dragClass: "scrollbar__drag"}
//     }), new Swiper(".swiperDocs", {
//         slidesPerView: 1,
//         spaceBetween: 15,
//         breakpoints: {
//             481: {slidesPerView: 2, spaceBetween: 15},
//             768: {slidesPerView: 3, spaceBetween: 20},
//             1024: {slidesPerView: 4, spaceBetween: 30}
//         },
//         scrollbar: {el: ".scrollbar", draggable: !0, dragClass: "scrollbar__drag"}
//     })), console.log("DOM fully loaded and parsed")
// }));
