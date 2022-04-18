
var swiper = new Swiper('.swiper-container', {
  breakpoints: {
    // 280px以上の場合
    280: {
      slidesPerView: 1,
    },
    // 768px以上の場合
    768: {
      centeredSlides: true,
      slidesPerView: 1,
    },
    // 1024px以上の場合
    1025: {
        slidesPerView: 2.4,
    }
  },
  loop: true,
  loopedSlides: 2,
  speed: 1200,
  autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  spaceBetween: 33,
  initialSlide: 1,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

var swiper = new Swiper('._planSp', {
  slidesPerView: 1,
  initialSlide: 0, 
  loop: true,
  loopedSlides: 2,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});


