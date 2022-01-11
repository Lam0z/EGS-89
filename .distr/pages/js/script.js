
$(function () {
  /* Inits */
  initLazy();
  initScroll();
  initBurgerMenu();
  initMarquee();
  initBodyScroll();
  initScrollButton();
  initMore();


  /* Functions */
  function initScroll() {
    if (!$('.scroll').length) return;

    $(document).on('click scroll.init', '.scroll', function (event) {
      event.preventDefault();
      $.fancybox.close();

      var
        hrefId = $(this).attr('href') || $(this).data('href'),
        header_height = $('.header').css('position') == 'fixed' ? $('.header').height() : 0,
        posTop = $(hrefId).offset().top - header_height + 0.5;
      $('html, body').animate({
        scrollTop: posTop
      }, 1000);
    });
  }

  function initScrollButton() {
    if (!$('.main__reg-btn').length) return;

    $(document).on('click', '.main__reg-btn', function (event) {
      event.preventDefault();
      $.fancybox.close();

      var
        buttonPosition = $(this).offset().top,
        formTopPosition = $('.registration').offset().top,
        regForms = $('.form_reg'),
        regFormsPosition = {},
        posTop = formTopPosition,
        diff = $(document).height();

      regForms.each(function (i, el) {
        regFormsPosition[$(el).parent().attr('id')] = $(el).offset().top;
      })

      for (const key in regFormsPosition) {
        if (Math.abs(buttonPosition - regFormsPosition[key]) < diff) {
          posTop = regFormsPosition[key];
          diff = Math.abs(buttonPosition - regFormsPosition[key]);
        }
      }

      $('html, body').animate({
        scrollTop: posTop
      }, 1000);

      posTop = formTopPosition;
      diff = $(document).height();
    });
  }

  function initBodyScroll() {

    $(document).on('scroll scroll.init', function (event) {
        $('body').toggleClass('page-scrolled', $(this).scrollTop() > $('.main').height() + $('header').height());
      })
      .trigger('scroll.init');
  }

  // Burger-menu
  function initBurgerMenu() {

    $('.header__menu').on('click', function () {
      $('.burger-menu').animate({
        right: 0
      }, 1000);
    });

    $(document).on('click', '[data-close]', function () {
      $('.burger-menu').animate({
        right: '-100%'
      }, 1000);
    });

  }

  // Бегущая строка
  function initMarquee() {
    if (!$('.marquee').length) return;

    $('.marquee').marquee({
      duration: 30000, //speed in milliseconds of the marquee
      startVisible: true,
      gap: 0, //gap in pixels between the tickers
      delayBeforeStart: 0, //time in milliseconds before the marquee will start animating
      direction: 'left', //'left' or 'right'
      duplicated: true //true or false - should the marquee be duplicated to show an effect of continues flow
    });
  }

  // Показать еще
  function initMore() {

    $('[data-more-btn]').on('init.more click', function (event) {
        var
          $container = $('[data-more-options]', $(this).parent()),
          options = {},
          visible = 0,
          window_width = $(window).width(),
          $items;

        options = $container.data('more-options') || {};

        if (event.type == 'init') {
          visible = options.init;

          if (window_width > 768 && window_width < 1200) { //Используем options.init_lg, если карточек в ряд нечетное количество; если четное, то options.init_lg=options.init
            visible = options.init_lg;
          }
        } else {
          if (window_width > 768 && window_width < 1200 && options.init_lg != options.init) {
            visible = options.desktop - 1;
          } else {
            visible = window_width > 767 ? options.desktop : options.mobile;
          }

        }

        $items = $(options.target + '[data-more-hidden]', $container);
        $items.slice(0, visible).removeAttr('data-more-hidden');

        $('html, body')
          .animate({
            scrollTop: '+=1'
          }, 0)
          .animate({
            scrollTop: '-=1'
          }, 0);

        if ($items.length - visible <= 0) {
          $(this).addClass('d-none');
        }

      })
      .trigger('init.more');
  }

  function initLazy() {

    let
      lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
      active = false,
      threshold = 200;

    const lazyLoad = function (e) {
      if (active === false) {
        active = true;

        setTimeout(function () {
          lazyArr.forEach(function (lazyObj) {
            if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

              if (lazyObj.dataset.src) {
                let
                  img = new Image(),
                  src = lazyObj.dataset.src;
                img.src = src;
                img.onload = function () {
                  if (!!lazyObj.parent) {
                    lazyObj.parent.replaceChild(img, lazyObj);
                  } else {
                    lazyObj.src = src;
                  }
                }
                lazyObj.removeAttribute('data-src');
              }

              if (lazyObj.dataset.srcset) {
                lazyObj.srcset = lazyObj.dataset.srcset;
                lazyObj.removeAttribute('data-srcset');
              }

              lazyObj.classList.remove('lazy');
              lazyObj.classList.add('lazy-loaded');

              lazyArr = lazyArr.filter(function (obj) {
                return obj !== lazyObj;
              });

              if (lazyArr.length === 0) {
                document.removeEventListener('scroll', lazyLoad);
                window.removeEventListener('resize', lazyLoad);
                window.removeEventListener('orientationchange', lazyLoad);
              }
            }
          });

          active = false;
        }, 200);
      }
    };

    lazyLoad();

    document.addEventListener('scroll', lazyLoad);
    window.addEventListener('resize', lazyLoad);
    window.addEventListener('orientationchange', lazyLoad);

  }



});

let formSubmited;
let formCloned;
returnForm();

function returnForm() {

  $('.form').submit(function () {

    formSubmited = $(this);

    if (formSubmited.find('.form__wrapper').length) {
      formCloned = formSubmited.find('.form__wrapper').clone(true);
    }

    formCloned = formCloned;
  })

};

function initPopupSuccess(popupIdString) {

  $.fancybox.close();

  formSubmited.html(formCloned);

  $.fancybox.open($(popupIdString));
};

$('[data-fancybox]').fancybox({
  afterClose: function () {
    if (formCloned) {
      formSubmited.html(formCloned);
    }
  }
});