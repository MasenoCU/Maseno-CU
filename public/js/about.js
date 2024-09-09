//===================================== Ministries Swiper ==============================================

let swiper1 = new Swiper(".slider1", {
    slidesPerView: 'auto',
    spaceBetween: 20,
    sliderPerGroup: 'auto',
    loop: true,
    centeredSlides: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
      el: ".slider1-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".slider1-next",
      prevEl: ".slider1-prev",
    },
    autoplay: {
      delay: 3000,
    },
  });

  var swiper2 = new Swiper(".slider2", {
    slidesPerView: auto,
    spaceBetween: 30,
    sliderPerGroup: 'auto',
    loop: true,
    centeredSlides: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
      el: ".slider2-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".slider2-next",
      prevEl: ".slider2-prev",
    },
  });