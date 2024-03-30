(function ($) {
  $(document).ready(function () {
    // START document ready
    // start
    $('.cities__list').slick({
      infinite: true,
      slidesToShow: 7,
      slidesToScroll: 1,
      prevArrow: $('.cities__slider-prev'),
      nextArrow: $('.cities__slider-next'),
      responsive: [
        {
          breakpoint: 1001,
          settings: {
            slidesToShow: 5,
          },
        },
        {
          breakpoint: 801,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 601,
          settings: {
            slidesToShow: 3,
          },
        },
      ],
    });
    // end
    // start
    $('.topsingle__img-list').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: $('.topsingle__slider-prev'),
      nextArrow: $('.topsingle__slider-next'),
    });
    // end
    // start
    $('.trustus__list').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: $('.trustus__slider-prev'),
      nextArrow: $('.trustus__slider-next'),
    });
    // end
    // start
    $('.header-nav__mob-btn').on('click', function () {
      $(this).toggleClass('active');
      $('.header-nav nav').toggleClass('active');
    });
    // end
    // start
    var slickInitialized = false;
    function initSlickCatalogchar() {
      if ($(window).width() < 900 && !slickInitialized) {
        $('.catalogchar__list').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          prevArrow: $('.catalogchar__slider-prev'),
          nextArrow: $('.catalogchar__slider-next'),
          responsive: [
            {
              breakpoint: 501,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
        });
        slickInitialized = true;
      } else if ($(window).width() >= 900 && slickInitialized) {
        $('.catalogchar__list').slick('unslick');
        slickInitialized = false;
      }
    }
    initSlickCatalogchar();
    $(window).resize(function () {
      initSlickCatalogchar();
      if (slickInitialized) {
        $('.catalogchar__list').slick('setPosition');
      }
    });
    // end
    // END document ready
  });
})(jQuery);
