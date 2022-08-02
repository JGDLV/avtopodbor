// let headerHeight = $('.header').innerHeight();

// function footerFix() {
// headerHeight = $('.header').innerHeight();
// let footerHeight = $('.footer').innerHeight();
// $('body').css('padding-bottom', footerHeight + 'px');
// }

// $(window).on('load resize', footerFix);

$(document).ready(function () {

  $('form').each(function () {
    const form = $(this);
    const fileInput = $(this).find('input[type="file"]');
    const fileSpan = $(this).find('input[type="file"] ~ span');
    const fileText = 'Прикрепить файл';
    const phone = $(this).find('input[name*="phone"]');
    const privacyLabel = $(this).find('label[class*="privacy"]');
    const privacyInput = privacyLabel.find('input');

    privacyLabel.on('click', function () {
      if (privacyInput.attr('type') == 'checkbox') {
        privacyInput.is(':checked')
          ? privacyLabel.addClass('active')
          : privacyLabel.removeClass('active');
      } else if (privacyInput.attr('type') == 'radio') {
        privacyInput.is(':checked')
          ? (privacyLabel.siblings().removeClass('active'), privacyLabel.addClass('active'))
          : privacyLabel.removeClass('active');
      }
    });

    phone.each(function () {
      $(this).inputmask("+7 (999) 999-99-99");
    });

    fileInput.on('change', function () {
      const fileVal = $(this).val().replace(/.+[\\\/]/, '');
      fileVal !== '' ? fileSpan.text(fileVal) : fileSpan.text(fileText);
    });

    form.on('submit', function () {
      fileSpan.text(fileText);
      privacyLabel.removeClass('active');
    });
  });

  $(window).scroll(function () {
    $(this).scrollTop() > 600
      ? $('#top').addClass('active')
      : $('#top').removeClass('active');
  });

  $('#top').click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
  });

  $(document).on("submit", "form", function () {
    let formData = new FormData(this);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/send.php");
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4) {
        if (xhr.status == 200) {
          data = xhr.responseText
          if (data) {
            $.magnificPopup.close();
            $.magnificPopup.open({
              items: {
                src: '<div class="modal-popup-block">' + data + '</div>'
              },
              type: 'inline',
              removalDelay: 300,
              mainClass: 'mfp-fade'
            }, 0);
            setTimeout(function () {
              $.magnificPopup.close();
            }, 3000);
          }
        }
      }
    }
    xhr.send(formData);
    $(this)[0].reset();
    return false;
  });

  $('.menu-toggle .icon-toggle').click(function () {
    $(this).toggleClass('active');
    $('menu').slideToggle();
    return false;
  });

  $('a[href="#callback"]').magnificPopup({
    type: 'inline',
    removalDelay: 300,
    mainClass: 'mfp-fade',
  });

  $(document).on('click', '.goto', function (event) {
    event.preventDefault();
    let id = $(this).attr('href');
    let top = $(id).offset().top;
    $('body,html').animate({ scrollTop: top }, 500);
  });

  $('.reviews-items').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ["<i class='fas fa-chevron-left'>", "<i class='fas fa-chevron-right'>"],
    dots: true,
    items: 1,
  });

  $('.articles-items').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ["<i class='fas fa-chevron-left'>", "<i class='fas fa-chevron-right'>"],
    dots: false,
    items: 4,
    responsive: {
      0: { items: 1, },
      650: { items: 2, },
      900: { items: 3, },
      1100: { items: 4, }
    }
  });

  $('.parameters__item').each(function () {
    const item = $(this);
    const text = item.find('.parameters__item-text-part');
    const index = item.index();
    const points = $('.parameters__point');
    const delay = 300;

    item.on('click', function () {
      if (item.hasClass('active')) {
        item.removeClass('active');
        text.slideUp(delay);
        points.removeClass('active');
      } else {
        item.addClass('active');
        text.slideDown(delay);
        item.siblings().removeClass('active');
        item.siblings().find('.parameters__item-text-part').slideUp(delay);
        points.removeClass('active');
        points.eq(index).addClass('active');
      }
    });
    item.on('mouseover', function () { $(this).addClass('hover'); });
    item.on('mouseout', function () { $(this).removeClass('hover'); });
  });

  // $('.parameters__point').each(function () {
  //   const point = $(this);
  //   const items = $('.parameters__item');
  //   const index = point.index();
  //   point.on('click', function () {
  //     if (point.hasClass('active')) {
  //       items.eq(index).toggleClass('active');
  //       items.eq(index).find('.parameters__item-text-part').slideUp(300);
  //       point.removeClass('active');
  //     } else {
  //       point.siblings().removeClass('active');
  //       point.toggleClass('active');
  //       items.find('.parameters__item-text-part').slideUp(300);
  //       items.eq(index).find('.parameters__item-text-part').slideToggle(300);
  //       items.removeClass('active');
  //       items.eq(index).toggleClass('active');
  //     }
  //   });
  //   point.on('mouseover', () => items.eq(index).addClass('hover'));
  //   point.on('mouseout', () => items.eq(index).removeClass('hover'));
  // });

  const mobileMenu = `
  <div class="menu-toggle">
    <i class="icon-toggle">
      <span></span>
      <span></span>
      <span></span>
    </i>
  </div>`

  $(window).on('load resize', function () {
    $(window).width() < 500 && $('.menu-toggle').length === 0
      ? $('.menu').prepend(mobileMenu)
      : $('.menu-toggle').remove()

    $(window).width() < 500
      ? $('body').addClass('mobile')
      : $('body').removeClass('mobile');
  });

  $(document).on('click', '.menu-toggle .icon-toggle', function () {
    $(this).toggleClass('active');
    $('.menu > ul').toggleClass('active');
  });

});
