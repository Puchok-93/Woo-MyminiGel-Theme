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

  function initFaq() {
    const faq = document.querySelector('.faq');

    if(!faq) {
      return
    }

    const questions = document.querySelectorAll('.faq-question');
    
    function removeOpenClass() {
        questions.forEach(question => {
            question.classList.remove('js-open');
            question.querySelector('.faq-question-content').style.maxHeight = null;
        });
    }
    
    questions.forEach(question => {
      question.addEventListener('click', (e) => {
        const target = e.target.closest('.faq-question-heading');
        const clickedItemParent = target.parentElement;
        const content = clickedItemParent.querySelector('.faq-question-content');

        if (!clickedItemParent.classList.contains('js-open')) {
            // removeOpenClass()
            clickedItemParent.classList.add('js-open');
            content.style.maxHeight = content.scrollHeight + 15 + "px";
        } else {
            clickedItemParent.classList.remove('js-open');
            content.style.maxHeight = null;
        }
      })
    })
}


  function init() {
    initOurProducts();
    initFaq();

  }

  window.addEventListener('DOMContentLoaded', init);