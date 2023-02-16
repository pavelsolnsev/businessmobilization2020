$(function () {
	/* Inits */
	initSwiperSlider();
	function initSwiperSlider() {

		var weekly_forums_slider = new Swiper('.common__slider-class', {
			spaceBetween: 20,
			loop: true,
			breakpoints: {
				320: {
					slidesPerView: 1.2,
				}
				,				
				380: {
					slidesPerView: 2,
				}
				,				
				576: {
					slidesPerView: 3,
				}
				,				
				768: {
					slidesPerView: 4,
				}
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true
			},
			navigation: {
				nextEl: '.swiper-next',
				prevEl: '.swiper-prev'
			}
		});

		var news_slider = new Swiper('.news__slider', {
			spaceBetween: 20,
			loop: true,
			breakpoints: {
				320: {
					slidesPerView: 1.1,
				}
				,				
				380: {
					slidesPerView: 2,
				}
				,				
				576: {
					slidesPerView: 3,
				}
				,				
				992: {
					slidesPerView: 4,
				}
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true
			},
			navigation: {
				nextEl: '.swiper-next',
				prevEl: '.swiper-prev'
			}
		});

	}
});
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

