$(function () {
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

  // topic slider
  $(".topic-slider").slick({
    infinite: true,
    slidesToShow: 3,
    dots: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          variableWidth: true
        }
      },
    ]
  });

  // news tabs
  $('#newsTabs a:not(:first)').addClass('inactive');
  $('.container').hide();
  $('.container:first').show();
  $('#newsTabs a').click(function(){
    var t = $(this).attr('id');
    if($(this).hasClass('inactive')){ //this is the start of our condition 
      $('#newsTabs a').addClass('inactive');           
      $(this).removeClass('inactive');
      
      $('.container').hide();
      $('#'+ t + 'C').fadeIn('slow');
    }
  });

  // scroll to top
  $(window).on("scroll",function() {
    if ($(this).scrollTop() > 100 ) {
        $('#toTop').fadeIn(400);
    } else {
        $('#toTop').fadeOut(400);
    }
  });
  $("#toTop").click(function () {
    $("html, body").animate({scrollTop: 0}, 1000);
  });
});
