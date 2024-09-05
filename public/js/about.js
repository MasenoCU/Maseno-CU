let swiper = new Swiper(".slide-container", {
    slidesPerView: 'auto',
    spaceBetween: 20,
    sliderPerGroup: 'auto',
    loop: true,
    centeredSlides: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      // dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });