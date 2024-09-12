//===================================== Ministries Swiper ==============================================

let swiper1 = new Swiper(".slider1", {
    slidesPerView: 'auto',
    spaceBetween: 20,
    // slidesPerGroup: 'auto',
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
      delay: 4000,
      disableOnInteraction: false,
    },
  });

  var swiper2 = new Swiper(".slider2", {
    slidesPerView: 'auto',
    spaceBetween: 20,
    // slidesPerGroup: 'auto',
    loop: true,
    loopFillGroupWithBlank: true,
    centeredSlides: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
      el: ".slider2-pagination",
      clickable: true,
      // dynamicBullets: true,
    },
    navigation: {
      nextEl: ".slider2-next",
      prevEl: ".slider2-prev",
    },
    breakpoints: {
      640: {  // Mobile screen size
        slidesPerView: 'auto',
      },
      768: {  // Tablet screen size
        slidesPerView: 2,  // Show 2 slides on tablet
      },
      1024: {  // Desktop screen size
        slidesPerView: 3,  // Show 3 slides on desktop
      }
    }
  });

  var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });

  //===================================== Testimonials Swiper ==============================================

$('.testimonials-container').owlCarousel({
  loop:true,
  autoplay:true,
  autoplayTimeout:6000,
  margin:10,
  nav:true,
  navText:["<i class='fa-solid fa-arrow-left'></i>",
           "<i class='fa-solid fa-arrow-right'></i>"],
  responsive:{
      0:{
          items:1,
          nav:false
      },
      600:{
          items:1,
          nav:true
      },
      768:{
          items:2
      },
  }
})

