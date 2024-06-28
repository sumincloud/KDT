
//1. 메인 슬라이드
var swiper = new Swiper(".mySwiper1", {
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
  },
});

//2. 메인 슬라이드
var swiper = new Swiper(".mySwiper2", {
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});





