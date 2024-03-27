import Swiper, { Navigation } from "swiper";

const initSlider = () => {
  new Swiper("#feedback-carousel", {
    modules: [Navigation],
    slidesPerView: 1,
    spaceBetween: 0,
    centerInsufficientSlides: true,
    navigation: {
      enabled: true,
      nextEl: ".feedback-section .swiper-navigation-next",
      prevEl: ".feedback-section .swiper-navigation-prev",
    },
    breakpoints: {
      992: {
        slidesPerView: 2,
        navigation: { enabled: true }
      },
      1200: {
        slidesPerView: 3,
        navigation: { enabled: true }
      },
    },
  });
};

document.addEventListener("DOMContentLoaded", () => {
  initSlider();
});
