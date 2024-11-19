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

  function initOurProducts() {
    const ourProductsSection = document.querySelector('#our-products');

    if(!ourProductsSection) {
      return
    }

    const woocommerce = ourProductsSection.querySelector('.woocommerce');
    const products = woocommerce.querySelector('.products');

    woocommerce.classList.add('swiper');
    products.classList.add('swiper-wrapper');

    var swiper = new Swiper(woocommerce, {
      navigation: {
        nextEl: ".our-products-controls .swiper-button-next",
        prevEl: ".our-products-controls .swiper-button-prev",
      },
      spaceBetween: 20,
      slidesPerView: 'auto',
    });
  }

  function init() {
    initOurProducts();
  }

  window.addEventListener('DOMContentLoaded', init);