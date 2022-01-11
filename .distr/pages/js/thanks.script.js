//=require price/script.js

$(function () {
  /* Inits */
  initLazy();

  /* Functions */

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

  $(function () {

    sendForm();

    function sendForm() {
      let buttons = document.querySelectorAll('.btn-script');
      if (!buttons) {
        return
      }

      for (let button of buttons) {

        button.addEventListener('click', function () {
          let
            is_data = false,
            link = button.getAttribute('href'),
            form = document.querySelector(`${link} form`);

          /* Если есть данные в localStorage, заполняем ими поля */
          if (localStorage.name && localStorage.phone && localStorage.email) {
            form.querySelector('input[name="name"]').value = localStorage.name;
            form.querySelector('input[name="phone"]').value = localStorage.phone;
            form.querySelector('input[name="email"]').value = localStorage.email;
          }

          /* Если есть данные в полях, разрешаем отправку */
          if (
            form.querySelector('input[name="name"]').value &&
            form.querySelector('input[name="phone"]').value &&
            form.querySelector('input[name="email"]').value) {
            is_data = true;
          }

          /* Оправляем, если отправка разрешена */
          if (is_data) {
            let event = new CustomEvent("submit", {
              "bubbles": true,
              "cancelable": true
            });
            form.dispatchEvent(event);
          }

        })
      }

      /* CustomEvent полифил */
      (function () {
        if (typeof window.CustomEvent === "function") return false;

        function CustomEvent(event, params) {
          params = params || {
            bubbles: true,
            cancelable: true,
            detail: undefined
          };
          var evt = document.createEvent('submit');
          evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
          return evt;
        }
        CustomEvent.prototype = window.Event.prototype;
        window.CustomEvent = CustomEvent;
      })();

    }
  });

  (function () {
    let name = localStorage.getItem('name'),
      phone = localStorage.getItem('phone'),
      email = localStorage.getItem('email');
    $('.form__item_name input, .price__hidden .form__item input[name="name"]').val(name);
    $('.form__item_phone input,.price__hidden .form__item input[name="phone"]').val(phone);
    $('.form__item_email input,.price__hidden .form__item input[name="email"]').val(email);


  }());

});