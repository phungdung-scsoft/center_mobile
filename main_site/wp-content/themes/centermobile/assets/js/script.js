//modal
$(function () {
  $('.menu-trigger').on("click", function () {
    if ($('.menu-trigger').hasClass('active')) {
      $('.menu-trigger').removeClass('active');
    } else {
      $('.menu-trigger').addClass('active');
    }
  });

  $('.menu-trigger').on("click", function () {
    if ($('.gnav').hasClass('active')) {
      $('.gnav').removeClass('active');
    } else {
      $('.gnav').addClass('active');
    }
  });

  $('.menu-trigger').on("click", function () {
    if ($('body').hasClass('open')) {
      $('body').removeClass('open');
    } else {
      $('body').addClass('open');
    }
  });
});


//slider
$(function () {
  $('.slider').slick({
    autoplay: true,
    arrows: false,
    asNavFor: ".thumb",
    slidesToShow: 1,
    centerMode: true,
    centerPadding: "25%",
    waitForAnimate: false,
    responsive: [
      {
        breakpoint: 1921,
        settings: {
          slidesToShow: 1,
          centerMode: false,
        }
      }
    ]
  });

  var slidesToshow_leng = $('.thumb .slider-item').length;
  $('.thumb').slick({
    asNavFor: '.slider', // スライダを他のスライダのナビゲーションに設定する（class名またはID名）
    focusOnSelect: true, // クリックでのスライド切り替えを有効にするか
    slidesToShow: slidesToshow_leng, // 表示するスライド数を設定
    waitForAnimate: false,
  });
});


//YouTube
$(window).on('load', function () {
  youtubeDef();
});

$(function () {
  $(window).scroll(function () {
    youtubeDef();
  });
});

function youtubeDef() {
  $('.videoDefer').each(function (index, element) {
    var ePos = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll > ePos - windowHeight) {
      var vimg = $('.videoDefer')[index];
      if (!$('.videoDefer').hasClass('show')) {
        if (vimg.getAttribute('data-src')) {
          vimg.setAttribute('src', vimg.getAttribute('data-src'));
        }
        $('.videoDefer').addClass('show');
      }
    }
  });
}

//menu
$(function () {
  $('.accordion-parent').on('click', function () {
    $(this).next('.accordion-child').stop().slideToggle();
    $(this).toggleClass('active');
  })
});

//webRequestBtn
$(function () {
  $('.webRequestBtn, .bNavMask, .bNavWebBalloon ul li a').on('click', function () {
    $('.bNavMask').toggle();
    $('.bNavWebBalloon').fadeToggle(200).toggleClass('active');
  })
});

//language_btn
$(function () {
  let path = location.pathname;
  $('.language_btn').on('click', function () {
    if (path.match(new RegExp('/en/'))) {
      path = path.replace('/en/', '/');
    } else {
      path = path.replace(path, '/en' + path);
    }
    window.location.href = path;
    return false;
  });
});