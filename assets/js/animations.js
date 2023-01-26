'use strict';

window.addEventListener('load', () => {
  const scroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true,
  });

  // gsap.registerPlugin(ScrollTrigger);

  // gsap.to(img, {
  //   scrollTrigger: {
  //     trigger: 'header',
  //     start: 'top top',
  //     end: '+=1500',
  //     scrub: 1,
  //   },
  //   objectPosition: '50% 60%',
  // });
});

