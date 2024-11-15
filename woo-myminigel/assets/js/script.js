var swiper = new Swiper(".main-slider", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    spaceBetween: 20,
    slidesPerView: 'auto',
    loop: true,
    pagination: {
      el: ".swiper-pagination",
    },
  });