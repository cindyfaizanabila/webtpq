var swiper = new Swiper(".slide-container", {
    slidesPerView: 3, 
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    centerSlide: "true",
    grapCursor: "true",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
        },
    },
  });