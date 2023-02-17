$(function() {

  const communitySwiperOpts = {
    slidesPerView: 'auto',
    loop: false,
    spaceBetween: 25,
    grabCursor: true,

    navigation: {
      nextEl: '.swiper-next',
      prevEl: '.swiper-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  }


  /* Init */
  let communitySwiper = null;

  /* Resize */
  togglecommunitySwiper();

  window.addEventListener('resize', togglecommunitySwiper);
  window.addEventListener('orientationchange', togglecommunitySwiper);


  function togglecommunitySwiper() {
    if (window.matchMedia("(min-width: 769px)").matches && communitySwiper !== null) {
      communitySwiper.destroy();
      communitySwiper = null;
    } else if (window.matchMedia("(max-width: 768px)").matches && communitySwiper === null) {
      communitySwiper = new Swiper('.community__swiper-container', communitySwiperOpts);
    }
  }

});
