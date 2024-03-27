import Swiper, {Navigation} from "swiper";

const initSlider = () => {
  new Swiper("#training-carousel", {
    modules: [Navigation],
    slidesPerView: 1,
    spaceBetween: 0,
    navigation: {
      enabled: true,
      nextEl: ".training-program .swiper-navigation-next",
      prevEl: ".training-program .swiper-navigation-prev",
    },
    centerInsufficientSlides: true,
    breakpoints: {
      768: {
        slidesPerView: 2,
        navigation: { enabled: true }
      },
      992: {
        slidesPerView: 3,
        navigation: { enabled: true }
      },
      1200: {
        slidesPerView: 4,
        navigation: { enabled: true }
      },
    },
  });
}

const initLinks = () => {
  const links = document.querySelectorAll('a[data-training-program]');
  const formInput = document.getElementById('field-training-program');
  if (links && formInput) {
    links.forEach(link => {
      link.addEventListener('click', () => {
        formInput.value = link.dataset.trainingProgram;
      })
    })
  }
}

document.addEventListener('DOMContentLoaded', () => {
  initSlider();
  initLinks();
});