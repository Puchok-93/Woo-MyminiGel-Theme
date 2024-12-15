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

function initPopupTextareaLengh() {
  const popupForm = document.querySelector('.popup-form');
  
  if(!popupForm) {
    return
  }

  const popupTextarea = popupForm.querySelector('textarea');
  const currentLength = popupForm.querySelector('.count');
  popupTextarea.addEventListener('input', () => {
    let inputLength = popupTextarea.value.length;
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

function changeBtnText() {
  const individualPlans = document.querySelector('.individual-plan-list');
  
  if(!individualPlans) {
    return
  }

  const individualPlansSubscribe = document.querySelectorAll('.individual-plan-subscribe');
  individualPlansSubscribe.forEach(elem => {
    const addToCartBtn = elem.querySelector('.add_to_cart_button');
    addToCartBtn.textContent = 'Subscribe';
  })

}

function activeRegisterBtn() {
  const registerBtn = document.querySelector('.my-accounts-form__submit-register');
  
  if(!registerBtn) {
    return
  }

  const personalDataInput = document.querySelector('#personal-data');
  personalDataInput.addEventListener('change', (e) => {
    const target = e.target;
    if(target.checked) {
      registerBtn.removeAttribute('disabled')
    } else {
      registerBtn.setAttribute('disabled', 'disabled')
    }
  })
}

function initMobSeaercState() {
  const search = document.querySelector('.header-search');
  const searchInput =  search.querySelector('.aws-search-field');
  const searchBtn = document.querySelector('.header-controls__search-btn');

  searchBtn.addEventListener('click', (e => {
    const target = e.target.closest('.header-controls__search-btn');
    if(target) {
      search.style.display = 'block';
      searchInput.focus();
    }
  }))

  searchInput.onblur = function() {
    search.style.display = 'none'
  }
}

function initPopup() {
  const overlay = document.querySelector('.overlay');

  if(!overlay) {
    return
  }

  const showHowWorkBtn = overlay.querySelector('.show-how-work');
  const showContactDataBtn = overlay.querySelector('.show-contact-data');
  const howWorkBlock = overlay.querySelector('.how-work');
  const contactBlock = overlay.querySelector('.feedback-form');
  const popupCloseBtn = overlay.querySelector('.popup-heading__close-btn');
  const showPopupBtn = document.querySelector('.faq-ask-question-btn');
  const continueBtn = overlay.querySelector('.how-work__continue');

  showPopupBtn.addEventListener('click', (e) => {
    overlay.classList.add('js-active')
  })

  popupCloseBtn.addEventListener('click', (e) => {
    const target = e.target.closest('.popup-heading__close-btn');
    if(target) {
      overlay.classList.remove('js-active');
    }
  })

  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) {
      overlay.classList.remove('js-active');
    }

    document.addEventListener('keydown', (e) => {
      if (e.code === 'Escape' && overlay.classList.contains('js-active')) {
        overlay.classList.remove('js-active');
      }
  });
});

showHowWorkBtn.addEventListener('click', () => {
  howWorkBlock.style.display = 'flex';
  contactBlock.style.display = 'none'
});

showContactDataBtn.addEventListener('click', () => {
  howWorkBlock.style.display = 'none';
  contactBlock.style.display = 'block';
});

continueBtn.addEventListener('click', () => {
  howWorkBlock.style.display = 'none';
  contactBlock.style.display = 'block';
});

}

function init() {
  initOurProducts();
  initFaq();
  initCustomerPhotoSlider();
  initReviewSlider();
  initMainProductSlider();
  initTextareaLengh();
  initHideInputLabels();
  changeBtnText();
  activeRegisterBtn();
  initPopup();
  initPopupTextareaLengh();
  Fancybox.bind("[data-fancybox]", {
      // Your custom options
  });

  if(window.innerWidth < 768) {
    initMobSeaercState();
  }
  
}

  window.addEventListener('DOMContentLoaded', init);
//   window.onunload = function(){
//     sessionStorage.clear()
// }