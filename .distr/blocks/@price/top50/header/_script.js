$( document ).ready(function() {
  $(window).scroll(function(){
    if ($(window).width() >= 768){
      if ($(window).scrollTop() > 30) {
        $('.header').addClass('fixed');
      }
      else {
          $('.header').removeClass('fixed');
      }

    }

  });

  $('.burger-menu').click(function () {
    $('.menu__mobile').toggleClass('menu-active menu-noactive');
    $('.burger-menu').toggleClass('open');
  });
  $('.navigation__item').click(function () {
      $('.menu__mobile').toggleClass('menu-active menu-noactive');
  });

});

$(document).on('click init.scroll', '.scroll', function(event) {
  event.preventDefault();
  $.fancybox.close();
  var
    hrefId = $(this).attr('href') || $(this).data('href'),
    // headerTop = $(".header").innerHeight();
  posTop = $(hrefId).offset().top;
  ;
  $('html, body').animate({scrollTop: posTop}, 1000);
});