// header desktop
$(".nav-item").click(function () {
  if ($(this).hasClass("active")) {
    $(this).removeClass("active");
    $(".subHead").removeClass("active");
  } else {
    $(".nav-item").removeClass("active");
    $(this).addClass("active");
    $(".subHead").addClass("active");
  }
});

// header mobile
$(".menu-trigger").on("click", function () {
  if ($(".menu-trigger").hasClass("active")) {
    $(".menu-trigger").removeClass("active");
  } else {
    $(".menu-trigger").addClass("active");
  }
});
$(".menu-trigger").on("click", function () {
  if ($(".gnav").hasClass("active")) {
    $(".gnav").removeClass("active");
  } else {
    $(".gnav").addClass("active");
  }
});
$(".menu-trigger").on("click", function () {
  if ($("body").hasClass("open")) {
    $("body").removeClass("open");
  } else {
    $("body").addClass("open");
  }
});
$(".closeBtn").on("click", function () {
  $("body").removeClass("open");
  $(".gnav").removeClass("active");
  $(".menu-trigger").removeClass("active");
});
$(".gnav__overlay").on("click", function () {
  $("body").removeClass("open");
  $(".gnav").removeClass("active");
  $(".menu-trigger").removeClass("active");
});

// scroll to top
$(window).on("scroll", function () {
  if ($(this).scrollTop() > 100) {
    $('#toTop').fadeIn(400);
  } else {
    $('#toTop').fadeOut(400);
  }
});
$("#toTop").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 1000);
});


//slider
$(function () {
  $('.slider').each(function () {
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

//select-lang
$(function () {
  let locationPath = '';
  let path = location.pathname; //現在のパス
  let selectItem = 'jp';
  var langAry = [];

  $('.select-lang select option').each(function (key, value) {
    langAry.push($(value).attr('value'));
  });

  $.each(langAry, function (index, value) {
    var regexp = '/' + value + '/';
    if (path.match(new RegExp(regexp))) {
      selectItem = value;
    }
  });

  $('.select-lang select option[value=' + selectItem + ']').prop('selected', true);

  $('.select-lang select').on('change', function () {
    var selectLng = $(this).val();

    $.each(langAry, function (index, value) {
      var regexp = '/' + value + '/';
      if (path.match(new RegExp(regexp)) && (selectLng !== 'jp')) {
        locationPath = path.replace(regexp, '/' + selectLng + '/');
      } else if (path.match(new RegExp(regexp)) && (selectLng === 'jp')) {
        locationPath = path.replace(regexp, '/');
      }
    });

    if (locationPath === '') {
      locationPath = path.replace(path, '/' + selectLng + path);
    }

    window.location.href = locationPath;
    return false;
  });
});

//select-lang ブラウザバック対策
$(window).on('pageshow', function () {
  let path = location.pathname; //現在のパス
  let selectItem = 'jp';
  var langAry = [];

  $('.select-lang select option').each(function (key, value) {
    langAry.push($(value).attr('value'));
  });

  $.each(langAry, function (index, value) {
    var regexp = '/' + value + '/';
    if (path.match(new RegExp(regexp))) {
      selectItem = value;
    }
  });

  $('.select-lang select option[value=' + selectItem + ']').prop('selected', true);
});

//header-sp select-lang
$(function () {
  let path = location.pathname; //現在のパス
  let locationPath = '';
  let selectItem = 'jp';
  var langAry = [];

  $('.header-sp .select-lang a').each(function (key, value) {
    langAry.push($(value).attr('data-lang'));
  });

  $.each(langAry, function (index, value) {
    var regexp = '/' + value + '/';
    if (path.match(new RegExp(regexp))) {
      selectItem = value;
    }
  });

  $('.header-sp .select-lang a[data-lang=' + selectItem + ']').hide();

  $('.header-sp .select-lang a').on('click', function () {
    var selectLng = $(this).attr('data-lang');

    $.each(langAry, function (index, value) {
      var regexp = '/' + value + '/';
      if (path.match(new RegExp(regexp)) && (selectLng !== 'jp')) {
        locationPath = path.replace(regexp, '/' + selectLng + '/');
      } else if (path.match(new RegExp(regexp)) && (selectLng === 'jp')) {
        locationPath = path.replace(regexp, '/');
      }
    });

    if (locationPath === '') {
      locationPath = path.replace(path, '/' + selectLng + path);
    }

    window.location.href = locationPath;
    return false;
  });
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

// ページ内のスムーススクロール
$(function () {
  $('a:not(.nosmooth)[href*="#"]').click(function () {
    const adjust = $(".hArea").outerHeight();
    const speed = 700;
    const target = $(this.hash === '#' || '' ? 'html' : this.hash);
    if (!target.length) return;
    const position = target.offset().top - adjust;
    $('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
  });
});

// 別ページ遷移後のスムーススクロール
const urlHash = location.hash;
if (urlHash) {
  const target = jQuery(urlHash);
  if (target.length) {
    // ページトップから開始（ブラウザ差異を考慮して併用）
    history.replaceState(null, '', window.location.pathname);
    jQuery("html,body").stop().scrollTop(0);

    jQuery(window).on("load", function () {
      const headerHeight = jQuery(".hArea").outerHeight();
      const position = target.offset().top - headerHeight;
      jQuery("html, body").animate({ scrollTop: position }, 500, "swing");

      // ハッシュを再設定
      history.replaceState(null, '', window.location.pathname + urlHash);
    });
  }
}