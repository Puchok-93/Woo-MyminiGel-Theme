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

function initCustomerPhotoSlider() {
  const customerPhotosBlock = document.querySelector('.customer-photos');

  if(!customerPhotosBlock) {
    return
  }

  var swiper = new Swiper("#customer-photos-slider", {
    navigation: {
      nextEl: ".customer-photo-next",
      prevEl: ".customer-photo-prev",
    },
    spaceBetween: 20,
    slidesPerView: 'auto',
    loop: true,
  });
}

function initReviewSlider() {
  const customerPhotosBlock = document.querySelector('.reviews');

  if(!customerPhotosBlock) {
    return
  }

  var swiper = new Swiper("#reviews-slider", {
    navigation: {
      nextEl: ".review-next",
      prevEl: ".review-prev",
    },
    spaceBetween: 20,
    slidesPerView: 'auto',
    loop: true,
  });
}

function initMainProductSlider() {
  const gallery = document.querySelector('#main-product-slider');

  if(!gallery) {
    return
  }

  // var swiper = new Swiper(gallery, {
  //   navigation: {
  //     nextEl: ".swiper-button-next",
  //     prevEl: ".swiper-button-prev",
  //   },
  //   loop: true,
  //   pagination: {
  //     el: ".swiper-pagination",
  //   },
  // });

  var smallGallery = new Swiper(".product-thumb-slider", {
    spaceBetween: 10,
    direction: 'vertical',
    slidesPerView: 'auto',
    freeMode: true,
    watchSlidesProgress: true,
  });

  var swiper2 = new Swiper(".product-main-slider", {
    spaceBetween: 10,
    thumbs: {
      swiper: smallGallery,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
}

jQuery(document).ready(function($){
  $('body').on('adding_to_cart', function (e, btn, data) {
    btn.closest('.product-card').find('.ajax-preloader').fadeIn();
  });
  $('body').on('added_to_cart', function (e, response_fragments, response_cart_hash, btn) {
    btn.closest('.product-card').find('.ajax-preloader').fadeOut();
  });
});

jQuery(document).ready(function($){
  $('.page-cart').on('click', '.quantity button', function () {
    let btn = $(this);
    let groupedProduct = btn.closest('.woocommerce-grouped-product-list-item__quantity').length;
    let inputQty = btn.parent().find('.qty');
    let prevValue = +(inputQty.val());
    let newValue = groupedProduct ? 0 : 1;
    if (btn.hasClass('btn-plus')) {
        newValue = prevValue + 1;
    } else {
        if (!groupedProduct && prevValue > 1) {
            newValue = prevValue - 1;
        } else if (groupedProduct && prevValue > 0) {
            newValue = prevValue - 1;
        }
    }
    inputQty.val(newValue);
    $('.update-cart').prop('disabled', false);
  });
});


function initTextareaLengh() {
  const comment = document.querySelector('#comment');
  
  if(!comment) {
    return
  }

  const currentLength = document.querySelector('.count');
  comment.addEventListener('input', () => {
    let inputLength = comment.value.length;
    currentLength.innerHTML = inputLength;
  })
}

function initHideInputLabels() {
  const commentForm = document.querySelector('.comment-form');

  if(!commentForm) {
    return
  }

  const authorInput = commentForm.querySelector('.comment-form-author input');
  const authorLabel = commentForm.querySelector('.comment-form-author .form-label');
  const emailInput = commentForm.querySelector('.comment-form-email input');
  const emailLabel = commentForm.querySelector('.comment-form-email .form-label');

  authorInput.addEventListener('input', () => {
    if(authorInput.value.length > 0) {
      authorLabel.style.opacity = 0;
    } else {
      authorLabel.style.opacity = 1;
    }
  })

  emailInput.addEventListener('input', () => {
    if(emailInput.value.length > 0) {
      emailLabel.style.opacity = 0;
    } else {
      emailLabel.style.opacity = 1;
    }
  })
}


function init() {
  initOurProducts();
  initFaq();
  initCustomerPhotoSlider();
  initReviewSlider();
  initMainProductSlider();
  initTextareaLengh();
  initHideInputLabels()
  Fancybox.bind("[data-fancybox]", {
      // Your custom options
  });
  
}

  window.addEventListener('DOMContentLoaded', init);
  window.onunload = function(){
    sessionStorage.clear()
}